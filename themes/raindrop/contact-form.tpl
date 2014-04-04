{capture name=path}{l s='Contact'}{/capture}

<div class="frame_wrap frame_wrap_header clearfix">
    <div class="fwh-title">{l s='Customer service'} - {if isset($customerThread) && $customerThread}{l s='Your reply'}{else}{l s='Contact us'}{/if}</div>
</div>
<div class="frame_wrap frame_wrap_content">
{if isset($confirmation)}
	<p>{l s='Your message has been successfully sent to our team.'}</p>
	<ul class="footer_links">
            <li class="f_right">
                <a class="btn button" href="{$base_dir}">
                    <span class="glyphicon glyphicon-home"></span> {l s='Home'}
                </a>
            </li>
        </ul>
{elseif isset($alreadySent)}
	<p>{l s='Your message has already been sent.'}</p>
	<ul class="footer_links">
            <li class="f_right">
                <a class="btn button" href="{$base_dir}">
                    <span class="glyphicon glyphicon-home"></span> {l s='Home'}
                </a>
            </li>
        </ul>
{else}
	<p class="bold">{l s='For questions about an order or for more information about our products'}.</p>
	{include file="$tpl_dir./errors.tpl"}
	<form action="{$request_uri|escape:'htmlall':'UTF-8'}" method="post" class="std" enctype="multipart/form-data">
            <fieldset class="form-horizontal">
			<h3>{l s='send a message'}</h3>
			<div class="form-group">
                            <label for="id_contact" class="col-lg-4 control-label">{l s='Subject Heading'}</label>
                            <div class="col-lg-5">
			{if isset($customerThread.id_contact)}
				{foreach from=$contacts item=contact}
					{if $contact.id_contact == $customerThread.id_contact}
                                                <input type="text" class="form-control" id="contact_name" name="contact_name" value="{$contact.name|escape:'htmlall':'UTF-8'}" readonly="readonly" />
						<input type="hidden" name="id_contact" value="{$contact.id_contact}" />
					{/if}
				{/foreach}
			
			{else}
                                <select class="form-control" id="id_contact" name="id_contact" onchange="showElemFromSelect('id_contact', 'desc_contact')">
                                        <option value="0">{l s='-- Choose --'}</option>
                                {foreach from=$contacts item=contact}
					<option value="{$contact.id_contact|intval}" {if isset($smarty.request.id_contact) && $smarty.request.id_contact == $contact.id_contact}selected="selected"{/if}>{$contact.name|escape:'htmlall':'UTF-8'}</option>
                                {/foreach}
                                </select>
                            </div>
			</div>
                        <!--
			<p id="desc_contact0" class="desc_contact">&nbsp;</p>
				{foreach from=$contacts item=contact}
					<p id="desc_contact{$contact.id_contact|intval}" class="desc_contact" style="display:none;">
						{$contact.description|escape:'htmlall':'UTF-8'}
					</p>
				{/foreach}
                        -->
			{/if}
			<div class="form-group">
				<label for="email" class="col-lg-4 control-label">{l s='Email address'}</label>
                                <div class="col-lg-5">
				{if isset($customerThread.email)}
                                    <input type="email" class="form-control" id="email" name="from" value="{$customerThread.email|escape:'htmlall':'UTF-8'}" readonly="readonly" />
				{else}
                                    <input type="email" class="form-control" id="email" name="from" value="{$email|escape:'htmlall':'UTF-8'}" />
				{/if}
                                </div>
			</div>
		{if !$PS_CATALOG_MODE}
			{if (!isset($customerThread.id_order) || $customerThread.id_order > 0)}
			<div class="form-group">
				<label for="id_order" class="col-lg-4 control-label">{l s='Order reference'}</label>
                                <div class="col-lg-5">
				{if !isset($customerThread.id_order) && isset($isLogged) && $isLogged == 1}
                                    <select name="id_order" class="form-control">
                                            <option value="0">{l s='-- Choose --'}</option>
                                            {foreach from=$orderList item=order}
                                                    <option value="{$order.value|intval}" {if $order.selected|intval}selected="selected"{/if}>{$order.label|escape:'htmlall':'UTF-8'}</option>
                                            {/foreach}
                                    </select>
				{elseif !isset($customerThread.id_order) && empty($isLogged)}
                                    <input type="text" class="form-control" name="id_order" id="id_order" value="{if isset($customerThread.id_order) && $customerThread.id_order|intval > 0}{$customerThread.id_order|intval}{else}{if isset($smarty.post.id_order) && !empty($smarty.post.id_order)}{$smarty.post.id_order|intval}{/if}{/if}" />
				{elseif $customerThread.id_order|intval > 0}
                                    <input type="text" class="form-control" name="id_order" id="id_order" value="{$customerThread.id_order|intval}" readonly="readonly" />
				{/if}
                                </div>
			</div>
			{/if}
			{if isset($isLogged) && $isLogged}
			<div class="form-group">
                            <label for="id_product" class="col-lg-4 control-label">{l s='Product'}</label>
                            <div class="col-lg-5">
				{if !isset($customerThread.id_product)}
				{foreach from=$orderedProductList key=id_order item=products name=products}
                                    <select name="id_product" class="form-control" id="{$id_order}_order_products" class="product_select" style="width:300px;{if !$smarty.foreach.products.first} display:none; {/if}" {if !$smarty.foreach.products.first}disabled="disabled" {/if}>
                                            <option value="0">{l s='-- Choose --'}</option>
                                            {foreach from=$products item=product}
                                                    <option value="{$product.value|intval}">{$product.label|escape:'htmlall':'UTF-8'}</option>
                                            {/foreach}
                                    </select>
				{/foreach}
				{elseif $customerThread.id_product > 0}
                                    <input type="text" class="form-control" name="id_product" id="id_product" value="{$customerThread.id_product|intval}" readonly="readonly" />
				{/if}
                            </div>
			</div>
			{/if}
		{/if}
		{if $fileupload == 1}
			<div class="form-group">
                            <label for="fileUpload" class="col-lg-4 control-label">{l s='Attach File'}</label>
                            <div class="col-lg-5">
				<input type="hidden" name="MAX_FILE_SIZE" value="2000000" />
				<input type="file" name="fileUpload" id="fileUpload" />
                            </div>
                        </div>
		{/if}
		<div class="form-group">
			<label for="message" class="col-lg-4 control-label">{l s='Message'}</label>
                        <div class="col-lg-5">
                            <textarea class="form-control" id="message" name="message" rows="10" cols="10">{if isset($message)}{$message|escape:'htmlall':'UTF-8'|stripslashes}{/if}</textarea>
                        </div>
		</div>
		<div class="form-group">
                    <div class="col-lg-offset-4 col-lg-5">
			<input type="submit" name="submitMessage" id="submitMessage" value="{l s='Send'}" class="btn button exclusive" onclick="$(this).hide();" />
                    </div>
		</div>
	</fieldset>
</form>
{/if}
</div>
