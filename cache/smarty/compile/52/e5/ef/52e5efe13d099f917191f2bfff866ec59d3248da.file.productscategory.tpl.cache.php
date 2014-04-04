<?php /* Smarty version Smarty-3.1.14, created on 2014-01-08 07:17:19
         compiled from "/homez.742/maisona/www/maisona/themes/raindrop/modules/productscategory/productscategory.tpl" */ ?>
<?php /*%%SmartyHeaderCode:109763451752cced6f237551-23266588%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '52e5efe13d099f917191f2bfff866ec59d3248da' => 
    array (
      0 => '/homez.742/maisona/www/maisona/themes/raindrop/modules/productscategory/productscategory.tpl',
      1 => 1388801684,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '109763451752cced6f237551-23266588',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'categoryProducts' => 0,
    'categoryProduct' => 0,
    'link' => 0,
    'ProdDisplayPrice' => 0,
    'restricted_country_mode' => 0,
    'PS_CATALOG_MODE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52cced6f2e4579_51918792',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52cced6f2e4579_51918792')) {function content_52cced6f2e4579_51918792($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/homez.742/maisona/www/maisona/tools/smarty/plugins/modifier.escape.php';
?>

<?php if (count($_smarty_tpl->tpl_vars['categoryProducts']->value)>0&&$_smarty_tpl->tpl_vars['categoryProducts']->value!==false){?>
<div class="blockproductscategory">
    <div class="frame_wrap frame_wrap_header clearfix">
        <div class="fwh-title"><?php echo smartyTranslate(array('s'=>'Related Products','mod'=>'productscategory'),$_smarty_tpl);?>
</div>
        <div class="fwh-nav">
            <div id="pcrp_prev" class="arrow_left"></div>
            <div id="pcrp_next" class="arrow_right"></div>
        </div>
    </div>
    <div id="productscategory" class="frame_wrap frame_wrap_content clearfix">
        <ul id="productscategory_list">
            <?php  $_smarty_tpl->tpl_vars['categoryProduct'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['categoryProduct']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categoryProducts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['categoryProduct']->key => $_smarty_tpl->tpl_vars['categoryProduct']->value){
$_smarty_tpl->tpl_vars['categoryProduct']->_loop = true;
?>
            <li>
                <a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['categoryProduct']->value['id_product'],$_smarty_tpl->tpl_vars['categoryProduct']->value['link_rewrite'],$_smarty_tpl->tpl_vars['categoryProduct']->value['category'],$_smarty_tpl->tpl_vars['categoryProduct']->value['ean13']);?>
" class="lnk_img" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['categoryProduct']->value['name']);?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['categoryProduct']->value['link_rewrite'],$_smarty_tpl->tpl_vars['categoryProduct']->value['id_image'],'medium_default');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['categoryProduct']->value['name']);?>
" />
                <p class="product_name">
                    <?php echo smarty_modifier_escape($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['categoryProduct']->value['name'],14,'...'), 'htmlall', 'UTF-8');?>

                </p>
                <?php if ($_smarty_tpl->tpl_vars['ProdDisplayPrice']->value&&$_smarty_tpl->tpl_vars['categoryProduct']->value['show_price']==1&&!isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)&&!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value){?>
                <p class="price_display">
                    <span class="price"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['categoryProduct']->value['displayed_price']),$_smarty_tpl);?>
</span>
                </p>
                <?php }?>
                </a>
            </li>
            <?php } ?>
        </ul>
    </div>
</div>
<?php }?>
<?php }} ?>