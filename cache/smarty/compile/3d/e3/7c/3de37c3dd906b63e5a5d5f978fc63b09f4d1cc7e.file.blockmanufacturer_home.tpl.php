<?php /* Smarty version Smarty-3.1.14, created on 2014-01-08 04:16:45
         compiled from "/homez.742/maisona/www/maisona/themes/raindrop/modules/blockmanufacturer/blockmanufacturer_home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:37405024552ccc31d254384-52163692%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3de37c3dd906b63e5a5d5f978fc63b09f4d1cc7e' => 
    array (
      0 => '/homez.742/maisona/www/maisona/themes/raindrop/modules/blockmanufacturer/blockmanufacturer_home.tpl',
      1 => 1388801684,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '37405024552ccc31d254384-52163692',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'display_link_manufacturer' => 0,
    'link' => 0,
    'manufacturers' => 0,
    'home_nb' => 0,
    'manufacturer' => 0,
    'img_manu_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52ccc31d2b6cf5_79415651',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52ccc31d2b6cf5_79415651')) {function content_52ccc31d2b6cf5_79415651($_smarty_tpl) {?><!-- Block manufacturers module -->
<div id="manufacturers_block_home" class="block blockmanufacturer">
    <div class="frame_wrap frame_wrap_header clearfix">
        <div class="fwh-title">
        <?php if ($_smarty_tpl->tpl_vars['display_link_manufacturer']->value){?><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('manufacturer');?>
" title="<?php echo smartyTranslate(array('s'=>'Manufacturers','mod'=>'blockmanufacturer'),$_smarty_tpl);?>
"><?php }?><?php echo smartyTranslate(array('s'=>'Manufacturers','mod'=>'blockmanufacturer'),$_smarty_tpl);?>
<?php if ($_smarty_tpl->tpl_vars['display_link_manufacturer']->value){?></a><?php }?>
        </div>
        <div class="fwh-nav">
            <div id="bmc_prev" class="arrow_left"></div>
            <div id="bmc_next" class="arrow_right"></div>
        </div>
    </div>
    <div class="block_content frame_wrap frame_wrap_content">
<?php if ($_smarty_tpl->tpl_vars['manufacturers']->value){?>
    <ul id="bskManufacturersCarousel">
    <?php  $_smarty_tpl->tpl_vars['manufacturer'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['manufacturer']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['manufacturers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['manufacturer']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['manufacturer']->iteration=0;
 $_smarty_tpl->tpl_vars['manufacturer']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['manufacturer']->key => $_smarty_tpl->tpl_vars['manufacturer']->value){
$_smarty_tpl->tpl_vars['manufacturer']->_loop = true;
 $_smarty_tpl->tpl_vars['manufacturer']->iteration++;
 $_smarty_tpl->tpl_vars['manufacturer']->index++;
 $_smarty_tpl->tpl_vars['manufacturer']->first = $_smarty_tpl->tpl_vars['manufacturer']->index === 0;
 $_smarty_tpl->tpl_vars['manufacturer']->last = $_smarty_tpl->tpl_vars['manufacturer']->iteration === $_smarty_tpl->tpl_vars['manufacturer']->total;
?>
        <?php if ($_smarty_tpl->tpl_vars['manufacturer']->iteration<=$_smarty_tpl->tpl_vars['home_nb']->value){?>
        <li class="<?php if ($_smarty_tpl->tpl_vars['manufacturer']->last){?>last_item<?php }elseif($_smarty_tpl->tpl_vars['manufacturer']->first){?>first_item<?php }else{ ?>item<?php }?>">
            <a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getmanufacturerLink($_smarty_tpl->tpl_vars['manufacturer']->value['id_manufacturer'],$_smarty_tpl->tpl_vars['manufacturer']->value['link_rewrite']);?>
" title="<?php echo smartyTranslate(array('s'=>'More about','mod'=>'blockmanufacturer'),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['manufacturer']->value['name'];?>
">
                <img src="<?php echo $_smarty_tpl->tpl_vars['img_manu_dir']->value;?>
<?php echo $_smarty_tpl->tpl_vars['manufacturer']->value['id_manufacturer'];?>
-craftsman_bsk.jpg" />
            </a>
        </li>
        <?php }?>
    <?php } ?>
    </ul>
<?php }else{ ?>
    <p><?php echo smartyTranslate(array('s'=>'No manufacturer','mod'=>'blockmanufacturer'),$_smarty_tpl);?>
</p>
<?php }?>
    </div>
</div>
<!-- /Block manufacturers module -->
<?php }} ?>