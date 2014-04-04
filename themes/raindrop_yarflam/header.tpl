<!DOCTYPE html>
<!--[if lt IE 7]>      <html lang="{$lang_iso}" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html lang="{$lang_iso}" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html lang="{$lang_iso}" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="{$lang_iso}" class="no-js"> <!--<![endif]-->
	<head>
	<link href='http://fonts.googleapis.com/css?family=Basic' rel='stylesheet' type='text/css'>
            <meta charset="utf-8"/>
            <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
            <title>{$meta_title|escape:'htmlall':'UTF-8'}</title>

{if isset($meta_description) AND $meta_description}
            <meta name="description" content="{$meta_description|escape:html:'UTF-8'}" />
{/if}
{if isset($meta_keywords) AND $meta_keywords}
            <meta name="keywords" content="{$meta_keywords|escape:html:'UTF-8'}" />
{/if}
            <meta http-equiv="Content-Type" content="application/xhtml+xml; charset=utf-8" />

            {if $is_responsive}
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            {else}
            <style>body{ min-width:1200px; }</style>
            {/if}
            <meta http-equiv="content-language" content="{$meta_language}" />
            <meta name="generator" content="PrestaShop" />
            <meta name="robots" content="{if isset($nobots)}no{/if}index,{if isset($nofollow) && $nofollow}no{/if}follow" />
            
            <meta name="author" content="BitSHOK" />
            <meta name="creator" content="RainDrop PrestaShop Theme" />
            
            <link rel="icon" type="image/vnd.microsoft.icon" href="{$favicon_url}?{$img_update_time}" />
            <link rel="shortcut icon" type="image/x-icon" href="{$favicon_url}?{$img_update_time}" />
            <script type="text/javascript">
                    var baseDir = '{$content_dir|addslashes}';
                    var baseUri = '{$base_uri|addslashes}';
                    var static_token = '{$static_token|addslashes}';
                    var token = '{$token|addslashes}';
                    var priceDisplayPrecision = {$priceDisplayPrecision*$currency->decimals};
                    var priceDisplayMethod = {$priceDisplay};
                    var roundMode = {$roundMode};
                    var is_responsive = {if $is_responsive}true{else}false{/if};
            </script>
                        
{if isset($css_files)}
	{foreach from=$css_files key=css_uri item=media}
	<link href="{$css_uri}" rel="stylesheet" type="text/css" media="{$media}" />
	{/foreach}
{/if}
{if $is_responsive}
        <link href="{$css_dir}responsive.css" rel="stylesheet" type="text/css" media="all" />
{/if}

{if isset($js_files)}
	{foreach from=$js_files item=js_uri}
	<script type="text/javascript" src="{$js_uri}"></script>
	{/foreach}
{/if}

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
           <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
           <!--[if lt IE 9]>
             <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
             <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
           <![endif]-->
        <script type="text/javascript" src="{$js_dir}script.js"></script>
	{$HOOK_HEADER}
        <link href="{$css_dir}47.css" rel="stylesheet" type="text/css" media="all" />
        <link href="{$css_dir}yarflam.css" rel="stylesheet" type="text/css" media="all" />
        <script type="text/javascript" src="{$js_dir}yarflam.js"></script>
	</head>
        
	<body {if isset($page_name)}id="{$page_name|escape:'htmlall':'UTF-8'}"{/if} class="{if isset($page_name)}{$page_name|escape:'htmlall':'UTF-8'}{/if}{if $hide_left_column} hide-left-column{/if}{if $hide_right_column} hide-right-column{/if}{if $content_only} content_only{/if}">
            
        <!-- modal content -->
        <input type="hidden" id="productsNumber" value="{l s='Items in cart:'}">
        <input type="hidden" id="productsTotal" value="{l s='Total:'}">
        <div id="modal_ajax_loader" style="display: none;">
            <div class="loading"><img src="{$img_dir}loading.gif" alt="" /><br /><br />{l s='Loading...'}</div>
        </div>
        <div id="modal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header frame_wrap frame_wrap_header clearfix">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title fwh-title">{l s='Product added to cart!'}</h4>
                    </div>
                    <div class="frame_wrap frame_wrap_content">
                        <div class="modal-body clearfix">

                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">{l s='Continue shopping'}</button>
                          <a href="{$link->getPageLink("order", true)}" class="btn btn-primary">{l s='Checkout'}</a>
                        </div>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
            
	{if !$content_only}
		{if isset($restricted_country_mode) && $restricted_country_mode}
		<div id="restricted-country">
			<p>{l s='You cannot place a new order from your country.'} <span class="bold">{$geolocation_country}</span></p>
		</div>
		{/if}
		<div id="page" class="clearfix">

			<!-- Header -->
			<div id="header">
                            <!-- #navMain -->
                            <div id="navMain">
                                <div id="navTop" class="container">
                                    {if isset($HOOK_NAV_MAIN_LINKS)}
                                        <div id="header_bsk_permlinks">
                                            {$HOOK_NAV_MAIN_LINKS}
                                            {$HOOK_TOP}
                                        </div>
                                    {/if}
                                    {if isset($HOOK_NAV_MAIN_SCL)}
                                        <div id="header_scl">
                                            {$HOOK_NAV_MAIN_SCL}
                                            {$HOOK_LOGIN_ZONE}
                                        </div>
                                    {/if}
                                </div>
                                <div class="container">
                                    <a id="header_logo" href="{$base_dir}" title="{$shop_name|escape:'htmlall':'UTF-8'}">
                                        <img class="logo" src="{$logo_url}" alt="{$shop_name|escape:'htmlall':'UTF-8'}" />
                                        <!-- {if $logo_image_width}width="{$logo_image_width}"{/if} {if $logo_image_height}height="{$logo_image_height}" {/if} -->
                                    </a>					
								</div>
								<!-- Block Newsletter module-->
