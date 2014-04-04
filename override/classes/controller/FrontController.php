<?php
class FrontController extends FrontControllerCore {
    
    public function setMedia(){
        // if website is accessed by mobile device
        // @see FrontControllerCore::setMobileMedia()
        if ($this->context->getMobileDevice() != false)
        {
                $this->setMobileMedia();
                return true;
        }
        
        /* HTML5 Boilerplate & Bootstrap CSS */
        $is_responsive = true;
        if( !Configuration::get('bskg_responsive', null, $this->context->shop->id_shop_group, $this->context->shop->id) ) $is_responsive = false;
        $this->context->smarty->assign('is_responsive', $is_responsive);
        if($is_responsive){
            //$this->addCSS(_THEME_CSS_DIR_.'webtools/bootstrap.css');
            $this->addCSS(_THEME_CSS_DIR_.'webtools/bootstrap.min.css');
        } else{
            // add non-responsive bootstrap css
            //$this->addCSS(_THEME_CSS_DIR_.'webtools/bsnr/bootstrap.css');
            $this->addCSS(_THEME_CSS_DIR_.'webtools/bsnr/bootstrap.min.css');
        }
        
        $this->addCSS(_THEME_CSS_DIR_.'global.css', 'all');
        
        /* Replace jQuery with newer version */
        $this->addJS(_THEME_JS_DIR_.'webtools/jquery-1.9.1.min.js');
        $this->addJS(_THEME_JS_DIR_.'webtools/jquery-migrate-1.1.1.js');
        //$this->addjquery();
        //$this->addjqueryPlugin('easing');
        $this->addJS(_PS_JS_DIR_.'tools.js');
        
        /* HTML5 Boilerplate & Bootstrap JS */
        $this->addJS(_THEME_JS_DIR_.'webtools/modernizr-2.6.2.min.js');
        if($is_responsive){
            //$this->addJS(_THEME_JS_DIR_.'webtools/bootstrap.js');
            $this->addJS(_THEME_JS_DIR_.'webtools/bootstrap.min.js');
        } else {
            // add non-responsive bootstrap js
            //$this->addJS(_THEME_JS_DIR_.'webtools/bsnr/bootstrap.js');
            $this->addJS(_THEME_JS_DIR_.'webtools/bsnr/bootstrap.min.js');
        }
        $this->addJS(_THEME_JS_DIR_.'webtools/plugins.js');
        
        if (Tools::isSubmit('live_edit') && Tools::getValue('ad') && Tools::getAdminToken('AdminModulesPositions'.(int)Tab::getIdFromClassName('AdminModulesPositions').(int)Tools::getValue('id_employee')))
        {
                $this->addJqueryUI('ui.sortable');
                $this->addjqueryPlugin('fancybox');
                $this->addJS(_PS_JS_DIR_.'hookLiveEdit.js');
                $this->addCSS(_PS_CSS_DIR_.'jquery.fancybox-1.3.4.css', 'all'); // @TODO
        }
        if ($this->context->language->is_rtl)
                $this->addCSS(_THEME_CSS_DIR_.'rtl.css');

        // Execute Hook FrontController SetMedia
        Hook::exec('actionFrontControllerSetMedia', array());
    }
}
