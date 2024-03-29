<?php

// $Header: /cvsroot/tikiwiki/tiki/tiki-adminusers.php,v 1.63 2006-12-21 14:57:56 mose Exp $

// Copyright (c) 2002-2005, Luis Argerich, Garland Foster, Eduardo Polidor, et. al.
// All Rights Reserved. See copyright.txt for details and a complete list of authors.
// Licensed under the GNU LESSER GENERAL PUBLIC LICENSE. See license.txt for details.

// Initialization
$tikifeedback = array();
require_once ('tiki-setup.php');

if (!($user == 'admin' || $tiki_p_admin == 'y' || $tiki_p_admin_users == 'y')) { // temporary patch: tiki_p_admin includes tiki_p_admin_users but if you don't clean the temp/cache each time you sqlupgrade the perms setting is not synchornous with the cache
	$smarty->assign('msg', tra("You do not have permission to use this feature"));
	$smarty->display("error.tpl");
	die;
}

function discardUser($u, $reason) {
	$u['reason'] = $reason;
	return $u;
}

function batchImportUsers() {
	global $userlib, $smarty, $logslib, $tiki_p_admin, $user;

	$fname = $_FILES['csvlist']['tmp_name'];
	$fhandle = fopen($fname, "r");
	$fields = fgetcsv($fhandle, 1000);
	if (!$fields[0]) {
		$smarty->assign('msg', tra("The file is not a CSV file or has not a correct syntax"));
		$smarty->display("error.tpl");
		die;
	}
	while (!feof($fhandle)) {
		$data = fgetcsv($fhandle, 1000);
		$temp_max = count($fields);
		for ($i = 0; $i < $temp_max; $i++) {
			if ($fields[$i] == "login" && function_exists("mb_detect_encoding") && mb_detect_encoding($data[$i], "ASCII, UTF-8, ISO-8859-1") ==  "ISO-8859-1") {
				$data[$i] = utf8_encode($data[$i]);
			}
			@$ar[$fields[$i]] = $data[$i];
		}
		$userrecs[] = $ar;
	}
	fclose ($fhandle);
	if (!is_array($userrecs)) {
		$smarty->assign('msg', tra("No records were found. Check the file please!"));
		$smarty->display("error.tpl");
		die;
	}
	$added = 0;
	$errors = array();
	$discards = 0;
	if ($tiki_p_admin != 'y')
		$userGroups = $userlib->get_user_groups_inclusion($user);
	foreach ($userrecs as $u) {
		$exist = false;
		if (empty($u['login'])) {
			if (!empty($u['password']) || !empty($u['email'])) { // not empty line
				$discarded[] = discardUser($u, tra("User login is required"));
				++$discards;
			}
			continue;
		} elseif (empty($u['password'])) {
			$discarded[] = discardUser($u, tra("Password is required"));
			++$discards;
			continue;
		} elseif (empty($u['email'])) {
			$discarded[] = discardUser($u, tra("Email is required"));
			++$discards;
			continue;
		} elseif (!preg_match($patterns['login'],$u['login'])) {
			$discarded[] = discardUser($u, tra("Login contains invalid characters"));
			++$discards;
		} elseif ($userlib->user_exists($u['login'])) {
			 if ($_REQUEST['overwrite'] == 'n') {
				$discarded[] = discardUser($u, tra("User is duplicated"));
				++$discards;
				continue;
			}
			$exist = true;
		} else {
			list($cant, $uu) = $userlib->other_user_exists_case_insensitive($u['login']);
			if ($cant != 0)
				$exist = true;
			if ($cant == 0) {
				$userlib->add_user($uu, $u['password'], $u['email']);
				$logslib->add_log('users',sprintf(tra("Created account %s <%s>"),$uu, $u['email']));
			} else if ($_REQUEST['overwrite'] == 'y') {
				$userlib->change_login($uu, $u['login']);
			} else if ($_REQUEST['overwrite'] == 'y') {
				$u['login'] = $uu;
			} else if ($_REQUEST['overwrite'] == 'n') {
				$discarded[] = discardUser($u, tra("User is duplicated").': '.$uu);
				++$discards;
				continue;
			}
		}
		$userlib->set_user_fields($u);

		if ($exist && isset($_REQUEST['overwriteGroup'])) {
			$userlib->remove_user_from_all_groups($u['login']);
		}

			if (@$u['groups']) {
				$grps = explode(",", $u['groups']);

				foreach ($grps as $grp) {
					$grp = preg_replace("/^ *(.*) *$/u", "$1", $grp);
					if (!$userlib->group_exists($grp)) {
						$err = tra("Unknown").": $grp";
						if (!in_array($err, $errors))
								$errors[] = $err;
					} elseif ($tiki_p_admin != 'y' &&  !array_key_exists($grp, $userGroups)) {
						$err = tra("Permission denied").": $grp";
						if (!in_array($err, $errors))
								$errors[] = $err;
					} else {
						$userlib->assign_user_to_group($u['login'], $grp);
						$logslib->add_log('perms',sprintf(tra("Assigned %s in group %s"),$u["login"], $grp));
					}
				}
			}
		$added++;
	}
	$smarty->assign('added', $added);
	if (@is_array($discarded)) {
		$smarty->assign('discarded', count($discarded));
	}
	@$smarty->assign('discardlist', $discarded);
	if (count($errors)) {
		array_unique($errors);
		$smarty->assign_by_ref('errors', $errors);
	}
}

