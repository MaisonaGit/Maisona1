$(document).ready(function() {

    // global value for category View

    window.globalCategoryView = 'grid';

    

    var width = $(window).width();

    

    /*

     *  Top Bar

     */

    // grab the initial top offset of the navigation 

    var sticky_navigation_offset_top = 250; //$('#navSecondary').offset().top;

     

    // our function that decides weather the navigation bar should have "fixed" css position or not.

    var sticky_navigation = function(){

        var scroll_top = $(window).scrollTop(); // our current vertical position from the top

         

        // if we've scrolled more than the navigation, change its position to fixed to stick to top,

        // otherwise change it back to relative

        if (scroll_top > sticky_navigation_offset_top) { 

            $('#navTop').css({ 'position': 'fixed', 'top':0, 'left':0, 'z-index':150 });

            $('#navSecondary').css({ 'position': 'fixed', 'top':58, 'left':0 });

        } else {

            $('#navTop').css({ 'position': 'relative', 'top':0, 'left':0, 'z-index':1 });

            $('#navSecondary').css({ 'position': 'relative', 'top':0, 'left':0 }); 

        }   

    };

     

    // run our function on load

    // test case for tablet

    if(width >= '992' || !is_responsive) sticky_navigation();

     

    // and run it again every time you scroll

    $(window).scroll(function() {

        // test case for tablet

         if(width >= '992' || !is_responsive) sticky_navigation();

    });

    

     /*

     * Hide tab if it doesn't have content

     */

    $('.nav-tabs > li > a').each(function(){

        if( !$( $(this).attr('href') ).length )

            $(this).parent().hide();

    });

    

    /***************************

     * Product List

    ****************************/

   

    /*

     * Grid/List active

    */



    var list_view_btn = $('#view_nav .list');

    var grid_view_btn = $('#view_nav .grid');

    

    // initialize the active view

    checkViews();

    

    // set active view on click

    list_view_btn.click(function() {

        if( $('#product_wrapper').hasClass('grid') ) {

            $('#product_wrapper').removeClass('grid');

            $('#product_wrapper').addClass('list');

        }

        list_view_btn.addClass('active');

        

        // set global view to list

        window.globalCategoryView = 'list';

        

        /*

        * Stop Product Hover effect on List View

        */

        checkCategoryHover();



        checkViews();

        

        $.cookie('view', 'list');

    });

    

    grid_view_btn.click(function() {

        if( $('#product_wrapper').hasClass('list') ) {

            $('#product_wrapper').removeClass('list');

            $('#product_wrapper').addClass('grid');

        }

        grid_view_btn.addClass('active');

        

        // set global view to grid

        window.globalCategoryView = 'grid';

        

        var width = $(window).width();

        // test case for tablet

        if(width >= '992' || !is_responsive) {

            $('#product_wrapper.grid .item').on({

                mouseenter: function(){ // mouse enter

                    $(this).find('.cc-product-hover').show();

                }, 

                mouseleave: function(){ // mouse leave

                    $(this).find('.cc-product-hover').hide();

                }

            });

        }

        

        checkViews();

        

        $.cookie('view', 'grid');

    });

    

    if( $.cookie('view') == "list" ) {

        if( $('#product_wrapper').hasClass('grid') ) {

            $('#product_wrapper').removeClass('grid');

            $('#product_wrapper').addClass('list');

        }

        grid_view_btn.removeClass('active');

        list_view_btn.addClass('active');

    } else if( $.cookie('view') == "grid" ) {

        if( $('#product_wrapper').hasClass('list') ) {

            $('#product_wrapper').removeClass('list');

            $('#product_wrapper').addClass('grid');

        }

        list_view_btn.removeClass('active');

        grid_view_btn.addClass('active');

    }

    

    /*

    * Product Grid Hover effect on homepage

    */

    // test case for tablet

    if(width >= '992' || !is_responsive) {

        $('.products_block .item').on({

            mouseenter: function(){ // mouse enter

                $(this).find('.cc-product-hover').show();

            }, 

            mouseleave: function(){ // mouse leave

                $(this).find('.cc-product-hover').hide();

            }

        });

    }

    

    /*

    * Product Grid Hover effect on category page

    */

   // test case for tablet

    if(width >= '992' || !is_responsive) {

        checkCategoryHover();

    }

});



function checkViews(){

    var list_view_btn = $('#view_nav .list');

    var grid_view_btn = $('#view_nav .grid');

    

    if( $('#product_wrapper').hasClass('grid') ) {

        if ( list_view_btn.hasClass('active') ) list_view_btn.removeClass('active');

        grid_view_btn.addClass('active');

    }

    else if( $('#product_wrapper').hasClass('list') ) {

        if ( grid_view_btn.hasClass('active') ) grid_view_btn.removeClass('active');

        list_view_btn.addClass('active');

    }

}



function checkClass(id, the_class){

    var html_element = $(id);

    if( html_element.hasClass(the_class) ) return true;

    else return false;

}



function checkCategoryHover(){

    if( window.globalCategoryView == 'grid' && checkClass('#product_wrapper', 'grid') ) {

        $('#product_wrapper.grid .item').on({

            mouseenter: function(){ // mouse enter

                $(this).find('.cc-product-hover').show();

            }, 

            mouseleave: function(){ // mouse leave

                $(this).find('.cc-product-hover').hide();

            }

        });

    } else {

        $('#product_wrapper.list .item').off(); // stop hover at list view

    }

}

