 jQuery(document).ready(function() {
   jQuery(function($){
       /* Slider Options */
        // thumbnail option
        var bsksliderThumbOption = "";
        if ( bskslider_thumb == "on" ) {
            bsksliderThumbOption = true;
        } else if ( bskslider_thumb == "off" ) {
            bsksliderThumbOption = false;
        }
        
        // autoadvance option
        var autoadvanceOption = "";
        if ( bskslider_autoadvance == "on" ) {
            autoadvanceOption = true;
        } else if ( bskslider_autoadvance == "off" ) {
            autoadvanceOption = false;
        }
        
        // navigation option
        var navigationOption = "";
        if ( bskslider_navigation == "on" ) {
            navigationOption = true;
        } else if ( bskslider_navigation == "off" ) {
            navigationOption = false;
        }
        
        // navigation hover option
        var navigationHoverOption = "";
        if ( bskslider_navigationHover == "on" ) {
            navigationHoverOption = true;
        } else if ( bskslider_navigation == "off" ) {
            navigationHoverOption = false;
        }
        
        // play/pause option
        var playpauseOption = "";
        if ( bskslider_playpause == "on" ) {
            playpauseOption = true;
        } else if ( bskslider_playpause == "off" ) {
            playpauseOption = false;
        }
        
        // Pause on click option
        var pauseOnClickOption = "";
        if ( bskslider_pauseonclick == "on" ) {
            pauseOnClickOption = true;
        } else if ( bskslider_pauseonclick == "off" ) {
            pauseOnClickOption = false;
        }
        
        // portrait option
        var portraitOption = "";
        if ( bskslider_portrait == "on" ) {
            portraitOption = true;
        } else if ( bskslider_portrait == "off" ) {
            portraitOption = false;
        }
        
        var width = $(window).width();
        
       // test case for landscape and portrait smartphone
        if(width >= '767' || !is_responsive) {
            jQuery('#camera_wrap_1').camera({
                thumbnails: bsksliderThumbOption,
                height: bskslider_height,
                fx: bskslider_transition,
                autoAdvance: autoadvanceOption,
                loader: bskslider_loader,
                navigation: navigationOption,
                navigationHover: navigationHoverOption,
                playPause: playpauseOption,
                pieDiameter: parseInt(bskslider_piediameter),
                piePosition: bskslider_pieposition,
                barPosition: bskslider_barposition,
                barDirection: bskslider_bardirection,
                loaderOpacity: parseFloat(bskslider_loaderopacity),
                pauseOnClick: pauseOnClickOption,
                time: parseInt(bskslider_time),
                transPeriod: parseInt(bskslider_transperiod),
                portrait: portraitOption,
                loaderBgColor: '#'+bskslider_loaderbgcolor,
                loaderColor: '#'+bskslider_loadercolor
            });
        }
        jQuery('#camera_wrap_1').css('margin', '0');
        /* /Slider Options */
    });
 });