<?php

// $Header: /cvsroot/tikiwiki/tiki/tiki-g-view_workitem.php,v 1.10 2005-05-18 10:58:56 mose Exp $

// Copyright (c) 2002-2005, Luis Argerich, Garland Foster, Eduardo Polidor, et. al.
// All Rights Reserved. See copyright.txt for details and a complete list of authors.
// Licensed under the GNU LESSER GENERAL PUBLIC LICENSE. See license.txt for details.
require_once ('tiki-setup.php');

include_once ('lib/Galaxia/ProcessMonitor.php');

if ($feature_workflow != 'y') {
	$smarty->assign('msg', tra("This feature is disabled").": feature_workflow");

	$smarty->display("error.tpl");
	die;
}

if ($tiki_p_admin_workflow != 'y') {
	$smarty->assign('msg', tra("Permission denied"));

	$smarty->display("error.tpl");
	die;
}

if (!isset($_REQUEST['itemId'])) {
	$smarty->assign('msg', tra("No item indicated"));

	$smarty->display("error.tpl");
	die;
}

$wi = $processMonitor->monitor_get_workitem($_REQUEST['itemId']);
$smarty->assign_by_ref('wi', $wi);

$smarty->assign('stats', $processMonitor->monitor_stats());

$sameurl_elements = array(
	'offset',
	'sort_mode',
	'where',
	'find',
	'itemId'
);
ask_ticket('g-view-workitem');

$smarty->assign('mid', 'tiki-g-view_workitem.tpl');
$smarty->display("tiki.tpl");

?>
