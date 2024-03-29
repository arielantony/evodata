{* $Header: /cvsroot/tikiwiki/tiki/templates/tiki-admin_modules.tpl,v 1.40 2006-09-30 16:11:45 ohertel Exp $ *}

<h1><a class="pagetitle" href="tiki-admin_modules.php">{tr}Admin Modules{/tr}</a>
  
{if $feature_help eq 'y'}
<a href="{$helpurl}Modules+Admin" target="tikihelp" class="tikihelp" title="{tr}admin modules{/tr}">
<img border='0' src='pics/icons/help.png' alt="{tr}help{/tr}" width="16" height="16" /></a>{/if}

{if $feature_view_tpl eq 'y'}
<a href="tiki-edit_templates.php?template=tiki-admin_modules.tpl" target="tikihelp" class="tikihelp" title="{tr}View template{/tr}: {tr}admin modules template{/tr}">
<img src="pics/icons/shape_square_edit.png" border="0" width="16" height="16" alt='{tr}edit{/tr}' /></a>{/if}</h1>

<p>
<a class="linkbut" href="#assign">{tr}assign module{/tr}</a>
<a class="linkbut" href="#leftmod">{tr}left modules{/tr}</a>
<a class="linkbut" href="#rightmod">{tr}right modules{/tr}</a>
<a class="linkbut" href="#editcreate">{tr}edit/create{/tr}</a>
<a class="linkbut" href="tiki-admin_modules.php?clear_cache=1">{tr}clear cache{/tr}</a>
</p>

<div class="simplebox">
{tr}
<b>Note 1</b>: if you allow your users to configure modules then assigned
modules won't be reflected in the screen until you configure them
from MyTiki->modules.<br />
<b>Note 2</b>: If you assign modules to groups make sure that you
have turned off the option 'display modules to all groups always'
from Admin->General
{/tr}
</div>
<h2>{tr}User Modules{/tr}</h2>
<table class="normal">
<tr>
<td class="heading">{tr}name{/tr}</td>
<td class="heading">{tr}title{/tr}</td>
<td class="heading">{tr}action{/tr}</td>
</tr>
{cycle print=false values="even,odd"}
{section name=user loop=$user_modules}
<tr>
<td class="{cycle advance=false}">{$user_modules[user].name}</td>
<td class="{cycle advance=false}">{$user_modules[user].title}</td>
<td class="{cycle}"><a class="link" href="tiki-admin_modules.php?um_edit={$user_modules[user].name}#editcreate">{tr}edit{/tr}</a>
             <a class="link" href="tiki-admin_modules.php?edit_assign={$user_modules[user].name}#assign">{tr}assign{/tr}</a>
             <a class="link" href="tiki-admin_modules.php?um_remove={$user_modules[user].name}">{tr}delete{/tr}</a></td>