$cookietab = "1";

// Process the form to add a user here
if (isset($_REQUEST["newuser"])) {
	check_ticket('admin-users');
	// if no user data entered, check if it's a batch upload  
	if ((!$_REQUEST["name"]) and (is_uploaded_file($_FILES['csvlist']['tmp_name']))) {
		batchImportUsers();
	} else {
		// Check if the user already exists
		if ($_REQUEST["pass"] != $_REQUEST["pass2"]) {
			$tikifeedback[] = array('num'=>1,'mes'=>tra("The passwords do not match"));
		} else {
			list($cant, $uu) = $userlib->other_user_exists_case_insensitive($_REQUEST["name"]);
			if ($cant != 0) {
				$tikifeedback[] = array('num'=>1,'mes'=>sprintf(tra("User %s already exists"),$uu));
			} elseif (!preg_match($patterns['login'],$_REQUEST['name'])) {
				$tikifeedback[] = array('num'=>1,'mes'=>tra("User login contains invalid characters"));
			} else {
				if ($userlib->add_user($_REQUEST["name"], $_REQUEST["pass"], $_REQUEST["email"])) {
					$tikifeedback[] = array('num'=>0,'mes'=>sprintf(tra("New %s created with %s %s."),tra("user"),tra("username"),$_REQUEST["name"]));
					$cookietab = '1';
					$_REQUEST['find'] = $_REQUEST["name"];
				} else {
					$tikifeedback[] = array('num'=>1,'mes'=>sprintf(tra("Impossible to create new %s with %s %s."),tra("user"),tra("username"),$_REQUEST["name"]));
				}
			}
		}
		if (isset($tikifeedback[0]['msg'])) {
			$logslib->add_log('adminusers','',$tikifeedback[0]['msg']);
		}
	}
} elseif (isset($_REQUEST["action"])) {
	if ($_REQUEST["action"] == 'delete') {
		$area = 'deluser';
		if ($feature_ticketlib2 != 'y' or (isset($_POST['daconfirm']) and isset($_SESSION["ticket_$area"]))) {
			key_check($area);
			$userlib->remove_user($_REQUEST["user"]);
			$tikifeedback[] = array('num'=>0,'mes'=>sprintf(tra("%s %s successfully deleted."),tra("user"),$_REQUEST["user"]));
		} else {
			key_get($area);
		}
	}
	if ($_REQUEST["action"] == 'removegroup') {
		$area = 'deluserfromgroup';
		if ($feature_ticketlib2 != 'y' or (isset($_POST['daconfirm']) and isset($_SESSION["ticket_$area"]))) {
			key_check($area);
			$userlib->remove_user_from_group($_REQUEST["user"], $_REQUEST["group"]);
			$tikifeedback[] = array('num'=>0,'mes'=>sprintf(tra("%s %s removed from %s %s."),tra("user"),$_REQUEST["user"],tra("group"),$_REQUEST["group"]));
		} else {
			key_get($area);
		}
	}
	$_REQUEST["user"] = '';
	if (isset($tikifeedback[0]['msg'])) {
		$logslib->add_log('adminusers','',$tikifeedback[0]['msg']);
	}					
} elseif (!empty($_REQUEST["submit_mult"]) && !empty($_REQUEST["checked"])) {
	if ($_REQUEST['submit_mult'] == 'remove_users' || $_REQUEST['submit_mult'] == 'remove_users_with_page') {
		$area = 'batchdeluser';
		if ($feature_ticketlib2 == 'n' or (isset($_POST['daconfirm']) and isset($_SESSION["ticket_$area"]))) {
			key_check($area);
			foreach ($_REQUEST["checked"] as $deleteuser) {
				$userlib->remove_user($deleteuser);
				if ($_REQUEST['submit_mult'] == 'remove_users_with_page')
					$tikilib->remove_all_versions($feature_wiki_userpage_prefix.$deleteuser);
				$tikifeedback[] = array('num'=>0,'mes'=>sprintf(tra("%s <b>%s</b> successfully deleted."),tra("user"),$deleteuser));
			}
		} elseif ( $feature_ticketlib2 == 'y') {
			$ch = "";
			foreach ($_REQUEST['checked'] as $c) {
				$ch .= "&amp;checked[]=".urlencode($c);
			}
			key_get($area, "", "tiki-adminusers.php?submit_mult=".$_REQUEST['submit_mult'].$ch);
		} else {
			key_get($area);
		}
	} elseif ($_REQUEST['submit_mult'] == 'assign_groups') {
		$group_management_mode = TRUE;
		$smarty->assign('group_management_mode', 'y');
		$sort_mode = 'groupName_asc';
		$initial = '';
		$find = '';
		if ($tiki_p_admin != 'y')
			$userGroups = $userlib->get_user_groups_inclusion($user);
		else
			$userGroups = '';
		$groups = $userlib->get_groups(0, -1, $sort_mode, $find, $initial, 'n', $userGroups);
		$smarty->assign('groups', $groups['data']);
	} elseif ($_REQUEST['submit_mult'] == 'set_default_groups') {
		$set_default_groups_mode = TRUE;
		$smarty->assign('set_default_groups_mode', 'y');
		$sort_mode = 'groupName_asc';
		$initial = '';
		$find = '';
		if ($tiki_p_admin != 'y')
			$userGroups = $userlib->get_user_groups_inclusion($user);
		else
			$userGroups = '';
		$groups = $userlib->get_groups(0, -1, $sort_mode, $find, $initial, 'n', $userGroups);
		$smarty->assign('groups', $groups['data']);
	}
	if (isset($tikifeedback[0]['msg'])) {
		$logslib->add_log('adminusers','',$tikifeedback[0]['msg']);
	}					
} elseif (!empty($_REQUEST['group_management']) && $_REQUEST['group_management'] == 'add') {
	if (!empty($_REQUEST["checked_groups"]) && !empty($_REQUEST["checked"])) {
		if ($tiki_p_admin != 'y')
			$userGroups = $userlib->get_user_groups_inclusion($user);
		foreach ($_REQUEST['checked'] as $user) {
			foreach ($_REQUEST["checked_groups"] as $group) {
				if ($tiki_p_admin == 'y' || array_key_exists($group, $userGroups)) {
					$userlib->assign_user_to_group($user, $group);
					$tikifeedback[] = array('num'=>0,'mes'=>sprintf(tra("%s <b>%s</b> assigned to %s <b>%s</b>."),tra("user"),$user,tra("group"),$group));
				}
			}
		}
	}
	if (isset($tikifeedback[0]['msg'])) {
		$logslib->add_log('adminusers','',$tikifeedback[0]['msg']);
	}					
} elseif (!empty($_REQUEST['group_management']) && $_REQUEST['group_management'] == 'remove') {
	if (!empty($_REQUEST["checked_groups"]) && !empty($_REQUEST["checked"])) {
		foreach ($_REQUEST['checked'] as $user) {
			foreach ($_REQUEST["checked_groups"] as $group) {
				$userlib->remove_user_from_group($user, $group);
				$tikifeedback[] = array('num'=>0,'mes'=>sprintf(tra("%s <b>%s</b> removed from %s <b>%s</b>."),tra("user"),$user,tra("group"),$group));
			}
		}
	}
	if (isset($tikifeedback[0]['msg'])) {
		$logslib->add_log('adminusers','',$tikifeedback[0]['msg']);
	}					
} elseif (!empty($_REQUEST['set_default_groups']) && $_REQUEST['set_default_groups'] == 'y') {
	if (!empty($_REQUEST["checked_group"]) && !empty($_REQUEST["checked"])) {
		foreach ($_REQUEST['checked'] as $user) {
			$group = $_REQUEST["checked_group"];
			$userlib->set_default_group($user, $group);
			$tikifeedback[] = array('num'=>0,'mes'=>sprintf(tra("group <b>%s</b> set as the default group of user <b>%s</b>."),$group,$user));
		}
	}
	if (isset($tikifeedback[0]['msg'])) {
		$logslib->add_log('adminusers','',$tikifeedback[0]['msg']);
	}					
}

