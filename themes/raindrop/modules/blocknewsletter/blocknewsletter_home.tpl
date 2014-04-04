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

<!-- Block Newsletter module-->
<div id="newsletter_blue_block" class="col-xs-12 col-lg-4">
    <p class="title_block">{l s='Subscribe to our Newsletter' mod='blocknewsletter'}</p>
    <div class="block_content">
    {if isset($msg) && $msg}
        <div class="alert {if $nw_error}alert-danger{else}alert-success{/if}">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            {$msg}
        </div>
    {/if}
        <form action="{$link->getPageLink('index')}#newsletter_blue_block" method="post">
            <div class="clearfix">
                <div class="col-lg-10 col-lg-offset-0 col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-8 col-xs-offset-2">
                    <input class="form-control" type="text" name="email" size="18" placeholder="{l s='your e-mail' mod='blocknewsletter'}" />
                </div>
                <input type="submit" value="ok" class="button_mini" name="submitNewsletter" />
                <input type="hidden" name="action" value="0" />
            </div>
        </form>
    </div>
</div>
<!-- /Block Newsletter module-->
