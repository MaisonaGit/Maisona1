<!-- Block user information module HEADER -->
<div id="header_user">
	<ul id="header_nav">
		{if !$PS_CATALOG_MODE}
		<li id="shopping_cart">
			<a href="{$link->getPageLink($order_process, true)}" title="{l s='View my shopping cart' mod='blockuserinfo'}" rel="nofollow">{l s='Cart: ' mod='blockuserinfo'}
			<span class="ajax_cart_quantity{if $cart_qties == 0} hidden_item{/if}">{$cart_qties}</span>
			<span class="ajax_cart_product_txt{if $cart_qties != 1} hidden_item{/if}">{l s='Product -' mod='blockuserinfo'}</span>
			<span class="ajax_cart_product_txt_s{if $cart_qties < 2} hidden_item{/if}">{l s='Products -' mod='blockuserinfo'}</span>
			<span class="ajax_cart_total{if $cart_qties == 0} hidden_item{/if}">
				{if $cart_qties > 0}
					{if $priceDisplay == 1}
						{assign var='blockuser_cart_flag' value='Cart::BOTH_WITHOUT_SHIPPING'|constant}
						{convertPrice price=$cart->getOrderTotal(false, $blockuser_cart_flag)}
					{else}
						{assign var='blockuser_cart_flag' value='Cart::BOTH_WITHOUT_SHIPPING'|constant}
						{convertPrice price=$cart->getOrderTotal(true, $blockuser_cart_flag)}
					{/if}
				{/if}
			</span>
			<span class="ajax_cart_no_product{if $cart_qties > 0} hidden_item{/if}">{l s='(empty)' mod='blockuserinfo'}</span>
			</a>
		</li>
		{/if}
		<li id="your_account"><a href="{$link->getPageLink('my-account', true)}" title="{l s='View my customer account' mod='blockuserinfo'}" rel="nofollow">{l s='Your Account' mod='blockuserinfo'}</a></li>
	</ul>
</div>
<!-- /Block user information module HEADER -->
