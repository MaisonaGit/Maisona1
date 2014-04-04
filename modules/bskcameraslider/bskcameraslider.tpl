<!-- Module bskSlider -->
{if isset($bskslider)}
<script type="text/javascript">
var bskslider_transition        = '{$bskslider.transition}';
var bskslider_thumb             = '{$bskslider.thumb}';
var bskslider_height            = '{$bskslider.height}';
var bskslider_autoadvance       = '{$bskslider.autoadvance}';
var bskslider_loader            = '{$bskslider.loader}';
var bskslider_navigation        = '{$bskslider.navigation}';
var bskslider_navigationHover   = '{$bskslider.navigationhover}';
var bskslider_playpause         = '{$bskslider.playpause}';
var bskslider_piediameter       = '{$bskslider.piediameter}';
var bskslider_pieposition       = '{$bskslider.pieposition}';
var bskslider_barposition       = '{$bskslider.barposition}';
var bskslider_bardirection      = '{$bskslider.bardirection}';
var bskslider_loaderopacity     = '{$bskslider.loaderopacity}';
var bskslider_pauseonclick      = '{$bskslider.pauseonclick}';
var bskslider_time              = '{$bskslider.time}';
var bskslider_transperiod       = '{$bskslider.transperiod}';
var bskslider_portrait          = '{$bskslider.portrait}';
var bskslider_loaderbgcolor     = '{$bskslider.loaderbgcolor}';
var bskslider_loadercolor       = '{$bskslider.loadercolor}';
</script>
{/if}
{if isset($bskslider_slides)}
<div class="camera_wrap {$bskslider.skin}" id="camera_wrap_1">
{foreach from=$bskslider_slides item=slide}
	{if $slide.active}
    <div {if $slide.url}data-link="{$slide.url}"{/if} data-thumb="{$smarty.const._MODULE_DIR_}/bskcameraslider/images/{$slide.thumb}" data-src="{$smarty.const._MODULE_DIR_}/bskcameraslider/images/{$slide.image}" title="{$slide.title}">
        {if $slide.description}
        <div class="camera_caption fadeFromBottom">
            {$slide.description}
        </div>
        {/if}
    </div>
	{/if}
{/foreach}
</div><!-- #camera_wrap_1 -->
{/if}
<!-- /Module bskSlider -->