<div id="newsletter_block_left" class="block">
    <div class="block_content frame_wrap frame_wrap_content">
    {if isset($msg) && $msg}
        <p class="{if $nw_error}alert alert-warning{else}alert alert-success{/if}">{$msg}</p>
    {/if}
        <form action="{$link->getPageLink('index')}" method="post">
            <p>
                {* @todo use jquery (focusin, focusout) instead of onblur and onfocus *}
                <input type="text" name="email" size="18"
                        value="{if isset($value) && $value}{$value}{else}{l s='Entrez votre email' mod='blocknewsletter'}{/if}" 
                        onfocus="javascript:if(this.value=='{l s='Entrez votre email' mod='blocknewsletter' js=1}')this.value='';" 
                        onblur="javascript:if(this.value=='')this.value='{l s='Entrez votre email' mod='blocknewsletter' js=1}';" 
                        class="inputNew" />
                <!--<select name="action">
                    <option value="0"{if isset($action) && $action == 0} selected="selected"{/if}>{l s='Subscribe' mod='blocknewsletter'}</option>
                    <option value="1"{if isset($action) && $action == 1} selected="selected"{/if}>{l s='Unsubscribe' mod='blocknewsletter'}</option>
                </select>-->
                    <input type="submit" value="ok" class="btn exclusive_small" name="submitNewsletter" />
                <input type="hidden" name="action" value="0" />
            </p>
        </form>
    </div>
</div>
<!-- /Block Newsletter module-->


                            </div><!-- /#navMain -->
                            <!-- #navSecondary -->
                            <div id="navSecondary"> 
                                <div class="container">
                                    {* {$HOOK_TOP} *}
                                    {hook h='Icemenu'}
                                </div>
                            </div> <!-- /#navSecondary -->
                            {if isset($HOOK_SLIDER)}
                                <!-- #sliderWrapper -->
                                <div id="sliderWrapper" class="container frame_wrap_slide">
                                    {$HOOK_SLIDER}
                                </div>
                                <!-- /#sliderWrapper -->
                            {/if}
                            {if isset($HOOK_ADS)}
                                <!-- #adsWrapper -->
                                <div id="adsWrapper" class="container">
                                    {$HOOK_ADS}
                                </div>
                                <!-- /#adsWrapper -->
                            {/if}
			</div> <!-- /Header -->

			<div id="columns" class="container">
                            {if !$is_page['home']}
                                <div class="row">
                                    {include file="$tpl_dir./breadcrumb.tpl"}
                                </div>
                            {/if}
                            <div class="row">
                                {if !$hide_left_column}
				<!-- Left -->
				<div id="left_column" class="column col-lg-3 col-md-3">
					{$HOOK_LEFT_COLUMN}
				</div>
                                {/if}

				<!-- Center -->
				<div id="center_column" class="{if $center_column_grid != 12}col-lg-{$center_column_grid} col-md-{$center_column_grid}{/if}">
	{/if}
