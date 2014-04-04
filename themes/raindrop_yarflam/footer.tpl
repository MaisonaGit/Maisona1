{*
* 2007-2012 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2012 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}
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

		{if !$content_only}
				</div>
                                {if !$hide_right_column}
								
                                <!-- Right -->
				<div id="right_column" class="column col-lg-3 col-md-3">
				
					{$HOOK_RIGHT_COLUMN}
				</div>
                                {/if}
                    </div>

<!-- Footer -->


                        <footer id="footer" class="clearfix">
                            {if isset($FOOTER_BAR)}
                            <div id="footerBar">
                            {$FOOTER_BAR}
                            </div>
                            {/if}									<div id="footerbox">
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
				{$HOOK_FOOTER}
                                </div>
                            </div>									</div>

                            <!--
                            {if $PS_ALLOW_MOBILE_DEVICE}
                                <a href="{$link->getPageLink('index', true)}?mobile_theme_ok">{l s='Browse the mobile site'}</a>
                            {/if}
                            -->

			</footer>
		</div><!-- /#page -->
	{/if}
<div id="footer2">
<p>Tout droit réservé www.maisona.com ©  - 2014
<a href=""> Sitemap </a> 
<a href="/index.php?controller=CGV">CGV</a> 
<a href="">Mentions légales</a> 
<a href="/index.php?controller=contact">Contact</a></p>
</div>
	</body>
</html>
