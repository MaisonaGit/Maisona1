{include file="$tpl_dir./errors.tpl"}

{if !isset($errors) OR !sizeof($errors)}
    <div class="frame_wrap frame_wrap_header clearfix">
	<div class="fwh-title">
            {l s='Products by supplier:'}&nbsp;{$supplier->name|escape:'htmlall':'UTF-8'}
        </div>
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
	{if !empty($supplier->description)}
            <div class="description_box">
                <p>{$supplier->description}</p>
            </div>
	{/if}

	{if $products}
	{include file="./product-list.tpl" products=$products}
        
        {* insert pagination here? *}
	{else}
	<div class="alert alert-warning">
            <strong>Warning!</strong>
            {l s='No products for this supplier.'}
        </div>
	{/if}
    </div>
    <!--pagination-->
    {include file="$tpl_dir./pagination.tpl"}
    <!--/pagination-->
    
{/if}
