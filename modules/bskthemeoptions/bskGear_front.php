<?php
define('__DIR__', dirname(__FILE__));
require_once str_replace('modules'.DIRECTORY_SEPARATOR.'bskthemeoptions', 'config'.DIRECTORY_SEPARATOR.'config.inc.php', __DIR__);
$context = Context::getContext();
header("Content-type: text/css");

$bskg_general = unserialize( Configuration::get('bskg_general', null, $context->shop->id_shop_group, $context->shop->id) ); // get General tab configuration
$bskg_bkg = unserialize( Configuration::get('bskg_bkg', null, $context->shop->id_shop_group, $context->shop->id) ); // get Background tab configuration
?>
body{ 
    color: <?php echo $bskg_general['text_color']; ?>;
    background-color: <?php echo $bskg_bkg['color']; ?>;
}
a{ color: <?php echo $bskg_general['links_color']; ?>; }
a:hover, a:focus{ color: <?php echo $bskg_general['links_color_hover']; ?>; }

#header_user #shopping_cart .ajax_cart_total,
.cc-price,
.price .our_price_display,
#unit_price_display{
    color: <?php echo $bskg_general['price_color']; ?>;
}

.frame_wrap_header > .fwh-title,
.frame_wrap_header.nav.nav-tabs > li > a{
    color: <?php echo $bskg_general['tab_title_color']; ?>;
}

.frame_wrap_header > .fwh-title,
.frame_wrap_header.nav.nav-tabs .active > a{
    border-bottom-color: <?php echo $bskg_general['tab_selected_color']; ?>;
}

a.product_image > span.new,
a.product_image > span.reduction,
#reduction_percent,
#reduction_amount,
.sale_online .on_sale,
.sale_online .online_only{
    color: <?php echo $bskg_general['product_labels_color']; ?>;
    background: <?php echo $bskg_general['product_labels_color_bkg']; ?>;
}

.cc-product-hover .product_desc{
    color: <?php echo $bskg_general['product_grid_desc_color']; ?>;
    background: <?php echo $bskg_general['product_grid_desc_color_bkg']; ?>;
    border-left-color: <?php echo $bskg_general['product_grid_desc_color_lborder']; ?>;
}

.btn.exclusive{
    color: <?php echo $bskg_general['btn_exclusive_color']; ?>;
    background: <?php echo $bskg_general['btn_exclusive_color_bkg']; ?>;
}

.btn.exclusive_small{
    color: <?php echo $bskg_general['btn_small_exclusive_color']; ?>;
    background: <?php echo $bskg_general['btn_small_exclusive_color_bkg']; ?>;
}

#page{
    <?php if( $bskg_bkg['image'] == 'no_img.png' && $bskg_bkg['pattern'] != 0 ) { ?>
    background-image: url(<?php echo _THEME_IMG_DIR_.'patterns/'.$bskg_bkg['pattern']; ?>.png);
    <?php } if( $bskg_bkg['image'] != 'no_img.png' ){ ?>;
    background-image: url(<?php echo 'img/theme/bkg/'.$bskg_bkg['image']; ?>);
    background-size: cover !important;
    <?php } ?>
    background-repeat: <?php echo $bskg_bkg['repeat']; ?>;
    background-position: <?php echo $bskg_bkg['position']; ?>;
    <?php if( $bskg_bkg['fixed'] == 'on' ){ ?>
    background-attachment: fixed;
    <?php } ?>
}

/**
Custom CSS
**/
<?php echo Configuration::get('bskg_css', null, $context->shop->id_shop_group, $context->shop->id); // get Custom CSS configuration ?>