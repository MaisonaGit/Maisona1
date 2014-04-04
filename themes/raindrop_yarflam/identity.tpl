{capture name=path}<a href="{$link->getPageLink('my-account', true)}">{l s='My account'}</a><span class="navigation-pipe">{$navigationPipe}</span>{l s='Your personal information'}{/capture}
<div class="frame_wrap frame_wrap_header clearfix">
    <div class="fwh-title">{l s='Your personal information'}</div>
</div>
<div class="frame_wrap frame_wrap_content clearfix">
{include file="$tpl_dir./errors.tpl"}

{if isset($confirmation) && $confirmation}
	<div class="alert alert-success">
		{l s='Your personal information has been successfully updated.'}
		{if isset($pwd_changed)}<br />{l s='Your password has been sent to your email:'} {$email}{/if}
	</div>
{else}
	<h3>{l s='Please be sure to update your personal information if it has changed.'}</h3>
	<p class="required"><sup>*</sup>{l s='Required field'}</p>
	<form action="{$link->getPageLink('identity', true)|escape:'html'}" method="post" class="std">
            <fieldset class="form-horizontal">
                <div class="form-group">
                        <label class="col-lg-4 col-sm-4 control-label">{l s='Title'}</label>
                        <div class="col-lg-5 col-md-5 col-sm-7">
                        {foreach from=$genders key=k item=gender}
                            <label for="id_gender{$gender->id}" class="radio-inline">
                                <input type="radio" name="id_gender" id="id_gender{$gender->id}" value="{$gender->id|intval}" {if isset($smarty.post.id_gender) && $smarty.post.id_gender == $gender->id}checked="checked"{/if} />
                                {$gender->name}
                            </label>
                        {/foreach}
                        </div>
                </div>
                <div class="form-group required">
                    <label for="firstname" class="col-lg-4 col-sm-4 control-label">{l s='First name'} <sup>*</sup></label>
                    <div class="col-lg-5 col-md-5 col-sm-7">
                        <input class="form-control" type="text" id="firstname" name="firstname" value="{$smarty.post.firstname}" />
                    </div>
                </div>
                <div class="form-group required">
                    <label for="lastname" class="col-lg-4 col-sm-4 control-label">{l s='Last name'} <sup>*</sup></label>
                    <div class="col-lg-5 col-md-5 col-sm-7">
                        <input class="form-control" type="text" name="lastname" id="lastname" value="{$smarty.post.lastname}" />
                    </div>
                </div>
                <div class="form-group required">
                    <label for="email" class="col-lg-4 col-sm-4 control-label">{l s='Email'} <sup>*</sup></label>
                    <div class="col-lg-5 col-md-5 col-sm-7">
                        <input class="form-control" type="email" name="email" id="email" value="{$smarty.post.email}" />
                    </div>
                </div>
                <div class="form-group required">
                    <label for="old_passwd" class="col-lg-4 col-sm-4 control-label">{l s='Current Password'} <sup>*</sup></label>
                    <div class="col-lg-5 col-md-5 col-sm-7">
                        <input class="form-control" type="password" name="old_passwd" id="old_passwd" />
                    </div>
                </div>
                <div class="form-group required">
                    <label for="passwd" class="col-lg-4 col-sm-4 control-label">{l s='New Password'}</label>
                    <div class="col-lg-5 col-md-5 col-sm-7">
                        <input class="form-control" type="password" name="passwd" id="passwd" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="confirmation" class="col-lg-4 col-sm-4 control-label">{l s='Confirmation'}</label>
                    <div class="col-lg-5 col-md-5 col-sm-7">
                        <input class="form-control" type="password" name="confirmation" id="confirmation" />
                    </div>
                </div>
                <div class="form-group select">
                        <label class="col-lg-4 col-sm-4 control-label">{l s='Date of Birth'}</label>
                        <div class="col-lg-5 col-md-5 col-sm-7">
                            <select class="form-control" name="days" id="days">
                                <option value="">-</option>
                                {foreach from=$days item=v}
                                        <option value="{$v}" {if ($sl_day == $v)}selected="selected"{/if}>{$v}&nbsp;&nbsp;</option>
                                {/foreach}
                            </select>
                            {*
                                    {l s='January'}
                                    {l s='February'}
                                    {l s='March'}
                                    {l s='April'}
                                    {l s='May'}
                                    {l s='June'}
                                    {l s='July'}
                                    {l s='August'}
                                    {l s='September'}
                                    {l s='October'}
                                    {l s='November'}
                                    {l s='December'}
                            *}
                            <select class="form-control" id="months" name="months">
                                <option value="">-</option>
                                {foreach from=$months key=k item=v}
                                        <option value="{$k}" {if ($sl_month == $k)}selected="selected"{/if}>{l s=$v}&nbsp;</option>
                                {/foreach}
                            </select>
                            <select class="form-control" id="years" name="years">
                                <option value="">-</option>
                                {foreach from=$years item=v}
                                        <option value="{$v}" {if ($sl_year == $v)}selected="selected"{/if}>{$v}&nbsp;&nbsp;</option>
                                {/foreach}
                            </select>
                        </div>
                    </div>
                    {if $newsletter}
                    <div class="form-group">
                        <div class="col-lg-offset-4 col-lg-5 col-md-5 col-sm-7">
                            <div class="checkbox">
                                <label for="newsletter">
                                    <input type="checkbox" id="newsletter" name="newsletter" value="1" {if isset($smarty.post.newsletter) && $smarty.post.newsletter == 1} checked="checked"{/if} autocomplete="off"/>
                                    {l s='Sign up for our newsletter!'}
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-offset-4 col-lg-5 col-md-5 col-sm-7">
                            <div class="checkbox" >
                                <label for="optin">
                                    <input type="checkbox" name="optin" id="optin" value="1" {if isset($smarty.post.optin) && $smarty.post.optin == 1} checked="checked"{/if} autocomplete="off"/>
                                    {l s='Receive special offers from our partners!'}
                                </label>
                            </div>
                        </div>
                    </div>
                    {/if}
                    <p class="submit">
                            <input type="submit" class="btn button exclusive" name="submitIdentity" value="{l s='Save'}" />
                    </p>
                    <p id="security_informations">
                            {l s='[Insert customer data privacy clause here, if applicable]'}
                    </p>
            </fieldset>
	</form>
{/if}
</div>

<ul class="footer_links clearfix">
    <li>
        <a class="btn button" href="{$link->getPageLink('my-account', true)|escape:'html'}">
            <span class="glyphicon glyphicon-user"></span> {l s='Back to your account'}
        </a>
    </li>
    <li class="f_right">
        <a class="btn button" href="{$base_dir}">
            <span class="glyphicon glyphicon-home"></span> {l s='Home'}
        </a>
    </li>
</ul>
