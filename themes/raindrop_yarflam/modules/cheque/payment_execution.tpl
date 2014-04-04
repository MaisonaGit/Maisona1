{capture name=path}{l s='Check payment' mod='cheque'}{/capture}
<div class="frame_wrap frame_wrap_header clearfix">
    <div class="fwh-title">{l s='Order summary' mod='cheque'}</div>
</div>
<div class="frame_wrap frame_wrap_content">
{assign var='current_step' value='payment'}
{include file="$tpl_dir./order-steps.tpl"}

{if isset($nbProducts) && $nbProducts <= 0}
	<div class="alert alert-warning">{l s='Your shopping cart is empty.'}</div>
{else}

<h3>{l s='Check payment' mod='cheque'}</h3>
<form action="{$link->getModuleLink('cheque', 'validation', [], true)}" method="post">
	<p>
		<img src="{$this_path}cheque.jpg" alt="{l s='Check' mod='cheque'}" width="86" height="49" style="float:left; margin: 0px 10px 5px 0px;" />
		{l s='You have chosen to pay by check.' mod='cheque'}
		<br/><br />
		{l s='Here is a short summary of your order:' mod='cheque'}
	</p>
	<p style="margin-top:20px;">
		- {l s='The total amount of your order comes to:' mod='cheque'}
		<span id="amount" class="price">{displayPrice price=$total}</span>
		{if $use_taxes == 1}
			{l s='(tax incl.)' mod='cheque'}
		{/if}
	</p>
	<p>
		-
		{if isset($currencies) && $currencies|@count > 1}
			{l s='We accept several currencies to receive payments by check.' mod='cheque'}
			<br /><br />
			{l s='Choose one of the following:' mod='cheque'}
			<select id="currency_payement" name="currency_payement" onchange="setCurrency($('#currency_payement').val());">
			{foreach from=$currencies item=currency}
				<option value="{$currency.id_currency}" {if isset($currencies) && $currency.id_currency == $cust_currency}selected="selected"{/if}>{$currency.name}</option>
			{/foreach}
			</select>
		{else}
			{l s='We allow the following currencies to be sent by check:' mod='cheque'}&nbsp;<b>{$currencies.0.name}</b>
			<input type="hidden" name="currency_payement" value="{$currencies.0.id_currency}" />
		{/if}
	</p>
	<p>
		{l s='Check owner and address information will be displayed on the next page.' mod='cheque'}
		<br /><br />
		<b>{l s='Please confirm your order by clicking \'I confirm my order\'' mod='cheque'}.</b>
	</p>
	<p class="cart_navigation">
		<input type="submit" name="submit" value="{l s='I confirm my order' mod='cheque'}" class="exclusive btn button" />
		<a href="{$link->getPageLink('order', true, NULL, "step=3")}" class="button btn">{l s='Other payment methods' mod='cheque'}</a>
	</p>
</form>
{/if}
</div>