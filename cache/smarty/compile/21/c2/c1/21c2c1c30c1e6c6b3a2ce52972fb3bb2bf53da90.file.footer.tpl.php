<?php /* Smarty version Smarty-3.1.14, created on 2014-03-18 23:28:14
         compiled from "/homez.742/maisona/www/maisona/themes/raindrop_yarflam/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1692066906530a1cb7b70cb1-02217656%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '21c2c1c30c1e6c6b3a2ce52972fb3bb2bf53da90' => 
    array (
      0 => '/homez.742/maisona/www/maisona/themes/raindrop_yarflam/footer.tpl',
      1 => 1395181690,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1692066906530a1cb7b70cb1-02217656',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_530a1cb7bc4e97_73999298',
  'variables' => 
  array (
    'content_only' => 0,
    'hide_right_column' => 0,
    'HOOK_RIGHT_COLUMN' => 0,
    'FOOTER_BAR' => 0,
    'HOOK_FOOTER' => 0,
    'PS_ALLOW_MOBILE_DEVICE' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530a1cb7bc4e97_73999298')) {function content_530a1cb7bc4e97_73999298($_smarty_tpl) {?>﻿
<meta charset="UTF-8"/>
<div id="blue_block clearfix">
<div id="reinsurance_block"
<p>
<img src="/themes/raindrop_yarflam/img/picto/picto-web/picto-reassurance-europe.png" width="350" height="120" border="0" align="center" vspace="15" hspace="15" alt="" />
<img src="/themes/raindrop_yarflam/img/picto/picto-web/picto-reassurance-livraison.png" width="350" height="120" border="0" align="center" vspace="15" hspace="15" alt="" />
<img src="/themes/raindrop_yarflam/img/picto/picto-web/picto-reassurance-banque.png" width="350" height="120" border="0" align="center" vspace="15" hspace="15" alt="" />
</p>
</div>
</div>

		<?php if (!$_smarty_tpl->tpl_vars['content_only']->value){?>
				</div>
                                <?php if (!$_smarty_tpl->tpl_vars['hide_right_column']->value){?>
								
                                <!-- Right -->
				<div id="right_column" class="column col-lg-3 col-md-3">
				
					<?php echo $_smarty_tpl->tpl_vars['HOOK_RIGHT_COLUMN']->value;?>

				</div>
                                <?php }?>
                    </div>

<!-- Footer -->


                        <footer id="footer" class="clearfix">
                            <?php if (isset($_smarty_tpl->tpl_vars['FOOTER_BAR']->value)){?>
                            <div id="footerBar">
                            <?php echo $_smarty_tpl->tpl_vars['FOOTER_BAR']->value;?>

                            </div>
                            <?php }?>									<div id="footerbox">
											<div id="footer47">
												<div class="catA">
													<h1>INFORMATION PRATIQUE</h1>
													<ul>
														<li>Promotion</li>
														<li>Promotion</li>
														<li>Promotion</li>
													</ul>
												</div>
												<div class="catB">
													<h1>DESCRIPTION DU CONCEPT</h1>
													<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris elementum mi vel lacus adipiscing, at tincidunt orci posuere. Vestibulum fringilla dolor nibh. Mauris elementum mi vel lacus adipiscing, at tincidunt orci posuere.</p>
												</div>
				</div>
                            <div id="footerContent" class="container">
                                <div class="row">
				<?php echo $_smarty_tpl->tpl_vars['HOOK_FOOTER']->value;?>

                                </div>
                            </div>									</div>

                            <!--
                            <?php if ($_smarty_tpl->tpl_vars['PS_ALLOW_MOBILE_DEVICE']->value){?>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('index',true);?>
?mobile_theme_ok"><?php echo smartyTranslate(array('s'=>'Browse the mobile site'),$_smarty_tpl);?>
</a>
                            <?php }?>
                            -->

			</footer>
		</div><!-- /#page -->
	<?php }?>
<div id="footer2">
<p>Tout droit réservé www.maisona.com ©  - 2014
<a href=""> Sitemap </a> 
<a href="/index.php?controller=CGV">CGV</a> 
<a href="">Mentions légales</a> 
<a href="/index.php?controller=contact">Contact</a></p>
</div>
	</body>
</html>
<?php }} ?>