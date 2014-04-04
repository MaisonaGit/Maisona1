<div id="bsk_share_product">
    {* Facebook like button *}
    {if $enableFacebook}
    <div class="socialshare">
        <div id="fb-root"></div>
        <script>(function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=240697495969525";
          fjs.parentNode.insertBefore(js, fjs);
        }(document, "script", "facebook-jssdk"));</script>
        <div class="fb-like" data-href="{$shareurl|@urlencode}" data-layout="button_count" data-width="450" data-show-faces="true" data-font="arial"></div>
    </div>
    {/if}

    {* Twitter Share Button *}
    {if $enableTwitter}
    <div class="socialshare">
        <a href="https://twitter.com/share" class="twitter-share-button" data-lang="{$lang_iso}">Tweet</a>
        <script>
        !function(d,s,id){
            var js,fjs=d.getElementsByTagName(s)[0];
            if(!d.getElementById(id)){
                js=d.createElement(s);
                js.id=id;js.src="//platform.twitter.com/widgets.js";
                fjs.parentNode.insertBefore(js,fjs);
            }
        }(document,"script","twitter-wjs");
        </script>
    </div>
    {/if}

    {* Google +1 Share Button *}
    {if $enableGoogle}
    <div class="socialshare">
        <!-- Place this tag where you want the +1 button to render. -->
        <div class="g-plusone" data-size="medium"></div>

        <!-- Place this tag after the last +1 button tag. -->
        <script type="text/javascript">
          (function() {
            var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
            po.src = 'https://apis.google.com/js/plusone.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
          })();
        </script>
    </div>
    {/if}

    {* Pinterest Share Button *}
    {if $enablePinterest}
    <div class="socialshare">
        <a href="http://pinterest.com/pin/create/button/?url={$shareurl|@urlencode}&media={$shareimage|@urlencode}&description={$sharedescription|@strip_tags|@urlencode}" class="pin-it-button" count-layout="horizontal">
            <img border="0" src="//assets.pinterest.com/images/PinExt.png" title="Pin It" />
        </a>
        <script type="text/javascript" src="//assets.pinterest.com/js/pinit.js"></script>
    </div>
    {/if}
</div>