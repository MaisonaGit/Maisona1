<?php /* Smarty version Smarty-3.1.14, created on 2014-01-08 07:17:14
         compiled from "/homez.742/maisona/www/maisona/themes/raindrop/product-list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:41961825952cced6af1a8a9-19419495%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1c798e32789d582128a0a876b7be9d52e7a4fc3a' => 
    array (
      0 => '/homez.742/maisona/www/maisona/themes/raindrop/product-list.tpl',
      1 => 1388801684,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '41961825952cced6af1a8a9-19419495',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'products' => 0,
    'hide_left_column' => 0,
    'hide_right_column' => 0,
    'product' => 0,
    'link' => 0,
    'homeSize' => 0,
    'specific_prices' => 0,
    'comparator_max_item' => 0,
    'compareProducts' => 0,
    'PS_CATALOG_MODE' => 0,
    'restricted_country_mode' => 0,
    'priceDisplay' => 0,
    'add_prod_display' => 0,
    'static_token' => 0,
    'logged' => 0,
    'cookie' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52cced6b4d2fa1_77423603',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52cced6b4d2fa1_77423603')) {function content_52cced6b4d2fa1_77423603($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/homez.742/maisona/www/maisona/tools/smarty/plugins/modifier.escape.php';
if (!is_callable('smarty_modifier_date_format')) include '/homez.742/maisona/www/maisona/tools/smarty/plugins/modifier.date_format.php';
?><?php if (isset($_smarty_tpl->tpl_vars['products']->value)){?>
    <!-- Products list -->
<div id="product_wrapper" class="grid">
    <div class="row">
    <?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['product']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['product']->iteration=0;
 $_smarty_tpl->tpl_vars['product']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value){
$_smarty_tpl->tpl_vars['product']->_loop = true;
 $_smarty_tpl->tpl_vars['product']->iteration++;
 $_smarty_tpl->tpl_vars['product']->index++;
 $_smarty_tpl->tpl_vars['product']->first = $_smarty_tpl->tpl_vars['product']->index === 0;
 $_smarty_tpl->tpl_vars['product']->last = $_smarty_tpl->tpl_vars['product']->iteration === $_smarty_tpl->tpl_vars['product']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['products']['first'] = $_smarty_tpl->tpl_vars['product']->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['products']['last'] = $_smarty_tpl->tpl_vars['product']->last;
?>
        <div class="ajax_block_product 
            <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['products']['first']){?>first_item<?php }elseif($_smarty_tpl->getVariable('smarty')->value['foreach']['products']['last']){?>last_item<?php }?> 
            item clearfix 
            <?php if (!$_smarty_tpl->tpl_vars['hide_left_column']->value&&!$_smarty_tpl->tpl_vars['hide_right_column']->value){?> 
                col-lg-4 col-md-6 col-sm-4 col-xs-6
            <?php }else{ ?> 
                col-lg-3 col-sm-4 col-xs-6
            <?php }?>">
            <div class="cc-product">
                
                <!--product image-->
                <a href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value['link'], 'htmlall', 'UTF-8');?>
" class="product_image cc-img" title="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value['name'], 'htmlall', 'UTF-8');?>
">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['product']->value['id_image'],'home_default');?>
" alt="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value['legend'], 'htmlall', 'UTF-8');?>
" <?php if (isset($_smarty_tpl->tpl_vars['homeSize']->value)){?> width="<?php echo $_smarty_tpl->tpl_vars['homeSize']->value['width'];?>
" height="<?php echo $_smarty_tpl->tpl_vars['homeSize']->value['height'];?>
"<?php }?> />
                    <?php if (isset($_smarty_tpl->tpl_vars['product']->value['new'])&&$_smarty_tpl->tpl_vars['product']->value['new']==1){?><span class="new"><?php echo smartyTranslate(array('s'=>'New'),$_smarty_tpl);?>
</span><?php }?>
                    
                    <?php if ($_smarty_tpl->tpl_vars['product']->value['specific_prices']){?>
                        <?php $_smarty_tpl->tpl_vars['specific_prices'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['specific_prices'], null, 0);?>
                        <?php if ($_smarty_tpl->tpl_vars['specific_prices']->value['reduction_type']=='percentage'&&($_smarty_tpl->tpl_vars['specific_prices']->value['from']==$_smarty_tpl->tpl_vars['specific_prices']->value['to']||(smarty_modifier_date_format(time(),'%Y-%m-%d %H:%M:%S')<=$_smarty_tpl->tpl_vars['specific_prices']->value['to']&&smarty_modifier_date_format(time(),'%Y-%m-%d %H:%M:%S')>=$_smarty_tpl->tpl_vars['specific_prices']->value['from']))){?>
                                <span class="reduction"><span>-<?php echo $_smarty_tpl->tpl_vars['specific_prices']->value['reduction']*floatval(100);?>
%</span></span>
                        <?php }?>
                    <?php }?>
                    
                </a>
                <!--/product image-->
                
                <div class="cc-foot">
                    <!--product title-->
                    <a href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value['link'], 'htmlall', 'UTF-8');?>
" title="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value['name'], 'htmlall', 'UTF-8');?>
" class="cc-title"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate(smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value['name'], 'htmlall', 'UTF-8'),35,'...');?>
</a>
                    <!--/product title-->
                    
                    <!--compare checkbox-->
                    <div class="compare_block clearfix">
                        <?php if (isset($_smarty_tpl->tpl_vars['comparator_max_item']->value)&&$_smarty_tpl->tpl_vars['comparator_max_item']->value){?>
                            <p class="compare">
                                <label for="comparator_item_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
" class="checkbox-inline">
                                <input type="checkbox" class="comparator" id="comparator_item_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
" value="comparator_item_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
" <?php if (isset($_smarty_tpl->tpl_vars['compareProducts']->value)&&in_array($_smarty_tpl->tpl_vars['product']->value['id_product'],$_smarty_tpl->tpl_vars['compareProducts']->value)){?>checked="checked"<?php }?> /> 
                                <?php echo smartyTranslate(array('s'=>'Select to compare'),$_smarty_tpl);?>
</label>
                            </p>
                        <?php }?>
                    </div>
                    <!--/compare checkbox-->
                    
                    <!--product price-->
                    <div class="cc-price">
                        
                        <?php if ((!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value&&((isset($_smarty_tpl->tpl_vars['product']->value['show_price'])&&$_smarty_tpl->tpl_vars['product']->value['show_price'])||(isset($_smarty_tpl->tpl_vars['product']->value['available_for_order'])&&$_smarty_tpl->tpl_vars['product']->value['available_for_order'])))){?>
                        <div class="content_price">
                            <?php if (isset($_smarty_tpl->tpl_vars['product']->value['show_price'])&&$_smarty_tpl->tpl_vars['product']->value['show_price']&&!isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)){?><span class="price" style="display: inline;"><?php if (!$_smarty_tpl->tpl_vars['priceDisplay']->value){?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['product']->value['price']),$_smarty_tpl);?>
<?php }else{ ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['product']->value['price_tax_exc']),$_smarty_tpl);?>
<?php }?></span><br /><?php }?>
                            
                        </div>
                        
                        <?php }?>
                        
                        <!--product view button-->
                        <!--<a class="button lnk_view" href=""></a>-->
                        <!--/product view button-->
                    </div>
                    <!--/product price-->
                    
                    <div class="prod_desc">
                        <p><a href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value['link'], 'htmlall', 'UTF-8');?>
" title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate(strip_tags($_smarty_tpl->tpl_vars['product']->value['description_short']),360,'...');?>
" ><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate(strip_tags($_smarty_tpl->tpl_vars['product']->value['description_short']),360,'...');?>
</a></p>
                    </div>
                    
                    <?php if (($_smarty_tpl->tpl_vars['product']->value['id_product_attribute']==0||(isset($_smarty_tpl->tpl_vars['add_prod_display']->value)&&($_smarty_tpl->tpl_vars['add_prod_display']->value==1)))&&$_smarty_tpl->tpl_vars['product']->value['available_for_order']&&!isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)&&$_smarty_tpl->tpl_vars['product']->value['minimal_quantity']<=1&&$_smarty_tpl->tpl_vars['product']->value['customizable']!=2&&!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value){?>
                        <?php if (($_smarty_tpl->tpl_vars['product']->value['allow_oosp']||$_smarty_tpl->tpl_vars['product']->value['quantity']>0)){?>
                            <?php if (isset($_smarty_tpl->tpl_vars['static_token']->value)){?>
                                <a class="btn ajax_add_to_cart_button exclusive_small" rel="ajax_id_product_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
" href="<?php ob_start();?><?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
<?php $_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('cart',false,null,"add=1&amp;id_product=".$_tmp1."&amp;token=".((string)$_smarty_tpl->tpl_vars['static_token']->value),false);?>
" title="<?php echo smartyTranslate(array('s'=>'Add to cart'),$_smarty_tpl);?>
"><span></span><?php echo smartyTranslate(array('s'=>'Add to cart'),$_smarty_tpl);?>
</a>
                            <?php }else{ ?>
                                <a class="btn ajax_add_to_cart_button exclusive_small" rel="ajax_id_product_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
" href="<?php ob_start();?><?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
<?php $_tmp2=ob_get_clean();?><?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('cart',false,null,"add=1&amp;id_product=".$_tmp2,false);?>
" title="<?php echo smartyTranslate(array('s'=>'Add to cart'),$_smarty_tpl);?>
"><span></span><?php echo smartyTranslate(array('s'=>'Add to cart'),$_smarty_tpl);?>
</a>
                            <?php }?>						
                        <?php }else{ ?>
                            <span class="btn exclusive_small"><span></span><?php echo smartyTranslate(array('s'=>'Add to cart'),$_smarty_tpl);?>
</span>
                        <?php }?>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['logged']->value&&isset($_smarty_tpl->tpl_vars['cookie']->value->add_to_wishlist_category)&&$_smarty_tpl->tpl_vars['cookie']->value->add_to_wishlist_category){?>
                    <a href="#" class="add_wishlist_button" onclick="WishlistCart('wishlist_block_top_list', 'add', '<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
', <?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product_attribute']);?>
, 1); return false;" title="<?php echo smartyTranslate(array('s'=>'Add to my wishlist'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Add to my wishlist'),$_smarty_tpl);?>
</a>
                    <?php }?>
                        
                </div>
            </div>
            
            <div class="cc-product-hover">
                <?php if ($_smarty_tpl->tpl_vars['logged']->value&&isset($_smarty_tpl->tpl_vars['cookie']->value->add_to_wishlist_category)&&$_smarty_tpl->tpl_vars['cookie']->value->add_to_wishlist_category&&$_smarty_tpl->tpl_vars['cookie']->value->add_to_wishlist_position=='center'){?>
                <a href="#" class="add_wishlist_button" onclick="WishlistCart('wishlist_block_top_list', 'add', '<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
', <?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product_attribute']);?>
, 1); return false;" title="<?php echo smartyTranslate(array('s'=>'Add to my wishlist'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Add to my wishlist'),$_smarty_tpl);?>
</a>
                <?php }?>
                <!--product image-->
                <a href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value['link'], 'htmlall', 'UTF-8');?>
" class="product_image" title="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value['name'], 'htmlall', 'UTF-8');?>
">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['product']->value['id_image'],'home_default');?>
" alt="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value['legend'], 'htmlall', 'UTF-8');?>
" <?php if (isset($_smarty_tpl->tpl_vars['homeSize']->value)){?> width="<?php echo $_smarty_tpl->tpl_vars['homeSize']->value['width'];?>
" height="<?php echo $_smarty_tpl->tpl_vars['homeSize']->value['height'];?>
"<?php }?> />
                    <?php if (isset($_smarty_tpl->tpl_vars['product']->value['new'])&&$_smarty_tpl->tpl_vars['product']->value['new']==1){?><span class="new"><?php echo smartyTranslate(array('s'=>'New'),$_smarty_tpl);?>
</span><?php }?>
                    
                    <?php if ($_smarty_tpl->tpl_vars['product']->value['specific_prices']){?>
                        <?php $_smarty_tpl->tpl_vars['specific_prices'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['specific_prices'], null, 0);?>
                        <?php if ($_smarty_tpl->tpl_vars['specific_prices']->value['reduction_type']=='percentage'&&($_smarty_tpl->tpl_vars['specific_prices']->value['from']==$_smarty_tpl->tpl_vars['specific_prices']->value['to']||(smarty_modifier_date_format(time(),'%Y-%m-%d %H:%M:%S')<=$_smarty_tpl->tpl_vars['specific_prices']->value['to']&&smarty_modifier_date_format(time(),'%Y-%m-%d %H:%M:%S')>=$_smarty_tpl->tpl_vars['specific_prices']->value['from']))){?>
                                <span class="reduction"><span>-<?php echo $_smarty_tpl->tpl_vars['specific_prices']->value['reduction']*floatval(100);?>
%</span></span>
                        <?php }?>
                    <?php }?>
                    
                </a>
                <!--/product image-->
                
                <div class="cc-foot">
                    <!--product title-->
                    <a href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value['link'], 'htmlall', 'UTF-8');?>
" title="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value['name'], 'htmlall', 'UTF-8');?>
" class="cc-title"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate(smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value['name'], 'htmlall', 'UTF-8'),35,'...');?>
</a>
                    <!--/product title-->
                    <?php if (($_smarty_tpl->tpl_vars['product']->value['id_product_attribute']==0||(isset($_smarty_tpl->tpl_vars['add_prod_display']->value)&&($_smarty_tpl->tpl_vars['add_prod_display']->value==1)))&&$_smarty_tpl->tpl_vars['product']->value['available_for_order']&&!isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)&&$_smarty_tpl->tpl_vars['product']->value['minimal_quantity']<=1&&$_smarty_tpl->tpl_vars['product']->value['customizable']!=2&&!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value){?>
                        <?php if (($_smarty_tpl->tpl_vars['product']->value['allow_oosp']||$_smarty_tpl->tpl_vars['product']->value['quantity']>0)){?>
                            <?php if (isset($_smarty_tpl->tpl_vars['static_token']->value)){?>
                                <a class="btn exclusive_small ajax_add_to_cart_button" rel="ajax_id_product_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
" href="<?php ob_start();?><?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
<?php $_tmp3=ob_get_clean();?><?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('cart',false,null,"add=1&amp;id_product=".$_tmp3."&amp;token=".((string)$_smarty_tpl->tpl_vars['static_token']->value),false);?>
" title="<?php echo smartyTranslate(array('s'=>'Add to cart'),$_smarty_tpl);?>
"><span></span><?php echo smartyTranslate(array('s'=>'Add to cart'),$_smarty_tpl);?>
</a>
                            <?php }else{ ?>
                                <a class="btn exclusive_small ajax_add_to_cart_button" rel="ajax_id_product_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
" href="<?php ob_start();?><?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
<?php $_tmp4=ob_get_clean();?><?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('cart',false,null,"add=1&amp;id_product=".$_tmp4,false);?>
" title="<?php echo smartyTranslate(array('s'=>'Add to cart'),$_smarty_tpl);?>
"><span></span><?php echo smartyTranslate(array('s'=>'Add to cart'),$_smarty_tpl);?>
</a>
                            <?php }?>						
                        <?php }else{ ?>
                            <span class="btn exclusive_small"><span></span><?php echo smartyTranslate(array('s'=>'Add to cart'),$_smarty_tpl);?>
</span>
                        <?php }?>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['logged']->value&&isset($_smarty_tpl->tpl_vars['cookie']->value->add_to_wishlist_category)&&$_smarty_tpl->tpl_vars['cookie']->value->add_to_wishlist_category&&$_smarty_tpl->tpl_vars['cookie']->value->add_to_wishlist_position=='bottom'){?>
                    <a href="#" class="add_wishlist_button" onclick="WishlistCart('wishlist_block_top_list', 'add', '<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
', <?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product_attribute']);?>
, 1); return false;" title="<?php echo smartyTranslate(array('s'=>'Add to my wishlist'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Add to my wishlist'),$_smarty_tpl);?>
</a>
                    <?php }?>
                    <!--product price-->
                    <div class="cc-price">
                        
                        <?php if ((!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value&&((isset($_smarty_tpl->tpl_vars['product']->value['show_price'])&&$_smarty_tpl->tpl_vars['product']->value['show_price'])||(isset($_smarty_tpl->tpl_vars['product']->value['available_for_order'])&&$_smarty_tpl->tpl_vars['product']->value['available_for_order'])))){?>
                        <div class="content_price">
                            <?php if (isset($_smarty_tpl->tpl_vars['product']->value['show_price'])&&$_smarty_tpl->tpl_vars['product']->value['show_price']&&!isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)){?><span class="price" style="display: inline;"><?php if (!$_smarty_tpl->tpl_vars['priceDisplay']->value){?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['product']->value['price']),$_smarty_tpl);?>
<?php }else{ ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['product']->value['price_tax_exc']),$_smarty_tpl);?>
<?php }?></span><br /><?php }?>
                        </div>
                        <?php }?>
                        <!--compare checkbox-->
                        <div class="compare_block clearfix">
                            <?php if (isset($_smarty_tpl->tpl_vars['comparator_max_item']->value)&&$_smarty_tpl->tpl_vars['comparator_max_item']->value){?>
                                <p class="compare">
                                    <label for="comparator_item_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
" class="checkbox-inline">
                                    <input type="checkbox" class="comparator" id="comparator_item_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
" value="comparator_item_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
" <?php if (isset($_smarty_tpl->tpl_vars['compareProducts']->value)&&in_array($_smarty_tpl->tpl_vars['product']->value['id_product'],$_smarty_tpl->tpl_vars['compareProducts']->value)){?>checked="checked"<?php }?> /> 
                                    <?php echo smartyTranslate(array('s'=>'Select to compare'),$_smarty_tpl);?>
</label>
                                </p>
                            <?php }?>
                        </div>
                        <!--/compare checkbox-->
                    </div>
                    <!--/product price-->
                </div>
                
            </div>
            
                
        </div>
        <?php if ($_smarty_tpl->tpl_vars['product']->last){?><div class="clearfix clearRow"></div><?php }?>
        <?php if (!$_smarty_tpl->tpl_vars['hide_left_column']->value&&!$_smarty_tpl->tpl_vars['hide_right_column']->value){?> 
            <?php if ($_smarty_tpl->tpl_vars['product']->iteration%3==0&&!$_smarty_tpl->tpl_vars['product']->last){?><div class="clearfix clearRow <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['bsvisible'][0][0]->bsvisible(array('val'=>true,'media'=>'lg'),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['bsvisible'][0][0]->bsvisible(array('val'=>true,'media'=>'sm'),$_smarty_tpl);?>
"></div><?php }?>
            <?php if ($_smarty_tpl->tpl_vars['product']->iteration%2==0&&!$_smarty_tpl->tpl_vars['product']->last){?><div class="clearfix clearRow <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['bsvisible'][0][0]->bsvisible(array('val'=>true,'media'=>'md'),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['bsvisible'][0][0]->bsvisible(array('val'=>true,'media'=>'xs'),$_smarty_tpl);?>
"></div><?php }?>
        <?php }else{ ?> 
            <?php if ($_smarty_tpl->tpl_vars['product']->iteration%4==0&&!$_smarty_tpl->tpl_vars['product']->last){?><div class="clearfix clearRow <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['bsvisible'][0][0]->bsvisible(array('val'=>true,'media'=>'lg'),$_smarty_tpl);?>
"></div><?php }?>
            <?php if ($_smarty_tpl->tpl_vars['product']->iteration%3==0&&!$_smarty_tpl->tpl_vars['product']->last){?><div class="clearfix clearRow <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['bsvisible'][0][0]->bsvisible(array('val'=>true,'media'=>'md'),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['bsvisible'][0][0]->bsvisible(array('val'=>true,'media'=>'sm'),$_smarty_tpl);?>
"></div><?php }?>
            <?php if ($_smarty_tpl->tpl_vars['product']->iteration%2==0&&!$_smarty_tpl->tpl_vars['product']->last){?><div class="clearfix clearRow <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['bsvisible'][0][0]->bsvisible(array('val'=>true,'media'=>'xs'),$_smarty_tpl);?>
"></div><?php }?>
        <?php }?>
    <?php } ?>
    </div>
</div>
    <!-- /Products list -->
<?php }?>
<?php }} ?>