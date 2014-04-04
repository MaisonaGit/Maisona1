{*
* 2007-2013 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2013 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}

{if count($categoryProducts) > 0 && $categoryProducts !== false}
<div class="blockproductscategory">
    <div class="frame_wrap frame_wrap_header clearfix">
        <div class="fwh-title">{l s='Related Products' mod='productscategory'}</div>
        <!--<div class="fwh-nav">
            <div id="pcrp_prev" class="arrow_left"></div>
            <div id="pcrp_next" class="arrow_right"></div>
        </div>-->
    </div>
    <div id="productscategory" class="frame_wrap frame_wrap_content clearfix">
        <div id="pcrp_prev" class="arrow_left"></div>
        <ul id="productscategory_list">
            {foreach from=$categoryProducts item='categoryProduct' name=categoryProduct}
            <li>
                <a href="{$link->getProductLink($categoryProduct.id_product, $categoryProduct.link_rewrite, $categoryProduct.category, $categoryProduct.ean13)}" class="lnk_img" title="{$categoryProduct.name|htmlspecialchars}"><img src="{$link->getImageLink($categoryProduct.link_rewrite, $categoryProduct.id_image, 'medium_default')}" alt="{$categoryProduct.name|htmlspecialchars}" />
                <p class="product_name">
                    {$categoryProduct.name|truncate:14:'...'|escape:'htmlall':'UTF-8'}
                </p>
                {if $ProdDisplayPrice AND $categoryProduct.show_price == 1 AND !isset($restricted_country_mode) AND !$PS_CATALOG_MODE}
                <p class="price_display">
                    <span class="price">{convertPrice price=$categoryProduct.displayed_price}</span>
                </p>
                {/if}
                </a>
            </li>
            {/foreach}
        </ul>
        <div id="pcrp_next" class="arrow_right"></div>
    </div>
</div>
{/if}
