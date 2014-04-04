<!-- Block Viewed products -->
<div id="viewed-products_block_left" class="block products_block">
    <div class="frame_wrap frame_wrap_header clearfix">
        <div class="fwh-title">{l s='Viewed products' mod='blockviewed'}</div>
    </div>
    <div class="frame_wrap frame_wrap_content">
        <ul class="products clearfix">
            {foreach from=$productsViewedObj item=viewedProduct name=myLoop}
            <li class="clearfix{if $smarty.foreach.myLoop.last} last_item{elseif $smarty.foreach.myLoop.first} first_item{else} item{/if}">
                <a href="{$viewedProduct->product_link}" title="{l s='More about' mod='blockviewed'} {$viewedProduct->name|escape:html:'UTF-8'}" class="content_img">
                <img src="{if isset($viewedProduct->id_image) && $viewedProduct->id_image}{$link->getImageLink($viewedProduct->link_rewrite, $viewedProduct->cover, 'home_default')}{else}{$img_prod_dir}{$lang_iso}-default-home_default.jpg{/if}" alt="{$viewedProduct->legend|escape:html:'UTF-8'}" />
                </a>
                <div class="text_desc">
                    <p class="s_title_block"><a href="{$viewedProduct->product_link}" title="{l s='More about' mod='blockviewed'} {$viewedProduct->name|escape:html:'UTF-8'}">{$viewedProduct->name|truncate:14:'...'|escape:html:'UTF-8'}</a></p>
                    <p><a href="{$viewedProduct->product_link}" title="{l s='More about' mod='blockviewed'} {$viewedProduct->name|escape:html:'UTF-8'}">{$viewedProduct->description_short|strip_tags:'UTF-8'|truncate:44}</a></p>
                </div>
            </li>
            {/foreach}
        </ul>
    </div>
</div>
