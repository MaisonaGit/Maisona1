{include file="$tpl_dir./errors.tpl"}

{if isset($category)}
    {if $category->id AND $category->active}
    <!-- top image -->
    {if $scenes || $category->description || $category->id_image}
    <div id="category_image" class="frame_wrap">
        {if $scenes}
            <!-- Scenes -->
            {include file="$tpl_dir./scenes.tpl" scenes=$scenes}
        {else}
            <!-- Category image -->
            {if $category->id_image}
            <img class="img-responsive center-block" src="{$link->getCatImageLink($category->link_rewrite, $category->id_image, 'category_default')}" alt="{$category->name|escape:'htmlall':'UTF-8'}" title="{$category->name|escape:'htmlall':'UTF-8'}" id="categoryImage" width="{$categorySize.width}" height="{$categorySize.height}" />
            {/if}
        {/if}

        {if $category->description}
            <div class="cat_desc {bsvisible val=false media='xs'}">
                {$category->description}
            </div>
        {/if}
    </div>
    {/if}
    <!-- end top image -->
                
    <!-- Subcategories -->
    {if isset($subcategories)}
    <div id="subcategories">
        <div class="frame_wrap frame_wrap_header clearfix">
            <div class="fwh-title">{l s='Subcategories'}</div>
        </div>
        <div class="frame_wrap frame_wrap_content">
            <div class="row">
            {foreach from=$subcategories item=subcategory}
                <div class="subcat_img_holder clearfix 
                    {if !$hide_left_column && !$hide_right_column} {* both column displayed *}
                        col-lg-6 col-xs-6
                    {else} {* only one column displayed *}
                        col-lg-3 col-md-4 col-xs-6
                    {/if} ">
                    <div class="subcat_img">
                        <a href="{$link->getCategoryLink($subcategory.id_category, $subcategory.link_rewrite)|escape:'htmlall':'UTF-8'}" title="{$subcategory.name|escape:'htmlall':'UTF-8'}">
                            {if $subcategory.id_image}
                                <img src="{$link->getCatImageLink($subcategory.link_rewrite, $subcategory.id_image, 'subcategory')}" alt="" class="img-responsive center-block" />
                            {else}
                                <img src="{$img_cat_dir}default-subcategory.jpg" alt="" class="img-responsive center-block" />
                            {/if}
                        </a>
                    </div>
                    <div class="subcat_img_title">
                        <a href="{$link->getCategoryLink($subcategory.id_category, $subcategory.link_rewrite)|escape:'htmlall':'UTF-8'}">{$subcategory.name|escape:'htmlall':'UTF-8'}</a>
                    </div>
                    {* Category Description. Uncomment and style.
                    {if $subcategory.description}
                        <p class="cat_desc">{$subcategory.description}</p>
                    {/if}
                    *}
                </div>
            {/foreach}
            </div>
        </div>
    </div>
    {/if}
    <!-- end Subcategories -->
    
    <!-- title -->
    <div class="frame_wrap frame_wrap_header clearfix">
        <div class="fwh-title">
            {strip}
                {$category->name|escape:'htmlall':'UTF-8'}
                {if isset($categoryNameComplement)}
                    {$categoryNameComplement|escape:'htmlall':'UTF-8'}
                {/if}
            {/strip}
        </div>
        <div class="frame_secondary clearfix">
            {include file="$tpl_dir./product-views.tpl"}
            <div class="category-product-count {if !$hide_left_column && !$hide_right_column}hidden{else}{bsvisible val=true media='lg'}{/if}">
                {include file="$tpl_dir./category-count.tpl"}
            </div>
            <div class="sortPagiBar clearfix">
                {include file="./product-sort.tpl"}
                {include file="./product-compare.tpl"}
                {include file="./nbr-product-page.tpl"}
            </div>
        </div>
    </div>
    <!-- end title -->
        
    <!--content-->
    {if $products}
    <div class="frame_wrap frame_wrap_content">
        {include file="./product-list.tpl" products=$products}
    </div>
    <!--/content-->
    
    <!--pagination-->
    {include file="$tpl_dir./pagination.tpl"}
    <!--/pagination-->
    
    {/if}
    {elseif $category->id}
        <p class="warning">{l s='This category is currently unavailable.'}</p>
    {/if}
{/if}
