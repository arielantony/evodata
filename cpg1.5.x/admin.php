<?php
// ------------------------------------------------------------------------- //
//  Coppermine Photo Gallery                                                 //
// ------------------------------------------------------------------------- //
//  Copyright (C) 2002,2003  Gr�gory DEMAR <gdemar@wanadoo.fr>               //
//  http://www.chezgreg.net/coppermine/                                      //
// ------------------------------------------------------------------------- //
//  Based on PHPhotoalbum by Henning St�verud <henning@stoverud.com>         //
//  http://www.stoverud.com/PHPhotoalbum/                                    //
// ------------------------------------------------------------------------- //
//  This program is free software; you can redistribute it and/or modify     //
//  it under the terms of the GNU General Public License as published by     //
//  the Free Software Foundation; either version 2 of the License, or        //
//  (at your option) any later version.                                      //
// ------------------------------------------------------------------------- //

define('IN_COPPERMINE', true);
define('ADMIN_PHP', true);

require('include/init.inc.php');

if (!USER_CAN_CREATE_ALBUMS && !USER_IS_ADMIN) cpg_die(ERROR, $lang_errors['access_denied'], __FILE__, __LINE__);

if(!isset($HTTP_GET_VARS['admin_mode']) || !isset($HTTP_GET_VARS['referer'])) cpg_die(CRITICAL_ERROR, $lang_errors['param_missing'], __FILE__, __LINE__);

$admin_mode = (int)$HTTP_GET_VARS['admin_mode'] ? 1 : 0;
$referer = $HTTP_GET_VARS['referer'] ? $HTTP_GET_VARS['referer'] : 'index.php';
$USER['am'] = $admin_mode;
if (!$admin_mode) $referer = 'index.php';

pageheader($lang_info,"<META http-equiv=\"refresh\" content=\"1;url=$referer\">");
msg_box($lang_info, $lang_admin_php[$admin_mode], $lang_continue, $referer);
pagefooter();
ob_end_flush();
?>