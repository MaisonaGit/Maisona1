<li class="favoriteproducts">
	<a href="{$link->getModuleLink('favoriteproducts', 'account')|escape:'htmlall':'UTF-8'}" title="{l s='My favorite products.' mod='favoriteproducts'}">
		{if !$in_footer}<img {if isset($mobile_hook)}src="{$module_template_dir}img/favorites.png" class="ui-li-icon ui-li-thumb"{else}src="{$module_template_dir}img/favorites.png" class="icon"{/if} alt="{l s='My favorite products.' mod='favoriteproducts'}"/>{/if}
		<span class="my_account_text">{l s='My favorite products.' mod='favoriteproducts'}</span>
	</a>
</li>
