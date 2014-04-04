$(document).ready(function(){
    $('#bskManufacturersCarousel').carouFredSel({
        auto: false,
        width: '100%',
        height: '100px',
        prev: '#bmc_prev',
        next: '#bmc_next',
        mousewheel: true,
        swipe: {
            onMouse: true,
            onTouch: true
        }
    });
});