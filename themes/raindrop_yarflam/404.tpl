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
<div class="pagenotfound">
    <div class="frame_wrap frame_wrap_header clearfix">
	<div class="fwh-title">{l s='This page is not available'}</div>
    </div>
    <div class="frame_wrap frame_wrap_content clearfix">
	<p>
		{l s='We\'re sorry, but the Web address you\'ve entered is no longer available.'}
	</p>

	<h3>{l s='To find a product, please type its name in the field below.'}</h3>
	<form action="{$link->getPageLink('search')|escape:'html'}" method="post" id="404-form" class="form-inline clearfix" role="form">
            <div class="form-group col-lg-10 no-gutter-left">
                <label for="search_query" class="sr-only">{l s='Search our product catalog:'}</label>
                <input id="search_query" name="search_query" type="text" class="form-control" placeholder="{l s='Search our product catalog'}"/>
            </div>
            <button type="submit" name="Submit" class="btn btn-default col-lg-2">{l s="Search"}</button>
	</form>
    </div>
</div>