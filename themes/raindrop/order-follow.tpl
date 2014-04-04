{capture name=path}<a href="{$link->getPageLink('my-account', true)}">{l s='My account'}</a><span class="navigation-pipe">{$navigationPipe}</span>{l s='Return Merchandise Authorization (RMA)'}{/capture}
<div class="frame_wrap frame_wrap_header clearfix">
    <div class="fwh-title">{l s='Return Merchandise Authorization (RMA)'}</div>
</div>
<div class="frame_wrap frame_wrap_content clearfix">
{if isset($errorQuantity) && $errorQuantity}<div class="alert alert-danger">{l s='You do not have enough products to request an additional merchandise return.'}</div>{/if}
{if isset($errorMsg) && $errorMsg}
	<div class="alert alert-danger">
		{l s='Please provide an explanation for your RMA.'}
	</div>
	<p>
		<h2>{l s='Please provide an explanation for your RMA:'}</h2>
		<form method="POST"  id="returnOrderMessage">
			<div class="textarea col-lg-8 col-xs-12">
                            <textarea class="form-control" cols="67" rows="3" name="returnText"></textarea>
                        </div>
			{foreach $ids_order_detail as $id_order_detail}
				<input type="hidden" name="ids_order_detail[{$id_order_detail}]" value="{$id_order_detail}"/>
			{/foreach}
			{foreach $order_qte_input as $key => $value}
				<input type="hidden" name="order_qte_input[{$key}]" value="{$value}"/>
			{/foreach}
			<input type="hidden" name="id_order" value="{$id_order}"/>
			<input class="btn button" type="submit" name="submitReturnMerchandise" value="{l s='Make an RMA slip'}"/>
		</form>
	</p>
        <div class="clearfix"></div>
        <br><br>
{/if}
{if isset($errorDetail1) && $errorDetail1}<div class="alert alert-danger">{l s='Please check at least one product you would like to return.'}</div>{/if}
{if isset($errorDetail2) && $errorDetail2}<div class="alert alert-danger">{l s='For each product you wish to add, please specify the desired quantity.'}</div>{/if}
{if isset($errorNotReturnable) && $errorNotReturnable}<div class="alert alert-danger">{l s='This order cannot be returned.'}</div>{/if}

<p>{l s='Here is a list of pending merchandise returns'}.</p>
<div class="block-center" id="block-history">
	{if $ordersReturn && count($ordersReturn)}
	<table id="order-list" class="std table-vertical">
		<thead>
			<tr>
				<th class="first_item">{l s='Return'}</th>
				<th class="item">{l s='Order'}</th>
				<th class="item">{l s='Package status'}</th>
				<th class="item">{l s='Date issued'}</th>
				<th class="last_item">{l s='Return slip'}</th>
			</tr>
		</thead>
		<tbody>
		{foreach from=$ordersReturn item=return name=myLoop}
                    <tr class="{if $smarty.foreach.myLoop.first}first_item{elseif $smarty.foreach.myLoop.last}last_item{else}item{/if} {if $smarty.foreach.myLoop.index % 2}alternate_item{/if}">
                        <td class="bold">
                            <div class="th">{l s='Return'}</div>
                            <div class="td">
                                <a class="color-myaccount" href="javascript:showOrder(0, {$return.id_order_return|intval}, '{$link->getPageLink('order-return', true)|escape:'html'}');">{l s='#'}{$return.id_order_return|string_format:"%06d"}</a>
                            </div>
                        </td>
                        <td class="history_method">
                            <div class="th">{l s='Order'}</div>
                            <div class="td">
                                <a class="color-myaccount" href="javascript:showOrder(1, {$return.id_order|intval}, '{$link->getPageLink('order-detail', true)|escape:'html'}');">{$return.reference}</a>
                            </div>
                        </td>
                        <td class="history_method">
                            <div class="th">{l s='Package status'}</div>
                            <div class="td">
                                {$return.state_name|escape:'htmlall':'UTF-8'}
                            </div>
                        </td>
                        <td class="bold">
                            <div class="th">{l s='Date issued'}</div>
                            <div class="td">
                                {dateFormat date=$return.date_add full=0}
                            </div>
                        </td>
                        <td class="history_invoice">
                            <div class="th">{l s='Return slip'}</div>
                            <div class="td">
                        {if $return.state == 2}
                                <a href="{$link->getPageLink('pdf-order-return', true, NULL, "id_order_return={$return.id_order_return|intval}")|escape:'html'}" title="{l s='Order return'} {l s='#'}{$return.id_order_return|string_format:"%06d"}"><img src="{$img_dir}icon/pdf.gif" alt="{l s='Order return'} {l s='#'}{$return.id_order_return|string_format:"%06d"}" class="icon" /></a>
                                <a href="{$link->getPageLink('pdf-order-return', true, NULL, "id_order_return={$return.id_order_return|intval}")|escape:'html'}" title="{l s='Order return'} {l s='#'}{$return.id_order_return|string_format:"%06d"}">{l s='Print out'}</a>
                        {else}
                                --
                        {/if}
                            </div>
                        </td>
                    </tr>
		{/foreach}
		</tbody>
	</table>
	<div id="block-order-detail">&nbsp;</div>
	{else}
		<div class="alert alert-warning">
                    <strong>{l s='Warning!'}</strong>
                    {l s='You have no merchandise return authorizations.'}
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
