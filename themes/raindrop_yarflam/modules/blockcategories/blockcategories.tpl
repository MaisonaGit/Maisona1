<!-- Block categories module -->
<div id="categories_block_left" class="block">
    <div class="frame_wrap frame_wrap_header clearfix">
        <div class="fwh-title">{l s='Categories' mod='blockcategories'}</div>
    </div>
    <div class="block_content frame_wrap frame_wrap_content">
        <ul class="tree {if $isDhtml}dhtml{/if}">
        {foreach from=$blockCategTree.children item=child name=blockCategTree}
            {if $smarty.foreach.blockCategTree.last}
                {include file="$branche_tpl_path" node=$child last='true'}
            {else}
                {include file="$branche_tpl_path" node=$child}
            {/if}
        {/foreach}
        </ul>
        {* Javascript moved here to fix bug #PSCFI-151 *}
        <script type="text/javascript">
        // <![CDATA[
                // we hide the tree only if JavaScript is activated
                $('div#categories_block_left ul.dhtml').hide();
        // ]]>
        </script>
    </div>
</div>
<!-- /Block categories module -->
