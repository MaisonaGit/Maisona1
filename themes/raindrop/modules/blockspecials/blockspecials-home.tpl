<!-- MODULE Block specials -->
<div id="special_home" class="products_block tab-pane">
{if $specials !== false}
    <div class="row">
    {foreach $specials as $product}
        <div class="item col-lg-3 col-sm-4 col-xs-6">
            <div class="cc-product">
                <a href="{$product.link}" title="{$product.name|escape:html:'UTF-8'}" class="product_image">
                    <img src="{$link->getImageLink($product.link_rewrite, $product.id_image, 'home_default')}" height="{$homeSize.height}" width="{$homeSize.width}" alt="{$product.name|escape:html:'UTF-8'}" />
                    {if isset($product.new) && $product.new == 1}<span class="new">{l s='New' mod='blockspecials'}</span>{/if}
                    {if $product.specific_prices}
                        {assign var='specific_prices' value=$product.specific_prices}
                        {if $specific_prices.reduction_type == 'percentage' && ($specific_prices.from == $specific_prices.to OR ($smarty.now|date_format:'%Y-%m-%d %H:%M:%S' <= $specific_prices.to && $smarty.now|date_format:'%Y-%m-%d %H:%M:%S' >= $specific_prices.from))}
                                <span class="reduction"><span>-{$specific_prices.reduction*100|floatval}%</span></span>
                        {/if}
                    {/if}
                </a>
                <div class="cc-foot">
                    <a class="cc-title" href="{$product.link}" title="{$product.name|truncate:50:'...'|escape:'htmlall':'UTF-8'}">{$product.name|truncate:35:'...'|escape:'htmlall':'UTF-8'}</a>
                    {if $product.show_price AND !isset($restricted_country_mode) AND !$PS_CATALOG_MODE}
                        <div class="cc-price">
                        <span class="price-discount">{if !$priceDisplay}{displayWtPrice p=$product.price_without_reduction}{else}{displayWtPrice p=$product['price_without_reduction']}{/if}</span>
                        {if !$priceDisplay}{convertPrice price=$product.price}{else}{convertPrice price=$product.price_tax_exc}{/if}
                        </div>
                    {else}<div style="height:21px;"></div>{/if}
                </div>
            </div>
                    
            <div class="cc-product-hover">
                {if $logged && isset($add_to_wishlist_home) && $add_to_wishlist_home && $add_to_wishlist_position == 'center' }
                <a href="#" class="add_wishlist_button" onclick="WishlistCart('wishlist_block_top_list', 'add', '{$product.id_product|intval}', {$product.id_product_attribute|intval}, 1); return false;" title="{l s='Add to my wishlist' mod='blockspecials'}">{l s='Add to my wishlist' mod='blockspecials'}</a>
                {/if}
                <a href="{$product.link}" title="{$product.name|escape:html:'UTF-8'}" class="product_image">
                    <img src="{$link->getImageLink($product.link_rewrite, $product.id_image, 'home_default')}" height="{$homeSize.height}" width="{$homeSize.width}" alt="{$product.name|escape:html:'UTF-8'}" />
                    {if isset($product.new) && $product.new == 1}<span class="new">{l s='New' mod='blockspecials'}</span>{/if}
                    {if $product.specific_prices}
                        {assign var='specific_prices' value=$product.specific_prices}
                        {if $specific_prices.reduction_type == 'percentage' && ($specific_prices.from == $specific_prices.to OR ($smarty.now|date_format:'%Y-%m-%d %H:%M:%S' <= $specific_prices.to && $smarty.now|date_format:'%Y-%m-%d %H:%M:%S' >= $specific_prices.from))}
                                <span class="reduction"><span>-{$specific_prices.reduction*100|floatval}%</span></span>
                        {/if}
                    {/if}
                    <div class="product_desc">{$product.description_short|strip_tags|truncate:65:'...'}</div>
                </a>
                <div class="cc-foot">
                    <a class="cc-title" href="{$product.link}" title="{$product.name|truncate:50:'...'|escape:'htmlall':'UTF-8'}">{$product.name|truncate:35:'...'|escape:'htmlall':'UTF-8'}</a>
                    
                    {if isset($avgStars)}
                    <div class="cc-rating">
                        {if $avgStars[$product@index]}
                            <img src="{$img_dir}stars/small/stars_{$avgStars[$product@index]}.gif" alt="{$avgStars[$product@index]} stars" />
                        {/if}
                    </div>
                    {/if}
                    
                    {if ($product.id_product_attribute == 0 OR (isset($add_prod_display) AND ($add_prod_display == 1))) AND $product.available_for_order AND !isset($restricted_country_mode) AND $product.minimal_quantity == 1 AND $product.customizable != 2 AND !$PS_CATALOG_MODE}
                        {if ($product.quantity > 0 OR $product.allow_oosp)}
                        <a class="btn exclusive_small ajax_add_to_cart_button" rel="ajax_id_product_{$product.id_product}" href="{$link->getPageLink('cart')}?qty=1&amp;id_product={$product.id_product}&amp;token={$static_token}&amp;add" title="{l s='Add to cart' mod='blockspecials'}">{l s='Add to cart' mod='blockspecials'}</a>
                        {else}
                        <span class="btn exclusive_small">{l s='Add to cart' mod='blockspecials'}</span>
                        {/if}
                    {/if}
                    {if $logged && isset($add_to_wishlist_home) && $add_to_wishlist_home && $add_to_wishlist_position == 'bottom' }
                    <a href="#" class="add_wishlist_button" onclick="WishlistCart('wishlist_block_top_list', 'add', '{$product.id_product|intval}', {$product.id_product_attribute|intval}, 1); return false;" title="{l s='Add to my wishlist' mod='blockspecials'}">{l s='Add to my wishlist' mod='blockspecials'}</a>
                    {/if}
                    
                    {if $product.show_price AND !isset($restricted_country_mode) AND !$PS_CATALOG_MODE}
                        <div class="cc-price">
                        <span class="price-discount">{if !$priceDisplay}{displayWtPrice p=$product.price_without_reduction}{else}{displayWtPrice p=$product['price_without_reduction']}{/if}</span>
                        {if !$priceDisplay}{convertPrice price=$product.price}{else}{convertPrice price=$product.price_tax_exc}{/if}
                        </div>
                    {else}<div style="height:21px;"></div>{/if}
                </div>
            </div>
        </div>
        {if $product@last}<div class="clearfix clearRow"></div>{/if}{* clearRow at last item *}
        {if $product@iteration%4==0 && !$product@last}<div class="clearfix clearRow {bsvisible val=true media='lg'}"></div>{/if}{* lg clearRow at 4 items *}
        {if $product@iteration%3==0 && !$product@last}<div class="clearfix clearRow {bsvisible val=true media='md'} {bsvisible val=true media='sm'}"></div>{/if}{* sm & md clearRow at 3 items *}
        {if $product@iteration%2==0 && !$product@last}<div class="clearfix clearRow {bsvisible val=true media='xs'}"></div>{/if}{* lg clearRow at 4 items *}
    {/foreach}
    </div>
    <center><a href="{$link->getPageLink('prices-drop')}" title="{l s='All specials' mod='blockspecials'}" class="btn button">{l s='All specials' mod='blockspecials'}</a></center>
{else}
    <p>{l s='No specials at this time' mod='blockspecials'}</p>
{/if}
</div>
<!-- /MODULE Block specials -->