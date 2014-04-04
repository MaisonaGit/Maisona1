<?php /* Smarty version Smarty-3.1.14, created on 2014-01-08 04:16:42
         compiled from "/homez.742/maisona/www/maisona/themes/raindrop/modules/blocklanguages/blocklanguages.tpl" */ ?>
<?php /*%%SmartyHeaderCode:32996203552ccc31a3c7721-25940677%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6b11fed965be6ea699e245a97c7cd3b81972bf77' => 
    array (
      0 => '/homez.742/maisona/www/maisona/themes/raindrop/modules/blocklanguages/blocklanguages.tpl',
      1 => 1388801684,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32996203552ccc31a3c7721-25940677',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'languages' => 0,
    'language' => 0,
    'lang_iso' => 0,
    'img_lang_dir' => 0,
    'indice_lang' => 0,
    'lang_rewrite_urls' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52ccc31a475117_99057505',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52ccc31a475117_99057505')) {function content_52ccc31a475117_99057505($_smarty_tpl) {?><!-- Block languages module -->
<?php if (count($_smarty_tpl->tpl_vars['languages']->value)>1){?>
<div id="languages_block_top">
	<div id="countries">
	
        <?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value){
$_smarty_tpl->tpl_vars['language']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['language']->key;
?>
            <?php if ($_smarty_tpl->tpl_vars['language']->value['iso_code']==$_smarty_tpl->tpl_vars['lang_iso']->value){?>
                <div class="selected_language language_top_wrapper">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['img_lang_dir']->value;?>
<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['language']->value['iso_code'];?>
" width="16" height="11" />
                    <?php echo $_smarty_tpl->tpl_vars['language']->value['iso_code'];?>

                    <div class="arrow_down"></div>
                </div>
            <?php }?>
        <?php } ?>
        <ul id="first-languages" class="countries_ul language_bottom_wrapper">
        <?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value){
$_smarty_tpl->tpl_vars['language']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['language']->key;
?>
            <li <?php if ($_smarty_tpl->tpl_vars['language']->value['iso_code']==$_smarty_tpl->tpl_vars['lang_iso']->value){?>class="selected_language"<?php }?>>
            <?php if ($_smarty_tpl->tpl_vars['language']->value['iso_code']!=$_smarty_tpl->tpl_vars['lang_iso']->value){?>
                <?php $_smarty_tpl->tpl_vars['indice_lang'] = new Smarty_variable($_smarty_tpl->tpl_vars['language']->value['id_lang'], null, 0);?>
                <?php if (isset($_smarty_tpl->tpl_vars['lang_rewrite_urls']->value[$_smarty_tpl->tpl_vars['indice_lang']->value])){?>
                    <a href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['lang_rewrite_urls']->value[$_smarty_tpl->tpl_vars['indice_lang']->value], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" title="<?php echo $_smarty_tpl->tpl_vars['language']->value['name'];?>
">
                <?php }else{ ?>
                    <a href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getLanguageLink($_smarty_tpl->tpl_vars['language']->value['id_lang']), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" title="<?php echo $_smarty_tpl->tpl_vars['language']->value['name'];?>
">
                <?php }?>
            <?php }?>
                    <img src="<?php echo $_smarty_tpl->tpl_vars['img_lang_dir']->value;?>
<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['language']->value['iso_code'];?>
" width="16" height="11" />
                    <?php echo $_smarty_tpl->tpl_vars['language']->value['iso_code'];?>

            <?php if ($_smarty_tpl->tpl_vars['language']->value['iso_code']!=$_smarty_tpl->tpl_vars['lang_iso']->value){?>
                </a>
            <?php }?>
            </li>
        <?php } ?>
        </ul>
</div>
</div>
<?php }?>
<!-- /Block languages module -->
<?php }} ?>