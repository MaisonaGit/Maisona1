$(document).ready(function () {
	$("#countries").mouseover(function(){
		$(this).addClass("countries_hover");
		$(".countries_ul").addClass("countries_ul_hover");
	});
	$("#countries").mouseout(function(){
		$(this).removeClass("countries_hover");
		$(".countries_ul").removeClass("countries_ul_hover");
	});
        
        $('ul#first-languages li:not(.selected_language)').css('opacity', 0.5);
	$('ul#first-languages li:not(.selected_language)').hover(function(){
		$(this).css('opacity', 1);
	}, function(){
		$(this).css('opacity', 0.5);
	});
        
        // get language form width
        var languageFormWidth = $("#countries").width();
        // set currency form width to list elements
        var languageListElements = $("#countries .language_bottom_wrapper li").width(languageFormWidth);
        
        var width = $(window).width();
        
        if(is_responsive && width <= '992') {
            // Show/Hide list on click if it's not hovered. (for devices)
            $("#countries .language_top_wrapper").click(function(){
                languageListHandler();
            });
        } else {
            // Show/Hide list on hover.
            $("#countries").hover(
                // Hover in.
                function() {
                    languageListHandler();
                }, 
                // Hover out.
                function() {
                    languageListHandler();
                }
            );
        }
        
});

 // switch arrow and show/hide language list
function languageListHandler() {
    if( $("#countries .language_top_wrapper").find('div').hasClass("arrow_down") ) {
                // switch arrow up
                $("#countries .language_top_wrapper").find('div').removeClass("arrow_down");
                $("#countries .language_top_wrapper").find('div').addClass("arrow_up");
                // show language list
                $("#countries .language_bottom_wrapper").css('display','block');
            } else if( $("#countries .language_top_wrapper").find('div').hasClass("arrow_up") ) {
                // switch arrow down
                $("#countries .language_top_wrapper").find('div').removeClass("arrow_up");
                $("#countries .language_top_wrapper").find('div').addClass("arrow_down");
                // hide language list
                $("#countries .language_bottom_wrapper").css('display','none');
            }
}