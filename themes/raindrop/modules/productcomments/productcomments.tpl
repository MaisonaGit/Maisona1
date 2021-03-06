{*
* 2007-2013 PrestaShop
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
*  @copyright  2007-2013 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}
<script type="text/javascript">
var productcomments_controller_url = '{$productcomments_controller_url}';
var confirm_report_message = '{l s='Are you sure you want report this comment?' mod='productcomments' js=1}';
var secure_key = '{$secure_key}';
var productcomments_url_rewrite = '{$productcomments_url_rewriting_activated}';
var productcomment_added = '{l s='Your comment has been added!' mod='productcomments' js=1}';
var productcomment_added_moderation = '{l s='Your comment has been added and will be available once approved by a moderator' mod='productcomments' js=1}';
var productcomment_title = '{l s='New comment' mod='productcomments' js=1}';
var productcomment_ok = '{l s='OK' mod='productcomments' js=1}';
var moderation_active = {$moderation_active};
</script>

<div id="idTab5" class="tab-pane">
	<div id="product_comments_block_tab">
	{if $comments}
            {if ($too_early == false AND ($logged OR $allow_guests))}
                <a id="new_comment_tab_btn" class="open-comment-form" href="#new_comment_form">{l s='Write your review' mod='productcomments'}</a>
            {/if}
		{foreach from=$comments item=comment}
			{if $comment.content}
			<div class="comment clearfix">
				<div class="comment_author clearfix">
					<div class="comment_author_infos">
						<h5>{$comment.customer_name|escape:'html':'UTF-8'}</h5>
						<em>{dateFormat date=$comment.date_add|escape:'html':'UTF-8' full=0}</em>
					</div>
                                        {if $comment.grade > 0}
					<div class="star_content clearfix">
                                            <img src="{$img_dir}/stars/small/stars_{$comment.grade}.gif" />
					</div>
                                        {/if}
				</div>
				<div class="comment_details">
					<strong>{$comment.title}</strong>
					<p>{$comment.content|escape:'html':'UTF-8'|nl2br}</p>
					<ul>
						{if $comment.total_advice > 0}
							<li>{l s='%1$d out of %2$d people found this review useful.' sprintf=[$comment.total_useful,$comment.total_advice] mod='productcomments'}</li>
						{/if}
						{if $logged == 1}
							{if !$comment.customer_advice}
							<li>{l s='Was this comment useful to you?' mod='productcomments'}<button class="usefulness_btn" data-is-usefull="1" data-id-product-comment="{$comment.id_product_comment}">{l s='yes' mod='productcomments'}</button><button class="usefulness_btn" data-is-usefull="0" data-id-product-comment="{$comment.id_product_comment}">{l s='no' mod='productcomments'}</button></li>
							{/if}
							{if !$comment.customer_report}
							<li><span class="report_btn" data-id-product-comment="{$comment.id_product_comment}">{l s='Report abuse' mod='productcomments'}</span></li>
							{/if}
						{/if}
					</ul>
				</div>
			</div>
			{/if}
		{/foreach}
	{else}
		{if (!$too_early AND ($logged OR $allow_guests))}
		<p class="align_center">
			<a id="new_comment_tab_btn" class="open-comment-form" href="#new_comment_form">{l s='Be the first to write your review' mod='productcomments'} !</a>
		</p>
		{else}
		<p class="align_center">{l s='No customer comments for the moment.' mod='productcomments'}</p>
		{/if}
	{/if}	
	</div>
</div>
{if isset($product) && $product}
<!-- Fancybox -->
<div style="display: none;">
	<div id="new_comment_form">
            <form id="id_new_comment_form" action="#">
			<h2 class="title">{l s='Write your review' mod='productcomments'}</h2>
			{if isset($product) && $product}
			<div class="product row">
                            <div class="col-lg-4 col-sm-4 col-xs-12">
				<img src="{$link->getImageLink($product->link_rewrite, $productcomment_cover, 'medium_default')}" alt="{$product->name|escape:html:'UTF-8'}" />
                            </div>
                            <div class="product_desc col-lg-8 col-sm-8 col-xs-12 ">
                                <p class="product_name"><strong>{$product->name}</strong></p>
                                {$product->description_short}
                            </div>
			</div>
			{/if}
			<div class="new_comment_form_content">

				<div id="new_comment_form_error" class="alert alert-danger" style="display: none;">
					<ul></ul>
				</div>

				{if $criterions|@count > 0}
					<ul id="criterions_list">
					{foreach from=$criterions item='criterion'}
                                            <li class="row">
                                                <div class="criterion_title col-lg-5 col-sm-5 col-xs-12">
                                                    <label>{$criterion.name|escape:'html':'UTF-8'}:</label>
                                                </div>
                                                <div class="col-lg-7 col-sm-7 col-xs-12">
                                                    <div class="star_content">
                                                        <input class="star" type="radio" name="criterion[{$criterion.id_product_comment_criterion|round}]" value="1" />
                                                        <input class="star" type="radio" name="criterion[{$criterion.id_product_comment_criterion|round}]" value="2" />
                                                        <input class="star" type="radio" name="criterion[{$criterion.id_product_comment_criterion|round}]" value="3" checked="checked" />
                                                        <input class="star" type="radio" name="criterion[{$criterion.id_product_comment_criterion|round}]" value="4" />
                                                        <input class="star" type="radio" name="criterion[{$criterion.id_product_comment_criterion|round}]" value="5" />
                                                    </div>
                                                </div>
						</li>
					{/foreach}
					</ul>
				{/if}
                                
                                <div class="form-group">
                                    <label for="comment_title">{l s='Title' mod='productcomments'}: <sup class="required">*</sup></label>
                                    <input id="comment_title" class="form-control" placeholder="Enter title" name="title" type="text" value=""/>
                                </div>
                                <div class="form-group">
                                    <label for="content">{l s='Comment' mod='productcomments'}: <sup class="required">*</sup></label>
                                    <textarea id="content" name="content" class="form-control"></textarea>
                                </div>

				{if $allow_guests == true && $logged == 0}
                                <div class="form-group">
                                    <label>{l s='Your name' mod='productcomments'}: <sup class="required">*</sup></label>
                                    <input id="commentCustomerName" name="customer_name" class="form-control" type="text" placeholder="Enter your name" value=""/>
                                </div>
				{/if}

				<div id="new_comment_form_footer">
					<input id="id_product_comment_send" name="id_product" type="hidden" value='{$id_product_comment_form}'></input>
					<p class="fl required"><sup>*</sup> {l s='Required fields' mod='productcomments'}</p>
					<p class="fr">
                                            <button id="submitNewMessage" name="submitMessage" type="submit" class="btn exclusive">{l s='Send' mod='productcomments'}</button>&nbsp;
                                            <a href="#" onclick="$.fancybox.close();" class="btn button">{l s='Cancel' mod='productcomments'}</a>
					</p>
					<div class="clearfix"></div>
				</div>
			</div>
		</form><!-- /end new_comment_form_content -->
	</div>
</div>
<!-- End fancybox -->
{/if}
