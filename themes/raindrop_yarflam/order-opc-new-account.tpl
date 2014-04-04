<div id="opc_new_account" class="opc-main-block">
	<div id="opc_new_account-overlay" class="opc-overlay" style="display: none;"></div>
        <div class="frame_wrap frame_wrap_header clearfix">
            <div class="fwh-title"><span>1.</span> {l s='Account'}</div>
        </div>
        <div class="frame_wrap frame_wrap_content">
	<form action="{$link->getPageLink('authentication', true, NULL, "back=order-opc")}" method="post" id="login_form" class="std">
		<fieldset>
                    <div class="alert alert-warning clearfix">
			<h3>{l s='Already registered?'}</h3>
                        <p><a href="#" id="openLoginFormBlock" class="btn button">{l s='Click here'}</a></p>
			<div id="login_form_content" style="display:none;">
				<!-- Error return block -->
				<div id="opc_login_errors" class="error" style="display:none;"></div>
				<!-- END Error return block -->
				<div style="margin-left:40px;margin-bottom:5px;float:left;width:40%;" class="input-group">
					<label for="login_email">{l s='Email address'}</label>
					<input type="text" id="login_email" name="email" class="form-control" />
				</div>
				<div style="margin-left:40px;margin-bottom:5px;float:left;width:40%;">
					<label for="login_passwd">{l s='Password'}</label>
					<input type="password" id="login_passwd" name="login_passwd" class="form-control" />
					<a href="{$link->getPageLink('password', true)}" class="lost_password">{l s='Forgot your password?'}</a>
				</div>
				<p class="submit">
					{if isset($back)}<input type="hidden" class="hidden" name="back" value="{$back|escape:'htmlall':'UTF-8'}" />{/if}
					<input type="submit" id="SubmitLogin" name="SubmitLogin" class="btn button exclusive" value="{l s='Login'}" />
				</p>
			</div>
                    </div>
		</fieldset>
	</form>
	<form action="javascript:;" method="post" id="new_account_form" class="std" autocomplete="on" autofill="on">
		<fieldset class="form-horizontal">
			<h3 id="new_account_title">{l s='New Customer'}</h3>
			<div id="opc_account_choice">
				<div class="opc_float col-lg-6 col-md-6">
					<p class="title_block">{l s='Instant Checkout'}</p>
					<p>
						<input type="button" class="btn button exclusive" id="opc_guestCheckout" value="{l s='Guest checkout'}" />
					</p>
				</div>

				<div class="opc_float col-lg-6 col-md-6">
					<p class="title_block">{l s='Create your account today and enjoy:'}</p>
					<ul class="bullet">
						<li>{l s='Personalized and secure access'}</li>
						<li>{l s='A fast and easy check out process'}</li>
						<li>{l s='Separate billing and shipping addresses'}</li>
					</ul>
					<p>
						<input type="button" class="btn button" id="opc_createAccount" value="{l s='Create an account'}" />
					</p>
				</div>
				<div class="clear"></div>
			</div>
			<div id="opc_account_form">
				{$HOOK_CREATE_ACCOUNT_TOP}
				<script type="text/javascript">
				// <![CDATA[
				idSelectedCountry = {if isset($guestInformations) && $guestInformations.id_state}{$guestInformations.id_state|intval}{else}false{/if};
				{if isset($countries)}
					{foreach from=$countries item='country'}
						{if isset($country.states) && $country.contains_states}
							countries[{$country.id_country|intval}] = new Array();
							{foreach from=$country.states item='state' name='states'}
								countries[{$country.id_country|intval}].push({ldelim}'id' : '{$state.id_state}', 'name' : '{$state.name|escape:'htmlall':'UTF-8'}'{rdelim});
							{/foreach}
						{/if}
						{if $country.need_identification_number}
							countriesNeedIDNumber.push({$country.id_country|intval});
						{/if}	
						{if isset($country.need_zip_code)}
							countriesNeedZipCode[{$country.id_country|intval}] = {$country.need_zip_code};
						{/if}
					{/foreach}
				{/if}
				//]]>
				{literal}
				function vat_number()
				{
					if (($('#company').length) && ($('#company').val() != ''))
						$('#vat_number_block').show();
					else
						$('#vat_number_block').hide();
				}
				function vat_number_invoice()
				{
					if (($('#company_invoice').length) && ($('#company_invoice').val() != ''))
						$('#vat_number_block_invoice').show();
					else
						$('#vat_number_block_invoice').hide();
				}
				$(document).ready(function() {
					$('#company').on('input',function(){
						vat_number();
					});
					$('#company_invoice').on('input',function(){
						vat_number_invoice();
					});
					vat_number();
					vat_number_invoice();
					{/literal}
					$('.id_state option[value={if isset($guestInformations.id_state)}{$guestInformations.id_state|intval}{/if}]').prop('selected', true);
					$('.id_state_invoice option[value={if isset($guestInformations.id_state_invoice)}{$guestInformations.id_state_invoice|intval}{/if}]').prop('selected', true);
					{literal}
				});
				{/literal}
				</script>
				<!-- Error return block -->
				<div id="opc_account_errors" class="error" style="display:none;"></div>
				<!-- END Error return block -->
				<!-- Account -->
				<input type="hidden" id="is_new_customer" name="is_new_customer" value="0" />
				<input type="hidden" id="opc_id_customer" name="opc_id_customer" value="{if isset($guestInformations) && $guestInformations.id_customer}{$guestInformations.id_customer}{else}0{/if}" />
				<input type="hidden" id="opc_id_address_delivery" name="opc_id_address_delivery" value="{if isset($guestInformations) && $guestInformations.id_address_delivery}{$guestInformations.id_address_delivery}{else}0{/if}" />
				<input type="hidden" id="opc_id_address_invoice" name="opc_id_address_invoice" value="{if isset($guestInformations) && $guestInformations.id_address_delivery}{$guestInformations.id_address_delivery}{else}0{/if}" />
                                <div class="form-group required">
                                    <label for="email" class="col-lg-4 col-sm-4 control-label">{l s='Email'} <sup>*</sup></label>
                                    <div class="col-lg-5 col-sm-5">
                                        <input type="text" class="form-control" id="email" name="email" value="{if isset($guestInformations) && $guestInformations.email}{$guestInformations.email}{/if}" />
                                    </div>
                                </div>
                                <div class="form-group required password is_customer_param">
                                    <label for="passwd" class="col-lg-4 col-sm-4 control-label">{l s='Password'} <sup>*</sup></label>
                                    <div class="col-lg-5 col-sm-5">
                                        <input type="password" class="form-control" name="passwd" id="passwd" />
                                        <span class="form_info">{l s='(five characters min.)'}</span>
                                    </div>
                                </div>
                                <div class="form-group" id="titles">
                                    <span class="col-lg-4 col-sm-4 control-label">{l s='Title'}</span>
                                    <div class="col-lg-5 col-sm-5">
                                        {foreach from=$genders key=k item=gender}
                                            <input type="radio" name="id_gender" id="id_gender{$gender->id_gender}" value="{$gender->id_gender}" {if isset($smarty.post.id_gender) && $smarty.post.id_gender == $gender->id_gender}checked="checked"{/if} />
                                            <label for="id_gender{$gender->id_gender}" class="top">{$gender->name}</label>
                                        {/foreach}
                                    </div>
                                </div>
                                <div class="form-group required">
                                    <label for="customer_firstname" class="col-lg-4 col-sm-4 control-label">{l s='First name'} <sup>*</sup></label>
                                    <div class="col-lg-5 col-sm-5">
                                        <input type="text" class="form-control" id="customer_firstname" name="customer_firstname" onblur="$('#firstname').val($(this).val());" value="{if isset($guestInformations) && $guestInformations.customer_firstname}{$guestInformations.customer_firstname}{/if}" />
                                    </div>
                                </div>
				{*<p class="required text">
					<label for="lastname">{l s='Last name'} <sup>*</sup></label>
					<input type="text" class="text" id="customer_lastname" name="customer_lastname" onblur="$('#lastname').val($(this).val());" value="{if isset($guestInformations) && $guestInformations.customer_lastname}{$guestInformations.customer_lastname}{/if}" />
				</p>*}
                                <div class="form-group required">
                                    <label for="customer_lastname" class="col-lg-4 col-sm-4 control-label">{l s='Last name'} <sup>*</sup></label>
                                    <div class="col-lg-5 col-sm-5">
                                        <input type="text" class="form-control" id="customer_lastname" name="customer_lastname" onblur="$('#lastname').val($(this).val());" value="{if isset($guestInformations) && $guestInformations.customer_lastname}{$guestInformations.customer_lastname}{/if}" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <span class="col-lg-4 col-sm-4 control-label">{l s='Date of Birth'}</span>
                                    <div class="col-lg-5 col-sm-5">
                                        <select id="days" name="days">
                                                    <option value="">-</option>
                                                    {foreach from=$days item=day}
                                                            <option value="{$day|escape:'htmlall':'UTF-8'}" {if isset($guestInformations) && ($guestInformations.sl_day == $day)} selected="selected"{/if}>{$day|escape:'htmlall':'UTF-8'}&nbsp;&nbsp;</option>
                                                    {/foreach}
                                        </select>
                                        {*
                                                {l s='January'}
                                                {l s='February'}
                                                {l s='March'}
                                                {l s='April'}
                                                {l s='May'}
                                                {l s='June'}
                                                {l s='July'}
                                                {l s='August'}
                                                {l s='September'}
                                                {l s='October'}
                                                {l s='November'}
                                                {l s='December'}
                                        *}
                                        <select id="months" name="months">
                                            <option value="">-</option>
                                            {foreach from=$months key=k item=month}
                                                    <option value="{$k|escape:'htmlall':'UTF-8'}" {if isset($guestInformations) && ($guestInformations.sl_month == $k)} selected="selected"{/if}>{l s=$month}&nbsp;</option>
                                            {/foreach}
                                        </select>
                                        <select id="years" name="years">
                                                <option value="">-</option>
                                                {foreach from=$years item=year}
                                                        <option value="{$year|escape:'htmlall':'UTF-8'}" {if isset($guestInformations) && ($guestInformations.sl_year == $year)} selected="selected"{/if}>{$year|escape:'htmlall':'UTF-8'}&nbsp;&nbsp;</option>
                                                {/foreach}
                                        </select>
                                    </div>
                                </div>
				{if isset($newsletter) && $newsletter}
                                <div class="form-group">
                                    <div class="col-lg-4 col-sm-4 news_align">
                                        <input type="checkbox" name="newsletter" id="newsletter" value="1" {if isset($guestInformations) && $guestInformations.newsletter}checked="checked"{/if} />
                                    </div>
                                    <div class="col-lg-5 col-sm-5">
                                        <label for="newsletter">{l s='Sign up for our newsletter!'}</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-lg-4 col-sm-4 news_align">
                                        <input type="checkbox" name="optin" id="optin" value="1" {if isset($guestInformations) && $guestInformations.optin}checked="checked"{/if} />
                                    </div>
                                    <div class="col-lg-5 col-sm-5">
                                        <label for="optin">{l s='Receive special offers from our partners!'}</label>
                                    </div>
                                </div>
				{/if}
				<h3>{l s='Delivery address'}</h3>
				{$stateExist = false}
				{$postCodeExist = false}
				{$dniExist = false}
				{foreach from=$dlv_all_fields item=field_name}
				{if $field_name eq "company"}
                                <div class="form-group">
                                    <label for="company" class="col-lg-4 col-sm-4 control-label">{l s='Company'}</label>
                                    <div class="col-lg-5 col-sm-5">
                                        <input type="text" class="form-control" id="company" name="company" value="{if isset($guestInformations) && $guestInformations.company}{$guestInformations.company}{/if}" />
                                    </div>
                                </div>
                                {elseif $field_name eq "vat_number"}	
				<div id="vat_number_block" class="form-group" style="display:none;">
					<label for="vat_number" class="col-lg-4 col-sm-4 control-label">{l s='VAT number'}</label>
                                        <div class="col-lg-5 col-sm-5">
                                            <input type="text" class="form-control" name="vat_number" id="vat_number" value="{if isset($guestInformations) && $guestInformations.vat_number}{$guestInformations.vat_number}{/if}" />
                                        </div>
				</div>
				{elseif $field_name eq "dni"}
				{assign var='dniExist' value=true}
                                <div class="form-group required dni">
                                    <label for="dni" class="col-lg-4 col-sm-4 control-label">{l s='Identification number'}</label>
                                    <div class="col-lg-5 col-sm-5">
                                        <input type="text" class="form-control" name="dni" id="dni" value="{if isset($guestInformations) && $guestInformations.dni}{$guestInformations.dni}{/if}" />
					<span class="help-block">{l s='DNI / NIF / NIE'}</span>
                                    </div>
                                </div>
				{elseif $field_name eq "firstname"}
                                <div class="form-group required">
                                    <label for="firstname" class="col-lg-4 col-sm-4 control-label">{l s='First name'} <sup>*</sup></label>
                                    <div class="col-lg-5 col-sm-5">
                                        <input type="text" class="form-control" id="firstname" name="firstname" value="{if isset($guestInformations) && $guestInformations.firstname}{$guestInformations.firstname}{/if}" />
                                    </div>
                                </div>
				{elseif $field_name eq "lastname"}
                                <div class="form-group required">
                                    <label for="lastname" class="col-lg-4 col-sm-4 control-label">{l s='Last name'} <sup>*</sup></label>
                                    <div class="col-lg-5 col-sm-5">
                                        <input type="text" class="form-control" id="lastname" name="lastname" value="{if isset($guestInformations) && $guestInformations.lastname}{$guestInformations.lastname}{/if}" />
                                    </div>
                                </div>
				{elseif $field_name eq "address1"}
                                <div class="form-group required">
                                    <label for="address1" class="col-lg-4 col-sm-4 control-label">{l s='Address'} <sup>*</sup></label>
                                    <div class="col-lg-5 col-sm-5">
                                        <input type="text" class="form-control" name="address1" id="address1" value="{if isset($guestInformations) && $guestInformations.address1}{$guestInformations.address1}{/if}" />
                                    </div>
                                </div>
				{elseif $field_name eq "address2"}
                                <div class="form-group">
                                    <label for="address2" class="col-lg-4 col-sm-4 control-label">{l s='Address (Line 2)'}</label>
                                    <div class="col-lg-5 col-sm-5">
                                        <input type="text" class="form-control" name="address2" id="address2" value="{if isset($guestInformations) && isset($guestInformations.address2)}{$guestInformations.address2}{/if}" />
                                    </div>
                                </div>
				{elseif $field_name eq "postcode"}
                                <div class="form-group required">
                                    <label for="postcode" class="col-lg-4 col-sm-4 control-label">{l s='Zip / Postal code'} <sup>*</sup></label>
                                    <div class="col-lg-5 col-sm-5">
                                        <input type="text" class="form-control" name="postcode" id="postcode" value="{if isset($guestInformations) && $guestInformations.postcode}{$guestInformations.postcode}{/if}" onkeyup="$('#postcode').val($('#postcode').val().toUpperCase());" />
                                    </div>
                                </div>
				{elseif $field_name eq "city"}
                                <div class="form-group required">
                                    <label for="city" class="col-lg-4 col-sm-4 control-label">{l s='City'} <sup>*</sup></label>
                                    <div class="col-lg-5 col-sm-5">
                                        <input type="text" class="form-control" name="city" id="city" value="{if isset($guestInformations) && $guestInformations.city}{$guestInformations.city}{/if}" />
                                    </div>
                                </div>
				{elseif $field_name eq "country" || $field_name eq "Country:name"}
                                <div class="form-group required">
                                    <label for="id_country" class="col-lg-4 col-sm-4 control-label">{l s='Country'} <sup>*</sup></label>
                                    <div class="col-lg-5 col-sm-5">
                                        <select name="id_country" id="id_country">
						<option value="">-</option>
						{foreach from=$countries item=v}
						<option value="{$v.id_country}" {if (isset($guestInformations) AND $guestInformations.id_country == $v.id_country) OR (!isset($guestInformations) && $sl_country == $v.id_country)} selected="selected"{/if}>{$v.name|escape:'htmlall':'UTF-8'}</option>
						{/foreach}
					</select>
                                    </div>
                                </div>
				{elseif $field_name eq "state" || $field_name eq 'State:name'}
				{$stateExist = true}
                                <div class="form-group required">
                                    <label for="id_state" class="col-lg-4 col-sm-4 control-label">{l s='State'} <sup>*</sup></label>
                                    <div class="col-lg-5 col-sm-5">
                                        <select name="id_state" id="id_state">
						<option value="">-</option>
					</select>
                                    </div>
                                </div>
				{/if}
				{/foreach}
				{if !$postCodeExist}
				<div class="form-group required postcode hidden">
                                    <label for="postcode" class="col-lg-4 col-sm-4 control-label">{l s='Zip / Postal code'} <sup>*</sup></label>
                                    <div class="col-lg-5 col-sm-5">
                                        <input type="text" class="form-control" name="postcode" id="postcode" value="{if isset($guestInformations) && $guestInformations.postcode}{$guestInformations.postcode}{/if}" onkeyup="$('#postcode').val($('#postcode').val().toUpperCase());" />
                                    </div>
                                </div>
				{/if}				
				{if !$stateExist}
                                <div class="form-group id_state hidden">
                                    <label for="id_state" class="col-lg-4 col-sm-4 control-label">{l s='State'} <sup>*</sup></label>
                                    <div class="col-lg-5 col-sm-5">
                                        <select name="id_state" id="id_state">
						<option value="">-</option>
					</select>
                                    </div>
                                </div>
				{/if}
                                {if !$dniExist}
                                <div class="form-group required dni">
                                    <label for="dni" class="col-lg-4 col-sm-4 control-label">{l s='Identification number'}</label>
                                    <div class="col-lg-5 col-sm-5">
                                        <input type="text" class="form-control" name="dni" id="dni" value="{if isset($guestInformations) && $guestInformations.dni}{$guestInformations.dni}{/if}" />
					<span class="help-block">{l s='DNI / NIF / NIE'}</span>
                                    </div>
                                </div>
                                {/if}
                                <div class="form-group is_customer_param">
                                    <label for="other" class="col-lg-4 col-sm-4 control-label">{l s='Additional information'}</label>
                                    <div class="col-lg-5 col-sm-5">
                                        <textarea class="form-control" name="other" id="other" cols="26" rows="3"></textarea>
                                    </div>
                                </div>
				{if $one_phone_at_least}
					<div class="alert alert-warning required is_customer_param">{l s='You must register at least one phone number.'}</div>
				{/if}								
                                <div class="form-group">
                                    <label for="phone" class="col-lg-4 col-sm-4 control-label">{l s='Home phone'}</label>
                                    <div class="col-lg-5 col-sm-5">
                                        <input type="text" class="form-control" name="phone" id="phone" value="{if isset($guestInformations) && $guestInformations.phone}{$guestInformations.phone}{/if}" />
                                    </div>
                                </div>
                                <div class="form-group required">
                                    <label for="phone_mobile" class="col-lg-4 col-sm-4 control-label">{l s='Mobile phone'}{if $one_phone_at_least} <sup>*</sup>{/if}</label>
                                    <div class="col-lg-5 col-sm-5">
                                        <input type="text" class="form-control" name="phone_mobile" id="phone_mobile" value="" />
                                    </div>
                                </div>
				<input type="hidden" name="alias" id="alias" value="{l s='My address'}" />

                                <div class="form-group is_customer_param">
                                    <div class="col-lg-4 col-sm-4 control-label no-pad">
                                        <input type="checkbox" name="invoice_address" id="invoice_address"{if (isset($smarty.post.invoice_address) && $smarty.post.invoice_address) || (isset($guestInformations) && $guestInformations.invoice_address)} checked="checked"{/if} autocomplete="off"/>
                                    </div>
                                    <div class="col-lg-5 col-sm-5">
                                        <label for="invoice_address"><b>{l s='Please use another address for invoice'}</b></label>
                                    </div>
                                </div>

				<div id="opc_invoice_address" class="is_customer_param">
					{assign var=stateExist value=false}
					{assign var=postCodeExist value=false}
					{assign var=dniExist value=false}
					<h3>{l s='Invoice address'}</h3>
					{foreach from=$inv_all_fields item=field_name}
					{if $field_name eq "company" &&  $b2b_enable}
                                        <div class="form-group">
                                            <label for="company_invoice" class="col-lg-4 col-sm-4 control-label">{l s='Company'}</label>
                                            <div class="col-lg-5 col-sm-5">
                                                <input type="text" class="form-control" id="company_invoice" name="company_invoice" value="" />
                                            </div>
                                        </div>
					{elseif $field_name eq "vat_number"}
					<div id="vat_number_block_invoice" class="is_customer_param form-group" style="display:none;">
                                                <label class="col-lg-4 col-sm-4 control-label" for="vat_number_invoice">{l s='VAT number'}</label>
                                                <div class="col-lg-5 col-sm-5">
                                                    <input type="text" class="form-control" id="vat_number_invoice" name="vat_number_invoice" value="" />
                                                </div>
					</div>
                                        {elseif $field_name eq "dni"}
					{assign var='dniExist' value=true}
                                        <div class="form-group required dni_invoice">
                                            <label for="dni_invoice" class="col-lg-4 col-sm-4 control-label">{l s='Identification number'}</label>
                                            <div class="col-lg-5 col-sm-5">
                                                <input type="text" class="form-control" name="dni_invoice" id="dni_invoice" value="{if isset($guestInformations) && $guestInformations.dni_invoice}{$guestInformations.dni_invoice}{/if}" />
						<span class="help-block">{l s='DNI / NIF / NIE'}</span>
                                            </div>
                                        </div>
					{elseif $field_name eq "firstname"}
                                        <div class="form-group required">
                                            <label for="firstname_invoice" class="col-lg-4 col-sm-4 control-label">{l s='First name'} <sup>*</sup></label>
                                            <div class="col-lg-5 col-sm-5">
                                                <input type="text" class="form-control" id="firstname_invoice" name="firstname_invoice" value="{if isset($guestInformations) && $guestInformations.firstname_invoice}{$guestInformations.firstname_invoice}{/if}" />
                                            </div>
                                        </div>
					{elseif $field_name eq "lastname"}
                                        <div class="form-group required">
                                            <label for="lastname_invoice" class="col-lg-4 col-sm-4 control-label">{l s='Last name'} <sup>*</sup></label>
                                            <div class="col-lg-5 col-sm-5">
                                                <input type="text" class="form-control" id="lastname_invoice" name="lastname_invoice" value="{if isset($guestInformations) && $guestInformations.lastname_invoice}{$guestInformations.lastname_invoice}{/if}" />
                                            </div>
                                        </div>
					{elseif $field_name eq "address1"}
                                        <div class="form-group required">
                                            <label for="address1_invoice" class="col-lg-4 col-sm-4 control-label">{l s='Address'} <sup>*</sup></label>
                                            <div class="col-lg-5 col-sm-5">
                                                <input type="text" class="form-control" name="address1_invoice" id="address1_invoice" value="{if isset($guestInformations) && $guestInformations.address1_invoice}{$guestInformations.address1_invoice}{/if}" />
                                            </div>
                                        </div>
					{elseif $field_name eq "address2"}
                                        <div class="form-group">
                                            <label for="address2_invoice" class="col-lg-4 col-sm-4 control-label">{l s='Address (Line 2)'}</label>
                                            <div class="col-lg-5 col-sm-5">
                                                <input type="text" class="form-control" name="address2_invoice" id="address2_invoice" value="{if isset($guestInformations) && $guestInformations.address2_invoice}{$guestInformations.address2_invoice}{/if}" />
                                            </div>
                                        </div>
					{elseif $field_name eq "postcode"}
                                        {$postCodeExist = true}
                                        <div class="form-group required">
                                            <label for="postcode_invoice" class="col-lg-4 col-sm-4 control-label">{l s='Zip / Postal Code'} <sup>*</sup></label>
                                            <div class="col-lg-5 col-sm-5">
                                                <input type="text" class="form-control" name="postcode_invoice" id="postcode_invoice" value="{if isset($guestInformations) && $guestInformations.postcode_invoice}{$guestInformations.postcode_invoice}{/if}" onkeyup="$('#postcode_invoice').val($('#postcode_invoice').val().toUpperCase());" />
                                            </div>
                                        </div>
					{elseif $field_name eq "city"}
                                        <div class="form-group required">
                                            <label for="city_invoice" class="col-lg-4 col-sm-4 control-label">{l s='City'} <sup>*</sup></label>
                                            <div class="col-lg-5 col-sm-5">
                                                <input type="text" class="form-control" name="city_invoice" id="city_invoice" value="{if isset($guestInformations) && $guestInformations.city_invoice}{$guestInformations.city_invoice}{/if}" />
                                            </div>
                                        </div>
					{elseif $field_name eq "country" || $field_name eq "Country:name"}
                                        <div class="form-group required">
                                            <label for="id_country_invoice" class="col-lg-4 col-sm-4 control-label">{l s='Country'} <sup>*</sup></label>
                                            <div class="col-lg-5 col-sm-5">
                                                <select name="id_country_invoice" id="id_country_invoice">
							<option value="">-</option>
							{foreach from=$countries item=v}
							<option value="{$v.id_country}"{if (isset($guestInformations) AND $guestInformations.id_country_invoice == $v.id_country) OR (!isset($guestInformations) && $sl_country == $v.id_country)} selected="selected"{/if}>{$v.name|escape:'htmlall':'UTF-8'}</option>
							{/foreach}
						</select>
                                            </div>
                                        </div>
					{elseif $field_name eq "state" || $field_name eq 'State:name'}
					{$stateExist = true}
                                        <div class="form-group required id_state_invoice" style="display:none;">
                                            <label for="id_state_invoice" class="col-lg-4 col-sm-4 control-label">{l s='State'} <sup>*</sup></label>
                                            <div class="col-lg-5 col-sm-5">
                                                <select name="id_state_invoice" id="id_state_invoice">
							<option value="">-</option>
						</select>
                                            </div>
                                        </div>
					{/if}
					{/foreach}
					{if !$postCodeExist}
                                        <div class="form-group required postcode_invoice hidden">
                                            <label for="postcode_invoice" class="col-lg-4 col-sm-4 control-label">{l s='Zip / Postal code'} <sup>*</sup></label>
                                            <div class="col-lg-5 col-sm-5">
                                                <input type="text" class="form-control" name="postcode_invoice" id="postcode_invoice" value="" onkeyup="$('#postcode').val($('#postcode').val().toUpperCase());" />
                                            </div>
                                        </div>
					{/if}					
					{if !$stateExist}
                                        <div class="form-group required">
                                            <label for="id_state_invoice" class="col-lg-4 col-sm-4 control-label">{l s='State'} <sup>*</sup></label>
                                            <div class="col-lg-5 col-sm-5">
                                                <select name="id_state_invoice" id="id_state_invoice">
							<option value="">-</option>
						</select>
                                            </div>
                                        </div>
					{/if}
                                        {if !$dniExist}
                                        <div class="form-group required dni_invoice">
                                            <label for="dni_invoice" class="col-lg-4 col-sm-4 control-label">{l s='Identification number'}</label>
                                            <div class="col-lg-5 col-sm-5">
                                                <input type="text" class="form-control" name="dni_invoice" id="dni_invoice" value="{if isset($guestInformations) && $guestInformations.dni_invoice}{$guestInformations.dni_invoice}{/if}" />
                                                <span class="help-block">{l s='DNI / NIF / NIE'}</span>
                                            </div>
                                        </div>
					{/if}
                                        <div class="form-group is_customer_param">
                                            <label for="other_invoice" class="col-lg-4 col-sm-4 control-label">{l s='Additional information'}</label>
                                            <div class="col-lg-5 col-sm-5">
                                                <textarea class="form-control" name="other_invoice" id="other_invoice" cols="26" rows="3"></textarea>
                                            </div>
                                        </div>
					{if isset($one_phone_at_least) && $one_phone_at_least}
						<div class="alert alert-warning inline-infos required is_customer_param">{l s='You must register at least one phone number.'}</div>
					{/if}					
                                        <div class="form-group is_customer_param">
                                            <label for="phone_invoice" class="col-lg-4 col-sm-4 control-label">{l s='Home phone'}</label>
                                            <div class="col-lg-5 col-sm-5">
                                                <input type="text" class="form-control" name="phone_invoice" id="phone_invoice" value="" />
                                            </div>
                                        </div>
                                        <div class="form-group is_customer_param {if isset($one_phone_at_least) && $one_phone_at_least}required{/if}">
                                            <label for="phone_mobile_invoice" class="col-lg-4 col-sm-4 control-label">{l s='Mobile phone'}{if isset($one_phone_at_least) && $one_phone_at_least} <sup>*</sup>{/if}</label>
                                            <div class="col-lg-5 col-sm-5">
                                                <input type="text" class="form-control" name="phone_mobile_invoice" id="phone_mobile_invoice" value="{if isset($guestInformations) && $guestInformations.phone_mobile_invoice}{$guestInformations.phone_mobile_invoice}{/if}" />
                                            </div>
                                        </div>
					<input type="hidden" name="alias_invoice" id="alias_invoice" value="{l s='My Invoice address'}" />
				</div>
				{$HOOK_CREATE_ACCOUNT_FORM}
				<p class="submit">
					<input type="submit" class="exclusive button btn" name="submitAccount" id="submitAccount" value="{l s='Save'}" />
				</p>
				<p style="display: none;" id="opc_account_saved">
					{l s='Account information saved successfully'}
				</p>
				<p class="required opc-required" style="clear: both;">
					<sup>*</sup>{l s='Required field'}
				</p>
				<!-- END Account -->
			</div>
		</fieldset>
	</form>
        </div>
	<div class="clear"></div>
</div>