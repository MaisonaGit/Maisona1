<!-- Block Newsletter module-->
<div id="newsletter_block_left" class="block">
    <div class="frame_wrap frame_wrap_header clearfix">
        <div class="fwh-title">{l s='Newsletter' mod='blocknewsletter'}</div>
    </div>
    <div class="block_content frame_wrap frame_wrap_content">
    {if isset($msg) && $msg}
        <p class="{if $nw_error}alert alert-warning{else}alert alert-success{/if}">{$msg}</p>
    {/if}
        <form action="{$link->getPageLink('index')}" method="post">
            <p>
                {* @todo use jquery (focusin, focusout) instead of onblur and onfocus *}
                <input type="text" name="email" size="18"
                        value="{if isset($value) && $value}{$value}{else}{l s='your e-mail' mod='blocknewsletter'}{/if}" 
                        onfocus="javascript:if(this.value=='{l s='your e-mail' mod='blocknewsletter' js=1}')this.value='';" 
                        onblur="javascript:if(this.value=='')this.value='{l s='your e-mail' mod='blocknewsletter' js=1}';" 
                        class="inputNew" />
                <!--<select name="action">
                    <option value="0"{if isset($action) && $action == 0} selected="selected"{/if}>{l s='Subscribe' mod='blocknewsletter'}</option>
                    <option value="1"{if isset($action) && $action == 1} selected="selected"{/if}>{l s='Unsubscribe' mod='blocknewsletter'}</option>
                </select>-->
                    <input type="submit" value="ok" class="btn exclusive_small" name="submitNewsletter" />
                <input type="hidden" name="action" value="0" />
            </p>
        </form>
    </div>
</div>
<!-- /Block Newsletter module-->
