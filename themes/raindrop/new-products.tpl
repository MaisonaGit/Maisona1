{capture name=path}{l s='New products'}{/capture}
<div class="frame_wrap frame_wrap_header clearfix">
    <div class="fwh-title">{l s='New products'}</div>
    <div class="frame_secondary clearfix">
        {include file="$tpl_dir./product-views.tpl"}
        <div class="sortPagiBar clearfix">
            {include file="./product-sort.tpl"}
            {include file="./product-compare.tpl"}
            {include file="./nbr-product-page.tpl"}
        </div>
    </div>
</div>
<div class="frame_wrap frame_wrap_content">
{if $products}
	{include file="./product-list.tpl" products=$products}

    {else}
    <p class="alert alert-warning">
        <strong>Warning!</strong>
        {l s='No new products.'}
    </p>
{/if}
</div>