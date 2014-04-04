{capture name=path}{l s='Order confirmation'}{/capture}
<div class="frame_wrap frame_wrap_header clearfix">
    <div class="fwh-title">{l s='Order confirmation'}</div>
</div>
<div class="frame_wrap frame_wrap_content order_conf">
{assign var='current_step' value='payment'}
{include file="$tpl_dir./order-steps.tpl"}

{include file="$tpl_dir./errors.tpl"}

{$HOOK_ORDER_CONFIRMATION}
{$HOOK_PAYMENT_RETURN}

<br />
{if $is_guest}
	<p>{l s='Your order ID is:'} <span class="bold">{$id_order_formatted}</span> . {l s='Your order ID has been sent via email.'}</p>
        <a class="btn exclusive" href="{$link->getPageLink('guest-tracking', true, NULL, "id_order={$reference_order}&email={$email}")}" title="{l s='Follow my order'}">{l s='Follow my order'}</a>
{else}
        <a class="btn button" href="{$link->getPageLink('history', true)}" title="{l s='Back to orders'}">{l s='Back to orders'}</a>
{/if}
</div>