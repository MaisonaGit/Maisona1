<!-- Block manufacturers module -->
<div id="manufacturers_block_home" class="block blockmanufacturer">
    <div class="frame_wrap frame_wrap_header clearfix">
        <div class="fwh-title">
        {if $display_link_manufacturer}<a href="{$link->getPageLink('manufacturer')}" title="{l s='Manufacturers' mod='blockmanufacturer'}">{/if}{l s='Manufacturers' mod='blockmanufacturer'}{if $display_link_manufacturer}</a>{/if}
        </div>
        <div class="fwh-nav">
            <div id="bmc_prev" class="arrow_left"></div>
            <div id="bmc_next" class="arrow_right"></div>
        </div>
    </div>
    <div class="block_content frame_wrap frame_wrap_content">
{if $manufacturers}
    <ul id="bskManufacturersCarousel">
    {foreach $manufacturers as $manufacturer}
        {if $manufacturer@iteration <= $home_nb}
        <li class="{if $manufacturer@last}last_item{elseif $manufacturer@first}first_item{else}item{/if}">
            <a href="{$link->getmanufacturerLink($manufacturer.id_manufacturer, $manufacturer.link_rewrite)}" title="{l s='More about' mod='blockmanufacturer'} {$manufacturer.name}">
                <img src="{$img_manu_dir}{$manufacturer.id_manufacturer}-craftsman_bsk.jpg" />
            </a>
        </li>
        {/if}
    {/foreach}
    </ul>
{else}
    <p>{l s='No manufacturer' mod='blockmanufacturer'}</p>
{/if}
    </div>
</div>
<!-- /Block manufacturers module -->
