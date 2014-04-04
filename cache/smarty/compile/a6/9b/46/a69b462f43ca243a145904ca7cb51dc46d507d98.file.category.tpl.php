<?php /* Smarty version Smarty-3.1.14, created on 2014-01-08 07:17:09
         compiled from "/homez.742/maisona/www/maisona/themes/raindrop/category.tpl" */ ?>
<?php /*%%SmartyHeaderCode:165384125152cced65737711-07873283%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a69b462f43ca243a145904ca7cb51dc46d507d98' => 
    array (
      0 => '/homez.742/maisona/www/maisona/themes/raindrop/category.tpl',
      1 => 1388801682,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '165384125152cced65737711-07873283',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'category' => 0,
    'scenes' => 0,
    'link' => 0,
    'categorySize' => 0,
    'subcategories' => 0,
    'hide_left_column' => 0,
    'hide_right_column' => 0,
    'subcategory' => 0,
    'img_cat_dir' => 0,
    'categoryNameComplement' => 0,
    'products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52cced65999165_16149737',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52cced65999165_16149737')) {function content_52cced65999165_16149737($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/homez.742/maisona/www/maisona/tools/smarty/plugins/modifier.escape.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php if (isset($_smarty_tpl->tpl_vars['category']->value)){?>
    <?php if ($_smarty_tpl->tpl_vars['category']->value->id&&$_smarty_tpl->tpl_vars['category']->value->active){?>
    <!-- top image -->
    <?php if ($_smarty_tpl->tpl_vars['scenes']->value||$_smarty_tpl->tpl_vars['category']->value->description||$_smarty_tpl->tpl_vars['category']->value->id_image){?>
    <div id="category_image" class="frame_wrap">
        <?php if ($_smarty_tpl->tpl_vars['scenes']->value){?>
            <!-- Scenes -->
            <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./scenes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('scenes'=>$_smarty_tpl->tpl_vars['scenes']->value), 0);?>

        <?php }else{ ?>
            <!-- Category image -->
            <?php if ($_smarty_tpl->tpl_vars['category']->value->id_image){?>
            <img class="img-responsive center-block" src="<?php echo $_smarty_tpl->tpl_vars['link']->value->getCatImageLink($_smarty_tpl->tpl_vars['category']->value->link_rewrite,$_smarty_tpl->tpl_vars['category']->value->id_image,'category_default');?>
" alt="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['category']->value->name, 'htmlall', 'UTF-8');?>
" title="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['category']->value->name, 'htmlall', 'UTF-8');?>
" id="categoryImage" width="<?php echo $_smarty_tpl->tpl_vars['categorySize']->value['width'];?>
" height="<?php echo $_smarty_tpl->tpl_vars['categorySize']->value['height'];?>
" />
            <?php }?>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['category']->value->description){?>
            <div class="cat_desc <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['bsvisible'][0][0]->bsvisible(array('val'=>false,'media'=>'xs'),$_smarty_tpl);?>
">
                <?php echo $_smarty_tpl->tpl_vars['category']->value->description;?>

            </div>
        <?php }?>
    </div>
    <?php }?>
    <!-- end top image -->
                
    <!-- Subcategories -->
    <?php if (isset($_smarty_tpl->tpl_vars['subcategories']->value)){?>
    <div id="subcategories">
        <div class="frame_wrap frame_wrap_header clearfix">
            <div class="fwh-title"><?php echo smartyTranslate(array('s'=>'Subcategories'),$_smarty_tpl);?>
</div>
        </div>
        <div class="frame_wrap frame_wrap_content">
            <div class="row">
            <?php  $_smarty_tpl->tpl_vars['subcategory'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['subcategory']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['subcategories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['subcategory']->key => $_smarty_tpl->tpl_vars['subcategory']->value){
$_smarty_tpl->tpl_vars['subcategory']->_loop = true;
?>
                <div class="subcat_img_holder clearfix 
                    <?php if (!$_smarty_tpl->tpl_vars['hide_left_column']->value&&!$_smarty_tpl->tpl_vars['hide_right_column']->value){?> 
                        col-lg-6 col-xs-6
                    <?php }else{ ?> 
                        col-lg-3 col-md-4 col-xs-6
                    <?php }?> ">
                    <div class="subcat_img">
                        <a href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['link']->value->getCategoryLink($_smarty_tpl->tpl_vars['subcategory']->value['id_category'],$_smarty_tpl->tpl_vars['subcategory']->value['link_rewrite']), 'htmlall', 'UTF-8');?>
" title="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['subcategory']->value['name'], 'htmlall', 'UTF-8');?>
">
                            <?php if ($_smarty_tpl->tpl_vars['subcategory']->value['id_image']){?>
                                <img src="<?php echo $_smarty_tpl->tpl_vars['link']->value->getCatImageLink($_smarty_tpl->tpl_vars['subcategory']->value['link_rewrite'],$_smarty_tpl->tpl_vars['subcategory']->value['id_image'],'subcategory');?>
" alt="" class="img-responsive center-block" />
                            <?php }else{ ?>
                                <img src="<?php echo $_smarty_tpl->tpl_vars['img_cat_dir']->value;?>
default-subcategory.jpg" alt="" class="img-responsive center-block" />
                            <?php }?>
                        </a>
                    </div>
                    <div class="subcat_img_title">
                        <a href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['link']->value->getCategoryLink($_smarty_tpl->tpl_vars['subcategory']->value['id_category'],$_smarty_tpl->tpl_vars['subcategory']->value['link_rewrite']), 'htmlall', 'UTF-8');?>
"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['subcategory']->value['name'], 'htmlall', 'UTF-8');?>
</a>
                    </div>
                    
                </div>
            <?php } ?>
            </div>
        </div>
    </div>
    <?php }?>
    <!-- end Subcategories -->
    
    <!-- title -->
    <div class="frame_wrap frame_wrap_header clearfix">
        <div class="fwh-title">
            <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['category']->value->name, 'htmlall', 'UTF-8');?>
<?php if (isset($_smarty_tpl->tpl_vars['categoryNameComplement']->value)){?><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['categoryNameComplement']->value, 'htmlall', 'UTF-8');?>
<?php }?>
        </div>
        <div class="frame_secondary clearfix">
            <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-views.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

            <div class="category-product-count <?php if (!$_smarty_tpl->tpl_vars['hide_left_column']->value&&!$_smarty_tpl->tpl_vars['hide_right_column']->value){?>hidden<?php }else{ ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['bsvisible'][0][0]->bsvisible(array('val'=>true,'media'=>'lg'),$_smarty_tpl);?>
<?php }?>">
                <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./category-count.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

            </div>
            <div class="sortPagiBar clearfix">
                <?php echo $_smarty_tpl->getSubTemplate ("./product-sort.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

                <?php echo $_smarty_tpl->getSubTemplate ("./product-compare.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

                <?php echo $_smarty_tpl->getSubTemplate ("./nbr-product-page.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

            </div>
        </div>
    </div>
    <!-- end title -->
        
    <!--content-->
    <?php if ($_smarty_tpl->tpl_vars['products']->value){?>
    <div class="frame_wrap frame_wrap_content">
        <?php echo $_smarty_tpl->getSubTemplate ("./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('products'=>$_smarty_tpl->tpl_vars['products']->value), 0);?>

    </div>
    <!--/content-->
    
    <!--pagination-->
    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    <!--/pagination-->
    
    <?php }?>
    <?php }elseif($_smarty_tpl->tpl_vars['category']->value->id){?>
        <p class="warning"><?php echo smartyTranslate(array('s'=>'This category is currently unavailable.'),$_smarty_tpl);?>
</p>
    <?php }?>
<?php }?>
<?php }} ?>