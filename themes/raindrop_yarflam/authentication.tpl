{capture name=path}
	{if !isset($email_create)}{l s='Authentication'}{else}
		<a href="{$link->getPageLink('authentication', true)|escape:'html'}" rel="nofollow" title="{l s='Authentication'}">{l s='Authentication'}</a>
		<span class="navigation-pipe">{$navigationPipe}</span>{l s='Create your account'}
	{/if}
{/capture}

<script type="text/javascript">
// <![CDATA[
var idSelectedCountry = {if isset($smarty.post.id_state)}{$smarty.post.id_state|intval}{else}false{/if};
var countries = new Array();
var countriesNeedIDNumber = new Array();
var countriesNeedZipCode = new Array(); 
{if isset($countries)}
	{foreach from=$countries item='country'}
		{if isset($country.states) && $country.contains_states}
			countries[{$country.id_country|intval}] = new Array();
			{foreach from=$country.states item='state' name='states'}
				countries[{$country.id_country|intval}].push({ldelim}'id' : '{$state.id_state|intval}', 'name' : '{$state.name|addslashes}'{rdelim});
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
$(document).ready(function() {
	$('#company').on('input',function(){
		vat_number();
	});
	$('#company_invoice').on('input',function(){
		vat_number_invoice();
	});
	function vat_number()
	{
		if (($('#company').length) && ($('#company').val() != '')) 
			$('#vat_number').show();
		else
			$('#vat_number').hide();
	}
	function vat_number_invoice()
	{
		if (($('#company_invoice').length) && ($('#company_invoice').val() != '')) 
			$('#vat_number_block_invoice').show();
		else
			$('#vat_number_block_invoice').hide();
	}
	vat_number();
	vat_number_invoice();
{/literal}
	$('.id_state option[value={if isset($smarty.post.id_state)}{$smarty.post.id_state|intval}{/if}]').prop('selected', true);
{literal}
});
{/literal}
</script>

