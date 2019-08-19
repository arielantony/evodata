<link rel="stylesheet" href="lib/sheet/style.css" type="text/css" />
<h1><a href="tiki-sheets.php" class="pagetitle">{tr}{$title}{/tr}</a></h1>

<div>
{$description}
</div>

{if $tiki_p_view_sheet eq 'y' || $tiki_p_sheet_admin eq 'y' || $tiki_p_admin eq 'y'}
<a href="tiki-sheets.php" class="linkbut">{tr}list sheets{/tr}</a>
{/if}
{if $tiki_p_view_sheet eq 'y' || $tiki_p_sheet_admin eq 'y' || $tiki_p_admin eq 'y'}
<a href="tiki-view_sheets.php?sheetId={$sheetId}" class="linkbut">{tr}view{/tr}</a>
{/if}
{if $tiki_p_edit_sheet eq 'y' || $tiki_p_sheet_admin eq 'y' || $tiki_p_admin eq 'y'}
<a href="tiki-view_sheets.php?sheetId={$sheetId}&readdate={$read_date}&mode=edit" class="linkbut">{tr}edit{/tr}</a>
{/if}
{if $tiki_p_view_sheet_history eq 'y' || $tiki_p_sheet_admin eq 'y' || $tiki_p_admin eq 'y'}
<a href="tiki-history_sheets.php?sheetId={$sheetId}" class="linkbut">{tr}history{/tr}</a>
{/if}
{if $tiki_p_sheet_admin eq 'y' || $tiki_p_admin eq 'y'}
<a href="tiki-import_sheet.php?sheetId={$sheetId}" class="linkbut">{tr}import{/tr}</a>
{/if}
{if $chart_enabled eq 'y'}
<a href="tiki-graph_sheet.php?sheetId={$sheetId}" class="linkbut">{tr}graph{/tr}</a>
{/if}

{if $page_mode eq 'submit'}
{$grid_content}

{else}
	<form method="post" action="tiki-export_sheet.php?mode=export&sheetId={$sheetId}" enctype="multipart/form-data">
		<h2>{tr}Export to file{/tr}</h2>
		{tr}Format{/tr}:
		<select name="handler">
{section name=key loop=$handlers}
			<option value="{$handlers[key].class}">{$handlers[key].name} V. {$handlers[key].version}</option>
{/section}
		</select>
		{tr}Charset encoding{/tr}:
		<select name="encoding">
			<!--<option value="">{tr}Autodetect{/tr}</option>-->
		{section name=key loop=$charsets}
			<option value="{$charsets[key]}">{$charsets[key]}</option>
		{/section}
		</select>
		<input type="submit" value="{tr}Export{/tr}" />
	</form>
{/if}