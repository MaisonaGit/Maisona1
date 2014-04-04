{capture name=path}{l s='My account'}{/capture}
<div class="frame_wrap frame_wrap_header clearfix">
    <div class="fwh-title">{l s='My account'}</div>
</div>
<div class="frame_wrap frame_wrap_content">
    {if isset($account_created)}
            <p class="alert alert-success">
                    {l s='Your account has been created.'}
            </p>
    {/if}
    <p class="title_block">{l s='Welcome to your account. Here you can manage al of your personal information and orders. '}</p>
    <ul class="myaccount_lnk_list">
            {if $has_customer_an_address}
            <li><a href="{$link->getPageLink('address', true)}" title="{l s='Add my first address'}"><img src="{$img_dir}icon/addrbook.gif" alt="{l s='Add my first address'}" class="icon" /> <span class="my_account_text">{l s='Add my first address'}</span></a></li>
            {/if}
            <li><a href="{$link->getPageLink('history', true)}" title="{l s='Orders'}"><img src="{$img_dir}icon/order.gif" alt="{l s='Orders'}" class="icon" /> <span class="my_account_text">{l s='Order history and details '}</span></a></li>
            {if $returnAllowed}
                    <li><a href="{$link->getPageLink('order-follow', true)}" title="{l s='Merchandise returns'}"><img src="{$img_dir}icon/return.gif" alt="{l s='Merchandise returns'}" class="icon" /> <span class="my_account_text">{l s='My merchandise returns'}</span></a></li>
            {/if}
            <li><a href="{$link->getPageLink('order-slip', true)}" title="{l s='Credit slips'}"><img src="{$img_dir}icon/slip.gif" alt="{l s='Credit slips'}" class="icon" /> <span class="my_account_text">{l s='My credit slips'}</span></a></li>
            <li><a href="{$link->getPageLink('addresses', true)}" title="{l s='Addresses'}"><img src="{$img_dir}icon/addrbook.gif" alt="{l s='Addresses'}" class="icon" /> <span class="my_account_text">{l s='My addresses'}</span></a></li>
            <li><a href="{$link->getPageLink('identity', true)}" title="{l s='Information'}"><img src="{$img_dir}icon/userinfo.gif" alt="{l s='Information'}" class="icon" /> <span class="my_account_text">{l s='My personal information'}</span></a></li>
            {if $voucherAllowed}
                    <li><a href="{$link->getPageLink('discount', true)}" title="{l s='Vouchers'}"><img src="{$img_dir}icon/voucher.gif" alt="{l s='Vouchers'}" class="icon" /> <span class="my_account_text">{l s='My vouchers'}</span></a></li>
            {/if}
            {$HOOK_CUSTOMER_ACCOUNT}
            <li><a href="{$base_dir}" title="{l s='Home'}"><img src="{$img_dir}icon/home.gif" alt="{l s='Home'}" class="icon" /><span class="my_account_text">{l s='Home'}</span></a></li>
    </ul>
</div>
