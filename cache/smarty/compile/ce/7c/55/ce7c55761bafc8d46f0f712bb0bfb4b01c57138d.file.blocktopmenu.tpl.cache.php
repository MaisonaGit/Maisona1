<?php /* Smarty version Smarty-3.1.14, created on 2014-02-24 00:08:05
         compiled from "/homez.742/maisona/www/maisona/themes/raindrop_yarflam/modules/blocktopmenu/blocktopmenu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2067592212530a1cb71a24c4-29578860%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ce7c55761bafc8d46f0f712bb0bfb4b01c57138d' => 
    array (
      0 => '/homez.742/maisona/www/maisona/themes/raindrop_yarflam/modules/blocktopmenu/blocktopmenu.tpl',
      1 => 1393196585,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2067592212530a1cb71a24c4-29578860',
  'function' => 
  array (
  ),
  'cache_lifetime' => 31536000,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_530a1cb71d9d87_43539513',
  'variables' => 
  array (
    'MENU' => 0,
    'MENU_SEARCH' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530a1cb71d9d87_43539513')) {function content_530a1cb71d9d87_43539513($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/homez.742/maisona/www/maisona/tools/smarty/plugins/modifier.escape.php';
?><?php if ($_smarty_tpl->tpl_vars['MENU']->value!=''){?>
	
	<!-- Menu -->
	<div class="sf-contener clearfix">
    	<div class="cat-title"><?php echo smartyTranslate(array('s'=>"Menu",'mod'=>"blocktopmenu"),$_smarty_tpl);?>
</div>
		<ul class="sf-menu clearfix menu-content">
			<?php echo $_smarty_tpl->tpl_vars['MENU']->value;?>

			<?php if ($_smarty_tpl->tpl_vars['MENU_SEARCH']->value){?>
				<li class="sf-search noBack" style="float:right">
					<form id="searchbox" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('search'), ENT_QUOTES, 'UTF-8', true);?>
" method="get">
						<p>
							<input type="hidden" name="controller" value="search" />
							<input type="hidden" value="position" name="orderby"/>
							<input type="hidden" value="desc" name="orderway"/>
							<input type="text" name="search_query" value="<?php if (isset($_GET['search_query'])){?><?php echo smarty_modifier_escape($_GET['search_query'], 'htmlall', 'UTF-8');?>
<?php }?>" />
						</p>
					</form>
				</li>
			<?php }?>
		</ul>
	</div>

	<!--/ Menu -->
    
    <script type="text/javascript">
		$(document).ready(function() {
			categoryMenu = $('ul.sf-menu');        //var rich menu
			categoryMenu.superfish();				   //menu initialization
			$('.sf-menu > li > ul').addClass('container'); //add class for width define
			i = 0;
			$('.sf-menu > li > ul > li:not(#category-thumbnail)').each(function() {  //add classes for clearing
                i++;
				if(i%2==1)
					$(this).addClass('first-in-line-xs');
				else if (i%5==1)
					$(this).addClass('first-in-line-lg');
            });
        });
		
		// accordion for definition smaller that 767px
		
		responsiveflagMenu = false;
		function menuChange(status){
			if(status == 'enable'){
				$('.sf-menu > li > ul').removeAttr('style');
				$('.sf-menu').removeAttr('style');
				$('.sf-contener .cat-title').on('click', function(){
					$(this).toggleClass('active').parent().find('ul.menu-content').stop().slideToggle('medium');
				}),
				$('.sf-menu > li:has(ul)').each(function() {
                    $(this).prepend('<span></span>'),
					$(this).find('span').on('click touchend', function(){
					  	categoryMenu.superfish('hide');
					});
                });
			}else{
				$('.sf-contener .cat-title').off();	
				$('.sf-menu').removeAttr('style');
				$('.sf-menu > li > ul').removeAttr('style');
				$('.sf-contener .cat-title').removeClass('active');
			}
		}
		
		function responsiveMenu(){
		   if ($(document).width() <= 767 && responsiveflagMenu == false){
				menuChange('enable'),
				responsiveflagMenu = true	
			}
			else if ($(document).width() >= 768){
				menuChange('disable'),
				responsiveflagMenu = false
			}
		}
		$(document).ready(responsiveMenu);
		$(window).resize(responsiveMenu);
	</script>
     
<?php }?>
<?php }} ?>