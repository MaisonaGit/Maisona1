{capture name=path}<a href="{$link->getPageLink('authentication', true)}" title="{l s='Authentication'}" rel="nofollow">{l s='Authentication'}</a><span class="navigation-pipe">{$navigationPipe}</span>{l s='Forgot your password'}{/capture}
<div class="frame_wrap frame_wrap_header clearfix">
    <div class="fwh-title">{l s='Forgot your password?'}</div>
</div>
<div class="frame_wrap frame_wrap_content clearfix">

{include file="$tpl_dir./errors.tpl"}

{if isset($confirmation) && $confirmation == 1}
<div class="alert alert-success">{l s='Your password has been successfully reset and a confirmation has been sent to your email address:'} {if isset($customer_email)}{$customer_email|escape:'htmlall':'UTF-8'|stripslashes}{/if}</div>
{elseif isset($confirmation) && $confirmation == 2}
<div class="alert alert-success">{l s='A confirmation email has been sent to your address:'} {if isset($customer_email)}{$customer_email|escape:'htmlall':'UTF-8'|stripslashes}{/if}</div>
{else}
<div class="alert alert-info">{l s='Please enter the email address you used to register. We will then send you a new password. '}</div>
<form action="{$request_uri|escape:'htmlall':'UTF-8'}" method="post" class="std" id="form_forgotpassword">
	<fieldset>
            <div class="col-lg-8 col-sm-8">
                <div class="input-group">
                    <span class="input-group-addon">Email:</span>
                    <input class="form-control" type="text" id="email" name="email" value="{if isset($smarty.post.email)}{$smarty.post.email|escape:'htmlall':'UTF-8'|stripslashes}{/if}" />
                    <span class="input-group-btn">
                      <button class="btn btn-primary" type="submit">{l s='Retrieve Password'}</button>
                    </span>
                </div><!-- /input-group -->
            </div>
            <a href="{$link->getPageLink('authentication')}" class="btn button" title="{l s='Back to Login'}" rel="nofollow">{l s='Back to Login'}</a>
	</fieldset>
</form>
{/if}
</div>