if (!isset($_REQUEST["sort_mode"])) {
	$sort_mode = 'login_asc';
} else {
	$sort_mode = $_REQUEST["sort_mode"];
}
$smarty->assign_by_ref('sort_mode', $sort_mode);

if (!isset($_REQUEST["numrows"])) {
	$numrows = $maxRecords;
} else {
	$numrows = $_REQUEST["numrows"];
}
$smarty->assign_by_ref('numrows', $numrows);

if (!isset($_REQUEST["offset"])) {
	$offset = 0;
} else {
	$offset = $_REQUEST["offset"];
}
$smarty->assign_by_ref('offset', $offset);


if (isset($_REQUEST["initial"])) {
	$initial = $_REQUEST["initial"];
} else {
	$initial = '';
}
$smarty->assign('initial', $initial);
$smarty->assign('initials', split(' ','a b c d e f g h i j k l m n o p q r s t u v w x y z'));

if (isset($_REQUEST["find"])) {
	$find = $_REQUEST["find"];
} else {
	$find = '';
}
$smarty->assign('find', $find);

if (isset($_REQUEST["filterGroup"])) {
	$filterGroup = $_REQUEST["filterGroup"];
} else {
	$filterGroup = '';
}
$smarty->assign('filterGroup', $filterGroup);

