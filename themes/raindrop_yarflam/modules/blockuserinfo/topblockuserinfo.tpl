<div id="pictureMonCompte"><img src="/themes/raindrop_yarflam/img/picto/picto-web/picto-mon-compte.png" width="40" height="40" border="0" float="left" display="inline-block" alt="" /></div><div id="header_user_info">
        {*l s='Welcome' mod='blockuserinfo'*}
        {if $logged}
                <a href="{$link->getPageLink('my-account', true)}" title="{l s='View my customer account' mod='blockuserinfo'}" class="account" rel="nofollow"><span>{$cookie->customer_firstname} {$cookie->customer_lastname}</span></a>
                <a href="{$link->getPageLink('index', true, NULL, "mylogout")}" title="{l s='Log me out' mod='blockuserinfo'}" class="logout" rel="nofollow">{l s='Log out' mod='blockuserinfo'}</a>
        {else}
                <a href="{$link->getPageLink('my-account', true)}" title="{l s='Login to your customer account' mod='blockuserinfo'}" class="login" rel="nofollow">{l s='Mon Compte' mod='blockuserinfo'}</a>
        {/if}
</div>