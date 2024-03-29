<h1><a class="pagetitle" href="tiki-notepad_list.php">{tr}Notes{/tr}</a></h1>
{include file=tiki-mytiki_bar.tpl}

<div style="float:right;margin-right:10px;">
<table border='0' cellpadding='0' cellspacing='0'>
<tr><td><small>{tr}quota{/tr}&nbsp;{$percentage}%</small></td><td>
<table border='0' height='10' cellpadding='0' cellspacing='0' width='200' style='background-color:#666666;'>
<tr><td style='background-color:red;' width='{$cellsize}'>&nbsp;</td><td>&nbsp;</td></tr></table>
</td></tr></table>
</div>

<span class="button2"><a class="linkbut" href="tiki-notepad_write.php">{tr}Write a note{/tr}</a></span>
<br /><br />

{if count($channels) > 0}
<h2>{tr}Notes{/tr}</h2>
<table>
<tr><td class="findtable">
   <form method="get" action="tiki-notepad_list.php">
     <input type="text" name="find" value="{$find|escape}" />
     <input type="submit" value="{tr}find{/tr}" name="search" />
     <input type="hidden" name="sort_mode" value="{$sort_mode|escape}" />
   </form>
   </td>
</tr>
</table>
<form action="tiki-notepad_list.php" method="post">
<table class="normal">
<tr>
<td style="text-align:center;" class="heading"><input type="submit" name="delete" value="{tr}x{/tr} " /></td>
<td class="heading" ><a class="tableheading" href="tiki-notepad_list.php?offset={$offset}&amp;sort_mode={if $sort_mode eq 'name_desc'}name_asc{else}name_desc{/if}">{tr}Name{/tr}</a></td>
<td class="heading" ><a class="tableheading" href="tiki-notepad_list.php?offset={$offset}&amp;sort_mode={if $sort_mode eq 'parse_mode_desc'}parse_mode_asc{else}parse_mode_desc{/if}">{tr}Type{/tr}</a></td>
<td class="heading" ><a class="tableheading" href="tiki-notepad_list.php?offset={$offset}&amp;sort_mode={if $sort_mode eq 'created_desc'}created_asc{else}created_desc{/if}">{tr}Created{/tr}</a></td>
<td class="heading" ><a class="tableheading" href="tiki-notepad_list.php?offset={$offset}&amp;sort_mode={if $sort_mode eq 'lastModif_desc'}lastModif_asc{else}lastModif_desc{/if}">{tr}Last Modified{/tr}</a></td>
<td style="text-align:right;" class="heading" >{tr}Size{/tr}</td>
<td style="text-align:right;" class="heading" >&nbsp;</td>
</tr>
{cycle values="odd,even" print=false}
{section name=user loop=$channels}
<tr>
<td style="text-align:center;" class="{cycle advance=false}">
<input type="checkbox" name="note[{$channels[user].noteId}]" />
</td>
<td class="{cycle advance=false}"><a class="link" href="tiki-notepad_read.php?noteId={$channels[user].noteId}">{$channels[user].name}</a></td>
<td class="{cycle advance=false}">{$channels[user].parse_mode}</td>
<td class="{cycle advance=false}">{$channels[user].created|tiki_short_datetime}</td>
<td class="{cycle advance=false}">{$channels[user].lastModif|tiki_short_datetime}</td>
<td style="text-align:right;"  class="{cycle advance=false}">{$channels[user].size|kbsize}</td>
<td style="text-align:right;"  class="{cycle}">
<a href="tiki-notepad_get.php?noteId={$channels[user].noteId}" class="link"><img src="pics/icons/magnifier.png" width="16" height="16" border="0" alt="{tr}view{/tr}" /></a>
<a style="margin-left:10px;" href="tiki-notepad_get.php?noteId={$channels[user].noteId}&amp;save=1" class="link"><img src="pics/icons/disk.png" width="16" height="16" border="0" alt="{tr}save{/tr}" /></a>
</td>
</tr>
{sectionelse}
<tr>
	<td class="formcolor" colspan="4">{tr}No notes yet{/tr}</td>
</tr>
{/section}
<tr>
	<td class="formcolor" colspan="4"><input type="submit" name="merge" value="{tr}merge selected notes into{/tr}" /><input type="text" name="merge_name" size="20" /></td>
</tr>
</table>
</form>
<div class="mini">
<div align="center">
{if $prev_offset >= 0}
[<a class="prevnext" href="tiki-notepad_list.php?find={$find}&amp;offset={$prev_offset}&amp;sort_mode={$sort_mode}">{tr}prev{/tr}</a>]&nbsp;
{/if}
{tr}Page{/tr}: {$actual_page}/{$cant_pages}
{if $next_offset >= 0}
&nbsp;[<a class="prevnext" href="tiki-notepad_list.php?find={$find}&amp;offset={$next_offset}&amp;sort_mode={$sort_mode}">{tr}next{/tr}</a>]
{/if}
{if $direct_pagination eq 'y'}
<br />
{section loop=$cant_pages name=foo}
{assign var=selector_offset value=$smarty.section.foo.index|times:$maxRecords}
<a class="prevnext" href="tiki-notepad_list.php?find={$find}&amp;offset={$selector_offset}&amp;sort_mode={$sort_mode}">
{$smarty.section.foo.index_next}</a>&nbsp;
{/section}
{/if}
</div>
</div>
{/if}

<h2>{tr}Upload file{/tr}</h2>
<form enctype="multipart/form-data" action="tiki-notepad_list.php" method="post">
<table class="normal">
<td class="formcolor">{tr}Upload file{/tr}:</td><td class="formcolor"><input type="hidden" name="MAX_FILE_SIZE" value="10000000000000" /><input size="16" name="userfile1" type="file" /><input style="font-size:9px;" type="submit" name="upload" value="{tr}upload{/tr}" /></td>
</tr>
</table>
</form>