</tr>
{sectionelse}
<tr><td colspan="6" class="odd">
<b>{tr}No records found{/tr}</b>
</td></tr>
{/section}
</table>
<br />
<a name="assign"></a>
{if $assign_name eq ''}
<h2>{tr}Assign new module{/tr}</h2>
{else}
<h2>{tr}Edit this assigned module:{/tr} {$assign_name}</h2>
<a href="tiki-admin_modules.php" class="linkbut">{tr}Assign new module{/tr}</a>
{/if}
{if $preview eq 'y'}
<br />{tr}Preview{/tr}<br />
{$preview_data}
{/if}
<form method="post" action="tiki-admin_modules.php#assign">
<table class="normal">
<tr><td class="formcolor">{tr}Module Name{/tr}</td><td class="formcolor">
<select name="assign_name">
{section name=ix loop=$all_modules}
<option value="{$all_modules[ix]|escape}" {if $assign_name eq $all_modules[ix] || $assign_selected eq $all_modules[ix]}selected="selected"{/if}>{$all_modules[ix]}</option>
{/section}
</select>
</td></tr>
<!--<tr><td>{tr}Title{/tr}</td><td><input type="text" name="assign_title" value="{$assign_title|escape}" /></td></tr>-->
<tr><td class="formcolor">{tr}Position{/tr}</td><td class="formcolor">
<select name="assign_position">
<option value="l" {if $assign_position eq 'l'}selected="selected"{/if}>{tr}left{/tr}</option>
<option value="r" {if $assign_position eq 'r'}selected="selected"{/if}>{tr}right{/tr}</option>
</select>
</td></tr>
<tr><td class="formcolor">{tr}Order{/tr}</td><td class="formcolor">
<select name="assign_order">
{section name=ix loop=$orders}
<option value="{$orders[ix]|escape}" {if $assign_order eq $orders[ix]}selected="selected"{/if}>{$orders[ix]}</option>
{/section}
</select>
</td></tr>
<tr><td class="formcolor">{tr}Cache Time{/tr} ({tr}secs{/tr})</td><td class="formcolor"><input type="text" name="assign_cache" value="{$assign_cache|escape}" /></td></tr>
<tr><td class="formcolor">{tr}Rows{/tr}</td><td class="formcolor"><input type="text" name="assign_rows" value="{$assign_rows|escape}" /></td></tr>
<tr><td class="formcolor">{tr}Parameters{/tr}</td><td class="formcolor"><input type="text" name="assign_params" value="{$assign_params|escape}" /></td></tr>
<tr><td class="formcolor">{tr}Groups{/tr}</td><td class="formcolor">
<select multiple="multiple" name="groups[]">
{section name=ix loop=$groups}
<option value="{$groups[ix].groupName|escape}" {if $groups[ix].selected eq 'y'}selected="selected"{/if}>{$groups[ix].groupName}</option>
{/section}
</select>
</td></tr>
{if $user_assigned_modules eq 'y'}
<tr><td class="formcolor">{tr}Visibility{/tr}</td><td class="formcolor">
<select name="assign_type">
<option value="d" {if $assign_type eq 'd'}selected="selected"{/if}>{tr}Displayed for the eligible users with no personal assigned modules{/tr}</option>
<option value="D" {if $assign_type eq 'D'}selected="selected"{/if}>{tr}Displayed now for all eligible users even with personal assigned modules{/tr}</option>
<option value="P" {if $assign_type eq 'P'}selected="selected"{/if}>{tr}Displayed now, can't be unassigned{/tr}</option>
<option value="h" {if $assign_type eq 'h'}selected="selected"{/if}>{tr}Not displayed until a user chooses it{/tr}</option>
</select>
</td></tr>
{/if}
<tr><td class="formcolor">&nbsp;</td><td class="formcolor"><input type="submit" name="preview" value="{tr}preview{/tr}"><input type="submit" name="assign" value="{tr}assign{/tr}"></td></tr>
</table>
</form>
<br />
<h2>{tr}Assigned Modules{/tr}</h2>
<a name="leftmod"></a>
<table class="normal">
<caption>{tr}Left Modules{/tr}</caption>
<tr>
<td class="heading">{tr}name{/tr}</td>
<td class="heading">{tr}order{/tr}</td>
<td class="heading">{tr}cache{/tr}</td>
<td class="heading">{tr}rows{/tr}</td>
<td class="heading">{tr}parameters{/tr}</td>
<td class="heading">{tr}groups{/tr}</td>
<td class="heading">{tr}action{/tr}</td>
</tr>
{cycle print=false values="even,odd"}
{section name=user loop=$left}
<tr>
<td class="{cycle advance=false}">{$left[user].name}</td>
<td class="{cycle advance=false}">{$left[user].ord}</td>
<td class="{cycle advance=false}">{$left[user].cache_time}</td>
<td class="{cycle advance=false}">{$left[user].rows}</td>
<td class="{cycle advance=false}">{$left[user].params}</td>
<td class="{cycle advance=false}">{$left[user].module_groups}</td>
<td class="{cycle}">
             <a class="link" href="tiki-admin_modules.php?edit_assign={$left[user].name|escape:url}#assign">{tr}edit{/tr}</a>
             <a class="link" href="tiki-admin_modules.php?modup={$left[user].name|escape:url}#leftmod">{tr}up{/tr}</a>
             <a class="link" href="tiki-admin_modules.php?moddown={$left[user].name|escape:url}#leftmod">{tr}down{/tr}</a>
             <a class="link" href="tiki-admin_modules.php?unassign={$left[user].name|escape:url}#leftmod">{tr}x{/tr}</a></td>
