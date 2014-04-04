<!DOCTYPE html>
<!--[if lt IE 7]>      <html lang="{$lang_iso}" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html lang="{$lang_iso}" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html lang="{$lang_iso}" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="{$lang_iso}" class="no-js"> <!--<![endif]-->
<head>
    <title>{$meta_title|escape:'htmlall':'UTF-8'}</title>	
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
{if isset($meta_description)}
    <meta name="description" content="{$meta_description|escape:'htmlall':'UTF-8'}" />
{/if}
{if isset($meta_keywords)}
    <meta name="keywords" content="{$meta_keywords|escape:'htmlall':'UTF-8'}" />
{/if}
    <meta name="robots" content="{if isset($nobots)}no{/if}index,follow" />
    <link rel="shortcut icon" href="{$favicon_url}" />
    <link href="{$css_dir}/webtools/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="{$css_dir}maintenance.css" rel="stylesheet" type="text/css" />
    <link href="{$css_dir}global.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <div id="maintenance">
        <div class="frame_wrap frame_wrap_header clearfix">
            <div class="fwh-title">
                {l s='Maintanance mode'}
            </div>
        </div>
        <div class="frame_wrap frame_wrap_content">
            <img class="logo" src="{$logo_url}" {if $logo_image_width}width="{$logo_image_width}"{/if} {if $logo_image_height}height="{$logo_image_height}"{/if} alt="logo" />
            {if isset($HOOK_MAINTENANCE)}
            <div class="clearfix">
            {$HOOK_MAINTENANCE}
            </div>
            {/if}
            <div class="alert alert-info">
               <p><strong>{l s='In order to perform website maintenance, our online store will be temporarily offline.'}</strong></p>
               <p>{l s='We apologize for the inconvenience and ask that you please try again later.'}</p>
            </div>
        </div>
    </div>
</body>
</html>
