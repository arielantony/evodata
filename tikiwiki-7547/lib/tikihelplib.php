<?php
/**
 * $Header: /cvsroot/tikiwiki/tiki/lib/tikihelplib.php,v 1.6 2006-12-08 13:58:55 sylvieg Exp $
 * Copyright (c) 2002-2005, Luis Argerich, Garland Foster, Eduardo Polidor, et. al.
 * All Rights Reserved. See copyright.txt for details and a complete list of authors.
 * Licensed under the GNU LESSER GENERAL PUBLIC LICENSE. See license.txt for details.
 */

//this script may only be included - so its better to die if called directly.
if (strpos($_SERVER["SCRIPT_NAME"],basename(__FILE__)) !== false) {
  header("location: index.php");
  exit;
}

class TikiHelpLib {
	// function TikiHelpLib() {
        // }
/* end of class */
}


/**
 *  Returns a single html-formatted crumb
 *  @param crumb a breadcrumb instance, or
 *  @param url, desc:  a doc page and associated (already translated) help description
 */
/* static */
function help_doclink($params) {
    global $feature_help, $helpurl;
    
     extract($params);
    // Param = zone
		$ret = '';
    if(empty($url) && empty($desc) && empty($crumb)) {
        return;
    }
    if (!empty($crumb)) {
        $url = $crumb->helpUrl;
        $desc = $crumb->helpDescription;
    }
    
    if ($feature_help == 'y' and $url) {
        $ret = '<a title="'.$desc.'" href="'
        .$helpurl.$url.'" target="tikihelp" class="tikihelp">'
        .'<img src="pics/icons/help.png"'
        .' border="0" height="16" width="16" alt="'.tra('Help').'" /></a>';
    }
    return $ret;
}
?>
