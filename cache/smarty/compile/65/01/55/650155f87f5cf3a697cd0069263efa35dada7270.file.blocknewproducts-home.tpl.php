<?php /* Smarty version Smarty-3.1.14, created on 2014-03-12 20:01:05
         compiled from "/homez.742/maisona/www/maisona/themes/raindrop_yarflam/modules/blocknewproducts/blocknewproducts-home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21065135545320aef1c3c439-21217703%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '650155f87f5cf3a697cd0069263efa35dada7270' => 
    array (
      0 => '/homez.742/maisona/www/maisona/themes/raindrop_yarflam/modules/blocknewproducts/blocknewproducts-home.tpl',
      1 => 1393177453,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21065135545320aef1c3c439-21217703',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'new_products' => 0,
    'product' => 0,
    'link' => 0,
    'homeSize' => 0,
    'specific_prices' => 0,
    'restricted_country_mode' => 0,
    'PS_CATALOG_MODE' => 0,
    'priceDisplay' => 0,
    'logged' => 0,
    'add_to_wishlist_home' => 0,
    'add_to_wishlist_position' => 0,
    'avgStars' => 0,
    'img_dir' => 0,
    'add_prod_display' => 0,
    'static_token' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5320aef2032e00_21621472',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5320aef2032e00_21621472')) {function content_5320aef2032e00_21621472($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/homez.742/maisona/www/maisona/tools/smarty/plugins/modifier.escape.php';
if (!is_callable('smarty_modifier_date_format')) include '/homez.742/maisona/www/maisona/tools/smarty/plugins/modifier.date_format.php';
?><!-- MODULE Block new products -->
<div id="newproducts_home" class="products_block tab-pane">
<?php if ($_smarty_tpl->tpl_vars['new_products']->value!==false){?>
    <div class="row">
    <?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['new_products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['product']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['product']->iteration=0;
 $_smarty_tpl->tpl_vars['product']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value){
$_smarty_tpl->tpl_vars['product']->_loop = true;
 $_smarty_tpl->tpl_vars['product']->iteration++;
 $_smarty_tpl->tpl_vars['product']->index++;
 $_smarty_tpl->tpl_vars['product']->last = $_smarty_tpl->tpl_vars['product']->iteration === $_smarty_tpl->tpl_vars['product']->total;
?>
        <div class="item col-lg-3 col-sm-4 col-xs-6">
            <div class="cc-product">
                <a href="<?php echo $_smarty_tpl->tpl_vars['product']->value['link'];?>
" title="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value['name'], 'html', 'UTF-8');?>
" class="product_image">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['product']->value['id_image'],'home_default');?>
" height="<?php echo $_smarty_tpl->tpl_vars['homeSize']->value['height'];?>
" width="<?php echo $_smarty_tpl->tpl_vars['homeSize']->value['width'];?>
" alt="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value['name'], 'html', 'UTF-8');?>
" />
                    <?php if (isset($_smarty_tpl->tpl_vars['product']->value['new'])&&$_smarty_tpl->tpl_vars['product']->value['new']==1){?><span class="new"><?php echo smartyTranslate(array('s'=>'New','mod'=>'blocknewproducts'),$_smarty_tpl);?>
</span><?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['product']->value['specific_prices']){?>
                        <?php $_smarty_tpl->tpl_vars['specific_prices'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['specific_prices'], null, 0);?>
                        <?php if ($_smarty_tpl->tpl_vars['specific_prices']->value['reduction_type']=='percentage'&&($_smarty_tpl->tpl_vars['specific_prices']->value['from']==$_smarty_tpl->tpl_vars['specific_prices']->value['to']||(smarty_modifier_date_format(time(),'%Y-%m-%d %H:%M:%S')<=$_smarty_tpl->tpl_vars['specific_prices']->value['to']&&smarty_modifier_date_format(time(),'%Y-%m-%d %H:%M:%S')>=$_smarty_tpl->tpl_vars['specific_prices']->value['from']))){?>
                                <span class="reduction"><span>-<?php echo $_smarty_tpl->tpl_vars['specific_prices']->value['reduction']*floatval(100);?>
%</span></span>
                        <?php }?>
                    <?php }?>
                </a>
                <div class="cc-foot">
                    <a class="cc-title" href="<?php echo $_smarty_tpl->tpl_vars['product']->value['link'];?>
" title="<?php echo smarty_modifier_escape($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['product']->value['name'],50,'...'), 'htmlall', 'UTF-8');?>
"><?php echo smarty_modifier_escape($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['product']->value['name'],35,'...'), 'htmlall', 'UTF-8');?>
</a>
                    <?php if ($_smarty_tpl->tpl_vars['product']->value['show_price']&&!isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)&&!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value){?>
                        <div class="cc-price">
                            <span class="price-discount">
                            <?php if (!$_smarty_tpl->tpl_vars['priceDisplay']->value){?>
                                <?php if ($_smarty_tpl->tpl_vars['product']->value['price_without_reduction']>$_smarty_tpl->tpl_vars['product']->value['price']){?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPrice'][0][0]->displayWtPrice(array('p'=>$_smarty_tpl->tpl_vars['product']->value['price_without_reduction']),$_smarty_tpl);?>
<?php }?>
                            <?php }else{ ?>
                                <?php if ($_smarty_tpl->tpl_vars['product']->value['price_without_reduction']>$_smarty_tpl->tpl_vars['product']->value['price']){?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPrice'][0][0]->displayWtPrice(array('p'=>$_smarty_tpl->tpl_vars['product']->value['price_without_reduction']),$_smarty_tpl);?>
<?php }?>
                            <?php }?>
                            </span>
                            <?php if (!$_smarty_tpl->tpl_vars['priceDisplay']->value){?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['product']->value['price']),$_smarty_tpl);?>
<?php }else{ ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['product']->value['price_tax_exc']),$_smarty_tpl);?>
<?php }?>
                        </div>
                    <?php }else{ ?><div style="height:21px;"></div><?php }?>
                </div>
            </div>
                    
            <div class="cc-product-hover">
                <?php if ($_smarty_tpl->tpl_vars['logged']->value&&isset($_smarty_tpl->tpl_vars['add_to_wishlist_home']->value)&&$_smarty_tpl->tpl_vars['add_to_wishlist_home']->value&&$_smarty_tpl->tpl_vars['add_to_wishlist_position']->value=='center'){?>
                <a href="#" class="add_wishlist_button" onclick="WishlistCart('wishlist_block_top_list', 'add', '<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
', <?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product_attribute']);?>
, 1); return false;" title="<?php echo smartyTranslate(array('s'=>'Add to my wishlist','mod'=>'blocknewproducts'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Add to my wishlist','mod'=>'blocknewproducts'),$_smarty_tpl);?>
</a>
                <?php }?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['product']->value['link'];?>
" title="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value['name'], 'html', 'UTF-8');?>
" class="product_image">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['product']->value['id_image'],'home_default');?>
" height="<?php echo $_smarty_tpl->tpl_vars['homeSize']->value['height'];?>
" width="<?php echo $_smarty_tpl->tpl_vars['homeSize']->value['width'];?>
" alt="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value['name'], 'html', 'UTF-8');?>
" />
                    <?php if (isset($_smarty_tpl->tpl_vars['product']->value['new'])&&$_smarty_tpl->tpl_vars['product']->value['new']==1){?><span class="new"><?php echo smartyTranslate(array('s'=>'New','mod'=>'blocknewproducts'),$_smarty_tpl);?>
</span><?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['product']->value['specific_prices']){?>
                        <?php $_smarty_tpl->tpl_vars['specific_prices'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['specific_prices'], null, 0);?>
                        <?php if ($_smarty_tpl->tpl_vars['specific_prices']->value['reduction_type']=='percentage'&&($_smarty_tpl->tpl_vars['specific_prices']->value['from']==$_smarty_tpl->tpl_vars['specific_prices']->value['to']||(smarty_modifier_date_format(time(),'%Y-%m-%d %H:%M:%S')<=$_smarty_tpl->tpl_vars['specific_prices']->value['to']&&smarty_modifier_date_format(time(),'%Y-%m-%d %H:%M:%S')>=$_smarty_tpl->tpl_vars['specific_prices']->value['from']))){?>
                                <span class="reduction"><span>-<?php echo $_smarty_tpl->tpl_vars['specific_prices']->value['reduction']*floatval(100);?>
%</span></span>
                        <?php }?>
                    <?php }?>
                    <div class="product_desc"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['product']->value['description_short']),65,'...');?>
</div>
                </a>
                <div class="cc-foot">
                    <a class="cc-title" href="<?php echo $_smarty_tpl->tpl_vars['product']->value['link'];?>
" title="<?php echo smarty_modifier_escape($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['product']->value['name'],50,'...'), 'htmlall', 'UTF-8');?>
"><?php echo smarty_modifier_escape($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['product']->value['name'],35,'...'), 'htmlall', 'UTF-8');?>
</a>
                    
                    <?php if (isset($_smarty_tpl->tpl_vars['avgStars']->value)){?>
                    <div class="cc-rating">
                        <?php if ($_smarty_tpl->tpl_vars['avgStars']->value[$_smarty_tpl->tpl_vars['product']->index]){?>
                            <img src="<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
stars/small/stars_<?php echo $_smarty_tpl->tpl_vars['avgStars']->value[$_smarty_tpl->tpl_vars['product']->index];?>
.gif" alt="<?php echo $_smarty_tpl->tpl_vars['avgStars']->value[$_smarty_tpl->tpl_vars['product']->index];?>
 stars" />
                        <?php }?>
                    </div>
                    <?php }?>
                    
                    <?php if (($_smarty_tpl->tpl_vars['product']->value['id_product_attribute']==0||(isset($_smarty_tpl->tpl_vars['add_prod_display']->value)&&($_smarty_tpl->tpl_vars['add_prod_display']->value==1)))&&$_smarty_tpl->tpl_vars['product']->value['available_for_order']&&!isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)&&$_smarty_tpl->tpl_vars['product']->value['minimal_quantity']==1&&$_smarty_tpl->tpl_vars['product']->value['customizable']!=2&&!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value){?>
                        <?php if (($_smarty_tpl->tpl_vars['product']->value['quantity']>0||$_smarty_tpl->tpl_vars['product']->value['allow_oosp'])){?>
                        <a class="btn exclusive_small ajax_add_to_cart_button" rel="ajax_id_product_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
" href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('cart');?>
?qty=1&amp;id_product=<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
&amp;token=<?php echo $_smarty_tpl->tpl_vars['static_token']->value;?>
&amp;add" title="<?php echo smartyTranslate(array('s'=>'Add to cart','mod'=>'blocknewproducts'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Add to cart','mod'=>'blocknewproducts'),$_smarty_tpl);?>
</a>
                        <?php }else{ ?>
                        <span class="btn exclusive_small"><?php echo smartyTranslate(array('s'=>'Add to cart','mod'=>'blocknewproducts'),$_smarty_tpl);?>
</span>
                        <?php }?>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['logged']->value&&isset($_smarty_tpl->tpl_vars['add_to_wishlist_home']->value)&&$_smarty_tpl->tpl_vars['add_to_wishlist_home']->value&&$_smarty_tpl->tpl_vars['add_to_wishlist_position']->value=='bottom'){?>
                    <a href="#" class="add_wishlist_button" onclick="WishlistCart('wishlist_block_top_list', 'add', '<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
', <?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product_attribute']);?>
, 1); return false;" title="<?php echo smartyTranslate(array('s'=>'Add to my wishlist','mod'=>'blocknewproducts'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Add to my wishlist','mod'=>'blocknewproducts'),$_smarty_tpl);?>
</a>
                    <?php }?>
                    
                    <?php if ($_smarty_tpl->tpl_vars['product']->value['show_price']&&!isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)&&!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value){?>
                        <div class="cc-price">
                            <span class="price-discount">
                            <?php if (!$_smarty_tpl->tpl_vars['priceDisplay']->value){?>
                                <?php if ($_smarty_tpl->tpl_vars['product']->value['price_without_reduction']>$_smarty_tpl->tpl_vars['product']->value['price']){?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPrice'][0][0]->displayWtPrice(array('p'=>$_smarty_tpl->tpl_vars['product']->value['price_without_reduction']),$_smarty_tpl);?>
<?php }?>
                            <?php }else{ ?>
                                <?php if ($_smarty_tpl->tpl_vars['product']->value['price_without_reduction']>$_smarty_tpl->tpl_vars['product']->value['price']){?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPrice'][0][0]->displayWtPrice(array('p'=>$_smarty_tpl->tpl_vars['product']->value['price_without_reduction']),$_smarty_tpl);?>
<?php }?>
                            <?php }?>
                            </span>
                            <?php if (!$_smarty_tpl->tpl_vars['priceDisplay']->value){?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['product']->value['price']),$_smarty_tpl);?>
<?php }else{ ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['product']->value['price_tax_exc']),$_smarty_tpl);?>
<?php }?>
                        </div>
                    <?php }else{ ?><div style="height:21px;"></div><?php }?>
                </div>
            </div>
        </div>
        <?php if ($_smarty_tpl->tpl_vars['product']->last){?><div class="clearfix clearRow"></div><?php }?>
        <?php if ($_smarty_tpl->tpl_vars['product']->iteration%4==0&&!$_smarty_tpl->tpl_vars['product']->last){?><div class="clearfix clearRow <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['bsvisible'][0][0]->bsvisible(array('val'=>true,'media'=>'lg'),$_smarty_tpl);?>
"></div><?php }?>
        <?php if ($_smarty_tpl->tpl_vars['product']->iteration%3==0&&!$_smarty_tpl->tpl_vars['product']->last){?><div class="clearfix clearRow <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['bsvisible'][0][0]->bsvisible(array('val'=>true,'media'=>'md'),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['bsvisible'][0][0]->bsvisible(array('val'=>true,'media'=>'sm'),$_smarty_tpl);?>
"></div><?php }?>
        <?php if ($_smarty_tpl->tpl_vars['product']->iteration%2==0&&!$_smarty_tpl->tpl_vars['product']->last){?><div class="clearfix clearRow <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['bsvisible'][0][0]->bsvisible(array('val'=>true,'media'=>'xs'),$_smarty_tpl);?>
"></div><?php }?>
    <?php } ?>
    </div>
    <center><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('new-products');?>
" title="<?php echo smartyTranslate(array('s'=>'All new products','mod'=>'blocknewproducts'),$_smarty_tpl);?>
" class="btn button"><?php echo smartyTranslate(array('s'=>'All new products','mod'=>'blocknewproducts'),$_smarty_tpl);?>
</a></center>
<?php }else{ ?>
    <p>&raquo; <?php echo smartyTranslate(array('s'=>'No new products at this time','mod'=>'blocknewproducts'),$_smarty_tpl);?>
</p>
<?php }?>
</div>
<!-- /MODULE Block new products --><?php }} ?>