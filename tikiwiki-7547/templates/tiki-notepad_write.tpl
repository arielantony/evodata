{*Smarty template*}
<h1><a class="pagetitle" href="tiki-notepad_write.php">{tr}Write a note{/tr}</a></h1>
{include file=tiki-mytiki_bar.tpl}

<span class="button2"><a class="linkbut" href="tiki-notepad_list.php">{tr}Notes{/tr}</a></span>
<br /><br />

<form action="tiki-notepad_write.php" method="post">
<input type="hidden" name="noteId" value="{$noteId|escape}" />
<table class="normal">
<tr class="formcolor"><td>{tr}Name{/tr}</td><td><input type="text" name="name" value="{$info.name|escape}" /></td></tr>
{if $feature_wysiwyg eq 'y' and $wysiwyg eq 'y'}
<tr class="formcolor"><td colspan="2">
{editform InstanceName=data Meat=$info.data}
</td></tr>
{else}
<tr class="formcolor"><td>{tr}Data{/tr}</td><td><textarea rows="20" cols="80" name="data">{$info.data|escape}</textarea></td></tr>
{/if}
<tr class="formcolor"><td>&nbsp;</td><td><input type="submit" name="save" value="{tr}save{/tr}" /></td></tr>
</table>
</form>