</tr>
{sectionelse}
<tr><td colspan="6">
<b>{tr}No records found{/tr}</b>
</td></tr>
{/section}
</table>
<br />
<br />
<a name="rightmod"></a>
<table class="normal">
<caption>{tr}Right Modules{/tr}</caption>
<tr>
<td class="heading">{tr}name{/tr}</td>
<td class="heading">{tr}order{/tr}</td>
<td class="heading">{tr}cache{/tr}</td>
<td class="heading">{tr}rows{/tr}</td>
<td class="heading">{tr}parameters{/tr}</td>
<td class="heading">{tr}groups{/tr}</td>
<td class="heading">{tr}action{/tr}</td>
</tr>
{cycle print=false values="even,odd"}
{section name=user loop=$right}
<tr>
<td class="{cycle advance=false}">{$right[user].name}</td>
<td class="{cycle advance=false}">{$right[user].ord}</td>
<td class="{cycle advance=false}">{$right[user].cache_time}</td>
<td class="{cycle advance=false}">{$right[user].rows}</td>
<td class="{cycle advance=false}">{$right[user].params}</td>
<td class="{cycle advance=false}">{$right[user].module_groups}</td>
<td class="{cycle}">
             <a class="link" href="tiki-admin_modules.php?edit_assign={$right[user].name|escape:url}#assign">{tr}edit{/tr}</a>
             <a class="link" href="tiki-admin_modules.php?modup={$right[user].name|escape:url}#rightmod">{tr}up{/tr}</a>
             <a class="link" href="tiki-admin_modules.php?moddown={$right[user].name|escape:url}#rightmod">{tr}down{/tr}</a>
             <a class="link" href="tiki-admin_modules.php?unassign={$right[user].name|escape:url}#rightmod">{tr}x{/tr}</a></td>
</tr>
{sectionelse}
<tr><td colspan="6">
<b>{tr}No records found{/tr}</b>
</td></tr>
{/section}
</table>
<br />
<a name="editcreate"></a>
{if $um_name eq ''}
<h2>{tr}Create new user module{/tr}</h2>
{else}
<h2>{tr}Edit this user module:{/tr} {$um_name}</h2>
{/if}
<table class="normal"><tr><td valign="top" class="odd">
	{if $wysiwyg eq 'n'}
		<a class="linkbut" href="tiki-admin_modules.php?wysiwyg=y#editcreate">{tr}Use wysiwyg editor{/tr}</a>
	{else}
		<a class="linkbut" href="tiki-admin_modules.php?wysiwyg=n#editcreate">{tr}Use normal editor{/tr}</a>
	{/if}
{if $um_name ne ''}
<a href="tiki-admin_modules.php#editcreate">{tr}Create new user module{/tr}</a>
{/if}
<form name='editusr' method="post" action="tiki-admin_modules.php">
<table>
<tr><td class="form">{tr}Name{/tr}</td><td><input type="text" name="um_name" value="{$um_name|escape}" /></td></tr>
<tr><td class="form">{tr}Title{/tr}</td><td><input type="text" name="um_title" value="{$um_title|escape}" /></td></tr>
<tr><td class="form">{tr}Data{/tr}</td><td>


<textarea id='usermoduledata' name="um_data" rows="10" cols="40">{$um_data|escape}</textarea>

{if $wysiwyg eq 'y'}
	<script type="text/javascript" src="lib/htmlarea/htmlarea.js"></script>
	<script type="text/javascript" src="lib/htmlarea/htmlarea-lang-en.js"></script>
	<script type="text/javascript" src="lib/htmlarea/dialog.js"></script>
	<style type="text/css">
		@import url(lib/htmlarea/htmlarea.css);
	</style>
	<script defer='defer'>(new HTMLArea(document.forms['editusr']['um_data'])).generate();</script>
{/if}

</td></tr>
<tr><td class="form">{tr}Must be wiki parsed{/tr}</td><td class="form"><input type="checkbox" name="um_parse" value="y" {if $um_parse eq "y"}checked="checked"{/if}/></td></tr>
<tr><td>&nbsp;</td><td><input type="submit" name="um_update" value="{tr}create/edit{/tr}" /></td></tr>
</table>
</form>
</td><td valign="top" class="even">
<h3>{tr}Objects that can be included{/tr}</h3>
<table>
<tr>
  <td class="form">
    {tr}Available polls{/tr}:
  </td>
  <td>
    <select name="polls" id='list_polls'>
	<option value="{literal}{{/literal}poll{literal}}{/literal}">--{tr}Random active poll{/tr}--</option>
	<option value="{literal}{{/literal}poll id=current{literal}}{/literal}">--{tr}Random current poll{/tr}--</option> 
    {section name=ix loop=$polls}
    <option value="{literal}{{/literal}poll id={$polls[ix].pollId}{literal}}{/literal}">{$polls[ix].title}</option>   
    {/section}
    </select>
  </td>
  <td class="form">
    <a class="link" href="javascript:setUserModuleFromCombo('list_polls');">{tr}use poll{/tr}</a>
  </td>
