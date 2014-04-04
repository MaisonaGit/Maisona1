{capture name=path}{l s='Bank-wire payment.' mod='bankwire'}{/capture}
<div class="frame_wrap frame_wrap_header clearfix">
    <div class="fwh-title">{l s='Order summary' mod='bankwire'}</div>
</div>
<div class="frame_wrap frame_wrap_content">
{assign var='current_step' value='payment'}
{include file="$tpl_dir./order-steps.tpl"}

{if $nbProducts <= 0}
	<p class="warning">{l s='Your shopping cart is empty.' mod='bankwire'}</p>
{else}

<h3>{l s='Bank-wire payment.' mod='bankwire'}</h3>
<form action="{$link->getModuleLink('bankwire', 'validation', [], true)}" method="post">
<p>
	<img src="{$this_path}bankwire.jpg" alt="{l s='Bank wire' mod='bankwire'}" width="86" height="49" style="float:left; margin: 0px 10px 5px 0px;" />
	{l s='You have chosen to pay by bank wire.' mod='bankwire'}
	<br/><br />
	{l s='Here is a short summary of your order:' mod='bankwire'}
</p>
<p style="margin-top:20px;">
	- {l s='The total amount of your order is' mod='bankwire'}
	<span id="amount" class="price">{displayPrice price=$total}</span>
	{if $use_taxes == 1}
    	{l s='(tax incl.)' mod='bankwire'}
    {/if}
</p>
<p>
	-
	{if $currencies|@count > 1}
		{l s='We allow several currencies to be sent via bank wire.' mod='bankwire'}
		<br /><br />
		{l s='Choose one of the following:' mod='bankwire'}
		<select id="currency_payement" name="currency_payement" onchange="setCurrency($('#currency_payement').val());">
			{foreach from=$currencies item=currency}
				<option value="{$currency.id_currency}" {if $currency.id_currency == $cust_currency}selected="selected"{/if}>{$currency.name}</option>
			{/foreach}
		</select>
	{else}
		{l s='We allow the following currency to be sent via bank wire:' mod='bankwire'}&nbsp;<b>{$currencies.0.name}</b>
		<input type="hidden" name="currency_payement" value="{$currencies.0.id_currency}" />
	{/if}
</p>
<p>
	{l s='Bank wire account information will be displayed on the next page.' mod='bankwire'}
	<br /><br />
	<b>{l s='Please confirm your order by clicking "Place my order."' mod='bankwire'}.</b>
</p>
<p class="cart_navigation">
	<input type="submit" name="submit" value="{l s='Place my order' mod='bankwire'}" class="exclusive btn button" />
	<a href="{$link->getPageLink('order', true, NULL, "step=3")}" class="btn button">{l s='Other payment methods' mod='bankwire'}</a>
</p>
</form>
{/if}
</div>
