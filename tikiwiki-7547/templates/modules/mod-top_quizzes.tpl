{* $Header: /cvsroot/tikiwiki/tiki/templates/modules/mod-top_quizzes.tpl,v 1.9 2005-05-18 11:03:31 mose Exp $ *}

{if $feature_quizzes eq 'y'}
    {if $nonums eq 'y'}
    {eval var="{tr}Top `$module_rows` Quizzes{/tr}" assign="tpl_module_title"}
    {else}
    {eval var="{tr}Top Quizzes{/tr}" assign="tpl_module_title"}
    {/if}

    {tikimodule title=$tpl_module_title name="top_quizzes" flip=$module_params.flip decorations=$module_params.decorations}
    <table  border="0" cellpadding="0" cellspacing="0">
    {section name=ix loop=$modTopQuizzes}
	<tr>{if $nonums != 'y'}<td class="module" valign="top">{$smarty.section.ix.index_next})</td>{/if}
	<td class="module"><a class="linkmodule" href="tiki-take_quiz.php?quizId={$modTopQuizzes[ix].quizId}">{$modTopQuizzes[ix].quizName}</a></td></tr>
    {/section}
    </table>
    {/tikimodule}
{/if}
