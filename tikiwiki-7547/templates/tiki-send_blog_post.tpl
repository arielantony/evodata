<h1><a href="tiki-send_blog_post.php?postId={$post_info.postId}" class="pagetitle">{tr}Send blog post{/tr}</a></h2>
<span class="button2"><a class="linkbut" href="tiki-view_blog.php?find={$find}&amp;blogId={$blogId}&amp;offset={$offset}&amp;sort_mode={$sort_mode}">{tr}Return to blog{/tr}</a></span>
<br /><br />
{if $sent eq 'y'}
<h3>{tr}A link to this post was sent to the following addresses:{/tr}</h3>
<div class="wikitext">
{$addresses}
</div>
{else}
	<h3>{tr}Send post to this addresses{/tr}</h3>
	<form method="post" action="tiki-send_blog_post.php">
	<input type="hidden" name="postId" value="{$postId|escape}" />
	<table class="normal">
	<tr>
		<td class="formcolor">{tr}List of email addresses separated by commas{/tr}</td>
		<td class="formcolor"><textarea cols="60" rows="5" name="addresses">{$addresses|escape}</textarea></td>
	</tr>
	<tr>
		<td class="formcolor" colspan="2" style="text-align:center;"><input type="submit" name="send" value="{tr}send{/tr}" /></td>
	</tr>
	</table>
	</form>
{/if}	
<div class="posthead">
<table ><tr><td align="left">
<span class="posthead">
{if $blog_data.use_title eq 'y'}
	{$post_info.title}<br />
	<small> {tr}posted by{/tr} {$post_info.user} on {$post_info.created|tiki_short_datetime}</small>
{else}
	{$post_info.created|tiki_short_datetime}<small> {tr}posted by{/tr} {$post_info.user}</small>
{/if}
</span>
</td><td align="right">
{if ($ownsblog eq 'y') or ($user and $post_info.user eq $user) or $tiki_p_blog_admin eq 'y'}
<a class="blogt" href="tiki-blog_post.php?blogId={$post_info.blogId}&amp;postId={$post_info.postId}"><img border='0' src='pics/icons/page_edit.png' title='{tr}Edit{/tr}' alt='{tr}Edit{/tr}' width='16' height='16' /></a> &nbsp;
<a class="blogt" href="tiki-view_blog.php?blogId={$post_info.blogId}&amp;remove={$post_info.postId}"><img border='0' src='pics/icons/cross.png' title='{tr}Remove{/tr}' alt='{tr}Remove{/tr}' width='16' height='16' /></a>
{/if}
</td></tr></table>
</div>
<div class="postbody">
{$parsed_data}
<hr/>
<table >
<tr><td>
<small>
<a class="link" href="tiki-view_blog_post.php?blogId={$blogId}&amp;postId={$postId}">{tr}Permalink{/tr}</a>
({tr}referenced by{/tr}: {$post_info.trackbacks_from_count} {tr}posts{/tr} {tr}references{/tr}: {$post_info.trackbacks_to_count} {tr}posts{/tr})
{if $allow_comments eq 'y' and $feature_blogposts_comments eq 'y'}
{$listpages[ix].comments} {tr}comments{/tr}
 [<a class="link" href="tiki-view_blog_post.php?find={$find}&amp;blogId={$blogId}&amp;offset={$offset}&amp;sort_mode={$sort_mode}&amp;postId={$listpages[ix].postId}">{tr}view comments{/tr}</a>]
{/if}
</small>
</td><td style='text-align:right'>
<a href='tiki-print_blog_post.php?postId={$postId}'><img src='pics/icons/printer.png' border='0' alt='{tr}print{/tr}' title='{tr}print{/tr}' width='16' height='16' /></a>
<a href='tiki-send_blog_post.php?postId={$postId}'><img src='pics/icons/email.png' border='0' alt='{tr}email this post{/tr}' title='{tr}email this post{/tr}' width='16' height='16' /></a>
</td></tr></table>
</div>