{if !isset($back) || $back != 'my-account'}{assign var='current_step' value='login'}{include file="$tpl_dir./order-steps.tpl"}{/if} 
{include file="$tpl_dir./errors.tpl"}
{assign var='stateExist' value=false}
{assign var="postCodeExist" value=false}
{assign var="dniExist" value=false}
{if !isset($email_create)}
	<script type="text/javascript">
	{literal}
	$(document).ready(function(){
		// Retrocompatibility with 1.4
		if (typeof baseUri === "undefined" && typeof baseDir !== "undefined")
		baseUri = baseDir;
		$('#create-account_form').submit(function(){
			submitFunction();
			return false;
		});
		$('#invoice_address').click(function() {
			bindCheckbox();
	});
		bindCheckbox();
	});
	function submitFunction()
	{
		$('#create_account_error').html('').hide();
		//send the ajax request to the server
		$.ajax({
			type: 'POST',
			url: baseUri,
			async: true,
			cache: false,
			dataType : "json",
			data: {
				controller: 'authentication',
				SubmitCreate: 1,
				ajax: true,
				email_create: $('#email_create').val(),
				back: $('input[name=back]').val(),
				token: token
			},
			success: function(jsonData)
			{
				if (jsonData.hasError)
				{
					var errors = '';
					for(error in jsonData.errors)
						//IE6 bug fix
						if(error != 'indexOf')
							errors += '<li>'+jsonData.errors[error]+'</li>';
					$('#create_account_error').html('<ol>'+errors+'</ol>').show();
				}
				else
				{
					// adding a div to display a transition
					$('#center_column').html('<div id="noSlide">'+$('#center_column').html()+'</div>');
					$('#noSlide').fadeOut('slow', function(){
						$('#noSlide').html(jsonData.page);
						// update the state (when this file is called from AJAX you still need to update the state)									
						bindStateInputAndUpdate();
						$(this).fadeIn('slow', function(){
							document.location = '#account-creation';
						});
					});
				}
			},
			error: function(XMLHttpRequest, textStatus, errorThrown)
			{
				alert("TECHNICAL ERROR: unable to load form.\n\nDetails:\nError thrown: " + XMLHttpRequest + "\n" + 'Text status: ' + textStatus);
			}
		});
	}
	function bindCheckbox()
	{
		if ($('#invoice_address:checked').length > 0)
		{
			$('#opc_invoice_address').slideDown('slow');
			if ($('#company_invoice').val() == '')
				$('#vat_number_block_invoice').hide();
			updateState('invoice');
			updateNeedIDNumber('invoice');
			updateZipCode('invoice');
	{/literal}
			$('.id_state option[value={if isset($smarty.post.id_state)}{$smarty.post.id_state|intval}{/if}]').prop('selected', true);
			$('.id_state_invoice option[value={if isset($smarty.post.id_state_invoice)}{$smarty.post.id_state_invoice|intval}{/if}]').prop('selected', true);
{literal}
		}
		else
			$('#opc_invoice_address').slideUp('slow');
	}
	{/literal}
	</script>
    <div class="row">
	<!--{if isset($authentification_error)}
	<div class="alert alert-danger">
		{if {$authentification_error|@count} == 1}
			<p>{l s='There\'s at least one error'} :</p>
			{else}
			<p>{l s='There are %s errors' sprintf=[$account_error|@count]} :</p>
		{/if}
		<ol>
			{foreach from=$authentification_error item=v}
				<li>{$v}</li>
			{/foreach}
		</ol>
	</div>
	{/if}-->
	<form action="{$link->getPageLink('authentication', true)|escape:'html'}" method="post" id="create-account_form" class="std col-lg-6 col-sm-6">
            <fieldset class="form-horizontal">
                    <div class="frame_wrap frame_wrap_header clearfix">
			<div class="fwh-title">{l s='Create an account'}</div>
                    </div>
                    <div class="form_content frame_wrap frame_wrap_content clearfix">
                            <p class="title_block">{l s='Please enter your email address to create an account.'}</p>
                            <div class="alert alert-danger" id="create_account_error" style="display:none"></div>
                            <div class="form-group">
                                <label for="email_create" class="col-lg-4 control-label">{l s='Email address'}</label>
                                <div class="col-lg-7">
                                    <input type="text" id="email_create" name="email_create" value="{if isset($smarty.post.email_create)}{$smarty.post.email_create|stripslashes}{/if}" class="account_input form-control" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="submit col-lg-12">
                                    {if isset($back)}<input type="hidden" class="hidden" name="back" value="{$back}" />{/if}
                                    <input type="submit" id="SubmitCreate" name="SubmitCreate" class="btn button" value="{l s='Create an account'}" />
                                    <input type="hidden" class="hidden" name="SubmitCreate" value="{l s='Create an account'}" />
                                </div>
                            </div>
                    </div>
		</fieldset>
	</form>

	<form action="{$link->getPageLink('authentication', true)|escape:'html'}" method="post" id="login_form" class="std col-lg-6 col-sm-6">
            <fieldset class="form-horizontal">
                <div class="frame_wrap frame_wrap_header clearfix">
                    <div class="fwh-title">{l s='Already registered?'}</div>
                </div>
                    <div class="form_content frame_wrap frame_wrap_content clearfix">
                        <div class="form-group">
                                <label for="email" class="col-lg-4 control-label">{l s='Email address'}</label>
                                <div class="col-lg-7">
                                    <input type="text" id="email" name="email" value="{if isset($smarty.post.email)}{$smarty.post.email|stripslashes}{/if}" class="account_input form-control" />
                                </div>
                        </div>
                        <div class="form-group">
                                <label for="passwd" class="col-lg-4 control-label">{l s='Password'}</label>
                                <div class="col-lg-7">
                                    <input type="password" id="passwd" name="passwd" value="{if isset($smarty.post.passwd)}{$smarty.post.passwd|stripslashes}{/if}" class="account_input form-control" />
                                </div>
                        </div>
                        <div class="form-group">
                            <div class="lost_password col-lg-6 col-md-12 col-xs-12"><a href="{$link->getPageLink('password')|escape:'html'}" title="{l s='Recover your forgotten password'}" rel="nofollow">{l s='Forgot your password?'}</a></div>
                            <div class="submit col-lg-6 col-md-12 col-xs-12">
                                    {if isset($back)}<input type="hidden" class="hidden" name="back" value="{$back|escape:'htmlall':'UTF-8'}" />{/if}
                                    <input type="submit" id="SubmitLogin" name="SubmitLogin" class="btn button" value="{l s='Authentication'}" />
                            </p>
                        </div>
                    </div>
            </fieldset>
	</form>
                            
        <div class="clearfix"></div>                    
        
    {if isset($inOrderProcess) && $inOrderProcess && $PS_GUEST_CHECKOUT_ENABLED}
	<form action="{$link->getPageLink('authentication', true, NULL, "back=$back")|escape:'html'}" method="post" id="new_account_form" class="std clearfix">
            <div class="frame_wrap frame_wrap_header clearfix">
                <div class="fwh-title">{l s='Instant checkout'}</div>
            </div>
            <div class="frame_wrap frame_wrap_content clearfix">
		<fieldset class="form-horizontal">
			<div id="opc_account_form" style="display: block; ">
				<!-- Account -->
                                <div class="form-group required">
                                    <label for="guest_email" class="col-lg-4 col-md-4 control-label">{l s='Email address'} <sup>*</sup></label>
                                    <div class="col-lg-5 col-md-5">
                                        <input type="text" class="form-control" id="guest_email" name="guest_email" value="{if isset($smarty.post.guest_email)}{$smarty.post.guest_email}{/if}" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <span class="col-lg-4 col-md-4 control-label no-pad">{l s='Title'}</span>
                                    <div class="col-lg-5 col-md-5">
                                        {foreach from=$genders key=k item=gender}
                                            <input type="radio" name="id_gender" id="id_gender{$gender->id}" value="{$gender->id}"{if isset($smarty.post.id_gender) && $smarty.post.id_gender == $gender->id} checked="checked"{/if} />
                                            <label for="id_gender{$gender->id}" class="top">{$gender->name}</label>
					{/foreach}
                                    </div>
                                </div>
                                <div class="form-group required">
                                    <label for="customer_firstname" class="col-lg-4 col-md-4 control-label">{l s='First name'} <sup>*</sup></label>
                                    <div class="col-lg-5 col-md-5">
                                        <input type="text" class="form-control" id="firstname" name="firstname" onblur="$('#customer_firstname').val($(this).val());" value="{if isset($smarty.post.firstname)}{$smarty.post.firstname}{/if}" />
					<input type="hidden" class="text" id="customer_firstname" name="customer_firstname" value="{if isset($smarty.post.firstname)}{$smarty.post.firstname}{/if}" />
                                    </div>
                                </div>
                                <div class="form-group required">
                                    <label for="customer_lastname" class="col-lg-4 col-md-4 control-label">{l s='Last name'} <sup>*</sup></label>
                                    <div class="col-lg-5 col-md-5">
                                        <input type="text" class="form-control" id="lastname" name="lastname" onblur="$('#customer_lastname').val($(this).val());" value="{if isset($smarty.post.lastname)}{$smarty.post.lastname}{/if}" />
					<input type="hidden" class="text" id="customer_lastname" name="customer_lastname" value="{if isset($smarty.post.lastname)}{$smarty.post.lastname}{/if}" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <span class="col-lg-4 col-md-4 control-label">{l s='Date of Birth'}</span>
                                    <div class="col-lg-5 col-md-5">
                                        <select id="days" name="days">
						<option value="">-</option>
						{foreach from=$days item=day}
							<option value="{$day}" {if ($sl_day == $day)} selected="selected"{/if}>{$day}&nbsp;&nbsp;</option>
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
                                                      <option value="{$k}" {if ($sl_month == $k)} selected="selected"{/if}>{l s=$month}&nbsp;</option>
                                              {/foreach}
                                        </select>
                                        <select id="years" name="years">
                                                <option value="">-</option>
                                                {foreach from=$years item=year}
                                                        <option value="{$year}" {if ($sl_year == $year)} selected="selected"{/if}>{$year}&nbsp;&nbsp;</option>
                                                {/foreach}
                                        </select>
                                    </div>
                                </div>
				{if isset($newsletter) && $newsletter}
                                        <div class="form-group">
                                            <div class="col-lg-4 col-md-4 news_align">
                                                <input type="checkbox" name="newsletter" id="newsletter" value="1" {if isset($smarty.post.newsletter) && $smarty.post.newsletter == '1'}checked="checked"{/if} autocomplete="off"/>
                                            </div>
                                            <div class="col-lg-5 col-md-5">
                                                <label for="newsletter">{l s='Sign up for our newsletter!'}</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-lg-4 col-md-4 news_align">
                                                <input type="checkbox" name="optin" id="optin" value="1" {if isset($smarty.post.optin) && $smarty.post.optin == '1'}checked="checked"{/if} autocomplete="off"/>
                                            </div>
                                            <div class="col-lg-5 col-md-5">
                                               <label for="optin">{l s='Receive special offers from our partners!'}</label>
                                            </div>
                                        </div>
				{/if}
				<h3>{l s='Delivery address'}</h3>
				{foreach from=$dlv_all_fields item=field_name}
					{if $field_name eq "company" && $b2b_enable}
                                                <div class="form-group">
                                                    <label for="company" class="col-lg-4 col-md-4 control-label">{l s='Company'}</label>
                                                    <div class="col-lg-5 col-md-5">
                                                        <input type="text" class="form-control" id="company" name="company" value="{if isset($smarty.post.company)}{$smarty.post.company}{/if}" />
                                                    </div>
                                                </div>
						{elseif $field_name eq "vat_number"}
						<div id="vat_number" class="form-group" style="display:none;">
                                                        <label for="vat_number" class="col-lg-4 col-md-4 control-label">{l s='VAT number'}</label>
                                                        <div class="col-lg-5 col-md-5">
                                                            <input type="text" class="form-control" name="vat_number" value="{if isset($smarty.post.vat_number)}{$smarty.post.vat_number}{/if}" />
                                                        </div>
						</div>
                                                {elseif $field_name eq "dni"}
                                                {assign var='dniExist' value=true}
						<div class="form-group">
							<label for="dni" class="col-lg-4 col-md-4 control-label">{l s='Identification number'}</label>
							<div class="col-lg-5 col-md-5">
                                                            <input type="text" class="form-control" name="dni" id="dni" value="{if isset($smarty.post.dni)}{$smarty.post.dni}{/if}" />
                                                            <span class="help-block">{l s='DNI / NIF / NIE'}</span>
                                                        </div>
						</div>
						{elseif $field_name eq "address1"}
                                                <div class="form-group required">
                                                    <label for="address1" class="col-lg-4 col-md-4 control-label">{l s='Address'} <sup>*</sup></label>
                                                    <div class="col-lg-5 col-md-5">
                                                        <input type="text" class="form-control" name="address1" id="address1" value="{if isset($smarty.post.address1)}{$smarty.post.address1}{/if}" />
                                                    </div>
                                                </div>
						{elseif $field_name eq "postcode"}
						{assign var='postCodeExist' value=true}
                                                <div class="form-group required">
                                                    <label for="postcode" class="col-lg-4 col-md-4 control-label">{l s='Zip / Postal Code'} <sup>*</sup></label>
                                                    <div class="col-lg-5 col-md-5">
                                                        <input type="text" class="form-control" name="postcode" id="postcode" value="{if isset($smarty.post.postcode)}{$smarty.post.postcode}{/if}" onblur="$('#postcode').val($('#postcode').val().toUpperCase());" />
                                                    </div>
                                                </div>
						{elseif $field_name eq "city"}
                                                <div class="form-group required">
                                                    <label for="city" class="col-lg-4 col-md-4 control-label">{l s='City'} <sup>*</sup></label>
                                                    <div class="col-lg-5 col-md-5">
                                                        <input type="text" class="form-control" name="city" id="city" value="{if isset($smarty.post.city)}{$smarty.post.city}{/if}" />
                                                    </div>
                                                </div>
						<!--
							   if customer hasn't update his layout address, country has to be verified
							   but it's deprecated
						   -->
						{elseif $field_name eq "Country:name" || $field_name eq "country"}
                                                <div class="form-group required">
                                                    <label for="id_country" class="col-lg-4 col-md-4 control-label">{l s='Country'} <sup>*</sup></label>
                                                    <div class="col-lg-5 col-md-5">
                                                        <select name="id_country" id="id_country">
								{foreach from=$countries item=v}
									<option value="{$v.id_country}"{if (isset($smarty.post.id_country) AND  $smarty.post.id_country == $v.id_country) OR (!isset($smarty.post.id_country) && $sl_country == $v.id_country)} selected="selected"{/if}>{$v.name}</option>
								{/foreach}
							</select>
                                                    </div>
                                                </div>
						{elseif $field_name eq "State:name"}
						{assign var='stateExist' value=true}
                                                <div class="form-group required id_state">
                                                    <label for="id_state" class="col-lg-4 col-md-4 control-label">{l s='State'} <sup>*</sup></label>
                                                    <div class="col-lg-5 col-md-5">
                                                        <select name="id_state" id="id_state">
                                                            <option value="">-</option>
							</select>
                                                    </div>
                                                </div>
						{/if}
				{/foreach}
				{if $postCodeExist eq false}
                                        <div class="form-group required postcode">
                                            <label for="postcode" class="col-lg-4 col-md-4 control-label">{l s='Zip / Postal Code'} <sup>*</sup></label>
                                            <div class="col-lg-5 col-md-5">
                                                <input type="text" class="form-control" name="postcode" id="postcode" value="{if isset($smarty.post.postcode)}{$smarty.post.postcode}{/if}" onblur="$('#postcode').val($('#postcode').val().toUpperCase());" />
                                            </div>
                                        </div>
				{/if}
				{if $stateExist eq false}
                                        <div class="form-group required">
                                            <label for="id_state" class="col-lg-4 col-md-4 control-label">{l s='State'} <sup>*</sup></label>
                                            <div class="col-lg-5 col-md-5">
                                                <select name="id_state" id="id_state">
							<option value="">-</option>
						</select>
                                            </div>
                                        </div>
				{/if}
				{if $dniExist eq false}
				<div class="form-group required dni">
					<label for="dni" class="col-lg-4 col-md-4 control-label">{l s='Identification number'} <sup>*</sup></label>
					<div class="col-lg-5 col-md-5">
                                            <input type="text" class="form-control" name="dni" id="dni" value="{if isset($smarty.post.dni)}{$smarty.post.dni}{/if}" />
                                            <span class="help-block">{l s='DNI / NIF / NIE'}</span>
                                        </div>
				</div>
				{/if}
                                <div class="form-group {if isset($one_phone_at_least) && $one_phone_at_least}required{/if}">
                                    <label for="phone_mobile" class="col-lg-4 col-md-4 control-label">{l s='Mobile phone'}{if isset($one_phone_at_least) && $one_phone_at_least} <sup>*</sup>{/if}</label>
                                    <div class="col-lg-5 col-md-5">
                                        <input type="text" class="form-control" name="phone_mobile" id="phone_mobile" value="{if isset($smarty.post.phone_mobile)}{$smarty.post.phone_mobile}{/if}"/>
                                    </div>
                                </div>
				<input type="hidden" name="alias" id="alias" value="{l s='My address'}" />
				<input type="hidden" name="is_new_customer" id="is_new_customer" value="0" />
                                <div class="form-group">
                                    <div class="col-lg-4 col-md-4">
                                        <input type="checkbox" name="invoice_address" id="invoice_address"{if isset($smarty.post.invoice_address) && $smarty.post.invoice_address} checked="checked"{/if} autocomplete="off"/>
                                    </div>
                                    <div class="col-lg-5 col-md-5">
                                        <label for="invoice_address"><b>{l s='Please use another address for invoice'}</b></label>
                                    </div>
                                </div>
				<div id="opc_invoice_address" class="hidden">
					{assign var=stateExist value=false}
					{assign var=postCodeExist value=false}
					{assign var=dniExist value=false}
					<h3>{l s='Invoice address'}</h3>
					{foreach from=$inv_all_fields item=field_name}
					{if $field_name eq "company" &&  $b2b_enable}
					<div class="form-group">
                                            <label for="company_invoice" class="col-lg-4 col-md-4 control-label">{l s='Company'}</label>
                                            <div class="col-lg-5 col-md-5">
                                                <input type="text" class="form-control" id="company_invoice" name="company_invoice" value="{if isset($smarty.post.company_invoice)}{$smarty.post.company_invoice}{/if}" />
                                            </div>
                                        </div>
					{elseif $field_name eq "vat_number"}
					<div id="vat_number_block_invoice" class="hidden">
                                            <div class="form-group">
                                                <label for="vat_number_invoice" class="col-lg-4 col-md-4 control-label">{l s='VAT number'}</label>
                                                <div class="col-lg-5 col-md-5">
                                                    <input type="text" class="form-control" id="vat_number_invoice" name="vat_number_invoice" value="{if isset($smarty.post.vat_number_invoice)}{$smarty.post.vat_number_invoice}{/if}" />
                                                </div>
                                            </div>
					</div>
					{elseif $field_name eq "dni"}
					{assign var=dniExist value=true}
					<div class="form-group">
                                            <label for="dni_invoice" class="col-lg-4 col-md-4 control-label">{l s='Identification number'}</label>
                                            <div class="col-lg-5 col-md-5">
                                                <input type="text" class="form-control" name="dni_invoice" id="dni_invoice" value="{if isset($smarty.post.dni_invoice)}{$smarty.post.dni_invoice}{/if}" />
                                                <span class="help-block">{l s='DNI / NIF / NIE'}</span>
                                            </div>
					</div>
					{elseif $field_name eq "firstname"}
					<div class="form-group required">
                                            <label for="firstname_invoice" class="col-lg-4 col-md-4 control-label">{l s='First name'} <sup>*</sup></label>
                                            <div class="col-lg-5 col-md-5">
                                                <input type="text" class="form-control" id="firstname_invoice" name="firstname_invoice" value="{if isset($smarty.post.firstname_invoice)}{$smarty.post.firstname_invoice}{/if}" />
                                            </div>
                                        </div>
					{elseif $field_name eq "lastname"}
					<div class="form-group required">
                                            <label for="lastname_invoice" class="col-lg-4 col-md-4 control-label">{l s='Last name'} <sup>*</sup></label>
                                            <div class="col-lg-5 col-md-5">
                                                <input type="text" class="form-control" id="lastname_invoice" name="lastname_invoice" value="{if isset($smarty.post.firstname_invoice)}{$smarty.post.firstname_invoice}{/if}" />
                                            </div>
                                        </div>
					{elseif $field_name eq "address1"}
					<div class="form-group required">
                                            <label for="address1_invoice" class="col-lg-4 col-md-4 control-label">{l s='Address'} <sup>*</sup></label>
                                            <div class="col-lg-5 col-md-5">
                                                <input type="text" class="form-control" name="address1_invoice" id="address1_invoice" value="{if isset($smarty.post.address1_invoice)}{$smarty.post.address1_invoice}{/if}" />
                                            </div>
                                        </div>
					{elseif $field_name eq "postcode"}
					{$postCodeExist = true}
                                        <div class="form-group required postcode_invoice">
                                            <label for="postcode_invoice" class="col-lg-4 col-md-4 control-label">{l s='Zip / Postal Code'} <sup>*</sup></label>
                                            <div class="col-lg-5 col-md-5">
                                                <input type="text" class="form-control" name="postcode_invoice" id="postcode_invoice" value="{if isset($smarty.post.postcode_invoice)}{$smarty.post.postcode_invoice}{/if}" onkeyup="$('#postcode').val($('#postcode').val().toUpperCase());" />
                                            </div>
                                        </div>
					{elseif $field_name eq "city"}
					<div class="form-group required">
                                            <label for="city_invoice" class="col-lg-4 col-md-4 control-label">{l s='City'} <sup>*</sup></label>
                                            <div class="col-lg-5 col-md-5">
                                                <input type="text" class="form-control" name="city_invoice" id="city_invoice" value="{if isset($smarty.post.city_invoice)}{$smarty.post.city_invoice}{/if}" />
                                            </div>
                                        </div>
					{elseif $field_name eq "country" || $field_name eq "Country:name"}
					<div class="form-group required">
                                            <label for="id_country_invoice" class="col-lg-4 col-md-4 control-label">{l s='Country'} <sup>*</sup></label>
                                            <div class="col-lg-5 col-md-5">
                                                <select name="id_country_invoice" id="id_country_invoice">
                                                        <option value="">-</option>
                                                        {foreach from=$countries item=v}
                                                        <option value="{$v.id_country}"{if (isset($smarty.post.id_country_invoice) && $smarty.post.id_country_invoice == $v.id_country) OR (!isset($smarty.post.id_country_invoice) && $sl_country == $v.id_country)} selected="selected"{/if}>{$v.name|escape:'htmlall':'UTF-8'}</option>
                                                        {/foreach}
                                                </select>
                                            </div>
                                        </div>
					{elseif $field_name eq "state" || $field_name eq 'State:name'}
					{$stateExist = true}
                                        <div class="form-group required id_state_invoice" style="display:none;">
                                            <label for="id_state_invoice" class="col-lg-4 col-md-4 control-label">{l s='State'} <sup>*</sup></label>
                                            <div class="col-lg-5 col-md-5">
                                                <select name="id_state_invoice" id="id_state_invoice">
                                                        <option value="">-</option>
                                                </select>
                                            </div>
					</div>
					{/if}
					{/foreach}
					{if !$postCodeExist}
                                        <div class="form-group required postcode_invoice hidden">
                                            <label for="postcode_invoice" class="col-lg-4 col-md-4 control-label">{l s='Zip / Postal Code'} <sup>*</sup></label>
                                            <div class="col-lg-5 col-md-5">
                                                <input type="text" class="form-control" name="postcode_invoice" id="postcode_invoice" value="{if isset($smarty.post.postcode_invoice)}{$smarty.post.postcode_invoice}{/if}" onkeyup="$('#postcode').val($('#postcode').val().toUpperCase());" />
                                            </div>
                                        </div>
					{/if}					
					{if !$stateExist}
                                        <div class="form-group required id_state_invoice hidden">
                                            <label for="id_state_invoice" class="col-lg-4 col-md-4 control-label">{l s='State'} <sup>*</sup></label>
                                            <div class="col-lg-5 col-md-5">
                                                <select name="id_state_invoice" id="id_state_invoice">
                                                        <option value="">-</option>
                                                </select>
                                            </div>
                                        </div>
					{/if}
					{if !$dniExist}
                                        <div class="form-group required dni_invoice">
                                            <label for="dni_invoice" class="col-lg-4 col-md-4 control-label">{l s='Identification number'} <sup>*</sup></label>
                                            <div class="col-lg-5 col-md-5">
                                                <input type="text" class="text" name="dni_invoice" id="dni_invoice" value="{if isset($smarty.post.dni_invoice)}{$smarty.post.dni_invoice}{/if}" />
                                                <span class="help-block">{l s='DNI / NIF / NIE'}</span>
                                            </div>
                                        </div>
					{/if}
                                        <div class="form-group {if isset($one_phone_at_least) && $one_phone_at_least}required{/if}">
                                            <label for="phone_mobile_invoice" class="col-lg-4 col-md-4 control-label">{l s='Mobile phone'}{if isset($one_phone_at_least) && $one_phone_at_least} <sup>*</sup>{/if}</label>
                                            <div class="col-lg-5 col-md-5">
                                                <input type="text" class="form-control" name="phone_mobile_invoice" id="phone_mobile_invoice" value="{if isset($smarty.post.phone_mobile_invoice)}{$smarty.post.phone_mobile_invoice}{/if}"/>
                                            </div>
                                        </div>
					<input type="hidden" name="alias_invoice" id="alias_invoice" value="{l s='My Invoice address'}" />
				</div>
			</div>
		</fieldset>
		{$HOOK_CREATE_ACCOUNT_FORM}
		<p class="cart_navigation required submit">
			<span><sup>*</sup>{l s='Required field'}</span>
			<input type="hidden" name="display_guest_checkout" value="1" />
			<input type="submit" class="exclusive" name="submitGuestAccount" id="submitGuestAccount" value="{l s='Continue'}" />
		</p>
            </div>
	</form>
	{/if}
{else}
	<!--{if isset($account_error)}
	<div class="alert alert-danger">
		{if {$account_error|@count} == 1}
			<p>{l s='There\'s at least one error'} :</p>
			{else}
			<p>{l s='There are %s errors' sprintf=[$account_error|@count]} :</p>
		{/if}
		<ol>
			{foreach from=$account_error item=v}
				<li>{$v}</li>
			{/foreach}
		</ol>
	</div>
	{/if}-->
