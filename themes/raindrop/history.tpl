{capture name=path}<a href="{$link->getPageLink('my-account', true)}">{l s='My account'}</a><span class="navigation-pipe">{$navigationPipe}</span>{l s='Order history'}{/capture}
{include file="$tpl_dir./errors.tpl"}

<div class="frame_wrap frame_wrap_header clearfix">
    <div class="fwh-title">{l s='Order history'}</div>
    <div class="frame_secondary {bsvisible val=false media='xs'}">{l s='Here are the orders you\'ve placed since your account was created.'}.</div>
</div>
<div class="frame_wrap frame_wrap_content clearfix">
{if $slowValidation}
    <div class="alert alert-warning">
        <strong>Warning!</strong>
        {l s='If you have just placed an order, it may take a few minutes for it to be validated. Please refresh this page if your order is missing.'}
    </div>
{/if}

<div class="block-center" id="block-history">
    {if $orders && count($orders)}
    <table id="order-list" class="std table-vertical">
        <thead>
            <tr>
                <th class="first_item">{l s='Order reference'}</th>
                <th class="item">{l s='Date'}</th>
                <th class="item">{l s='Total price'}</th>
                <th class="item">{l s='Payment: '}</th>
                <th class="item">{l s='Status'}</th>
                <th class="item">{l s='Invoice'}</th>
                <th class="last_item {bsvisible val=false media='xs'} {bsvisible val=false media='sm'}" style="width:65px">&nbsp;</th>
            </tr>
        </thead>
        <tbody>
        {foreach from=$orders item=order name=myLoop}
            <tr class="{if $smarty.foreach.myLoop.first}first_item{elseif $smarty.foreach.myLoop.last}last_item{else}item{/if} {if $smarty.foreach.myLoop.index % 2}alternate_item{/if}">
                <td class="history_link bold">
                    <div class="th">{l s='Order reference'}</div>
                    <div class="td">
                        {if isset($order.invoice) && $order.invoice && isset($order.virtual) && $order.virtual}<img src="{$img_dir}icon/download_product.gif" class="icon" alt="{l s='Products to download'}" title="{l s='Products to download'}" />{/if}
                        <a class="color-myaccount" href="javascript:showOrder(1, {$order.id_order|intval}, '{$link->getPageLink('order-detail', true)|escape:'html'}');">{Order::getUniqReferenceOf($order.id_order)}</a>
                    </div>
                </td>
                <td class="history_date bold">
                    <div class="th">{l s='Date'}</div>
                    <div class="td">{dateFormat date=$order.date_add full=0}</div>
                </td>
                <td class="history_price">
                    <div class="th">{l s='Total price'}</div>
                    <div class="td">
                        <span class="price">{displayPrice price=$order.total_paid currency=$order.id_currency no_utf8=false convert=false}</span>
                    </div>
                </td>
                <td class="history_method">
                    <div class="th">{l s='Payment: '}</div>
                    <div class="td">{$order.payment|escape:'htmlall':'UTF-8'}</div>
                </td>
                <td class="history_state">
                    <div class="th">{l s='Status'}</div>
                    <div class="td">{if isset($order.order_state)}{$order.order_state|escape:'htmlall':'UTF-8'}{/if}</div>
                </td>
                <td class="history_invoice last_row">
                    <div class="th">{l s='Invoice'}</div>
                    <div class="td">
                        {if (isset($order.invoice) && $order.invoice && isset($order.invoice_number) && $order.invoice_number) && isset($invoiceAllowed) && $invoiceAllowed == true}
                        <a href="{$link->getPageLink('pdf-invoice', true, NULL, "id_order={$order.id_order}")|escape:'html'}" title="{l s='Invoice'}" class="_blank"><img src="{$img_dir}icon/pdf.gif" alt="{l s='Invoice'}" class="icon" /></a>
                        <a href="{$link->getPageLink('pdf-invoice', true, NULL, "id_order={$order.id_order}")|escape:'html'}" title="{l s='Invoice'}" class="_blank">{l s='PDF'}</a>
                        {else}-{/if}
                    </div>
                </td>
                <td class="history_detail {bsvisible val=false media='xs'} {bsvisible val=false media='sm'}">
                    <a class="color-myaccount" href="javascript:showOrder(1, {$order.id_order|intval}, '{$link->getPageLink('order-detail', true)|escape:'html'}');">{l s='details'}</a>
                    {if isset($opc) && $opc}
                    <a href="{$link->getPageLink('order-opc', true, NULL, "submitReorder&id_order={$order.id_order}")|escape:'html'}" title="{l s='Reorder'}">
                    {else}
                    <a href="{$link->getPageLink('order', true, NULL, "submitReorder&id_order={$order.id_order}")|escape:'html'}" title="{l s='Reorder'}">
                    {/if}
                        <img src="{$img_dir}arrow_rotate_anticlockwise.png" alt="{l s='Reorder'}" title="{l s='Reorder'}" class="icon" />
                    </a>
                </td>
            </tr>
        {/foreach}
        </tbody>
    </table>
    <div id="block-order-detail">&nbsp;</div>
    {else}
            <div class="alert alert-warning">
                <strong>Warning!</strong>
                {l s='You have not placed any orders.'}
            </div>
    {/if}
</div>
</div>

<ul class="footer_links clearfix">
    <li>
        <a class="btn button" href="{$link->getPageLink('my-account', true)|escape:'html'}">
            <span class="glyphicon glyphicon-user"></span> {l s='Back to your account'}
        </a>
    </li>
    <li class="f_right">
        <a class="btn button" href="{$base_dir}">
            <span class="glyphicon glyphicon-home"></span> {l s='Home'}
        </a>
    </li>
</ul>
