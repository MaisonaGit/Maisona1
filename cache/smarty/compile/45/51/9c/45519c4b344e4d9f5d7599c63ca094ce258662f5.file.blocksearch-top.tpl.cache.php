<?php /* Smarty version Smarty-3.1.14, created on 2014-01-10 00:51:41
         compiled from "/homez.742/maisona/www/maisona/themes/raindrop/modules/blocksearch/blocksearch-top.tpl" */ ?>
<?php /*%%SmartyHeaderCode:118464890452cf360d115a18-70335697%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '45519c4b344e4d9f5d7599c63ca094ce258662f5' => 
    array (
      0 => '/homez.742/maisona/www/maisona/themes/raindrop/modules/blocksearch/blocksearch-top.tpl',
      1 => 1388801684,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '118464890452cf360d115a18-70335697',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'ENT_QUOTES' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52cf360d17fa78_94901566',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52cf360d17fa78_94901566')) {function content_52cf360d17fa78_94901566($_smarty_tpl) {?><!-- Block search module TOP -->
<div id="search_block_top">

    <form method="get" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('search'), ENT_QUOTES, 'UTF-8', true);?>
" id="searchbox" role="form">
        <div class="form-group">
            
            <input type="hidden" name="controller" value="search" />
            <input type="hidden" name="orderby" value="position" />
            <input type="hidden" name="orderway" value="desc" />
            <input class="search_query form-control" type="text" placeholder="<?php echo smartyTranslate(array('s'=>'Search','mod'=>'blocksearch'),$_smarty_tpl);?>
" id="search_query_top" name="search_query" value="<?php if (isset($_GET['search_query'])){?><?php echo stripslashes(htmlentities($_GET['search_query'],$_smarty_tpl->tpl_vars['ENT_QUOTES']->value,'utf-8'));?>
<?php }?>" />
            <input type="submit" name="submit_search" value="<?php echo smartyTranslate(array('s'=>'Search','mod'=>'blocksearch'),$_smarty_tpl);?>
" class="submit_search" />
        </div>
    </form>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("./blocksearch-instantsearch.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

<!-- /Block search module TOP -->
<?php }} ?>