if (isset($_REQUEST["filterEmail"])) {
	$filterEmail = $_REQUEST["filterEmail"];
} else {
	$filterEmail = '';
}
$smarty->assign('filterEmail', $filterEmail);


//$users = $userlib->get_users($offset, $numrows, $sort_mode, $find, $initial, true);
$users = $userlib->get_users($offset, $numrows, $sort_mode, $find, $initial, true, $filterGroup, $filterEmail);

if (!empty($group_management_mode) || !empty($set_default_groups_mode)) {
	$arraylen = count($users['data']);
	for ($i=0; $i<$arraylen; $i++) {
		if (in_array($users['data'][$i]['user'], $_REQUEST["checked"])) {
			$users['data'][$i]['checked'] = 'y';
		}
	}
}

$smarty->assign_by_ref('users', $users["data"]);
$cant_pages = ceil($users["cant"] / $numrows);
$smarty->assign_by_ref('cant_pages', $cant_pages);
$smarty->assign('actual_page', 1 + ($offset / $numrows));

if ($users["cant"] > ($offset + $numrows)) {
	$smarty->assign('next_offset', $offset + $numrows);
} else {
	$smarty->assign('next_offset', -1);
}
if ($offset > 0) {
	$smarty->assign('prev_offset', $offset - $numrows);
} else {
	$smarty->assign('prev_offset', -1);
}

