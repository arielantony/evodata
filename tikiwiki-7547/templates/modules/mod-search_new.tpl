{* $Header: /cvsroot/tikiwiki/tiki/templates/modules/mod-search_new.tpl,v 1.10 2005-05-18 11:03:30 mose Exp $ *}

{if $feature_search eq 'y'}
{tikimodule title="{tr}Search{/tr}" name="search_new" flip=$module_params.flip decorations=$module_params.decorations}
    <form class="forms" method="get" action="tiki-searchindex.php">
    <input id="fuser" name="highlight" size="14" type="text" accesskey="s" /> {tr}in:{/tr}<br />
    <select name="where">
    <option value="pages">{tr}Entire Site{/tr}</option>
    {if $feature_wiki eq 'y'}
    <option value="wikis">{tr}Wiki Pages{/tr}</option>
    {/if}
    {if $feature_directory eq 'y'}
    <option value="directory">{tr}Directory{/tr}</option>
    {/if}
    {if $feature_galleries eq 'y'}
    <option value="galleries">{tr}Image Gals{/tr}</option>
    <option value="images">{tr}Images{/tr}</option>
    {/if}
    {if $feature_file_galleries eq 'y'}
    <option value="files">{tr}Files{/tr}</option>
    {/if}
    {if $feature_articles eq 'y'}
    <option value="articles">{tr}Articles{/tr}</option>
    {/if}
    {if $feature_forums eq 'y'}
    <option value="forums">{tr}Forums{/tr}</option>
    {/if}
    {if $feature_blogs eq 'y'}
    <option value="blogs">{tr}Blogs{/tr}</option>
    <option value="posts">{tr}Blog Posts{/tr}</option>
    {/if}
    {if $feature_faqs eq 'y'}
    <option value="faqs">{tr}FAQs{/tr}</option>
    {/if}
    {if $feature_trackers eq 'y'}
    <option value="trackers">{tr}Tracker{/tr}</option>
    {/if}
    </select>
    <input type="submit" class="wikiaction" name="search" value="{tr}go{/tr}"/> 
    </form>
{/tikimodule}
{/if}
