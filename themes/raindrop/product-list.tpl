{if isset($products)}
    <!-- Products list -->
<div id="product_wrapper" class="grid">
    <div class="row">
    {foreach from=$products item=product name=products}
        <div class="ajax_block_product 
            {if $smarty.foreach.products.first}first_item{elseif $smarty.foreach.products.last}last_item{/if} 
            item clearfix 
            {if !$hide_left_column && !$hide_right_column} {* both column displayed *}
                col-lg-4 col-md-6 col-sm-4 col-xs-6
            {else} {* only one column displayed *}
                col-lg-3 col-sm-4 col-xs-6
            {/if}">
            <div class="cc-product">
                
                <!--product image-->
                <a href="{$product.link|escape:'htmlall':'UTF-8'}" class="product_image cc-img" title="{$product.name|escape:'htmlall':'UTF-8'}">
                    <img src="{$link->getImageLink($product.link_rewrite, $product.id_image, 'home_default')}" alt="{$product.legend|escape:'htmlall':'UTF-8'}" {if isset($homeSize)} width="{$homeSize.width}" height="{$homeSize.height}"{/if} />
                    {if isset($product.new) && $product.new == 1}<span class="new">{l s='New'}</span>{/if}
                    {* on sale *}
                    {if $product.specific_prices}
                        {assign var='specific_prices' value=$product.specific_prices}
                        {if $specific_prices.reduction_type == 'percentage' && ($specific_prices.from == $specific_prices.to OR ($smarty.now|date_format:'%Y-%m-%d %H:%M:%S' <= $specific_prices.to && $smarty.now|date_format:'%Y-%m-%d %H:%M:%S' >= $specific_prices.from))}
                                <span class="reduction"><span>-{$specific_prices.reduction*100|floatval}%</span></span>
                        {/if}
                    {/if}
                    {* /on sale *}
                </a>
                <!--/product image-->
                
                <div class="cc-foot">
                    <!--product title-->
                    <a href="{$product.link|escape:'htmlall':'UTF-8'}" title="{$product.name|escape:'htmlall':'UTF-8'}" class="cc-title">{$product.name|escape:'htmlall':'UTF-8'|truncate:35:'...'}</a>
                    <!--/product title-->
                    
                    <!--compare checkbox-->
                    <div class="compare_block clearfix">
                        {if isset($comparator_max_item) && $comparator_max_item}
                            <p class="compare">
                                <label for="comparator_item_{$product.id_product}" class="checkbox-inline">
                                <input type="checkbox" class="comparator" id="comparator_item_{$product.id_product}" value="comparator_item_{$product.id_product}" {if isset($compareProducts) && in_array($product.id_product, $compareProducts)}checked="checked"{/if} /> 
                                {l s='Select to compare'}</label>
                            </p>
                        {/if}
                    </div>
                    <!--/compare checkbox-->
                    
                    <!--product price-->
                    <div class="cc-price">
                        {*
                        {if isset($product.on_sale) && $product.on_sale && isset($product.show_price) && $product.show_price && !$PS_CATALOG_MODE}<span class="on_sale">{l s='On sale!'}</span>
                        {elseif isset($product.reduction) && $product.reduction && isset($product.show_price) && $product.show_price && !$PS_CATALOG_MODE}<span class="discount">{l s='Reduced price!'}</span>{/if}
                        *}
                        {if (!$PS_CATALOG_MODE AND ((isset($product.show_price) && $product.show_price) || (isset($product.available_for_order) && $product.available_for_order)))}
                        <div class="content_price">
                            {if isset($product.show_price) && $product.show_price && !isset($restricted_country_mode)}<span class="price" style="display: inline;">{if !$priceDisplay}{convertPrice price=$product.price}{else}{convertPrice price=$product.price_tax_exc}{/if}</span><br />{/if}
                            {* - Availability
                            {if isset($product.available_for_order) && $product.available_for_order && !isset($restricted_country_mode)}<span class="availability">{if ($product.allow_oosp || $product.quantity > 0)}{l s='Available'}{elseif (isset($product.quantity_all_versions) && $product.quantity_all_versions > 0)}{l s='Product available with different options'}{else}{l s='Out of stock'}{/if}</span>{/if}
                            *}
                        </div>
                        {* - Online only
                        {if isset($product.online_only) && $product.online_only}<span class="online_only">{l s='Online only'}</span>{/if}
                        *}
                        {/if}
                        {* - product add to cart button
                        {if ($product.id_product_attribute == 0 || (isset($add_prod_display) && ($add_prod_display == 1))) && $product.available_for_order && !isset($restricted_country_mode) && $product.minimal_quantity <= 1 && $product.customizable != 2 && !$PS_CATALOG_MODE}
                            {if ($product.allow_oosp || $product.quantity > 0)}
                                {if isset($static_token)}
                                    <a class="button ajax_add_to_cart_button exclusive" rel="ajax_id_product_{$product.id_product|intval}" href="{$link->getPageLink('cart',false, NULL, "add=1&amp;id_product={$product.id_product|intval}&amp;token={$static_token}", false)}" title="{l s='Add to cart'}"><span></span>{l s='Add to cart'}</a>
                                {else}
                                    <a class="button ajax_add_to_cart_button exclusive" rel="ajax_id_product_{$product.id_product|intval}" href="{$link->getPageLink('cart',false, NULL, "add=1&amp;id_product={$product.id_product|intval}", false)}" title="{l s='Add to cart'}"><span></span>{l s='Add to cart'}</a>
                                {/if}						
                            {else}
                                <span class="exclusive"><span></span>{l s='Add to cart'}</span><br />
                            {/if}
                        {/if}
                        *}
                        <!--product view button-->
                        <!--<a class="button lnk_view" href="{*$product.link|escape:'htmlall':'UTF-8'}" title="{l s='View'*}">{*l s='View'*}</a>-->
                        <!--/product view button-->
                    </div>
                    <!--/product price-->
                    
                    <div class="prod_desc">
                        <p><a href="{$product.link|escape:'htmlall':'UTF-8'}" title="{$product.description_short|strip_tags:'UTF-8'|truncate:360:'...'}" >{$product.description_short|strip_tags:'UTF-8'|truncate:360:'...'}</a></p>
                    </div>
                    
                    {if ($product.id_product_attribute == 0 || (isset($add_prod_display) && ($add_prod_display == 1))) && $product.available_for_order && !isset($restricted_country_mode) && $product.minimal_quantity <= 1 && $product.customizable != 2 && !$PS_CATALOG_MODE}
                        {if ($product.allow_oosp || $product.quantity > 0)}
                            {if isset($static_token)}
                                <a class="btn ajax_add_to_cart_button exclusive_small" rel="ajax_id_product_{$product.id_product|intval}" href="{$link->getPageLink('cart',false, NULL, "add=1&amp;id_product={$product.id_product|intval}&amp;token={$static_token}", false)}" title="{l s='Add to cart'}"><span></span>{l s='Add to cart'}</a>
                            {else}
                                <a class="btn ajax_add_to_cart_button exclusive_small" rel="ajax_id_product_{$product.id_product|intval}" href="{$link->getPageLink('cart',false, NULL, "add=1&amp;id_product={$product.id_product|intval}", false)}" title="{l s='Add to cart'}"><span></span>{l s='Add to cart'}</a>
                            {/if}						
                        {else}
                            <span class="btn exclusive_small"><span></span>{l s='Add to cart'}</span>
                        {/if}
                    {/if}
                    {if $logged && isset($cookie->add_to_wishlist_category) && $cookie->add_to_wishlist_category }
                    <a href="#" class="add_wishlist_button" onclick="WishlistCart('wishlist_block_top_list', 'add', '{$product.id_product|intval}', {$product.id_product_attribute|intval}, 1); return false;" title="{l s='Add to my wishlist'}">{l s='Add to my wishlist'}</a>
                    {/if}
                        
                </div>
            </div>
            
            <div class="cc-product-hover">
                {if $logged && isset($cookie->add_to_wishlist_category) && $cookie->add_to_wishlist_category && $cookie->add_to_wishlist_position == 'center' }
                <a href="#" class="add_wishlist_button" onclick="WishlistCart('wishlist_block_top_list', 'add', '{$product.id_product|intval}', {$product.id_product_attribute|intval}, 1); return false;" title="{l s='Add to my wishlist'}">{l s='Add to my wishlist'}</a>
                {/if}
                <!--product image-->
                <a href="{$product.link|escape:'htmlall':'UTF-8'}" class="product_image" title="{$product.name|escape:'htmlall':'UTF-8'}">
                    <img src="{$link->getImageLink($product.link_rewrite, $product.id_image, 'home_default')}" alt="{$product.legend|escape:'htmlall':'UTF-8'}" {if isset($homeSize)} width="{$homeSize.width}" height="{$homeSize.height}"{/if} />
                    {if isset($product.new) && $product.new == 1}<span class="new">{l s='New'}</span>{/if}
                    {* on sale *}
                    {if $product.specific_prices}
                        {assign var='specific_prices' value=$product.specific_prices}
                        {if $specific_prices.reduction_type == 'percentage' && ($specific_prices.from == $specific_prices.to OR ($smarty.now|date_format:'%Y-%m-%d %H:%M:%S' <= $specific_prices.to && $smarty.now|date_format:'%Y-%m-%d %H:%M:%S' >= $specific_prices.from))}
                                <span class="reduction"><span>-{$specific_prices.reduction*100|floatval}%</span></span>
                        {/if}
                    {/if}
                    {* /on sale *}
                </a>
                <!--/product image-->
                
                <div class="cc-foot">
                    <!--product title-->
                    <a href="{$product.link|escape:'htmlall':'UTF-8'}" title="{$product.name|escape:'htmlall':'UTF-8'}" class="cc-title">{$product.name|escape:'htmlall':'UTF-8'|truncate:35:'...'}</a>
                    <!--/product title-->
                    {if ($product.id_product_attribute == 0 || (isset($add_prod_display) && ($add_prod_display == 1))) && $product.available_for_order && !isset($restricted_country_mode) && $product.minimal_quantity <= 1 && $product.customizable != 2 && !$PS_CATALOG_MODE}
                        {if ($product.allow_oosp || $product.quantity > 0)}
                            {if isset($static_token)}
                                <a class="btn exclusive_small ajax_add_to_cart_button" rel="ajax_id_product_{$product.id_product|intval}" href="{$link->getPageLink('cart',false, NULL, "add=1&amp;id_product={$product.id_product|intval}&amp;token={$static_token}", false)}" title="{l s='Add to cart'}"><span></span>{l s='Add to cart'}</a>
                            {else}
                                <a class="btn exclusive_small ajax_add_to_cart_button" rel="ajax_id_product_{$product.id_product|intval}" href="{$link->getPageLink('cart',false, NULL, "add=1&amp;id_product={$product.id_product|intval}", false)}" title="{l s='Add to cart'}"><span></span>{l s='Add to cart'}</a>
                            {/if}						
                        {else}
                            <span class="btn exclusive_small"><span></span>{l s='Add to cart'}</span>
                        {/if}
                    {/if}
                    {if $logged && isset($cookie->add_to_wishlist_category) && $cookie->add_to_wishlist_category && $cookie->add_to_wishlist_position == 'bottom' }
                    <a href="#" class="add_wishlist_button" onclick="WishlistCart('wishlist_block_top_list', 'add', '{$product.id_product|intval}', {$product.id_product_attribute|intval}, 1); return false;" title="{l s='Add to my wishlist'}">{l s='Add to my wishlist'}</a>
                    {/if}
                    <!--product price-->
                    <div class="cc-price">
                        {*
                        {if isset($product.on_sale) && $product.on_sale && isset($product.show_price) && $product.show_price && !$PS_CATALOG_MODE}<span class="on_sale">{l s='On sale!'}</span>
                        {elseif isset($product.reduction) && $product.reduction && isset($product.show_price) && $product.show_price && !$PS_CATALOG_MODE}<span class="discount">{l s='Reduced price!'}</span>{/if}
                        *}
                        {if (!$PS_CATALOG_MODE AND ((isset($product.show_price) && $product.show_price) || (isset($product.available_for_order) && $product.available_for_order)))}
                        <div class="content_price">
                            {if isset($product.show_price) && $product.show_price && !isset($restricted_country_mode)}<span class="price" style="display: inline;">{if !$priceDisplay}{convertPrice price=$product.price}{else}{convertPrice price=$product.price_tax_exc}{/if}</span><br />{/if}
                        </div>
                        {/if}
                        <!--compare checkbox-->
                        <div class="compare_block clearfix">
                            {if isset($comparator_max_item) && $comparator_max_item}
                                <p class="compare">
                                    <label for="comparator_item_{$product.id_product}" class="checkbox-inline">
                                    <input type="checkbox" class="comparator" id="comparator_item_{$product.id_product}" value="comparator_item_{$product.id_product}" {if isset($compareProducts) && in_array($product.id_product, $compareProducts)}checked="checked"{/if} /> 
                                    {l s='Select to compare'}</label>
                                </p>
                            {/if}
                        </div>
                        <!--/compare checkbox-->
                    </div>
                    <!--/product price-->
                </div>
                
            </div>
            
                {* - product description
                <p class="product_desc"><a href="{$product.link|escape:'htmlall':'UTF-8'}" title="{$product.description_short|strip_tags:'UTF-8'|truncate:360:'...'}" >{$product.description_short|strip_tags:'UTF-8'|truncate:360:'...'}</a></p>
                *}
        </div>
        {if $product@last}<div class="clearfix clearRow"></div>{/if}{* clearRow at last item *}
        {if !$hide_left_column && !$hide_right_column} {* both column displayed *}
            {if $product@iteration%3==0 && !$product@last}<div class="clearfix clearRow {bsvisible val=true media='lg'} {bsvisible val=true media='sm'}"></div>{/if}{* lg & sm clearRow at 3 items *}
            {if $product@iteration%2==0 && !$product@last}<div class="clearfix clearRow {bsvisible val=true media='md'} {bsvisible val=true media='xs'}"></div>{/if}{* sm & md clearRow at 3 items *}
        {else} {* only one column displayed *}
            {if $product@iteration%4==0 && !$product@last}<div class="clearfix clearRow {bsvisible val=true media='lg'}"></div>{/if}{* lg clearRow at 4 items *}
            {if $product@iteration%3==0 && !$product@last}<div class="clearfix clearRow {bsvisible val=true media='md'} {bsvisible val=true media='sm'}"></div>{/if}{* sm & md clearRow at 3 items *}
            {if $product@iteration%2==0 && !$product@last}<div class="clearfix clearRow {bsvisible val=true media='xs'}"></div>{/if}{* lg clearRow at 4 items *}
        {/if}
    {/foreach}
    </div>
</div>
    <!-- /Products list -->
{/if}