<form action="{$link->getPageLink('authentication', true)|escape:'html'}" method="post" id="account-creation_form" class="std">
	{$HOOK_CREATE_ACCOUNT_TOP}
	<fieldset class="account_creation form-horizontal">
            <div class="frame_wrap frame_wrap_header clearfix">
                <div class="fwh-title">{l s='Your personal information'}</div>
            </div>
            <div class="frame_wrap frame_wrap_content">
		<div class="form-group">
                    <label class="col-lg-4 col-md-4 control-label">{l s='Title'}</label>
                    <div class="col-lg-5 col-md-5">
                    {foreach from=$genders key=k item=gender}
                        <label for="id_gender{$gender->id}" class="radio-inline">
                            <input type="radio" name="id_gender" id="id_gender{$gender->id}" value="{$gender->id}" {if isset($smarty.post.id_gender) && $smarty.post.id_gender == $gender->id}checked="checked"{/if} />
                            {$gender->name}
                        </label>
                    {/foreach}
                    </div>
		</div>
		<div class="form-group required">
                    <label for="customer_firstname" class="col-lg-4 col-md-4 control-label">{l s='First name'} <sup>*</sup></label>
                    <div class="col-lg-5 col-md-5">
                        <input onkeyup="$('#firstname').val(this.value);" type="text" class="form-control" id="customer_firstname" name="customer_firstname" value="{if isset($smarty.post.customer_firstname)}{$smarty.post.customer_firstname}{/if}" />
                    </div>
                </div>
		<div class="form-group required">
                    <label for="customer_lastname" class="col-lg-4 col-md-4 control-label">{l s='Last name'} <sup>*</sup></label>
                    <div class="col-lg-5 col-md-5">
                        <input onkeyup="$('#lastname').val(this.value);" type="text" class="form-control" id="customer_lastname" name="customer_lastname" value="{if isset($smarty.post.customer_lastname)}{$smarty.post.customer_lastname}{/if}" />
                    </div>
                </div>
		<div class="form-group required">
                    <label for="email" class="col-lg-4 col-md-4 control-label">{l s='Email'} <sup>*</sup></label>
                    <div class="col-lg-5 col-md-5">
                        <input type="text" class="form-control" id="email" name="email" value="{if isset($smarty.post.email)}{$smarty.post.email}{/if}" />
                    </div>
		</div>
		<div class="form-group required">
			<label for="passwd" class="col-lg-4 col-md-4 control-label">{l s='Password'} <sup>*</sup></label>
                        <div class="col-lg-5 col-md-5">
                            <input type="password" class="form-control" name="passwd" id="passwd" />
                            <span class="help-block">{l s='(Five characters minimum)'}</span>
                        </div>
		</div>
		<div class="form-group select">
			<label class="col-lg-4 col-md-4 control-label">{l s='Date of Birth'}</label>
                        <div class="col-lg-5 col-md-5">
                            <select class="form-control" id="days" name="days">
                                    <option value="">-</option>
                                    {foreach from=$days item=day}
                                            <option value="{$day}" {if ($sl_day == $day)} selected="selected"{/if}>{$day}&nbsp;&nbsp;</option>
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
                            <select class="form-control" id="months" name="months">
                                    <option value="">-</option>
                                    {foreach from=$months key=k item=month}
                                            <option value="{$k}" {if ($sl_month == $k)} selected="selected"{/if}>{l s=$month}&nbsp;</option>
                                    {/foreach}
                            </select>
                            <select class="form-control" id="years" name="years">
                                    <option value="">-</option>
                                    {foreach from=$years item=year}
                                            <option value="{$year}" {if ($sl_year == $year)} selected="selected"{/if}>{$year}&nbsp;&nbsp;</option>
                                    {/foreach}
                            </select>
                        </div>
		</div>
		{if $newsletter}
                <div class="form-group">
                    <div class="col-lg-offset-4 col-lg-5 col-md-offset-4 col-md-5">
                        <div class="checkbox">
                            <label for="newsletter">
                                <input type="checkbox" name="newsletter" id="newsletter" value="1" {if isset($smarty.post.newsletter) AND $smarty.post.newsletter == 1} checked="checked"{/if} autocomplete="off"/>
                                {l s='Sign up for our newsletter!'}
                            </label>
                        </div>
                    </div>
                </div>
		<div class="form-group">
                    <div class="col-lg-offset-4 col-lg-5 col-md-offset-4 col-md-5">
                        <div class="checkbox" >
                            <label for="optin">
                                <input type="checkbox"name="optin" id="optin" value="1" {if isset($smarty.post.optin) AND $smarty.post.optin == 1} checked="checked"{/if} autocomplete="off"/>
                                {l s='Receive special offers from our partners!'}
                            </label>
                        </div>
                    </div>
                </div>
		{/if}
            </div>
	</fieldset>
	{if $b2b_enable}
	<fieldset class="account_creation form-horizontal">
            <div class="frame_wrap frame_wrap_header clearfix">
		<div class="fwh-title">{l s='Your company information'}</div>
            </div>
            <div class="frame_wrap frame_wrap_content">
		<div class="form-group">
                    <label for="company" class="col-lg-4 col-md-4 control-label">{l s='Company'}</label>
                    <div class="col-lg-5 col-md-5">
                        <input type="text" class="form-control" id="company" name="company" value="{if isset($smarty.post.company)}{$smarty.post.company}{/if}" />
                    </div>
		</div>
		<div class="form-group">
                    <label for="siret" class="col-lg-4 col-md-4 control-label">{l s='SIRET'}</label>
                    <div class="col-lg-5 col-md-5">
                        <input type="text" class="form-control" id="siret" name="siret" value="{if isset($smarty.post.siret)}{$smarty.post.siret}{/if}" />
                    </div>
		</div>
		<div class="form-group">
                    <label for="ape" class="col-lg-4 col-md-4 control-label">{l s='APE'}</label>
                    <div class="col-lg-5 col-md-5">
                        <input type="text" class="form-control" id="ape" name="ape" value="{if isset($smarty.post.ape)}{$smarty.post.ape}{/if}" />
                    </div>
		</div>
		<div class="form-group">
                    <label for="website" class="col-lg-4 col-md-4 control-label">{l s='Website'}</label>
                    <div class="col-lg-5 col-md-5">
                        <input type="text" class="form-control" id="website" name="website" value="{if isset($smarty.post.website)}{$smarty.post.website}{/if}" />
                    </div>
		</div>
            </div>
	</fieldset>
	{/if}
	{if isset($PS_REGISTRATION_PROCESS_TYPE) && $PS_REGISTRATION_PROCESS_TYPE}
	<fieldset class="account_creation form-horizontal">
            <div class="frame_wrap frame_wrap_header clearfix">
		<div class="fwh-title">{l s='Your address'}</div>
            </div>
            <div class="frame_wrap frame_wrap_content">
		{foreach from=$dlv_all_fields item=field_name}
			{if $field_name eq "company"}
				{if !$b2b_enable}
				<div class="form-group">
                                    <label for="company" class="col-lg-4 col-md-4 control-label">{l s='Company'}</label>
                                    <div class="col-lg-5 col-md-5">
                                        <input type="text" class="form-control" id="company" name="company" value="{if isset($smarty.post.company)}{$smarty.post.company}{/if}" />
                                    </div>
				</div>
				{/if}
			{elseif $field_name eq "vat_number"}
				<div id="vat_number" style="display:none;">
                                    <div class="form-group">
                                        <label for="vat_number" class="col-lg-4 col-md-4 control-label">{l s='VAT number'}</label>
                                        <div class="col-lg-5 col-md-5">
                                            <input type="text" class="form-control" name="vat_number" value="{if isset($smarty.post.vat_number)}{$smarty.post.vat_number}{/if}" />
                                        </div>
                                    </div>
				</div>
			{elseif $field_name eq "firstname"}
				<div class="form-group required">
                                    <label for="firstname" class="col-lg-4 col-md-4 control-label">{l s='First name'} <sup>*</sup></label>
                                    <div class="col-lg-5 col-md-5">
                                        <input type="text" class="form-control" id="firstname" name="firstname" value="{if isset($smarty.post.firstname)}{$smarty.post.firstname}{/if}" />
                                    </div>
				</div>
			{elseif $field_name eq "lastname"}
				<div class="form-group required">
                                    <label for="lastname" class="col-lg-4 col-md-4 control-label">{l s='Last name'} <sup>*</sup></label>
                                    <div class="col-lg-5 col-md-5">
                                        <input type="text" class="form-control" id="lastname" name="lastname" value="{if isset($smarty.post.lastname)}{$smarty.post.lastname}{/if}" />
                                    </div>
				</div>
			{elseif $field_name eq "address1"}
				<div class="form-group required">
                                    <label for="address1" class="col-lg-4 col-md-4 control-label">{l s='Address'} <sup>*</sup></label>
                                    <div class="col-lg-5 col-md-5">
                                        <input type="text" class="form-control" name="address1" id="address1" value="{if isset($smarty.post.address1)}{$smarty.post.address1}{/if}" />
                                        <span class="help-block">{l s='Street address, P.O. Box, Company name, etc.'}</span>
                                    </div>
				</div>
			{elseif $field_name eq "address2"}
				<div class="form-group">
                                    <label for="address2" class="col-lg-4 col-md-4 control-label">{l s='Address (Line 2)'}</label>
                                    <div class="col-lg-5 col-md-5">
                                        <input type="text" class="form-control" name="address2" id="address2" value="{if isset($smarty.post.address2)}{$smarty.post.address2}{/if}" />
                                        <span class="help-block">{l s='Apartment, suite, unit, building, floor, etc...'}</span>
                                    </div>
				</div>
			{elseif $field_name eq "postcode"}
			{assign var='postCodeExist' value=true}
				<div class="form-group required postcode">
                                    <label for="postcode" class="col-lg-4 col-md-4 control-label">{l s='Zip / Postal Code'} <sup>*</sup></label>
                                    <div class="col-lg-5 col-md-5">
                                        <input type="text" class="form-control" name="postcode" id="postcode" value="{if isset($smarty.post.postcode)}{$smarty.post.postcode}{/if}" onkeyup="$('#postcode').val($('#postcode').val().toUpperCase());" />
                                    </div>
				</div>
			{elseif $field_name eq "city"}
				<div class="form-group required">
                                    <label for="city" class="col-lg-4 col-md-4 control-label">{l s='City'} <sup>*</sup></label>
                                    <div class="col-lg-5 col-md-5">
                                        <input type="text" class="form-control" name="city" id="city" value="{if isset($smarty.post.city)}{$smarty.post.city}{/if}" />
                                    </div>
				</div>
				<!--
					if customer hasn't update his layout address, country has to be verified
					but it's deprecated
				-->
			{elseif $field_name eq "Country:name" || $field_name eq "country"}
				<div class="form-group required">
                                    <label for="id_country" class="col-lg-4 col-md-4 control-label">{l s='Country'} <sup>*</sup></label>
                                    <div class="col-lg-5 col-md-5">
                                        <select class="form-control" name="id_country" id="id_country">
                                            <option value="">-</option>
                                            {foreach from=$countries item=v}
						<option value="{$v.id_country}"{if (isset($smarty.post.id_country) AND $smarty.post.id_country == $v.id_country) OR (!isset($smarty.post.id_country) && $sl_country == $v.id_country)} selected="selected"{/if}>{$v.name}</option>
                                            {/foreach}
                                        </select>
                                    </div>
				</div>
			{elseif $field_name eq "State:name" || $field_name eq 'state'}
				{assign var='stateExist' value=true}
				<div class="form-group required id_state">
                                    <label for="id_state" class="col-lg-4 col-md-4 control-label">{l s='State'} <sup>*</sup></label>
                                    <div class="col-lg-5 col-md-5">
                                        <select class="form-control" name="id_state" id="id_state">
                                            <option value="">-</option>
                                        </select>
                                    </div>
				</div>
			{/if}
		{/foreach}
		{if $postCodeExist eq false}
			<div class="form-group required postcode hidden">
                            <label for="postcode" class="col-lg-4 col-md-4 control-label">{l s='Zip / Postal Code'} <sup>*</sup></label>
                            <div class="col-lg-5 col-md-5">
                                <input type="text" class="form-control" name="postcode" id="postcode" value="{if isset($smarty.post.postcode)}{$smarty.post.postcode}{/if}" onkeyup="$('#postcode').val($('#postcode').val().toUpperCase());" />
                            </div>
			</div>
		{/if}		
		{if $stateExist eq false}
			<div class="form-group required id_state hidden">
                            <label for="id_state" class="col-lg-4 col-md-4 control-label">{l s='State'} <sup>*</sup></label>
                            <div class="col-lg-5 col-md-5">
                                <select class="form-control" name="id_state" id="id_state">
                                        <option value="">-</option>
                                </select>
                            </div>
			</div>
		{/if}
		<div class="form-group">
                    <label for="other" class="col-lg-4 col-md-4 control-label">{l s='Additional information'}</label>
                    <div class="col-lg-5 col-md-5">
                        <textarea class="form-control" name="other" id="other" cols="26" rows="3">{if isset($smarty.post.other)}{$smarty.post.other}{/if}</textarea>
                    </div>
		</div>
		{if isset($one_phone_at_least) && $one_phone_at_least}
			<p class="col-lg-offset-4 col-lg-5 col-md-offset-4 col-md-5 help-block required">{l s='You must register at least one phone number.'}</p>
		{/if}
		<div class="form-group">
                    <label for="phone" class="col-lg-4 col-md-4 control-label">{l s='Home phone'}</label>
                    <div class="col-lg-5 col-md-5">
                        <input type="text" class="form-control" name="phone" id="phone" value="{if isset($smarty.post.phone)}{$smarty.post.phone}{/if}" />
                    </div>
		</div>
                <div class="form-group {if isset($one_phone_at_least) && $one_phone_at_least}required{/if}">
                    <label for="phone_mobile" class="col-lg-4 col-md-4 control-label">{l s='Mobile phone'}{if isset($one_phone_at_least) && $one_phone_at_least} <sup>*</sup>{/if}</label>
                    <div class="col-lg-5 col-md-5">
                        <input type="text" class="form-control" name="phone_mobile" id="phone_mobile" value="{if isset($smarty.post.phone_mobile)}{$smarty.post.phone_mobile}{/if}" />
                    </div>
		</div>
                <div class="form-group required" id="address_alias">
                    <label for="alias" class="col-lg-4 col-md-4 control-label">{l s='Assign an address alias for future reference.'} <sup>*</sup></label>
                    <div class="col-lg-5 col-md-5">
                        <input type="text" class="form-control" name="alias" id="alias" value="{if isset($smarty.post.alias)}{$smarty.post.alias}{else}{l s='My address'}{/if}" />
                    </div>
		</div>
            </div>
	</fieldset>
	<fieldset class="account_creation dni form-horizontal">
            <div class="frame_wrap frame_wrap_header clearfix">
		<div class="fwh-title">{l s='Tax identification'}</div>
            </div>
            <div class="frame_wrap frame_wrap_content">
		<div class="form-group required">
                    <label for="dni" class="col-lg-4 col-md-4 control-label">{l s='Identification number'} <sup>*</sup></label>
                    <div class="col-lg-5 col-md-5">
                        <input type="text" class="form-control" name="dni" id="dni" value="{if isset($smarty.post.dni)}{$smarty.post.dni}{/if}" />
                        <span class="help-block">{l s='DNI / NIF / NIE'}</span>
                    </div>
		</div>
            </div>
	</fieldset>
	{/if}
	{$HOOK_CREATE_ACCOUNT_FORM}
	<p class="cart_navigation required submit">
		<input type="hidden" name="email_create" value="1" />
		<input type="hidden" name="is_new_customer" value="1" />
		{if isset($back)}<input type="hidden" class="hidden" name="back" value="{$back|escape:'htmlall':'UTF-8'}" />{/if}
		<input type="submit" name="submitAccount" id="submitAccount" value="{l s='Register'}" class="btn button exclusive" />
		<span><sup>*</sup>{l s='Required field'}</span>
	</p>
</form>
{/if}
    </div>