<?php /* Smarty version Smarty-3.1.14, created on 2014-03-18 21:36:14
         compiled from "/homez.742/maisona/www/maisona/themes/raindrop_yarflam/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1981676183530a1cb7926004-07554744%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cf214dc3b1ca7522f7e18cc4961b645d8244e776' => 
    array (
      0 => '/homez.742/maisona/www/maisona/themes/raindrop_yarflam/header.tpl',
      1 => 1395174556,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1981676183530a1cb7926004-07554744',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_530a1cb7b0feb0_07795288',
  'variables' => 
  array (
    'lang_iso' => 0,
    'meta_title' => 0,
    'meta_description' => 0,
    'meta_keywords' => 0,
    'is_responsive' => 0,
    'meta_language' => 0,
    'nobots' => 0,
    'nofollow' => 0,
    'favicon_url' => 0,
    'img_update_time' => 0,
    'content_dir' => 0,
    'base_uri' => 0,
    'static_token' => 0,
    'token' => 0,
    'priceDisplayPrecision' => 0,
    'currency' => 0,
    'priceDisplay' => 0,
    'roundMode' => 0,
    'css_files' => 0,
    'css_uri' => 0,
    'media' => 0,
    'css_dir' => 0,
    'js_files' => 0,
    'js_uri' => 0,
    'js_dir' => 0,
    'HOOK_HEADER' => 0,
    'page_name' => 0,
    'hide_left_column' => 0,
    'hide_right_column' => 0,
    'content_only' => 0,
    'img_dir' => 0,
    'link' => 0,
    'restricted_country_mode' => 0,
    'geolocation_country' => 0,
    'HOOK_NAV_MAIN_LINKS' => 0,
    'HOOK_TOP' => 0,
    'HOOK_NAV_MAIN_SCL' => 0,
    'HOOK_LOGIN_ZONE' => 0,
    'base_dir' => 0,
    'shop_name' => 0,
    'logo_url' => 0,
    'logo_image_width' => 0,
    'logo_image_height' => 0,
    'msg' => 0,
    'nw_error' => 0,
    'value' => 0,
    'action' => 0,
    'HOOK_SLIDER' => 0,
    'HOOK_ADS' => 0,
    'is_page' => 0,
    'HOOK_LEFT_COLUMN' => 0,
    'center_column_grid' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530a1cb7b0feb0_07795288')) {function content_530a1cb7b0feb0_07795288($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/homez.742/maisona/www/maisona/tools/smarty/plugins/modifier.escape.php';
?><!DOCTYPE html>
<!--[if lt IE 7]>      <html lang="<?php echo $_smarty_tpl->tpl_vars['lang_iso']->value;?>
" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html lang="<?php echo $_smarty_tpl->tpl_vars['lang_iso']->value;?>
" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html lang="<?php echo $_smarty_tpl->tpl_vars['lang_iso']->value;?>
" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="<?php echo $_smarty_tpl->tpl_vars['lang_iso']->value;?>
" class="no-js"> <!--<![endif]-->
	<head>
	<link href='http://fonts.googleapis.com/css?family=Basic' rel='stylesheet' type='text/css'>
            <meta charset="utf-8"/>
            <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
            <title><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['meta_title']->value, 'htmlall', 'UTF-8');?>
</title>

<?php if (isset($_smarty_tpl->tpl_vars['meta_description']->value)&&$_smarty_tpl->tpl_vars['meta_description']->value){?>
            <meta name="description" content="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['meta_description']->value, 'html', 'UTF-8');?>
" />
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['meta_keywords']->value)&&$_smarty_tpl->tpl_vars['meta_keywords']->value){?>
            <meta name="keywords" content="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['meta_keywords']->value, 'html', 'UTF-8');?>
" />
<?php }?>
            <meta http-equiv="Content-Type" content="application/xhtml+xml; charset=utf-8" />

            <?php if ($_smarty_tpl->tpl_vars['is_responsive']->value){?>
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <?php }else{ ?>
            <style>body{ min-width:1200px; }</style>
            <?php }?>
            <meta http-equiv="content-language" content="<?php echo $_smarty_tpl->tpl_vars['meta_language']->value;?>
" />
            <meta name="generator" content="PrestaShop" />
            <meta name="robots" content="<?php if (isset($_smarty_tpl->tpl_vars['nobots']->value)){?>no<?php }?>index,<?php if (isset($_smarty_tpl->tpl_vars['nofollow']->value)&&$_smarty_tpl->tpl_vars['nofollow']->value){?>no<?php }?>follow" />
            
            <meta name="author" content="BitSHOK" />
            <meta name="creator" content="RainDrop PrestaShop Theme" />
            
            <link rel="icon" type="image/vnd.microsoft.icon" href="<?php echo $_smarty_tpl->tpl_vars['favicon_url']->value;?>
?<?php echo $_smarty_tpl->tpl_vars['img_update_time']->value;?>
" />
            <link rel="shortcut icon" type="image/x-icon" href="<?php echo $_smarty_tpl->tpl_vars['favicon_url']->value;?>
?<?php echo $_smarty_tpl->tpl_vars['img_update_time']->value;?>
" />
            <script type="text/javascript">
                    var baseDir = '<?php echo addslashes($_smarty_tpl->tpl_vars['content_dir']->value);?>
';
                    var baseUri = '<?php echo addslashes($_smarty_tpl->tpl_vars['base_uri']->value);?>
';
                    var static_token = '<?php echo addslashes($_smarty_tpl->tpl_vars['static_token']->value);?>
';
                    var token = '<?php echo addslashes($_smarty_tpl->tpl_vars['token']->value);?>
';
                    var priceDisplayPrecision = <?php echo $_smarty_tpl->tpl_vars['priceDisplayPrecision']->value*$_smarty_tpl->tpl_vars['currency']->value->decimals;?>
;
                    var priceDisplayMethod = <?php echo $_smarty_tpl->tpl_vars['priceDisplay']->value;?>
;
                    var roundMode = <?php echo $_smarty_tpl->tpl_vars['roundMode']->value;?>
;
                    var is_responsive = <?php if ($_smarty_tpl->tpl_vars['is_responsive']->value){?>true<?php }else{ ?>false<?php }?>;
            </script>
                        
<?php if (isset($_smarty_tpl->tpl_vars['css_files']->value)){?>
	<?php  $_smarty_tpl->tpl_vars['media'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['media']->_loop = false;
 $_smarty_tpl->tpl_vars['css_uri'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['css_files']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['media']->key => $_smarty_tpl->tpl_vars['media']->value){
$_smarty_tpl->tpl_vars['media']->_loop = true;
 $_smarty_tpl->tpl_vars['css_uri']->value = $_smarty_tpl->tpl_vars['media']->key;
?>
	<link href="<?php echo $_smarty_tpl->tpl_vars['css_uri']->value;?>
" rel="stylesheet" type="text/css" media="<?php echo $_smarty_tpl->tpl_vars['media']->value;?>
" />
	<?php } ?>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['is_responsive']->value){?>
        <link href="<?php echo $_smarty_tpl->tpl_vars['css_dir']->value;?>
responsive.css" rel="stylesheet" type="text/css" media="all" />
<?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['js_files']->value)){?>
	<?php  $_smarty_tpl->tpl_vars['js_uri'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['js_uri']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['js_files']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['js_uri']->key => $_smarty_tpl->tpl_vars['js_uri']->value){
$_smarty_tpl->tpl_vars['js_uri']->_loop = true;
?>
	<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['js_uri']->value;?>
"></script>
	<?php } ?>
<?php }?>

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
           <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
           <!--[if lt IE 9]>
             <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
             <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
           <![endif]-->
        <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['js_dir']->value;?>
script.js"></script>
	<?php echo $_smarty_tpl->tpl_vars['HOOK_HEADER']->value;?>

        <link href="<?php echo $_smarty_tpl->tpl_vars['css_dir']->value;?>
47.css" rel="stylesheet" type="text/css" media="all" />
        <link href="<?php echo $_smarty_tpl->tpl_vars['css_dir']->value;?>
yarflam.css" rel="stylesheet" type="text/css" media="all" />
        <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['js_dir']->value;?>
yarflam.js"></script>
	</head>
        
	<body <?php if (isset($_smarty_tpl->tpl_vars['page_name']->value)){?>id="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['page_name']->value, 'htmlall', 'UTF-8');?>
"<?php }?> class="<?php if (isset($_smarty_tpl->tpl_vars['page_name']->value)){?><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['page_name']->value, 'htmlall', 'UTF-8');?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['hide_left_column']->value){?> hide-left-column<?php }?><?php if ($_smarty_tpl->tpl_vars['hide_right_column']->value){?> hide-right-column<?php }?><?php if ($_smarty_tpl->tpl_vars['content_only']->value){?> content_only<?php }?>">
            
        <!-- modal content -->
        <input type="hidden" id="productsNumber" value="<?php echo smartyTranslate(array('s'=>'Items in cart:'),$_smarty_tpl);?>
">
        <input type="hidden" id="productsTotal" value="<?php echo smartyTranslate(array('s'=>'Total:'),$_smarty_tpl);?>
">
        <div id="modal_ajax_loader" style="display: none;">
            <div class="loading"><img src="<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
loading.gif" alt="" /><br /><br /><?php echo smartyTranslate(array('s'=>'Loading...'),$_smarty_tpl);?>
</div>
        </div>
        <div id="modal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header frame_wrap frame_wrap_header clearfix">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title fwh-title"><?php echo smartyTranslate(array('s'=>'Product added to cart!'),$_smarty_tpl);?>
</h4>
                    </div>
                    <div class="frame_wrap frame_wrap_content">
                        <div class="modal-body clearfix">

                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo smartyTranslate(array('s'=>'Continue shopping'),$_smarty_tpl);?>
</button>
                          <a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink("order",true);?>
" class="btn btn-primary"><?php echo smartyTranslate(array('s'=>'Checkout'),$_smarty_tpl);?>
</a>
                        </div>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
            
	<?php if (!$_smarty_tpl->tpl_vars['content_only']->value){?>
		<?php if (isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)&&$_smarty_tpl->tpl_vars['restricted_country_mode']->value){?>
		<div id="restricted-country">
			<p><?php echo smartyTranslate(array('s'=>'You cannot place a new order from your country.'),$_smarty_tpl);?>
 <span class="bold"><?php echo $_smarty_tpl->tpl_vars['geolocation_country']->value;?>
</span></p>
		</div>
		<?php }?>
		<div id="page" class="clearfix">

			<!-- Header -->
			<div id="header">
                            <!-- #navMain -->
                            <div id="navMain">
                                <div id="navTop" class="container">
                                    <?php if (isset($_smarty_tpl->tpl_vars['HOOK_NAV_MAIN_LINKS']->value)){?>
                                        <div id="header_bsk_permlinks">
                                            <?php echo $_smarty_tpl->tpl_vars['HOOK_NAV_MAIN_LINKS']->value;?>

                                            <?php echo $_smarty_tpl->tpl_vars['HOOK_TOP']->value;?>

                                        </div>
                                    <?php }?>
                                    <?php if (isset($_smarty_tpl->tpl_vars['HOOK_NAV_MAIN_SCL']->value)){?>
                                        <div id="header_scl">
                                            <?php echo $_smarty_tpl->tpl_vars['HOOK_NAV_MAIN_SCL']->value;?>

                                            <?php echo $_smarty_tpl->tpl_vars['HOOK_LOGIN_ZONE']->value;?>

                                        </div>
                                    <?php }?>
                                </div>
                                <div class="container">
                                    <a id="header_logo" href="<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
" title="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['shop_name']->value, 'htmlall', 'UTF-8');?>
">
                                        <img class="logo" src="<?php echo $_smarty_tpl->tpl_vars['logo_url']->value;?>
" alt="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['shop_name']->value, 'htmlall', 'UTF-8');?>
" />
                                        <!-- <?php if ($_smarty_tpl->tpl_vars['logo_image_width']->value){?>width="<?php echo $_smarty_tpl->tpl_vars['logo_image_width']->value;?>
"<?php }?> <?php if ($_smarty_tpl->tpl_vars['logo_image_height']->value){?>height="<?php echo $_smarty_tpl->tpl_vars['logo_image_height']->value;?>
" <?php }?> -->
                                    </a>					
								</div>
								<!-- Block Newsletter module-->
<div id="newsletter_block_left" class="block">
    <div class="block_content frame_wrap frame_wrap_content">
    <?php if (isset($_smarty_tpl->tpl_vars['msg']->value)&&$_smarty_tpl->tpl_vars['msg']->value){?>
        <p class="<?php if ($_smarty_tpl->tpl_vars['nw_error']->value){?>alert alert-warning<?php }else{ ?>alert alert-success<?php }?>"><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</p>
    <?php }?>
        <form action="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('index');?>
" method="post">
            <p>
                
                <input type="text" name="email" size="18"
                        value="<?php if (isset($_smarty_tpl->tpl_vars['value']->value)&&$_smarty_tpl->tpl_vars['value']->value){?><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
<?php }else{ ?><?php echo smartyTranslate(array('s'=>'Entrez votre email','mod'=>'blocknewsletter'),$_smarty_tpl);?>
<?php }?>" 
                        onfocus="javascript:if(this.value=='<?php echo smartyTranslate(array('s'=>'Entrez votre email','mod'=>'blocknewsletter','js'=>1),$_smarty_tpl);?>
')this.value='';" 
                        onblur="javascript:if(this.value=='')this.value='<?php echo smartyTranslate(array('s'=>'Entrez votre email','mod'=>'blocknewsletter','js'=>1),$_smarty_tpl);?>
';" 
                        class="inputNew" />
                <!--<select name="action">
                    <option value="0"<?php if (isset($_smarty_tpl->tpl_vars['action']->value)&&$_smarty_tpl->tpl_vars['action']->value==0){?> selected="selected"<?php }?>><?php echo smartyTranslate(array('s'=>'Subscribe','mod'=>'blocknewsletter'),$_smarty_tpl);?>
</option>
                    <option value="1"<?php if (isset($_smarty_tpl->tpl_vars['action']->value)&&$_smarty_tpl->tpl_vars['action']->value==1){?> selected="selected"<?php }?>><?php echo smartyTranslate(array('s'=>'Unsubscribe','mod'=>'blocknewsletter'),$_smarty_tpl);?>
</option>
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
                                    
                                    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'Icemenu'),$_smarty_tpl);?>

                                </div>
                            </div> <!-- /#navSecondary -->
                            <?php if (isset($_smarty_tpl->tpl_vars['HOOK_SLIDER']->value)){?>
                                <!-- #sliderWrapper -->
                                <div id="sliderWrapper" class="container frame_wrap_slide">
                                    <?php echo $_smarty_tpl->tpl_vars['HOOK_SLIDER']->value;?>

                                </div>
                                <!-- /#sliderWrapper -->
                            <?php }?>
                            <?php if (isset($_smarty_tpl->tpl_vars['HOOK_ADS']->value)){?>
                                <!-- #adsWrapper -->
                                <div id="adsWrapper" class="container">
                                    <?php echo $_smarty_tpl->tpl_vars['HOOK_ADS']->value;?>

                                </div>
                                <!-- /#adsWrapper -->
                            <?php }?>
			</div> <!-- /Header -->

			<div id="columns" class="container">
                            <?php if (!$_smarty_tpl->tpl_vars['is_page']->value['home']){?>
                                <div class="row">
                                    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./breadcrumb.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

                                </div>
                            <?php }?>
                            <div class="row">
                                <?php if (!$_smarty_tpl->tpl_vars['hide_left_column']->value){?>
				<!-- Left -->
				<div id="left_column" class="column col-lg-3 col-md-3">
					<?php echo $_smarty_tpl->tpl_vars['HOOK_LEFT_COLUMN']->value;?>

				</div>
                                <?php }?>

				<!-- Center -->
				<div id="center_column" class="<?php if ($_smarty_tpl->tpl_vars['center_column_grid']->value!=12){?>col-lg-<?php echo $_smarty_tpl->tpl_vars['center_column_grid']->value;?>
 col-md-<?php echo $_smarty_tpl->tpl_vars['center_column_grid']->value;?>
<?php }?>">
	<?php }?>
<?php }} ?>