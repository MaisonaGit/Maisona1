<?php /* Smarty version Smarty-3.1.14, created on 2014-01-08 04:16:42
         compiled from "/homez.742/maisona/www/maisona/themes/raindrop/modules/blockuserinfo/topblockuserinfo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:184023486552ccc31a1478c7-62186276%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a14e54088d983f9e3c5db2ff8d0e67fd635d1c00' => 
    array (
      0 => '/homez.742/maisona/www/maisona/themes/raindrop/modules/blockuserinfo/topblockuserinfo.tpl',
      1 => 1388801684,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '184023486552ccc31a1478c7-62186276',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'logged' => 0,
    'link' => 0,
    'cookie' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52ccc31a1baa37_75485630',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52ccc31a1baa37_75485630')) {function content_52ccc31a1baa37_75485630($_smarty_tpl) {?><div id="header_user_info">
        
        <?php if ($_smarty_tpl->tpl_vars['logged']->value){?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true);?>
" title="<?php echo smartyTranslate(array('s'=>'View my customer account','mod'=>'blockuserinfo'),$_smarty_tpl);?>
" class="account" rel="nofollow"><span><?php echo $_smarty_tpl->tpl_vars['cookie']->value->customer_firstname;?>
 <?php echo $_smarty_tpl->tpl_vars['cookie']->value->customer_lastname;?>
</span></a>
                <a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('index',true,null,"mylogout");?>
" title="<?php echo smartyTranslate(array('s'=>'Log me out','mod'=>'blockuserinfo'),$_smarty_tpl);?>
" class="logout" rel="nofollow"><?php echo smartyTranslate(array('s'=>'Log out','mod'=>'blockuserinfo'),$_smarty_tpl);?>
</a>
        <?php }else{ ?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true);?>
" title="<?php echo smartyTranslate(array('s'=>'Login to your customer account','mod'=>'blockuserinfo'),$_smarty_tpl);?>
" class="login" rel="nofollow"><?php echo smartyTranslate(array('s'=>'Login','mod'=>'blockuserinfo'),$_smarty_tpl);?>
</a>
        <?php }?>
</div><?php }} ?>