<?php
// Includes a tracker field
// Usage:
// {TRACKER()}{TRACKER}

function wikiplugin_tracker_help() {
	$help = tra("Displays an input form for tracker submit").":\n";
	$help.= "~np~{TRACKER(trackerId=>1, fields=>id1:id2:id3, action=>Name of submit button, showtitle=>y|n, showdesc=>y|n, showmandatory=>y|n, embedded=>y|n)}Notice{TRACKER}~/np~";
	return $help;
}
function wikiplugin_tracker_name($fieldId, $name, $field_errors) {
	foreach($field_errors['err_mandatory'] as $f) {
		if ($fieldId == $f['fieldId'])
			return '<span class="highlight">'.$name.'</span>';
	}
	foreach($field_errors['err_value'] as $f) {
		if ($fieldId == $f['fieldId'])
			return '<span class="highlight">'.$name.'</span>';
	}
	return $name;
}
function wikiplugin_tracker($data, $params) {
	global $tikilib, $userlib, $dbTiki, $notificationlib, $user, $group, $page, $tiki_p_admin, $tiki_p_create_tracker_items, $smarty, $feature_trackers;
	global $trklib; include_once('lib/trackers/trackerlib.php');
	
	//var_dump($_REQUEST);
	extract ($params,EXTR_SKIP);

	if ($feature_trackers != 'y' || !isset($trackerId) || !($tracker = $trklib->get_tracker($trackerId))) {
		return $smarty->fetch("wiki-plugins/error_tracker.tpl");
	}

	if (!isset($embedded)) {
		$embedded = "n";
	}
	if (!isset($showtitle)) {
		$showtitle = "n";
	}
	if (!isset($showdesc)) {
		$showdesc = "n";
	}
	if (!isset($action)) {
		$action = tra("Save");
	}
	if (!isset($showmandatory)) {
		$showmandatory = 'y';
	}
	if (!isset($permMessage)) {
		$permMessage = tra("You do not have permission to insert an item");
	}

	if (isset($_SERVER['SCRIPT_NAME']) && !strstr($_SERVER['SCRIPT_NAME'],'tiki-register.php')) {
		if (!$tikilib->user_has_perm_on_object($user, $trackerId, 'tracker', 'tiki_p_create_tracker_items')) {
			return '<b>'.$permMessage.'</b>';
		}
	}

	if (!isset($_REQUEST["ok"]) || $_REQUEST["ok"]  != $trackerId) {
	
		$field_errors = array('err_mandatory'=>array(), 'err_value'=>array());
	
			global $notificationlib; include_once('lib/notifications/notificationlib.php');	
			$tracker = array_merge($tracker,$trklib->get_tracker_options($trackerId));
			if ((!empty($tracker['start']) && date('U') < $tracker['start']) || (!empty($tracker['end']) && date('U') > $tracker['end']))
				return;
			$flds = $trklib->list_tracker_fields($trackerId,0,-1,"position_asc","");
			$back = '';
			$bad = array();
			$embeddedId = false;
			$onemandatory = false;
			$full_fields = array();
			$mainfield = '';

			if (isset($_REQUEST['trackit']) and $_REQUEST['trackit'] == $trackerId) {
				$cpt = 0;
				foreach ($flds['data'] as $fl) {
					// store value to display it later if form
					// isn't fully filled.
					if(isset($_REQUEST['track'][$fl['fieldId']])) {
						$flds['data'][$cpt]['value'] = $_REQUEST['track'][$fl['fieldId']];
					} else {
						$flds['data'][$cpt]['value'] = '';
					}
					$full_fields[$fl['fieldId']] = $fl;
					
					if ($embedded == 'y' and $fl['name'] == 'page') {
						$embeddedId = $fl['fieldId'];
					}
					if ($fl['isMain'] == 'y')
						$mainfield = $flds['data'][$cpt]['value'];
					if ($fl['type'] == 'e')
						$ins_fields['data'][] = array_merge(array('value' => ''), $fl);
					$cpt++;
				}
		
				if (isset($_REQUEST['track'])) {
					foreach ($_REQUEST['track'] as $fld=>$val) {
						//$ins_fields["data"][] = array('fieldId' => $fld, 'value' => $val, 'type' => 1);
						$ins_fields["data"][] = array_merge(array('value' => $val), $full_fields[$fld]);
					}
				}
				if (isset($_FILES['track'])) {// image fields
					foreach ($_FILES['track'] as $label=>$w) {
						foreach ($w as $fld=>$val) {
							if ($label == 'tmp_name' && is_uploaded_file($val)) {
								$fp = fopen( $val, 'rb' );
								$data = '';
								while (!feof($fp)) {
									$data .= fread($fp, 8192 * 16);
								}
								fclose ($fp);
								$files[$fld]['value'] = $data;
							} else {
								$files[$fld]['file_'.$label] = $val;
							}
						}
					}
					foreach ($files as $fld=>$file) {
						$ins_fields['data'][] = array_merge($file, $full_fields[$fld]);
					}
				}

				if (isset($_REQUEST['authorfieldid']) and $_REQUEST['authorfieldid']) {
					$val = !empty($user)? $user: (isset($_REQUEST['name'])? $_REQUEST['name']: '');
					$ins_fields["data"][] = array('fieldId' => $_REQUEST['authorfieldid'], 'value' => $val, 'type' => 'u', 'options' => 1);
				}
				if (isset($_REQUEST['authoripid']) and $_REQUEST['authoripid']) {
					$val = !empty($_SERVER['REMOTE_ADDR'])? $_SERVER['REMOTE_ADDR']: '';
					$ins_fields["data"][] = array('fieldId' => $_REQUEST['authoripid'], 'value' => $val, 'type' => 'I', 'options' => 1);
				}
				if (isset($_REQUEST['authorgroupfieldid']) and $_REQUEST['authorgroupfieldid']) {
					$ins_fields["data"][] = array('fieldId' => $_REQUEST['authorgroupfieldid'], 'value' => $group, 'type' => 'g', 'options' => 1);
				}
				if ($embedded == 'y' && isset($_REQUEST['page'])) {
					$ins_fields["data"][] = array('fieldId' => $embeddedId, 'value' => $_REQUEST['page']);
				}
				$ins_categs = array();
				$categorized_fields = array();
				while (list($postVar, $postVal) = each($_REQUEST)) {
					if(preg_match("/^ins_cat_([0-9]+)/", $postVar, $m)) {
						foreach ($postVal as $v)
 	   						$ins_categs[] = $v;
						$categorized_fields[] = $m[1];
					}
		 		}
				// Check field values for each type and presence of mandatory ones
				$field_errors = $trklib->check_field_values($ins_fields, $categorized_fields);
			
				// values are OK, then lets add a new item
				if( count($field_errors['err_mandatory']) == 0  && count($field_errors['err_value']) == 0 ) {
					$itemId = $trklib->get_user_item($trackerId, $tracker);
					$rid = $trklib->replace_item($trackerId,$itemId,$ins_fields,$tracker['newItemStatus']);
					$trklib->categorized_item($trackerId, $rid, $mainfield, $ins_categs);
					if (!empty($page)) {
						header("Location: tiki-index.php?page=".urlencode($page)."&ok=$trackerId");
						die;
					// return "<div>$data</div>";
					} else {
						return '';
					}
				} elseif (isset($_REQUEST['trackit']) and $_REQUEST['trackit'] == $trackerId) {
					$smarty->assign('wikiplugin_tracker', $trackerId);//used in vote plugin
				}

			/*} else if (!empty($tracker['oneUserItem']) && $tracker['oneUserItem'] == 'y' && ($itemId = $trklib->get_user_item($trackerId, $tracker))) {
				$flds['data'] = @@;
			*/
			}
			// initialize fields with blank values
			else {
				for($i = 0; $i < count($flds['data']); $i++) {
					$flds['data'][$i]['value'] = '';
				}
			}
			
			$optional = array();
			if (isset($fields)) {
				$outf = array();
				$fl = split(":",$fields);
			
				foreach ($fl as $l) {
					if (substr($l,0,1) == '-') {
						$l = substr($l,1);
						$optional[] = $l;
					}
					$outf[] = $l;
				}
			} else {
				foreach ($flds['data'] as $f) {
					if ($f['isMandatory'] == 'y')
						$optional[] = $f['fieldId'];
					$outf[] = $f['fieldId'];
				}
			}

			// Display warnings when needed
			if(count($field_errors['err_mandatory']) > 0) {
				$back.= '<div class="simplebox highlight">';
				$back.= tra('Following mandatory fields are missing').'&nbsp;:<br/>';
				$coma_cpt = count($field_errors['err_mandatory']);
				foreach($field_errors['err_mandatory'] as $f) {
					$back.= $f['name'];
					$back.= --$coma_cpt > 0 ? ',&nbsp;' : '';
				}
				$back.= '</div><br />';
				$_REQUEST['error'] = 'y';
			}

			if(count($field_errors['err_value']) > 0) {
				$back.= '<div class="simplebox highlight">';
				$back.= tra('Following fields are incorrect').'&nbsp;:<br/>';
				$coma_cpt = count($field_errors['err_value']);
				foreach($field_errors['err_value'] as $f) {
					$back.= $f['name'];
					$back.= --$coma_cpt > 0 ? ',&nbsp;' : '';
				}
				$back.= '</div><br />';
				$_REQUEST['error'] = 'y';
			}
			if (!empty($page))
				$back .= '~np~';
			$back.= '<form enctype="multipart/form-data" method="post"><input type="hidden" name="trackit" value="'.$trackerId.'" />';
			if (!empty($_REQUEST['page']))
				$back.= '<input type="hidden" name="page" value="'.$_REQUEST["page"].'" />';
			$back.= '<input type="hidden" name="refresh" value="1" />';
			if (isset($_REQUEST['page']))
				$back.= '<input type="hidden" name="page" value="'.$_REQUEST["page"].'" />';
			 // for registration
			if (isset($_REQUEST['name']))
				$back.= '<input type="hidden" name="name" value="'.$_REQUEST["name"].'" />';
			if (isset($_REQUEST['pass'])) {
				$back.= '<input type="hidden" name="pass" value="'.$_REQUEST["pass"].'" />';
				$back.= '<input type="hidden" name="passAgain" value="'.$_REQUEST["pass"].'" />';
			}
			if (isset($_REQUEST['email']))
				$back.= '<input type="hidden" name="email" value="'.$_REQUEST["email"].'" />';
			if (isset($_REQUEST['regcode']))
				$back.= '<input type="hidden" name="regcode" value="'.$_REQUEST["regcode"].'" />';
			if (isset($_REQUEST['group']))
				$back.= '<input type="hidden" name="group" value="'.$_REQUEST["group"].'" />';
			if (isset($_REQUEST['register']))
				$back.= '<input type="hidden" name="register" value="'.$_REQUEST["register"].'" />';
			if ($showtitle == 'y') {
				$back.= '<div class="titlebar">'.$tracker["name"].'</div>';
			}
			if ($showdesc == 'y' && $tracker['description']) {
				$back.= '<div class="wikitext">'.$tracker["description"].'</div><br />';
			}

			// Loop on tracker fields and display form
			$back.= '<table class="wikiplugin_tracker">';
			foreach ($flds['data'] as $f) {
				if ($f['type'] == 'u' and $f['options'] == '1') {
					$back.= '<input type="hidden" name="authorfieldid" value="'.$f['fieldId'].'" />';
				}
				if ($f['type'] == 'I' and $f['options'] == '1') {
					$back.= '<input type="hidden" name="authoripid" value="'.$f['fieldId'].'" />';
				}
				if ($f['type'] == 'g' and $f['options'] == '1') {
					$back.= '<input type="hidden" name="authorgroupfieldid" value="'.$f['fieldId'].'" />';
				}
				if (in_array($f['fieldId'],$outf)) {
					if (in_array($f['fieldId'],$optional)) {
						$f['name'] = "<i>".$f['name']."</i>";
					}
					// numeric or text field
					if ($f['type'] == 't' or $f['type'] == 'n' and $f["fieldId"] != $embeddedId or $f['type'] == 'm') {
						$back.= "<tr><td>".wikiplugin_tracker_name($f['fieldId'], $f['name'], $field_errors);
						if ($showmandatory == 'y' and $f['isMandatory'] == 'y') {
							$back.= "&nbsp;<b>*</b>&nbsp;";
							$onemandatory = true;
						}
						$back.= "</td><td>";
						$back.= '<input type="text" name="track['.$f["fieldId"].']" value="'.$f['value'].'"';
						if (isset($f['options_array'][1])) {
							$back.= 'size="'.$f['options_array'][1].'" maxlength="'.$f['options_array'][1].'"';
						} else {
							$back.= 'size="30"';
						}
						$back.= '/>';
					// item link
					} elseif ($f['type'] == 'r') {
						$list = $trklib->get_all_items($f['options_array'][0],$f['options_array'][1],'o');
						$back.= "<tr><td>".wikiplugin_tracker_name($f['fieldId'], $f['name'], $field_errors);
						if ($showmandatory == 'y' and $f['isMandatory'] == 'y') {
							$back.= "&nbsp;<b>*</b>&nbsp;";
							$onemandatory = true;
						}
						$back.= "</td><td>";
						$back.= '<select name="track['.$f["fieldId"].']">';
						$back.= '<option value=""></option>';
						foreach ($list as $key=>$item) {
							$selected = $f['value'] == $item ? 'selected="selected"' : '';
							$back.= '<option value="'.$item.'" '.$selected.'>'.$item.'</option>';
						}
						$back.= "</select>";
					// country
					} elseif ($f['type'] == 'y') {
							$back.= "<tr><td>".wikiplugin_tracker_name($f['fieldId'], $f['name'], $field_errors);
						if ($showmandatory == 'y' and $f['isMandatory'] == 'y') {
							$back.= "&nbsp;<b>*</b>&nbsp;";
							$onemandatory = true;
						}
						$back.= "</td><td>";
						$back.= '<select name="track['.$f["fieldId"].']">';
						$flags = $trklib->get_flags();
						foreach ($flags as $flag) {
							$selected = $f['value'] == $flag ? 'selected="selected"' : '';
							if (!isset($f['options']) ||  $f['options'] != '1')
								$selected .= ' style="background-image:url(\'img/flags/'.$flag.'.gif\');background-repeat:no-repeat;padding-left:25px;padding-bottom:3px;"';
							$back.= '<option value="'.$flag.'" '.$selected.'>'.$flag.'</option>';
						}
						$back.= "</select>";
					// textarea
					} elseif ($f['type'] == 'a') {
						$back.= "<tr><td>".wikiplugin_tracker_name($f['fieldId'], $f['name'], $field_errors);
						if ($showmandatory == 'y' and $f['isMandatory'] == 'y') {
							$back.= "&nbsp;<b>*</b>&nbsp;";
							$onemandatory = true;
						}
						$back.= "</td><td>";
						if( isset($f['options_array'][1]) ) {
							$back.= '<textarea cols='.$f['options_array'][1].' rows='.$f['options_array'][2].' name="track['.$f["fieldId"].']" wrap="soft">'.$f['value'].'</textarea>';
						} else {
							$back.= '<textarea cols="29" rows="7" name="track['.$f["fieldId"].']" wrap="soft">'.$f['value'].'</textarea>';
						}
					// user selector
					} elseif ($f['type'] == 'u' and $f['options'] == '1') {
						$back.= '<tr><td>'.wikiplugin_tracker_name($f['fieldId'], $f['name'], $field_errors).'</td><td>'.$user;
					// drop down, user selector or group selector
					} elseif ($f['type'] == 'd' or $f['type'] == 'u' or $f['type'] == 'g' or $f['type'] == 'r' or $f['type'] == 'R') {
						if ($f['type'] == 'd' or $f['type'] == 'R') {
							$list = split(',',$f['options']);
						} elseif ($f['type'] == 'u') {
							if ($f['options'] == 1 or $f['options'] == 2) {
								$list = false;
							} else {
								$list = $userlib->list_all_users();
							}
						} elseif ($f['type'] == 'g') {
							$list = $userlib->list_all_groups();
						}
						if ($list) {
							$back.= "<tr><td>".wikiplugin_tracker_name($f['fieldId'], $f['name'], $field_errors);
							if ($showmandatory == 'y' and $f['isMandatory'] == 'y') {
								$back.= "&nbsp;<b>*</b>&nbsp;";
								$onemandatory = true;
							}
							$back.= "</td><td>";
							if ($f['type'] == 'R') {
								foreach ($list as $item) {
									$selected = $f['value'] == $item ? 'selected="selected"' : '';
									$back .= $item.' <input type="radio" name="track['.$f["fieldId"].']" value="'.$item.'" '.$selected.'>';
								}
							} else {
								$back.= '<select name="track['.$f["fieldId"].']">';
								foreach ($list as $item) {
									$selected = $f['value'] == $item ? 'selected="selected"' : '';
									$back.= '<option value="'.$item.'" '.$selected.'>'.$item.'</option>';
								}
								$back.= "</select>";
							}
						} else {
							$back.= '<input type="hidden" name="track['.$f["fieldId"].']" value="'.$user.'" />';
						}
					} elseif ($f['type'] == 'h') {
						$back .= "</td></tr></table><h2>".wikiplugin_tracker_name($f['fieldId'], $f['name'], $field_errors)."</h2><table><tr><td>";
						if (!empty($f['description']))
							$back .= '<i>'.$f['description'].'</i>';
						$back .= "<table><tr><td>";
					} elseif ($f['type'] == 'e') {
						$back .="<tr><td>".wikiplugin_tracker_name($f['fieldId'], $f['name'], $field_errors);
						if ($showmandatory == 'y' and $f['isMandatory'] == 'y') {
							$back.= "&nbsp;<b>*</b>&nbsp;";
							$onemandatory = true;
						}
						$back .= "</td><td>";
						$k = $f["options_array"][0];
						global $categlib; include_once('lib/categories/categlib.php');
						$cats = $categlib->get_child_categories($k);
						$i = 0;
						foreach ($cats as $cat) {
							$checked = ($f['value'] == $cat['categId']) ? 'checked="checked"' : '';
							$t = (isset($f["options_array"][1]) && $f["options_array"][1] == 'radio')? 'radio': 'checkbox';
							$back .= '<input type="'.$t.'" name="ins_cat_'.$i++.$f['fieldId'].'[]" value="'.$cat["categId"].'" '.$checked.'>'.$cat['name'].'</input>';
						}
					} elseif ($f['type'] == 'c') {
						$back .="<tr><td>".wikiplugin_tracker_name($f['fieldId'], $f['name'], $field_errors);
						if ($showmandatory == 'y' and $f['isMandatory'] == 'y') {
							$back.= "&nbsp;<b>*</b>&nbsp;";
							$onemandatory = true;
						}
						$checked = $f['value'] == 'y' ? 'checked="checked"' : '';
						$back .= '</td><td><input type="checkbox" name="track['.$f["fieldId"].']" value="y" '.$checked.'/>';
					} elseif ($f['type'] == 'i') {
						$back.= "<tr><td>".wikiplugin_tracker_name($f['fieldId'], $f['name'], $field_errors);
						if ($showmandatory == 'y' and $f['isMandatory'] == 'y') {
							$back.= "&nbsp;<b>*</b>&nbsp;";
							$onemandatory = true;
						}
						$back .= "</td><td>";
						$back .= '<input type="file" name="track['.$f["fieldId"].']" />';
					} else {
					}
					if (!empty($f['description']) && $f['type'] != 'h')
						$back .= '<br /><i>'.$f['description'].'</i>';
					$back.= "</td></tr>";
				}
			}
			$back.= "<tr><td></td><td><input type='submit' name='action' value='".$action."'>";
			if ($showmandatory == 'y' and $onemandatory) {
				$back.= "<br /><i>".tra("Fields marked with a * are mandatory.")."</i>";
			}
			$back.= "</td></tr>";
			$back.= "</table>";
			$back.= '</form>';
			if (!empty($page))
				$back .= '~/np~';
		return $back;
	}
	else {
		if (isset($_REQUEST['trackit']) and $_REQUEST['trackit'] == $trackerId)
			$smarty->assign('wikiplugin_tracker', $trackerId);//used in vote plugin
		$back = '';
		if ($showtitle == 'y') {
			$back.= '<div class="titlebar">'.$tracker["name"].'</div>';
		}
		if ($showdesc == 'y') {
			$back.= '<div class="wikitext">'.$tracker["description"].'</div><br />';
		}
		$back.= '<div>'.$data.'</div>';
		return $back;
	}
}

?>
