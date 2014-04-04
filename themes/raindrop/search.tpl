{capture name=path}{l s='Search'}{/capture}
<div class="frame_wrap frame_wrap_header clearfix">
    <div class="fwh-title" {if isset($instantSearch) && $instantSearch}id="instant_search_results"{/if}>
    {l s='Search'}&nbsp;{if $nbProducts > 0}"{if isset($search_query) && $search_query}{$search_query|escape:'htmlall':'UTF-8'}{elseif $search_tag}{$search_tag|escape:'htmlall':'UTF-8'}{elseif $ref}{$ref|escape:'htmlall':'UTF-8'}{/if}"{/if}
    </div>
    <div class="frame_secondary clearfix">
        <div class="search_result"><span class="big">{if $nbProducts == 1}{l s='%d result has been found.' sprintf=$nbProducts|intval}{else}{l s='%d results have been found.' sprintf=$nbProducts|intval}{/if}</span></div>
        
        {include file="$tpl_dir./product-views.tpl"}
        {include file="./product-compare.tpl"}
    </div>
</div>
<div class="frame_wrap frame_wrap_content">
{include file="$tpl_dir./errors.tpl"}
{if !$nbProducts}
	<div class="alert">
            <strong>Warning!</strong>
		{if isset($search_query) && $search_query}
			{l s='No results were found for your search'}&nbsp;"{if isset($search_query)}{$search_query|escape:'htmlall':'UTF-8'}{/if}"
		{elseif isset($search_tag) && $search_tag}
			{l s='No results were found for your search'}&nbsp;"{$search_tag|escape:'htmlall':'UTF-8'}"
		{else}
			{l s='Please enter a search keyword'}
		{/if}
	</div>
{else}
	{if !isset($instantSearch) || (isset($instantSearch) && !$instantSearch)}
	<div class="sortPagiBar clearfix">
		{include file="$tpl_dir./product-sort.tpl"}
	</div>
	{/if}
	
	{include file="$tpl_dir./product-list.tpl" products=$search_products}
	{if !isset($instantSearch) || (isset($instantSearch) && !$instantSearch)}{include file="$tpl_dir./pagination.tpl"}{/if}
{/if}
</div> 
