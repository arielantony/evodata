<?php

// $Header: /cvsroot/tikiwiki/tiki/tiki-view_blog_post.php,v 1.40 2006-12-22 04:11:49 mose Exp $

// Copyright (c) 2002-2005, Luis Argerich, Garland Foster, Eduardo Polidor, et. al.
// All Rights Reserved. See copyright.txt for details and a complete list of authors.
// Licensed under the GNU LESSER GENERAL PUBLIC LICENSE. See license.txt for details.

// Initialization
$section = 'blogs';
require_once ('tiki-setup.php');

include_once ('lib/blogs/bloglib.php');

// first of all , we just die if blogs feature is not set
if ($feature_blogs != 'y') {
	$smarty->assign('msg', tra("This feature is disabled").": feature_blogs");

	$smarty->display("error.tpl");
	die;
}

if (!isset($_REQUEST['blogId']) && !isset($_REQUEST['postId'])) {
	$parts = parse_url($_SERVER['REQUEST_URI']);
	$paths = explode('/', $parts['path']);
//	$blogId = $paths[count($paths) - 2];
	$postId = $paths[count($paths) - 1];
} else if (empty($_REQUEST["postId"])) {
    $smarty->assign('msg', tra('No post indicated'));
    $smarty->display('error.tpl');
    die;
} else {
    $postId = $_REQUEST['postId'];
}

$post_info = $bloglib->get_post($postId);
$blogId = $post_info['blogId'];
$blog_data = $bloglib->get_blog($blogId);

if (!$blog_data) {
	$smarty->assign('msg', tra("Blog not found"));
	$smarty->display("error.tpl");
	die;
}

$smarty->assign('individual', 'n');

if ($userlib->object_has_one_permission($blogId, 'blog')) {
	$smarty->assign('individual', 'y');

	if ($tiki_p_admin != 'y') {
		// Now get all the permissions that are set for this type of permissions 'image gallery'
		$perms = $userlib->get_permissions(0, -1, 'permName_desc', '', 'blogs');

		foreach ($perms["data"] as $perm) {
			$permName = $perm["permName"];

			if ($userlib->object_has_permission($user, $blogId, 'blog', $permName)) {
				$$permName = 'y';

				$smarty->assign("$permName", 'y');
			} else {
				$$permName = 'n';

				$smarty->assign("$permName", 'n');
			}
		}
	}
}

if ($tiki_p_blog_admin == 'y') {
	$tiki_p_create_blogs = 'y';

	$smarty->assign('tiki_p_create_blogs', 'y');
	$tiki_p_blog_post = 'y';
	$smarty->assign('tiki_p_blog_post', 'y');
	$tiki_p_read_blog = 'y';
	$smarty->assign('tiki_p_read_blog', 'y');
}

if ($tiki_p_read_blog != 'y') {
	$smarty->assign('msg', tra("Permission denied you can not view this section"));

	$smarty->display("error.tpl");
	die;
}

$ownsblog = 'n';

if ($user && $user == $blog_data["user"]) {
	$ownsblog = 'y';
}

$smarty->assign('ownsblog', $ownsblog);

$post_info['data']=htmldecode($post_info['data']);
$smarty->assign('post_info', $post_info);
$smarty->assign('postId', $postId);
$smarty->assign('blog_data', $blog_data);
$smarty->assign('blogId', $blogId);

//Build absolute URI for this
$parts = parse_url($_SERVER['REQUEST_URI']);
$uri = $tikilib->httpPrefix(). $parts['path'] . '?blogId=' . $blogId . '&postId=' . $postId;
$uri2 = $tikilib->httpPrefix(). $parts['path'] . '/' . $blogId . '/' . $postId;
$smarty->assign('uri', $uri);
$smarty->assign('uri2', $uri2);

if (!isset($_REQUEST['offset']))
	$_REQUEST['offset'] = 0;

if (!isset($_REQUEST['sort_mode']))
	$_REQUEST['sort_mode'] = 'created_desc';

if (!isset($_REQUEST['find']))
	$_REQUEST['find'] = '';

$smarty->assign('offset', $_REQUEST["offset"]);
$smarty->assign('sort_mode', $_REQUEST["sort_mode"]);
$smarty->assign('find', $_REQUEST["find"]);
$offset = $_REQUEST["offset"];
$sort_mode = $_REQUEST["sort_mode"];
$find = $_REQUEST["find"];

//print(htmlspecialchars($post_info["data"]));
$parsed_data = $tikilib->parse_data($post_info["data"]);
//print(htmlspecialchars($parsed_data));

if (!isset($_REQUEST['page']))
	$_REQUEST['page'] = 1;

$pages = $bloglib->get_number_of_pages($parsed_data);
$parsed_data = $bloglib->get_page($parsed_data, $_REQUEST['page']);
$smarty->assign('pages', $pages);

if ($pages > $_REQUEST['page']) {
	$smarty->assign('next_page', $_REQUEST['page'] + 1);
} else {
	$smarty->assign('next_page', $_REQUEST['page']);
}

if ($_REQUEST['page'] > 1) {
	$smarty->assign('prev_page', $_REQUEST['page'] - 1);
} else {
	$smarty->assign('prev_page', 1);
}

$smarty->assign('first_page', 1);
$smarty->assign('last_page', $pages);
$smarty->assign('pagenum', $_REQUEST['page']);

$smarty->assign('parsed_data', $parsed_data);

if ($feature_blogposts_comments == 'y') {
	$comments_per_page = $blog_comments_per_page;

	$comments_default_ordering = $blog_comments_default_ordering;
	$comments_vars = array(
		'postId',
		'offset',
		'find',
		'sort_mode',
		'blogId'
	);

	$comments_prefix_var = 'post:';
	$comments_object_var = 'postId';
	include_once ("comments.php");
}

$cat_type = 'blog';
$cat_objid = $blogId;
include_once ('tiki-section_options.php');


if ($user && $tiki_p_notepad == 'y' && $feature_notepad == 'y' && isset($_REQUEST['savenotepad'])) {
	check_ticket('view-blog-post');
	$tikilib->replace_note($user,
		0, $post_info['title'] ? $post_info['title'] : date("d/m/Y [h:i]", $post_info['created']), $post_info['data']);
}

if ($feature_mobile == 'y' && isset($_REQUEST['mode']) && $_REQUEST['mode'] == 'mobile') {
	include_once ("lib/hawhaw/hawtikilib.php");

	HAWTIKI_view_blog_post ($post_info);
}

if (isset($_REQUEST['show_comments']) && $_REQUEST['show_comments'] == 1) {
        $smarty->assign('show_comments', 1);
}

if ($feature_freetags == 'y') {
	// Get Tags
	include_once('lib/freetag/freetaglib.php');
	$tags = $freetaglib->get_tags_on_object($postId, "blog post");
	$smarty->assign('tags', $tags);
}

ask_ticket('view-blog-post');

// Display the template
$smarty->assign('mid', 'tiki-view_blog_post.tpl');
$smarty->display("tiki.tpl");

function htmldecode($string) {
   $string = strtr($string, array_flip(get_html_translation_table(HTML_ENTITIES)));
   $string = preg_replace("/&#([0-9]+);/me", "chr('\\1')", $string);
   return $string;
}

?>
