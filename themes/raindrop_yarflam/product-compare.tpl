{if $comparator_max_item}
<script type="text/javascript">
// <![CDATA[
	var min_item = '{l s='Please select at least one product' js=1}';
	var max_item = "{l s='You cannot add more than %d product(s) to the product comparison' sprintf=$comparator_max_item js=1}";
//]]>
</script>

    <form id="compare_form" class="{bsvisible val=false media='xs'}" method="post" action="{$link->getPageLink('products-comparison')}" onsubmit="true">
        <p>
        <input type="submit" id="bt_compare" class="btn button" value="{l s='Compare'}" />
        <input type="hidden" name="compare_product_list" class="compare_product_list" value="" />
        </p>
    </form>
{/if}

