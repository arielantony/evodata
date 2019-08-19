<?php

// $Header: /cvsroot/tikiwiki/tiki/tiki-mailin.php,v 1.8 2005-05-18 10:58:58 mose Exp $

// Copyright (c) 2002-2005, Luis Argerich, Garland Foster, Eduardo Polidor, et. al.
// All Rights Reserved. See copyright.txt for details and a complete list of authors.
// Licensed under the GNU LESSER GENERAL PUBLIC LICENSE. See license.txt for details.

// Initialization
require_once ('tiki-setup.php');

//check if feature is on
if($feature_mailin != 'y') {
  $smarty->assign('msg', tra("This feature is disabled").": feature_mailin");
  $smarty->display("error.tpl");
  die;  
}

include_once ('tiki-mailin-code.php');

$smarty->assign('content', $content);
$smarty->assign('mid', 'tiki-mailin.tpl');
$smarty->display("tiki.tpl");
?>
