{capture name=path}<a href="{$link->getPageLink('my-account', true)}">{l s='My account'}</a><span class="navigation-pipe">{$navigationPipe}</span>{l s='Credit slips'}{/capture}

<div class="frame_wrap frame_wrap_header clearfix">
    <div class="fwh-title">{l s='Credit slips'}</div>
</div>
<div class="frame_wrap frame_wrap_content clearfix">
<p>{l s='Credit slips you have received after cancelled orders'}.</p>
<div class="block-center" id="block-history">
    {if $ordersSlip && count($ordersSlip)}
    <table id="order-list" class="std">
            <thead>
                    <tr>
                            <th class="first_item">{l s='Credit slip'}</th>
                            <th class="item">{l s='Order'}</th>
                            <th class="item">{l s='Date issued'}</th>
                            <th class="last_item">{l s='View credit slip'}</th>
                    </tr>
            </thead>
            <tbody>
            {foreach from=$ordersSlip item=slip name=myLoop}
                    <tr class="{if $smarty.foreach.myLoop.first}first_item{elseif $smarty.foreach.myLoop.last}last_item{else}item{/if} {if $smarty.foreach.myLoop.index % 2}alternate_item{/if}">
                            <td class="bold"><span class="color-myaccount">{l s='#%s' sprintf=$slip.id_order_slip|string_format:"%06d"}</span></td>
                            <td class="history_method"><a class="color-myaccount" href="javascript:showOrder(1, {$slip.id_order|intval}, '{$link->getPageLink('order-detail')}');">{l s='#%s' sprintf=$slip.id_order|string_format:"%06d"}</a></td>
                            <td class="bold">{dateFormat date=$slip.date_add full=0}</td>
                            <td class="history_invoice">
                                    <a href="{$link->getPageLink('pdf-order-slip', true, NULL, "id_order_slip={$slip.id_order_slip|intval}")}" title="{l s='Credit slip'} {l s='#%s' sprintf=$slip.id_order_slip|string_format:"%06d"}"><img src="{$img_dir}icon/pdf.gif" alt="{l s='Order slip'} {l s='#%s' sprintf=$slip.id_order_slip|string_format:"%06d"}" class="icon" /></a>
                                    <a href="{$link->getPageLink('pdf-order-slip', true, NULL, "id_order_slip={$slip.id_order_slip|intval}")}" title="{l s='Credit slip'} {l s='#%s' sprintf=$slip.id_order_slip|string_format:"%06d"}">{l s='PDF'}</a>
                            </td>
                    </tr>
            {/foreach}
            </tbody>
    </table>
    <div id="block-order-detail">&nbsp;</div>
    {else}
        <p class="alert alert-warning">
            <strong>Warning!</strong>
            {l s='You have not received any credit slips.'}
        </p>
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