</tr>

<tr>
  <td class="form">
   {tr}Random image from{/tr}:
  </td>
  <td>
   <select name="galleries" id='list_galleries'>
   <option value="{literal}{{/literal}gallery id=-1 showgalleryname=1{literal}}{/literal}">{tr}All galleries{/tr}</option>
   {section name=ix loop=$galleries}
   <option value="{literal}{{/literal}gallery id={$galleries[ix].galleryId} showgalleryname=0{literal}}{/literal}">{$galleries[ix].name}</option>
   {/section}
  </td>
  <td class="form">
   <a class="link" href="javascript:setUserModuleFromCombo('list_galleries');">{tr}use gallery{/tr}</a>
  </td>
</tr>


<tr>
  <td class="form">
    {tr}Dynamic content blocks{/tr}:
  </td>
  <td>
    <select name="contents" id='list_contents'>
    {section name=ix loop=$contents}
    <option value="{literal}{{/literal}content id={$contents[ix].contentId}{literal}}{/literal}">{$contents[ix].description|truncate:20:"...":true}</option>   
    {/section}
    </select>
  </td>
  <td class="form">
    <a class="link" href="javascript:setUserModuleFromCombo('list_contents');">{tr}use dynamic  content{/tr}</a>
  </td>
</tr>
<tr>
  <td class="form">
    {tr}RSS modules{/tr}:
  </td>
  <td>
    <select name="rsss" id='list_rsss'>
    {section name=ix loop=$rsss}
    <option value="{literal}{{/literal}rss id={$rsss[ix].rssId}{literal}}{/literal}">{$rsss[ix].name}</option>   
    {/section}
    </select>
  </td>
  <td class="form">
    <a class="link" href="javascript:setUserModuleFromCombo('list_rsss');">{tr}use rss module{/tr}</a>
  </td>
</tr>

<tr>
  <td class="form">
    {tr}Menus{/tr}:
  </td>
  <td>
    <select name="menus" id='list_menus'>
    {section name=ix loop=$menus}
    <option value="{literal}{{/literal}menu id={$menus[ix].menuId}{literal}}{/literal}">{$menus[ix].name}</option>   
    {/section}
    </select>
  </td>
  <td class="form">
    <a class="link" href="javascript:setUserModuleFromCombo('list_menus');">{tr}use menu{/tr}</a>
  </td>
</tr>

{if $feature_phplayers eq "y"}
<tr>
  <td class="form">
    {tr}phpLayersMenus{/tr}:
  </td>
  <td>
    <select name="phpmenus" id='list_phpmenus'>
    {section name=ix loop=$menus}
    <option value="{literal}{{/literal}phplayers id={$menus[ix].menuId}{literal}}{/literal}">{$menus[ix].name}</option>
    {/section}
    </select>
  </td>
  <td class="form">
    <a class="link" href="javascript:setUserModuleFromCombo('list_phpmenus');">{tr}use phplayermenu{/tr}</a>
  </td>
</tr>
                                                                                                                                                                           
{/if}
<tr>
  <td class="form">
    {tr}Banner zones{/tr}:
  </td>
  <td>
    <select name="banners" id='list_banners'>
    {section name=ix loop=$banners}
    <option value="{literal}{{/literal}banner zone={$banners[ix].zone}{literal}}{/literal}">{$banners[ix].zone}</option>   
    {/section}
    </select>
  </td>
  <td class="form">
    <a class="link" href="javascript:setUserModuleFromCombo('list_banners');">{tr}use banner zone{/tr}</a>
  </td>
</tr>

<tr>
  <td class="form">
    {tr}Wiki{/tr} {tr}Structures{/tr}:
  </td>
  <td>
    <select name=wiki"structures" id='list_wikistructures'>
    {section name=ix loop=$wikistructures}
    <option value="{literal}{{/literal}wikistructure id={$wikistructures[ix].page_ref_id}{literal}}{/literal}">{$wikistructures[ix].pageName}</option>   
    {/section}
    </select>
  </td>
  <td class="form">
    <a class="link" href="javascript:setUserModuleFromCombo('list_wikistructures');">{tr}use{/tr} {tr}wiki{/tr} {tr}structure{/tr}</a>
  </td>
</tr>


</table>
</td></tr></table>
