{capture name=path}{l s='Suppliers:'}{/capture}
<div class="frame_wrap frame_wrap_header clearfix" id="supplier_list_page">
    <div class="fwh-title">{l s='Suppliers:'}</div>
    {if isset($errors) AND $errors}
        
    {else}
    <div class="frame_secondary">
        <div>
            {strip}
            {if $nbSuppliers == 0}{l s='There are no suppliers.'}
            {else} 
                {if $nbSuppliers == 1}{l s='There is %d supplier.' sprintf=$nbSuppliers}
                {else}{l s='There are %d suppliers.' sprintf=$nbSuppliers}
                {/if}
            {/if}
            {/strip}
	</div>
    </div>
    {/if}
</div>
<div class="frame_wrap frame_wrap_content">
{if isset($errors) AND $errors}
	{include file="$tpl_dir./errors.tpl"}
{else}
{if $nbSuppliers > 0}
	<ul id="suppliers_list">
	{foreach $suppliers_list as $supplier}
		<li class="clearfix {if $supplier@first}first_item{elseif $supplier@last}last_item{else}item{/if}">
			<div class="left_side">
				<!-- logo -->
				<div class="logo">
				{if $supplier.nb_products > 0}
				<a href="{$link->getsupplierLink($supplier.id_supplier, $supplier.link_rewrite)|escape:'htmlall':'UTF-8'}" title="{$supplier.name|escape:'htmlall':'UTF-8'}">
				{/if}
					<img src="{$img_sup_dir}{$supplier.image|escape:'htmlall':'UTF-8'}-medium_default.jpg" alt="" width="{$mediumSize.width}" height="{$mediumSize.height}" />
				{if $supplier.nb_products > 0}
				</a>
				{/if}
				</div>

				<!-- name -->
				<h3>
					{if $supplier.nb_products > 0}
					<a href="{$link->getsupplierLink($supplier.id_supplier, $supplier.link_rewrite)|escape:'htmlall':'UTF-8'}">
					{/if}
					{$supplier.name|truncate:60:'...'|escape:'htmlall':'UTF-8'}
					{if $supplier.nb_products > 0}
					</a>
					{/if}
				</h3>
				<p class="description">
				{if $supplier.nb_products > 0}
					<a href="{$link->getsupplierLink($supplier.id_supplier, $supplier.link_rewrite)|escape:'htmlall':'UTF-8'}">
				{/if}
						{$supplier.description|escape:'htmlall':'UTF-8'}
				{if $supplier.nb_products > 0}
				</a>
				{/if}
			
				{if $supplier.nb_products > 0}
					<a href="{$link->getsupplierLink($supplier.id_supplier, $supplier.link_rewrite)|escape:'htmlall':'UTF-8'}">
				{/if}
					<span>{if $supplier.nb_products == 1}{l s='%d product' sprintf=$supplier.nb_products|intval}{else}{l s='%d products' sprintf=$supplier.nb_products|intval}{/if}</span>
				{if $supplier.nb_products > 0}
					</a>
				{/if}
				</p>

			</div>

			<div class="right_side">
			{if $supplier.nb_products > 0}
				<a class="button" href="{$link->getsupplierLink($supplier.id_supplier, $supplier.link_rewrite)|escape:'htmlall':'UTF-8'}">{l s='View products'}</a>
			{/if}
			</div>
		</li>
	{/foreach}
	</ul>
	{include file="$tpl_dir./pagination.tpl"}
{/if}
{/if}
</div>