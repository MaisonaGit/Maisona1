{if !$opc}
<script type="text/javascript">
// <![CDATA[
var taxEnabled = "{$use_taxes}";
var displayPrice = "{$priceDisplay}";
var currencySign = '{$currencySign|html_entity_decode:2:"UTF-8"}';
var currencyRate = '{$currencyRate|floatval}';
var currencyFormat = '{$currencyFormat|intval}';
var currencyBlank = '{$currencyBlank|intval}';
var id_carrier = '{$id_carrier|intval}';
var id_state = '{$id_state|intval}';
var SE_RedirectTS = "{l s='Refreshing the page and updating your cart...' mod='carriercompare'}";
var SE_RefreshStateTS = "{l s='Checking available states...' mod='carriercompare'}";
var SE_RetrievingInfoTS = "{l s='Retrieving information...' mod='carriercompare'}";
var SE_RefreshMethod = {$refresh_method};
var txtFree = "{l s='Free!' mod='carriercompare'}";
PS_SE_HandleEvent();
//]]>
</script>
<form class="std" id="compare_shipping_form" method="post" action="#" >
	<fieldset id="compare_shipping" class="form-horizontal">
		<h3>{l s='Estimate the cost of shipping & taxes.' mod='carriercompare'}</h3>
		<div class="form-group">
                    <label for="id_country" class="col-lg-4 control-label">{l s='Country' mod='carriercompare'}</label>
                    <div class="col-lg-5">
                        <select name="id_country" id="id_country">
                                {foreach from=$countries item=country}
                                        <option value="{$country.id_country}" {if $id_country == $country.id_country}selected="selected"{/if}>{$country.name|escape:'htmlall':'UTF-8'}</option>
                                {/foreach}
                        </select>
                    </div>
		</div>
		<div id="states" class="form-group" style="display: none;">
                    <label for="id_state" class="col-lg-4 control-label">{l s='State' mod='carriercompare'}</label>
                    <div class="col-lg-5">
                        <select name="id_state" id="id_state">
                                <option></option>
                        </select>
                    </div>
		</div>
		<div class="form-group">
			<label for="zipcode" class="col-lg-4 control-label">{l s='Zip Code' mod='carriercompare'}</label>
                        <div class="col-lg-3">
                            <input class="form-control" type="text" name="zipcode" id="zipcode" value="{$zipcode|escape:'htmlall':'UTF-8'}"/> ({l s='Needed for certain carriers.' mod='carriercompare'})
                        </div>
		</div>
		<div id="carriercompare_errors" style="display: none;">
			<ul id="carriercompare_errors_list"></ul><br />
		</div>		
		<div id="SE_AjaxDisplay">
			<img src="{$new_base_dir}loader.gif" /><br />
			<p></p>
		</div>
		<div id="availableCarriers" style="display: none;">
			<table cellspacing="0" cellpadding="0" id="availableCarriers_table" class="std">
				<thead>
					<tr>
						<th class="carrier_action first_item"></th>
						<th class="carrier_name item">{l s='Carrier' mod='carriercompare'}</th>
						<th class="carrier_infos item">{l s='Information' mod='carriercompare'}</th>
						<th class="carrier_price last_item">{l s='Price' mod='carriercompare'}</th>
					</tr>
				</thead>
				<tbody id="carriers_list">
					
				</tbody>
			</table>
		</div>
		<p class="warning center" id="noCarrier" style="display: none;">{l s='No carrier has been made available for this selection.' mod='carriercompare'}</p>
		<p class="SE_SubmitRefreshCard">
			<input class="btn exclusive button" id="carriercompare_submit" type="submit" name="carriercompare_submit" value="{l s='Update cart' mod='carriercompare'}"/>
			<input id="update_carriers_list" type="button" class="button btn exclusive" value="{l s='Update carrier list' mod='carriercompare'}" />
		</p>
	</fieldset>
</form>
{/if}
