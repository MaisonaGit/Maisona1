<div id="bsk_social_block" class="col-lg-3">
    <p class="title_block">{l s='Follow us' mod='bskblocksocial'}</p>
    {foreach from=$bskblocksocial_social item=social}
    <a href="{$social->link}" title="{$social->name}">
        <img src="{$bskblocksocial_path}{$social->icon}" alt="{$social->name}" />
    </a>
    {/foreach}
</div>
