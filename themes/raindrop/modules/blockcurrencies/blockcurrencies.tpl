<!-- Block currencies module -->
<div id="currencies_block_top">
	<form id="setCurrency" action="{$request_uri}" method="post">
		<div class="currency_top_wrapper">
			<input type="hidden" name="id_currency" id="id_currency" value="" />
			<input type="hidden" name="SubmitCurrency" value="" />
			{*l s='Currency' mod='blockcurrencies'*} <!-- : --> {$currency->sign} {$currency->iso_code}
                        <div class="arrow_down"></div>
		</div>
		<ul id="first-currencies" class="currencies_ul currency_bottom_wrapper">
			{foreach from=$currencies key=k item=f_currency}
                            {*$f_currency|@var_dump*}
                            <li {if $cookie->id_currency == $f_currency.id_currency}class="selected"{/if}>
                                <a href="javascript:setCurrency({$f_currency.id_currency});" title="{$f_currency.name}">{$f_currency.sign} {$f_currency.iso_code}</a				</li>
			{/foreach}
		</ul>
	</form>
</div>
<!-- /Block currencies module -->
