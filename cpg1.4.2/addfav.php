<?php
/*************************
  Coppermine Photo Gallery
  ************************
  Copyright (c) 2003-2005 Coppermine Dev Team
  v1.1 originaly written by Gregory DEMAR

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License as published by
  the Free Software Foundation; either version 2 of the License, or
  (at your option) any later version.
  ********************************************
  Coppermine version: 1.4.2
  $Source: /cvsroot/coppermine/devel/addfav.php,v $
  $Revision: 1.19 $
  $Author: gaugau $
  $Date: 2005/10/25 01:15:41 $
**********************************************/

/**
* Coppermine Photo Gallery 1.4.2 addfav.php
*
* This file does the needful when add to fav links are clicked, if the user is logged in then
* the favs are stored in the database else the favs are stored in a local cookie, the favs in
* database take precedence over the cookie favs
*
* @copyright 2002-2005 Gregory DEMAR, Coppermine Dev Team
* @license http://opensource.org/licenses/gpl-license.php GNU General Public License V2
* @package Coppermine
* @version $Id: addfav.php,v 1.19 2005/10/25 01:15:41 gaugau Exp $
*/

/**
* @ignore
*/
define('IN_COPPERMINE', true);
/**
* @ignore
*/
define('RATEPIC_PHP', true);

require('include/init.inc.php');
// Check if required parameters are present
if (!isset($_GET['pid'])) cpg_die(CRITICAL_ERROR, $lang_errors['param_missing'], __FILE__, __LINE__);

$pic = (int)$_GET['pid'];
// If user does not accept script's cookies, we don't accept the vote
if (!isset($_COOKIE[$CONFIG['cookie_name'] . '_data'])) {
    header('Location: displayimage.php?pos=' . (- $pid));
    exit;
}
// See if this picture is already present in the array
if (!in_array($pic, $FAVPICS)) {
    $FAVPICS[] = $pic;
} else {
    $key = array_search($pic, $FAVPICS);
    unset ($FAVPICS[$key]);
}

$data = base64_encode(serialize($FAVPICS));
setcookie($CONFIG['cookie_name'] . '_fav', $data, time() + 86400 * 30, $CONFIG['cookie_path']);
// If the user is logged in then put it in the DB
if (USER_ID > 0) {
    $sql = "UPDATE {$CONFIG['TABLE_FAVPICS']} SET user_favpics = '$data' WHERE user_id = " . USER_ID;
    cpg_db_query($sql);
    // User never stored a fav... so insert new row
    if (!mysql_affected_rows()) {
        $sql = "INSERT INTO {$CONFIG['TABLE_FAVPICS']} ( user_id, user_favpics) VALUES (" . USER_ID . ", '$data')";
        cpg_db_query($sql);
    }
}

$location = "displayimage.php?pos=" . (- $pic);
$header_location = (@preg_match('/Microsoft|WebSTAR|Xitami/', getenv('SERVER_SOFTWARE'))) ? 'Refresh: 0; URL=' : 'Location: ';
header($header_location . $location);
pageheader($lang_info, "<meta http-equiv=\"refresh\" content=\"1;url=$location\">");
msg_box($lang_info, $lang_rate_pic_php['rate_ok'], $lang_continue, $location);
pagefooter();
ob_end_flush();

?>