<?php
class ProductController extends ProductControllerCore{
    
    public function setMedia(){
            FrontController::setMedia();
            if (count($this->errors))
                    return ;

            if ($this->context->getMobileDevice() == false)
            {
                    $this->addCSS(_THEME_CSS_DIR_.'product.css');
                    
                    $this->addJqueryPlugin(array('fancybox', 'scrollTo', 'serialScroll'));
                    $this->addJS(array(
                            _THEME_JS_DIR_.'tools.js',
                            _THEME_JS_DIR_.'product.js'
                    ));
            }
            else
            {
                    $this->addJqueryPlugin(array('scrollTo', 'serialScroll'));
                    $this->addJS(array(
                            _THEME_JS_DIR_.'tools.js',
                            _THEME_MOBILE_JS_DIR_.'product.js',
                            _THEME_MOBILE_JS_DIR_.'jquery.touch-gallery.js'
                    ));
            }

            if (Configuration::get('PS_DISPLAY_JQZOOM') == 1){
                $this->addJS(_THEME_JS_DIR_.'webtools/jquery.jqzoom-core-pack.js');
                $this->addCSS(_THEME_CSS_DIR_.'webtools/jquery.jqzoom.css');
            }
    }
}