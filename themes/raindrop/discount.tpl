{capture name=path}<a href="{$link->getPageLink('my-account', true)}">{l s='My account'}</a><span class="navigation-pipe">{$navigationPipe}</span>{l s='My vouchers'}{/capture}

<div class="frame_wrap frame_wrap_header clearfix">
    <div class="fwh-title">{l s='My vouchers'}</div>
</div>
<div class="frame_wrap frame_wrap_content clearfix">
{if isset($cart_rules) && count($cart_rules) && $nb_cart_rules}
<table class="discount std table_block table-vertical">
	<thead>
		<tr>
			<th class="discount_code first_item">{l s='Code'}</th>
			<th class="discount_description item">{l s='Description'}</th>
			<th class="discount_quantity item">{l s='Quantity'}</th>
			<th class="discount_value item">{l s='Value'}*</th>
			<th class="discount_minimum item">{l s='Minimum'}</th>
			<th class="discount_cumulative item">{l s='Cumulative'}</th>
			<th class="discount_expiration_date last_item">{l s='Expiration date'}</th>
		</tr>
	</thead>
	<tbody>
	{foreach from=$cart_rules item=discountDetail name=myLoop}
		<tr class="{if $smarty.foreach.myLoop.first}first_item{elseif $smarty.foreach.myLoop.last}last_item{else}item{/if} {if $smarty.foreach.myLoop.index % 2}alternate_item{/if}">
			<td class="discount_code">
                            <div class="th">{l s='Code'}</div>
                            <div class="td">{$discountDetail.code}</div>
                        </td>
			<td class="discount_description">
                            <div class="th">{l s='Description'}</div>
                            <div class="td">{$discountDetail.name}</div>
                        </td>
			<td class="discount_quantity">
                            <div class="th">{l s='Quantity'}</div>
                            <div class="td">{$discountDetail.quantity_for_user}</div>
                        </td>
			<td class="discount_value">
                            <div class="th">{l s='Value'}</div>
                            <div class="td">
                                {if $discountDetail.id_discount_type == 1}
					{$discountDetail.value|escape:'htmlall':'UTF-8'}%
				{elseif $discountDetail.id_discount_type == 2}
					{convertPrice price=$discountDetail.value} ({if $discountDetail.reduction_tax == 1}{l s='Tax included'}{else}{l s='Tax excluded'}{/if})
				{elseif $discountDetail.id_discount_type == 3}
					{l s='Free shipping'}
				{else}
					-
				{/if}
                            </div>
			</td>
			<td class="discount_minimum">
                            <div class="th">{l s='Minimum'}</div>
                            <div class="td">
                                {if $discountDetail.minimal == 0}
					{l s='None'}
				{else}
					{convertPrice price=$discountDetail.minimal}
				{/if}
                            </div>
			</td>
			<td class="discount_cumulative">
                            <div class="th">{l s='Cumulative'}</div>
                            <div class="td">
                                {if $discountDetail.cumulable == 1}
					<img src="{$img_dir}icon/yes.gif" alt="{l s='Yes'}" class="icon" /> {l s='Yes'}
				{else}
					<img src="{$img_dir}icon/no.gif" alt="{l s='No'}" class="icon" valign="middle" /> {l s='No'}
				{/if}
                            </div>
			</td>
			<td class="discount_expiration_date">
                            <div class="th">{l s='Expiration date'}</div>
                            <div class="td">{dateFormat date=$discountDetail.date_to}</div>
                            
                        </td>
		</tr>
	{/foreach}
	</tbody>
</table>
{else}
	<div class="alert alert-warning">
            <strong>{l s='Warning!'}</strong>
            {l s='You do not have any vouchers.'}
        </div>
{/if}
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
