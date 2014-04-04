<?php /* Smarty version Smarty-3.1.14, created on 2014-01-08 07:27:35
         compiled from "/homez.742/maisona/www/maisona/themes/raindrop/404.tpl" */ ?>
<?php /*%%SmartyHeaderCode:69611584052ccefd77ebf42-47020187%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b1296d2a0379a512097eb3f637a451a1587b4cc0' => 
    array (
      0 => '/homez.742/maisona/www/maisona/themes/raindrop/404.tpl',
      1 => 1388801682,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '69611584052ccefd77ebf42-47020187',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52ccefd7880d15_37950371',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52ccefd7880d15_37950371')) {function content_52ccefd7880d15_37950371($_smarty_tpl) {?>
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