list($username,$usermail,$usersTrackerId,$chlogin) = array('','','',false);
if (isset($_REQUEST["user"]) and $_REQUEST["user"]) {
	if (!is_numeric($_REQUEST["user"])) {
		$_REQUEST["user"] = $userlib->get_user_id($_REQUEST["user"]);
	}
	$userinfo = $userlib->get_userid_info($_REQUEST["user"]);
	if (isset($_POST["edituser"]) and isset($_POST['name']) and isset($_POST['email'])) {
		//var_dump($_POST);die;
		if ($_POST['name']) {
			if ($userinfo['login'] != $_POST['name']) {
				if ($userlib->user_exists($_POST['name'])) {
					$smarty->assign('msg', tra("User already exists"));
			  	$smarty->display("error.tpl");
					die;
				}
				$chlogin = true;
			}
		}
		if (isset($_POST['pass']) &&  $_POST["pass"]) {
			if ($_POST["pass"] != $_POST["pass2"]) {
				$smarty->assign('msg', tra("The passwords do not match"));
				$smarty->display("error.tpl");
				die;
			} 
			if (strlen($_POST["pass"])<$min_pass_length) {
				$smarty->assign('msg',tra("Password should be at least").' '.$min_pass_length.' '.tra("characters long"));
				$smarty->display("error.tpl");
				die; 	
			} 
			if ($pass_chr_num == 'y') {
				if (!preg_match_all("/[0-9]+/",$_POST["pass"],$foo) || !preg_match_all("/[A-Za-z]+/",$_POST["pass"],$foo)) {
					$smarty->assign('msg',tra("Password must contain both letters and numbers"));
					$smarty->display("error.tpl");
					die; 	
				}
			}
			if ($userlib->change_user_password($_POST['name'],$_POST["pass"])) {
				$tikifeedback[] = array('num'=>0,'mes'=>sprintf(tra("%s modified successfully."),tra("password")));
				$logslib->add_log('adminusers','changed password for '.$_POST['name']);
			} else {
				$tikifeedback[] = array('num'=>0,'mes'=>sprintf(tra("%s modification failed."),tra("password")));
			}
		}
		if ($userinfo['email'] != $_POST['email']) {
			if ($userlib->change_user_email($_POST['name'],$_POST['email'],'')) {
				$tikifeedback[] = array('num'=>0,'mes'=>sprintf(tra("%s changed from %s to %s"),tra("email"),$userinfo['email'],$_POST["email"]));
				$logslib->add_log('adminusers','changed email for '.$_POST['name'].' from '.$userinfo['email'].' to '.$_POST["email"]);
				$userinfo['email'] = $_POST['email'];
			} else {
				$tikifeedback[] = array('num'=>1,'mes'=>sprintf(tra("Impossible to change %s from %s to %s"),tra("email"),$userinfo['email'],$_POST["email"]));
			}
		}
		if ($chlogin) {
			if (!preg_match($patterns['login'],$_POST['name'])) {
				$tikifeedback[] = array('num'=>1,'mes'=>tra("Login contains invalid characters"));
			} elseif ($userlib->change_login($userinfo['login'],$_POST['name'])) {
				$tikifeedback[] = array('num'=>0,'mes'=>sprintf(tra("%s changed from %s to %s"),tra("login"),$userinfo['login'],$_POST["name"]));
				$logslib->add_log('adminusers','changed login for '.$_POST['name'].' from '.$userinfo['login'].' to '.$_POST["name"]);
				$userinfo['login'] = $_POST['name'];
			} else {
				$tikifeedback[] = array('num'=>1,'mes'=>sprintf(tra("Impossible to change %s from %s to %s"),tra("login"),$userinfo['email'],$_POST["email"]));
			}
		}
		setcookie("activeTabs".urlencode(substr($_SERVER["REQUEST_URI"],1)),"tab1");
	}
	if ($userTracker == 'y') {
		$re = $userlib->get_usertracker($_REQUEST["user"]);
		if ($re['usersTrackerId']) {
			include_once('lib/trackers/trackerlib.php');
			$userstrackerid = $re["usersTrackerId"];
			$smarty->assign('userstrackerid',$userstrackerid);
			$usersFields = $trklib->list_tracker_fields($usersTrackerId, 0, -1, 'position_asc', '');
			$smarty->assign_by_ref('usersFields', $usersFields['data']);
			if (isset($re["usersFieldId"]) and $re["usersFieldId"]) {
				$usersfieldid = $re["usersFieldId"];
				$smarty->assign('usersfieldid',$usersfieldid);
				$usersitemid = $trklib->get_item_id($userstrackerid,$usersfieldid,$re["user"]);
				$smarty->assign('usersitemid',$usersitemid);
			}
		}
	}
	$cookietab = "2";
} else {
	$userinfo['login'] = '';
	$userinfo['email'] = '';
	$userinfo['created'] = date('U');
	$userinfo['registrationDate'] = '';
	$userinfo['age'] = '';
	$userinfo['currentLogin'] = '';
	$cookietab = "1";
	$_REQUEST["user"] = 0;
}
if (isset($_REQUEST['add'])) {
	$cookietab = "2";
}

$smarty->assign('userinfo', $userinfo);
$smarty->assign('userId', $_REQUEST["user"]);
$smarty->assign('username', $username);
$smarty->assign('usermail', $usermail);

$smarty->assign_by_ref('tikifeedback', $tikifeedback);

setcookie('tab',$cookietab);
$smarty->assign('cookietab',$cookietab);

ask_ticket('admin-users');

$smarty->assign('uses_tabs', 'y');

// disallow robots to index page:
$smarty->assign('metatag_robots', 'NOINDEX, NOFOLLOW');

$smarty->assign('mid', 'tiki-adminusers.tpl');
$smarty->display("tiki.tpl");
?>
