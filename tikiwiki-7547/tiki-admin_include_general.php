<?php

// $Header: /cvsroot/tikiwiki/tiki/tiki-admin_include_general.php,v 1.50 2006-12-22 01:03:13 mose Exp $

// Copyright (c) 2002-2005, Luis Argerich, Garland Foster, Eduardo Polidor, et. al.
// All Rights Reserved. See copyright.txt for details and a complete list of authors.
// Licensed under the GNU LESSER GENERAL PUBLIC LICENSE. See license.txt for details.


//this script may only be included - so its better to die if called directly.
//smarty is not there - we need setup
require_once('tiki-setup.php');  
$access->check_script($_SERVER["SCRIPT_NAME"],basename(__FILE__));

if (isset($_REQUEST["change_style"])) {
	check_ticket('admin-inc-general');
	byref_set_value("site_style", "style");
	if ($style != $user_style) {
		header('Location: tiki-admin.php?page=general');
		die;
	}
}
// Handle Update
elseif (isset($_REQUEST["prefs"])) {
	check_ticket('admin-inc-general');
    $pref_toggles = array(
        "anonCanEdit",
        "cacheimages",
        "cachepages",
        "count_admin_pvs",
        "direct_pagination",
        "feature_menusfolderstyle",
        "feature_obzip",
        "feature_detect_language",
        "lang_use_db",
        "modallgroups",
        "modseparateanon", // MGvK
        "popupLinks",
        "record_untranslated",
        "site_closed",
        "useGroupHome",
        "limitedGoGroupHome",
        "useUrlIndex",
        "use_load_threshold",
        "use_proxy",
        "session_db",
				"contact_anon",
				"error_reporting_adminonly"
    );

    foreach ($pref_toggles as $toggle) {
        simple_set_toggle ($toggle);
    }

    $pref_simple_values = array(
        "site_crumb_seper",
        "site_nav_seper",
        "contact_user",
        "site_favicon",
        "site_favicon_type",
        "feature_server_name",
        "maxRecords",
        "sender_email",
        "system_os",
        "error_reporting_level",
        "default_mail_charset",
        "mail_crlf",
        "urlIndex",
        "proxy_host",
        "proxy_port",
        "session_lifetime",
        "load_threshold",
        "site_busy_msg",
        "site_closed_msg",
        "helpurl"
    );

    foreach ($pref_simple_values as $svitem) {
        simple_set_value ($svitem);
    }

    $pref_byref_values = array(
        "display_field_order",
        "display_timezone",
        "language",
        "long_date_format",
        "long_time_format",
        "short_date_format",
        "short_time_format",
        "siteTitle",
        "slide_style",
        "tikiIndex",
	"https"
    );

    foreach ($pref_byref_values as $britem) {
        byref_set_value ($britem);
    }

    // Set value(s) with alternate pref name
    byref_set_value("site_style", "style");

    // Special handling for tied fields: tikiIndex, urlIndex and useUrlIndex
    if (!empty($_REQUEST["urlIndex"]) && isset($_REQUEST["useUrlIndex"]) && $_REQUEST["useUrlIndex"] == 'on') {
        $_REQUEST["tikiIndex"] = $_REQUEST["urlIndex"];

        $tikilib->set_preference("tikiIndex", $_REQUEST["tikiIndex"]);
        $smarty->assign_by_ref("tikiIndex", $_REQUEST["tikiIndex"]);
    }

    // Special handling for tmpDir, which has a default value
    if (isset($_REQUEST["tmpDir"])) {
        $tikilib->set_preference("tmpDir", $_REQUEST["tmpDir"]);

        $smarty->assign_by_ref("tmpDir", $_REQUEST["tmpDir"]);
    } else {
        $tdir = TikiSetup::tempdir();

        $tikilib->set_preference("tmpDir", $tdir);
        $smarty->assign("tmpDir", $tdir);
    }
    
    // not needed anymore? -- gongo
    //$smarty->assign('pagetop_msg', tra("Your settings have been updated. <a href='tiki-admin.php?page=general'>Click here</a> or come back later see the changes. That is a known bug that will be fixed in the next release."));
    $smarty->assign('pagetop_msg', "");
}
// Handle Password Change Request
elseif (isset($_REQUEST["newadminpass"])) {
	check_ticket('admin-inc-general');
    if ($_REQUEST["adminpass"] <> $_REQUEST["again"]) {
        $msg = tra("The passwords do not match");
        $access->display_error(basename(__FILE__), $msg);
    }

    // Dont allow blank passwords here
    if (strlen($_REQUEST["adminpass"]) == 0) {
    	$smarty->assign("msg", tra("You cannot have a blank password"));
	$smarty->display("error.tpl");
	die;
    }
	

    // Validate password here
    if (strlen($_REQUEST["adminpass"]) < $min_pass_length) {
        $text = tra("Password should be at least");

        $text .= " " . $min_pass_length . " ";
        $text .= tra("characters long");
        $access->display_error(basename(__FILE__), $text);
    }

    $userlib->change_user_password("admin", $_REQUEST["adminpass"]);
    $smarty->assign('pagetop_msg', tra("Your admin password has been changed"));
}

