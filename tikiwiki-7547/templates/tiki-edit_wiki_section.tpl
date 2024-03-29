{* $Header: /cvsroot/tikiwiki/tiki/templates/tiki-edit_wiki_section.tpl,v 1.2 2006-03-02 15:20:32 sylvieg Exp $ *}
<h1><a href="tiki-edit_wiki_section.php?object={$object|escape:url}&amp;type={$type|escape:url}&amp;pos={$pos}&amp;cell={$cell}">{tr}Edit Section:{/tr}{$title}</a></h1>
<a href="{$referer}" class="linkbut">{tr}View object{/tr}</a>
{if $preview}
{include file='tiki-preview.tpl'}
<br />
{/if}
<form method="post" action="tiki-edit_wiki_section.php" id='editwikiform'>
<table class="normal">
<tr class="formcolor"><td>{tr}Edit{/tr}:<br /><br />
{include file="textareasize.tpl" area_name='editwiki' formId='editwikiform'}<br /><br />
{if $quicktags}{include file=tiki-edit_help_tool.tpl area_name='editwiki'}{/if}
</td><td>
<textarea class="wikiedit" id="editwiki" name="data" rows="{$rows}" cols="{$cols}">{$data|escape}</textarea>
<input type="hidden" name="rows" value="{$rows}"/>
<input type="hidden" name="cols" value="{$cols}"/>
</td></tr>
<tr><td class="formcolor" colspan="3">
<input type="hidden" name="referer" value="{$referer}" />
<input type="hidden" name="title" value="{$title}" />
<input type="hidden" name="object" value="{$object}" />
<input type="hidden" name="type" value="{$type}" />
<input type="hidden" name="pos" value="{$pos}" />
<input type="hidden" name="cell" value="{$cell}" />

<input type="submit" class="wikiaction" name="preview" value="{tr}preview{/tr}" />&nbsp;&nbsp;
<input type="submit" class="wikiaction" name="save" value="{tr}save{/tr}" />&nbsp;&nbsp;
<input type="submit" class="wikiaction" name="cancel_edit" value="{tr}cancel edit{/tr}" />
</td></tr>
</table>
</form>
{if !$wysiwyg}
 {include file=tiki-edit_help.tpl}
{/if}
