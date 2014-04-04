<?php /* Smarty version Smarty-3.1.14, created on 2014-03-10 09:36:21
         compiled from "/homez.742/maisona/www/maisona/admin5327/themes/default/template/helpers/modules_list/list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1453712215531d79850de193-58832059%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c0a98ae28739789a9bb5e2566d0ef657f56c573c' => 
    array (
      0 => '/homez.742/maisona/www/maisona/admin5327/themes/default/template/helpers/modules_list/list.tpl',
      1 => 1384787396,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1453712215531d79850de193-58832059',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'modules_list' => 0,
    'count' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_531d7985271fa7_42603045',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_531d7985271fa7_42603045')) {function content_531d7985271fa7_42603045($_smarty_tpl) {?><?php if (!is_callable('smarty_function_counter')) include '/homez.742/maisona/www/maisona/tools/smarty/plugins/function.counter.php';
if (!is_callable('smarty_function_cycle')) include '/homez.742/maisona/www/maisona/tools/smarty/plugins/function.cycle.php';
?>

<h2 style="margin-top:0"><?php echo smartyTranslate(array('s'=>'Modules list'),$_smarty_tpl);?>
</h2>
<div id="modules_list_container_tab" class="default_modules_list_display_type">
	<ul id="modules_list_container_content">
		<?php if (count($_smarty_tpl->tpl_vars['modules_list']->value)){?>
			<li>
				<?php echo smarty_function_counter(array('start'=>1,'assign'=>"count"),$_smarty_tpl);?>

					<?php  $_smarty_tpl->tpl_vars['module'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['module']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['modules_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['module']->key => $_smarty_tpl->tpl_vars['module']->value){
$_smarty_tpl->tpl_vars['module']->_loop = true;
?>	
						<div style="width:400px"><?php ob_start();?><?php echo smarty_function_cycle(array('values'=>",row alt"),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ('controllers/modules/tab_module_line.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('class_row'=>$_tmp1), 0);?>
</div>
						<?php if ($_smarty_tpl->tpl_vars['count']->value%3==0){?>
			</li>
			<li>
						<?php }?>
					<?php echo smarty_function_counter(array(),$_smarty_tpl);?>

				<?php } ?>
			</li>
		<?php }else{ ?>
			<tr><td><div style="font-weight:700;margin-top:20px"><?php echo smartyTranslate(array('s'=>'No modules available in this section.'),$_smarty_tpl);?>
</b></td></tr>
		<?php }?>		
	</ul>
</div>
<div class="clear"></div><?php }} ?>