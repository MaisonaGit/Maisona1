{if $logged}
<a href="#" id="wishlist_button" onclick="WishlistCart('wishlist_block_top_list', 'add', '{$id_product|intval}', $('#idCombination').val(), document.getElementById('quantity_wanted').value); return false;" title="{l s='Add to my wishlist' mod='blockwishlist'}">{l s='Add to my wishlist' mod='blockwishlist'}</a>
{/if}