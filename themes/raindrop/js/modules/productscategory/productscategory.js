$(document).ready(function(){
    //init the carousel for related products
    $('#productscategory_list').carouFredSel({
        scroll      : { items : 1 },
        align       : 'center',
        auto        : false,
        prev        : '#pcrp_prev',
        next        : '#pcrp_next',
        swipe       : { onTouch : true }
    });
});