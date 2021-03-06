<div id="mywishlist">
    {capture name=path}<a href="{$link->getPageLink('my-account', true)}">{l s='My account' mod='blockwishlist'}</a><span class="navigation-pipe">{$navigationPipe}</span>{l s='My wishlists' mod='blockwishlist'}{/capture}

    <div class="frame_wrap frame_wrap_header clearfix">
        <div class="fwh-title">{l s='My wishlists' mod='blockwishlist'}</div>
    </div>
    <div class="frame_wrap frame_wrap_content">
    {include file="$tpl_dir./errors.tpl"}

    {if $id_customer|intval neq 0}
            <form method="post" class="std" id="form_wishlist">
                <fieldset class="well form-horizontal">
                            <h4>{l s='New wishlist' mod='blockwishlist'}</h4>
                            <div class="form-group">
                                    <input type="hidden" name="token" value="{$token|escape:'htmlall':'UTF-8'}" />
                                    <label class="col-lg-2 col-sm-2 col-xs-12 control-label" for="name">{l s='Name' mod='blockwishlist'}</label>
                                    <div class="col-lg-5 col-lg-offset-0 col-sm-5 col-sm-offset-0 col-xs-10 col-xs-offset-1">
                                        <input type="text" id="name" name="name" class="form-control" value="{if isset($smarty.post.name) and $errors|@count > 0}{$smarty.post.name|escape:'htmlall':'UTF-8'}{/if}" />
                                    </div>
                                    <div class="clearfix {bsvisible val=true media='xs'}"></div>
                                    <div class="submit col-lg-3 col-sm-3 col-xs-12">
                                        <input type="submit" name="submitWishlist" id="submitWishlist" value="{l s='Save' mod='blockwishlist'}" class="btn exclusive" />
                                    </div>
                            </div>
                    </fieldset>
            </form>
            {if $wishlists}
            <div id="block-history" class="block-center">
                    <table class="table table-hover">
                            <thead>
                                    <tr>
                                            <th class="first_item">{l s='Name' mod='blockwishlist'}</th>
                                            <th class="item mywishlist_first">{l s='Qty' mod='blockwishlist'}</th>
                                            <th class="item mywishlist_first {bsvisible val=false media='xs'}">{l s='Viewed' mod='blockwishlist'}</th>
                                            <th class="item mywishlist_second {bsvisible val=false media='xs'}">{l s='Created' mod='blockwishlist'}</th>
                                            <th class="item mywishlist_second">{l s='Direct Link' mod='blockwishlist'}</th>
                                            <th class="last_item mywishlist_first">{l s='Delete' mod='blockwishlist'}</th>
                                    </tr>
                            </thead>
                            <tbody>
                            {section name=i loop=$wishlists}
                                    <tr id="wishlist_{$wishlists[i].id_wishlist|intval}">
                                            <td style="width:200px;">
                                                    <a href="javascript:;" onclick="javascript:WishlistManage('block-order-detail', '{$wishlists[i].id_wishlist|intval}');">{$wishlists[i].name|truncate:30:'...'|escape:'htmlall':'UTF-8'}</a>
                                            </td>
                                            <td class="bold align_center">
                                                    {assign var=n value=0}
                                                    {foreach from=$nbProducts item=nb name=i}
                                                            {if $nb.id_wishlist eq $wishlists[i].id_wishlist}
                                                                    {assign var=n value=$nb.nbProducts|intval}
                                                            {/if}
                                                    {/foreach}
                                                    {if $n}
                                                            {$n|intval}
                                                    {else}
                                                            0
                                                    {/if}
                                            </td>
                                            <td class="{bsvisible val=false media='xs'}">{$wishlists[i].counter|intval}</td>
                                            <td class="{bsvisible val=false media='xs'}">{$wishlists[i].date_add|date_format:"%Y-%m-%d"}</td>
                                            <td><a href="javascript:;" onclick="javascript:WishlistManage('block-order-detail', '{$wishlists[i].id_wishlist|intval}');">{l s='View' mod='blockwishlist'}</a></td>
                                            <td class="wishlist_delete">
                                                <a class="btn btn-danger btn-xs" href="javascript:;" onclick="return (WishlistDelete('wishlist_{$wishlists[i].id_wishlist|intval}', '{$wishlists[i].id_wishlist|intval}', '{l s='Do you really want to delete this wishlist ?' mod='blockwishlist' js=1}'));">{l s='Delete' mod='blockwishlist'}</a>
                                            </td>
                                    </tr>
                            {/section}
                            </tbody>
                    </table>
            </div>
            <div id="block-order-detail">&nbsp;</div>
            {/if}
    {/if}
    </div>

    <ul class="footer_links clearfix">
    <li>
        <a class="btn button" href="{$link->getPageLink('my-account', true)|escape:'html'}">
            <span class="glyphicon glyphicon-user"></span> {l s='Back to your account'}
        </a>
    </li>
    <li class="f_right">
        <a class="btn button" href="{$base_dir}">
            <span class="glyphicon glyphicon-home"></span> {l s='Home'}
        </a>
    </li>
</ul>
    
</div>
