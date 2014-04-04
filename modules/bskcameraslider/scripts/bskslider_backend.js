 jQuery(document).ready(function() {
   jQuery(function($){
        /* Slider Admin Stuff */
        var pie = $('.pie');
        var bar = $('.bar');
        var loader = $('#bsk_loader');
        var selected = loader.find('option:selected');
        
        // init loader states
        if ( selected.val() == 'pie' ) {
            bar.hide();
            bar.prev().hide();
        } else if ( selected.val() == 'bar' ) {
            pie.hide();
            pie.prev().hide();
        }
        
        // changing loader states
        loader.change(function(){
           if ( $(this).val() == 'pie' ) {
            bar.hide();
            bar.prev().hide();
            pie.show();
            pie.prev().show();
        } else if ( $(this).val() == 'bar' ) {
            pie.hide();
            pie.prev().hide();
            bar.show();
            bar.prev().show();
        }
        });
        
        // loader bg colorpicker
        var loader_bg_colorpicker = $('#loader_bg_colorfield');
        loader_bg_colorpicker.ColorPicker({
            onSubmit: function(hsb, hex, rgb, el) {
                $(el).val(hex);
                $(el).ColorPickerHide();
            },
            onBeforeShow: function () {
                $(this).ColorPickerSetColor(this.value);
            }
        })
        .bind('keyup', function(){
            $(this).ColorPickerSetColor(this.value);
        });
        
        // loader colorpicker
        var loader_colorpicker = $('#loader_colorfield');
        loader_colorpicker.ColorPicker({
            onSubmit: function(hsb, hex, rgb, el) {
                $(el).val(hex);
                $(el).ColorPickerHide();
            },
            onBeforeShow: function () {
                $(this).ColorPickerSetColor(this.value);
            }
        })
        .bind('keyup', function(){
            $(this).ColorPickerSetColor(this.value);
        });
        /* /Slider Admin Stuff */
    });
 });