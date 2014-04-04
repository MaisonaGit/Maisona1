<?php /* Smarty version Smarty-3.1.14, created on 2014-02-23 18:58:18
         compiled from "/homez.742/maisona/www/maisona/themes/raindrop_yarflam/404.tpl" */ ?>
<?php /*%%SmartyHeaderCode:155800936530a36ba187710-78219621%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b71efde55e66cfc937f8d63121b8f4e84fe28c6b' => 
    array (
      0 => '/homez.742/maisona/www/maisona/themes/raindrop_yarflam/404.tpl',
      1 => 1393177384,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '155800936530a36ba187710-78219621',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_530a36ba265ae2_20923212',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530a36ba265ae2_20923212')) {function content_530a36ba265ae2_20923212($_smarty_tpl) {?>
<div class="pagenotfound">
    <div class="frame_wrap frame_wrap_header clearfix">
	<div class="fwh-title"><?php echo smartyTranslate(array('s'=>'This page is not available'),$_smarty_tpl);?>
</div>
    </div>
    <div class="frame_wrap frame_wrap_content clearfix">
	<p>
		<?php echo smartyTranslate(array('s'=>'We\'re sorry, but the Web address you\'ve entered is no longer available.'),$_smarty_tpl);?>

	</p>

	<h3><?php echo smartyTranslate(array('s'=>'To find a product, please type its name in the field below.'),$_smarty_tpl);?>
</h3>
	<form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('search'), ENT_QUOTES, 'UTF-8', true);?>
" method="post" id="404-form" class="form-inline clearfix" role="form">
            <div class="form-group col-lg-10 no-gutter-left">
                <label for="search_query" class="sr-only"><?php echo smartyTranslate(array('s'=>'Search our product catalog:'),$_smarty_tpl);?>
</label>
                <input id="search_query" name="search_query" type="text" class="form-control" placeholder="<?php echo smartyTranslate(array('s'=>'Search our product catalog'),$_smarty_tpl);?>
"/>
            </div>
            <button type="submit" name="Submit" class="btn btn-default col-lg-2"><?php echo smartyTranslate(array('s'=>"Search"),$_smarty_tpl);?>
</button>
	</form>
    </div>
</div><?php }} ?>