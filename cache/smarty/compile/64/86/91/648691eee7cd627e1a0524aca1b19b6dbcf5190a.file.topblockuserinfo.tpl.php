<?php /* Smarty version Smarty-3.1.14, created on 2014-03-14 14:20:23
         compiled from "/homez.742/maisona/www/maisona/themes/raindrop_yarflam/modules/blockuserinfo/topblockuserinfo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1783879267530a1cb5530768-26352403%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '648691eee7cd627e1a0524aca1b19b6dbcf5190a' => 
    array (
      0 => '/homez.742/maisona/www/maisona/themes/raindrop_yarflam/modules/blockuserinfo/topblockuserinfo.tpl',
      1 => 1394803220,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1783879267530a1cb5530768-26352403',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_530a1cb5575fb8_39466494',
  'variables' => 
  array (
    'logged' => 0,
    'link' => 0,
    'cookie' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530a1cb5575fb8_39466494')) {function content_530a1cb5575fb8_39466494($_smarty_tpl) {?><div id="pictureMonCompte"><img src="/themes/raindrop_yarflam/img/picto/picto-web/picto-mon-compte.png" width="40" height="40" border="0" float="left" display="inline-block" alt="" /></div><div id="header_user_info">
        
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
" class="login" rel="nofollow"><?php echo smartyTranslate(array('s'=>'Mon Compte','mod'=>'blockuserinfo'),$_smarty_tpl);?>
</a>
        <?php }?>
</div><?php }} ?>