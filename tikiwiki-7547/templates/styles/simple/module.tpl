{* $Header: /cvsroot/tikiwiki/tiki/templates/styles/simple/module.tpl,v 1.5 2006-12-16 12:03:18 mose Exp $*}
{* Module layout with controls *}

<div class="box"><div class="box-title">
{* Draw module controls for logged user only *}
{if $user and $user_assigned_modules == 'y' and $feature_modulecontrols eq 'y'}
  <span class="modcontrols">
    <a class="movemodup" title="{tr}Move module up{/tr}" href="{$current_location}?mc_up={$module_name}"><span>{tr}up{/tr}</span></a>
    <a class="movemoddown" title="{tr}Move module down{/tr}" href="{$current_location}?mc_down={$module_name}"><span>{tr}down{/tr}</span></a>
    <a class="movemodopside" title="{tr}Move module to opposite side{/tr}" href="{$current_location}?mc_move={$module_name}"><span>{tr}left/right{/tr}</span></a>
    <a class="removemod" title="{tr}Unassign module{/tr}" href="{$current_location}?mc_unassign={$module_name}"><span>{tr}remove{/tr}</span></a>
  </span>
{/if}
{if $module_flip eq 'y'}<a href="javascript:toggle('mod-{$module_name|escape}');" style="text-decoration: none"><strong>{$module_title}</strong></a>
{else}<strong>{$module_title}</strong>
{/if}
</div><div class="box-data" id="mod-{$module_name|escape}" style="display: block">
    {$module_content}{$module_error}
</div></div>
