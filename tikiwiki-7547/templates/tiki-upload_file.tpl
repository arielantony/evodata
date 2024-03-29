{* $Header: /cvsroot/tikiwiki/tiki/templates/tiki-upload_file.tpl,v 1.24 2006-12-12 17:57:12 sylvieg Exp $ *}

<h1><a href="tiki-upload_file.php?galleryId={$galleryId}{if $editFileId}&amp;fileId={$editFileId}{/if}" class="pagetitle">{if $editFileId}{tr}Edit File:{/tr} {$fileInfo.filename}{else}{tr}Upload File{/tr}{/if}</a></h1>
{if count($galleries) > 0}
	{if $galleryId}<a href="tiki-list_file_gallery.php?galleryId={$galleryId}" class="linkbut">{tr}Browse file gallery{/tr}</a><br /><br />{/if}

{if !$editFileId}
	<div class="rbox" name="tip">
	<div class="rbox-title" name="tip">{tr}Tip{/tr}</div>  
	<div class="rbox-data" name="tip">{tr}Upload big files (e.g. PodCast files) here:{/tr} <a class="rbox-link" href="tiki-batch_upload_files.php?galleryId={$galleryId}">{tr}Directory batch{/tr}</a></div>
	</div>
	<br /><br />
{/if}

	<div align="center">
	<form enctype="multipart/form-data" action="tiki-upload_file.php" method="post">
	<table class="normal">
	<tr><td class="formcolor">{tr}File Title{/tr}:</td><td class="formcolor"><input type="text" name="name" {if $fileInfo.name}value="{$fileInfo.name}"{/if}/> {if $gal_info.type eq "podcast" or $gal_info.type eq "vidcast"} ({tr}required field for podcasts{/tr}){/if}</td></tr>
	<tr><td class="formcolor">{tr}File Description{/tr}:</td><td class="formcolor"><textarea rows="5" cols="40" name="description">{if $fileInfo.description}{$fileInfo.description}{/if}</textarea> {if $gal_info.type eq "podcast" or $gal_info.type eq "vidcast"} ({tr}required field for podcasts{/tr}){/if}</td></tr>
	{if $editFileId}<input type="hidden" name="galleryId" value="{$galleryId}"/>
	<input type="hidden" name="fileId" value="{$editFileId}"/>{else}
	<tr><td class="formcolor">{tr}File Gallery{/tr}:</td><td class="formcolor"> 
	<select name="galleryId">
	{section name=idx loop=$galleries}
	{if ($galleries[idx].individual eq 'n') or ($galleries[idx].individual_tiki_p_upload_files eq 'y')}
	<option  value="{$galleries[idx].id|escape}" {if $galleries[idx].id eq $galleryId}selected="selected"{/if}>{$galleries[idx].name}</option>
	{/if}
	{/section}
	</select>{/if}</td></tr>
{include file=categorize.tpl}
	<!--<tr><td colspan="2"><b>{tr}Now enter the file URL{/tr}{tr} or upload a local file from your disk{/tr}
	<tr><td class="formcolor">URL:</td><td><input size="50" type="text" name="url" /></td></tr>-->
	<tr><td class="formcolor">	{tr}Upload from disk:{/tr}</td>
	<td class="formcolor">
		<input type="hidden" name="MAX_FILE_SIZE" value="1000000000" />
		{if $editFileId}{$fileInfo.filename|escape}<br />{/if}
		<input name="userfile1" type="file" />
		{if !$editFileId}<input name="userfile2" type="file" />
		<br />
		<input name="userfile3" type="file" />
		<input name="userfile4" type="file" />
		<br />
		<input name="userfile5" type="file" />
		<input name="userfile6" type="file" />{/if}
	</td></tr>

	{if !$editFileId}<tr><td class="formcolor">{tr}Batch upload{/tr}</td><td class="formcolor">
	<input type="checkbox" name="isbatch" /><i>{tr}Unzip all zip files{/tr}</i></td></tr>
	{elseif $fileInfo.lockedby}<tr><td class="formcolor">{tr}Unlock{/tr}</td><td class="formcolor">
	<input type="checkbox" name="unlock" checked="checked"/>{if $user ne $fileInfo.lockedby}{tr}The file is locked by {$fileInfo.lockedby}{/tr}{/if}</td></tr>{/if}

	{if $tiki_p_admin_file_galleries eq 'y'}
	<tr><td class="formcolor">{tr}Creator{/tr}</td><td class="formcolor">
	<select name="user">
	{section name=ix loop=$users}<option value="{$users[ix].login|escape}"{if (isset($fileInfo) and $fileInfo.user eq $users[ix].login) or (!isset($fileInfo) and $user == $users[ix].login)}  selected="selected"{/if}>{$users[ix].login|escape}</option>{/section}
	</select>
	</td></tr>
	{/if}

	{if $feature_file_galleries_author eq 'y'}
	<tr><td class="formcolor">{tr}Author if not the file creator{/tr}</td><td class="formcolor"><input type="text" name="author" value="{$fileInfo.author|escape}" /></td></tr>
	{/if}

	{if $editFileId}<tr><td class="formcolor">{tr}Comment{/tr}</td><td  class="formcolor"><input type="text" name="comment" value="" size="40" /></td></tr>{/if}
	<tr><td class="formcolor">&nbsp;</td><td class="formcolor"><input type="submit" name="upload" value="{if $editFileId}{tr}save{/tr}{else}{tr}upload{/tr}{/if}" /></td></tr>
	</table>
	</form>
	</div>
	<br />
	<hr/>
	{if count($errors) > 0}
		<h3>{tr}Errors detected{/tr}</h3>
		{section name=ix loop=$errors}
			{$errors[ix]}<br />
		{/section}
	{/if}
	
	{if count($uploads) > 0}
		<h3>{tr}The following file was successfully uploaded{/tr}:</h3><br />
		{section name=ix loop=$uploads}
			<div align="center">
				{$uploads[ix].name} ({$uploads[ix].size|kbsize})<br />
				<div class="wikitext">
					{tr}You can download this file using{/tr}: <a class="link" href="{$uploads[ix].$dllink}">{$uploads[ix].dllink}</a><br /><br />
					{tr}You can include the file in an HTML/Tiki page using{/tr}: <textarea cols="60" rows="5">&lt;a href="{$uploads[ix].dllink}"&gt;{$uploads[ix].name} ({$uploads[ix].size|kbsize})&lt;/a&gt;</textarea>
				</div>
			</div>
		{/section}
	{elseif $fileChangedMessage}
	<div align="center">
		<div class="wikitext">
		{$fileChangedMessage}
		</div>
	</div>
	{/if}
{else}
	<a class="linkbut" href="tiki-file_galleries.php">{tr}You have to 
create a gallery first!{/tr}</a>
{/if}


