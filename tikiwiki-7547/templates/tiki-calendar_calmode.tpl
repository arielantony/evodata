<table cellpadding="0" cellspacing="0" border="0" width="100%" id="caltable">
<tr><td width="10px">&nbsp;</td>
{section name=dn loop=$daysnames}
<th class="days" width="14%">{$daysnames[dn]}</td>
{/section}
</tr>
{cycle values="odd,even" print=false}
{section name=w loop=$cell}
<tr><td width="1%" class="weeks">{$weeks[w]}</td>
{section name=d loop=$weekdays}
{if $cell[w][d].focus}
{cycle values="calodd,caleven" print=false advance=false}
{else}
{cycle values="caldark" print=false advance=false}
{/if}
<td class="{cycle}" width="14%">
<div align="center" class="calfocus{if $cell[w][d].day eq $focuscell}on{/if}">
<span style="float:left">
<a href="{$myurl}?todate={$cell[w][d].day}" title="{tr}change focus{/tr}">{$cell[w][d].day|date_format:$short_format_day}</a> {* day is unix timestamp *}
</span>
{if $tiki_p_add_events eq 'y' and count($listcals) > 0}
<a href="tiki-calendar_edit_item.php?todate={$cell[w][d].day}" title="{tr}add item{/tr}" class="addevent">{tr}+{/tr}</a>
{/if}
.<br />
</div>
<div class="calcontent">
{section name=items loop=$cell[w][d].items}
{assign var=over value=$cell[w][d].items[items].over}
{assign var=calendarId value=$cell[w][d].items[items].calendarId}
<span class="calprio{$cell[w][d].items[items].prio}" style="padding:0 2px;color:#666;float:left;">{$cell[w][d].items[items].prio}</span>
<div class="Cal{$cell[w][d].items[items].type} calId{$cell[w][d].items[items].calendarId}">
<a style="padding:0 3px;background-color:#{$infocals.$calendarId.custombgcolor};color:#{$infocals.$calendarId.customfgcolor};"
{if $cell[w][d].items[items].modifiable eq "y" || $cell[w][d].items[items].visible eq 'y'}href="tiki-calendar_edit_item.php?viewcalitemId={$cell[w][d].items[items].calitemId}"{/if} 
{if $calendar_sticky_popup eq "y" and $cell[w][d].items[items].calitemId}{popup sticky=true fullhtml="1" text=$over|escape:"javascript"|escape:"html"}{else}
{popup fullhtml="1" text=$over|escape:"javascript"|escape:"html"}{/if}
class="linkmenu">{$cell[w][d].items[items].name|truncate:$trunc:".."|default:"..."}</a>
{if $cell[w][d].items[items].web}
<a href="{$cell[w][d].items[items].web}" target="_other" class="calweb" title="{$cell[w][d].items[items].web}"><img src="img/icons/external_link.gif" width="7" height="7" alt="&gt;" border="0"/></a>
{/if}
{if $cell[w][d].items[items].nl}
<a href="tiki-newsletters.php?nlId={$cell[w][d].items[items].nl}&info=1" class="calweb" title="Subscribe"><img src="img/icons/external_link.gif" width="7" height="7" alt="&gt;" border="0"/></a>
{/if}
<br />
</div>
{/section}
</div>
</td>
{/section}
</tr>
{/section}
</table>

