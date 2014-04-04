$(document).ready(function() {
	$("#setCurrency").mouseover(function() {
		$(this).addClass("countries_hover");
		$(".currencies_ul").addClass("currencies_ul_hover");
	});
	$("#setCurrency").mouseout(function(){
		$(this).removeClass("countries_hover");
		$(".currencies_ul").removeClass("currencies_ul_hover");
	});

	$('ul#first-currencies li:not(.selected)').css('opacity', 0.5);
	$('ul#first-currencies li:not(.selected)').hover(function(){
		$(this).css('opacity', 1);
	}, function(){
		$(this).css('opacity', 0.5);
	});
        
        // get currency form width
        var currencyFormWidth = $("#setCurrency").width();
        // set currency form width to list elements
        var currencyListElements = $("#setCurrency .currency_bottom_wrapper li").width(currencyFormWidth);
        
        var width = $(window).width();
        
        if(is_responsive && width <= '992') {
            // Show/Hide list on click if it's not hovered. (for devices)
            $("#setCurrency .currency_top_wrapper").click(function() {
                currencyListHandler();
            });
        } else {
            // Show/Hide list on hover.
            $("#setCurrency").hover(
                // Hover in.
                function() {
                    currencyListHandler();
                }, 
                // Hover out.
                function() {
                    currencyListHandler();
                }
            );
        }
        

        
        
});

// switch arrow and show/hide currency list
function currencyListHandler() {
    if( $("#setCurrency .currency_top_wrapper").find('div').hasClass("arrow_down") ) {
        // switch arrow up
        $("#setCurrency .currency_top_wrapper").find('div').removeClass("arrow_down");
        $("#setCurrency .currency_top_wrapper").find('div').addClass("arrow_up");
        // show currency list
        $("#setCurrency .currency_bottom_wrapper").css('display','block');
    } else if( $("#setCurrency .currency_top_wrapper").find('div').hasClass("arrow_up") ) {
        // switch arrow down
        $("#setCurrency .currency_top_wrapper").find('div').removeClass("arrow_up");
        $("#setCurrency .currency_top_wrapper").find('div').addClass("arrow_down");
        // hide currency list
        $("#setCurrency .currency_bottom_wrapper").css('display','none');
    }
}