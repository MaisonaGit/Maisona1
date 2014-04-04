<!-- Block search module TOP -->
<div id="search_block_top">

    <form method="get" action="{$link->getPageLink('search')|escape:'html'}" id="searchbox" role="form">
        <div class="form-group">
            {*<label for="search_query_top"><!-- image on background --></label>*}
            <input type="hidden" name="controller" value="search" />
            <input type="hidden" name="orderby" value="position" />
            <input type="hidden" name="orderway" value="desc" />
            <input class="search_query form-control" type="text" placeholder="{l s='Search' mod='blocksearch'}" id="search_query_top" name="search_query" value="{if isset($smarty.get.search_query)}{$smarty.get.search_query|htmlentities:$ENT_QUOTES:'utf-8'|stripslashes}{/if}" />
            <input type="submit" name="submit_search" value="{l s='Search' mod='blocksearch'}" class="submit_search" />
        </div>
    </form>
</div>
{include file="./blocksearch-instantsearch.tpl"}
<!-- /Block search module TOP -->
