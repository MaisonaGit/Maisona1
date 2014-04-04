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

<div id="sloganbox">
<div class="divider">

<hr class="left"/>Les meubles qui s'adaptent à vos envies<hr class="right" />

</div>
</div>

{* display home product tabs *}
</div>
{if isset($hnfs_tabs)}
<ul class="nav nav-tabs frame_wrap_header2">
    {foreach $hnfs_tabs as $tab}
       
        {if $tab=='blocknewproducts'}
        <li>
	<a href="#newproducts_home" data-toggle="tab">{l s='Nouveautés'}</a>
        </li>
        {/if}
        
        {if $tab=='blockspecials' AND !$PS_CATALOG_MODE}
        <li>
            <a href="#special_home" data-toggle="tab">{l s='Specials'}</a>
        </li>
        {/if}

        {if $tab=='homefeatured'}
        <li class="active">
            <a href="#featuredproducts_home" data-toggle="tab">{l s='Meilleures ventes'}</a>
        </li>
        {/if}
    {/foreach}
</ul>
<div class="tab-content frame_wrap_content">
{$HOOK_HOME_NFS}
</div>
{/if}

{$HOOK_HOME}

{if isset($HOOK_BLUE_BLOCK)}
<div class="blue_block clearfix">
{$HOOK_BLUE_BLOCK}
</div>
{/if}