$llist = $tikilib->list_styles();
$smarty->assign_by_ref( "styles", $llist);

// Get list of available slideshow styles
$slide_styles = array();
$h = opendir("styles/slideshows");
while ($file = readdir($h)) {
    if (strstr($file, "css")) {
        $slide_styles[] = $file;
    }
}
closedir ($h);
$smarty->assign_by_ref("slide_styles", $slide_styles);

// Get list of available languages
$languages = array();
$languages = $tikilib->list_languages();
$smarty->assign_by_ref("languages", $languages);

// Get list of time zones
$timezone_options = $tikilib->get_timezone_list(false);
$smarty->assign_by_ref("timezone_options", $timezone_options);

// Get TimeZone information
$server_time = new Date();
$display_timezone = $tikilib->get_preference("display_timezone", $server_time->tz->getID());
$smarty->assign_by_ref("display_timezone", $display_timezone);

$timezone_server = $timezone_options[$server_time->tz->getID()];
$smarty->assign_by_ref("timezone_server", $timezone_server);

// Get information for alternate homes
$smarty->assign("home_forum_url", "tiki-view_forum.php?forumId=" . $home_forum);
$smarty->assign("home_blog_url", "tiki-view_blog.php?blogId=" . $home_blog);
$smarty->assign("home_gallery_url", "tiki-browse_gallery.php?galleryId=" . $home_gallery);
$smarty->assign("home_file_gallery_url", "tiki-list_file_gallery.php?galleryId=" . $home_file_gallery);

if ($home_blog) {
    $hbloginfo = $tikilib->get_blog($home_blog);

    $smarty->assign("home_blog_name", substr($hbloginfo["title"], 0, 20));
} else {
    $smarty->assign("home_blog_name", '');
}

if ($home_gallery) {
    $hgalinfo = $tikilib->get_gallery($home_gallery);

    $smarty->assign("home_gal_name", substr($hgalinfo["name"], 0, 20));
} else {
    $smarty->assign("home_gal_name", '');
}

if ($home_forum) {
	require_once('lib/commentslib.php');
	if (!isset($commentslib)) {
		$commentslib = new Comments($dbTiki);
	}
    $hforuminfo = $commentslib->get_forum($home_forum);

    $smarty->assign("home_forum_name", substr($hforuminfo["name"], 0, 20));
} else {
    $smarty->assign("home_forum_name", '');
}

if ($home_file_gallery) {
    $hgalinfo = $tikilib->get_gallery($home_file_gallery);

    $smarty->assign("home_fil_name", substr($hgalinfo["name"], 0, 20));
} else {
    $smarty->assign("home_fil_name", '');
}

// Get Date/Time preferences
$long_date_format = $tikilib->get_preference("long_date_format", "%A %d " . tra("DATE-of"). " %B, %Y");
$smarty->assign_by_ref("long_date_format", $long_date_format);

$short_date_format = $tikilib->get_preference("short_date_format", "%a %d " . tra("DATE-of"). " %b, %Y");
$smarty->assign_by_ref("short_date_format", $short_date_format);

$long_time_format = $tikilib->get_preference("long_time_format", "%H:%M:%S %Z");
$smarty->assign_by_ref("long_time_format", $long_time_format);

$short_time_format = $tikilib->get_preference("short_time_format", "%H:%M %Z");
$smarty->assign_by_ref("short_time_format", $short_time_format);
ask_ticket('admin-inc-general');
?>
