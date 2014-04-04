<?php
/**
 * BitSHOK Gear
 * Admin Configuration Interface for BitSHOK Themes
 * 
 * @version 1.0
 * @author BitSHOK <bitshok@gmail.com>
 */
//if (!defined('_PS_VERSION_')) exit;

//@todo delete configuration at uninstall
class BskGear{
    /**
     * HTML that is output to Configure page in Admin
     * @var string 
     */
    public $_html;
    
    /**
     * PrestaShop Context Object
     * @var Context 
     */
    public $context;
    
    /**
     * Current Shop Object
     * @var StdClass 
     */
    public $shop;
    
    /**
     * Relative path of the module
     * @var type 
     */
    public $_path;
    
    /**
     * All css files added using addCSS method
     * @var string 
     */
    private $css_files;
    
    /**
     * All javascript files added using addJS method
     * @var string 
     */
    private $js_files;
    
    /**
     * A basic template engine comportment inspired by Smarty
     * @var array Create an array with all the variables you want to replace into template file
     */
    public $smarty;


    public function __construct() {
        if( isset($_GET['start']) )
            require_once str_replace('modules'.DIRECTORY_SEPARATOR.'bskthemeoptions', 'config'.DIRECTORY_SEPARATOR.'config.inc.php', __DIR__);
        
        $this->_html        = $this->css_files = $this->js_files = '';
        $this->context      = Context::getContext();
        $this->shop         = new stdClass();
        $this->shop->id     = (int)Tools::getValue('shop_id');
        $this->shop->group  = (int)Tools::getValue('shop_group_id');
        $this->_path        = __PS_BASE_URI__.'modules/bskthemeoptions/';
        $this->smarty       = array();
    }
    
    /**
     * Add CSS and JS files
     */
    private function setMedia() {
        $this->addJS($this->_path.'js/jquery-2.0.2.min.js'); // jQuery
        
        // Bootstrap files
        $this->addCSS($this->_path.'css/bootstrap.css');
        $this->addCSS($this->_path.'css/bootstrap-responsive.css');
        $this->addJS($this->_path.'js/bootstrap.min.js');
        
        // Bootstrap Switch plugin
        $this->addCSS($this->_path.'css/bootstrapSwitch.css');
        
        // Spectrum Color picker
        $this->addCSS($this->_path.'css/spectrum.css');
        
        // EditArea plugin
        $this->addJS($this->_path.'js/editarea/edit_area_full.js');
        
        $this->addJS($this->_path.'js/plugins.js');
        
        // BSK Gear files
        $this->addCSS($this->_path.'css/bskGear.css');
        $this->addJS($this->_path.'js/bskGear.js');
    }
    
    /**
     * Creates the main content
     */
    public function createContent(){
        $this->smarty['form_msg'] = $this->processForm();
        
        $this->setMedia();
        $this->_html .= file_get_contents(__DIR__.DIRECTORY_SEPARATOR.'bskGear.html'); // get the html template
        
        /* set smarty variables */
        $this->smarty['form_action']= Tools::safeOutput($_SERVER['REQUEST_URI']);
        $this->smarty['css_files']  = $this->css_files; // echo all the css files
        $this->smarty['js_files']   = $this->js_files; // echo all the javascript files
        $this->smarty['mod_path']   = $this->_path; // module path
        $this->smarty['img_dir']    = _THEME_IMG_DIR_; // theme's images folder
        
        // enable/disable responsiveness
        $bskg_responsive = Configuration::get('bskg_responsive', null, $this->shop->group, $this->shop->id);
        $this->smarty['is_responsive'] = $this->_switchOption('is_responsive', $bskg_responsive);
        
        $bskg_general = unserialize( Configuration::get('bskg_general', null, $this->shop->group, $this->shop->id) ); // get General tab configuration
        $this->smarty['linksColor']                     = $bskg_general['links_color'];
        $this->smarty['linksColor_hover']               = $bskg_general['links_color_hover'];
        $this->smarty['priceColor']                     = $bskg_general['price_color'];
        $this->smarty['textColor']                      = $bskg_general['text_color'];
        $this->smarty['tabColor']                       = $bskg_general['tab_title_color'];
        $this->smarty['tabSelectedColor']               = $bskg_general['tab_selected_color'];
        $this->smarty['productLabelsColor']             = $bskg_general['product_labels_color'];
        $this->smarty['productLabelsColor_bkg']         = $bskg_general['product_labels_color_bkg'];
        $this->smarty['productGridDescColor']           = $bskg_general['product_grid_desc_color'];
        $this->smarty['productGridDescColor_bkg']       = $bskg_general['product_grid_desc_color_bkg'];
        $this->smarty['productGridDescColor_lborder']   = $bskg_general['product_grid_desc_color_lborder'];
        $this->smarty['btnSmallExclusiveColor']         = $bskg_general['btn_small_exclusive_color'];
        $this->smarty['btnSmallExclusiveColor_bkg']     = $bskg_general['btn_small_exclusive_color_bkg'];
        $this->smarty['btnExclusiveColor']              = $bskg_general['btn_exclusive_color'];
        $this->smarty['btnExclusiveColor_bkg']          = $bskg_general['btn_exclusive_color_bkg'];
        
        $bskg_bkg = unserialize( Configuration::get('bskg_bkg', null, $this->shop->group, $this->shop->id) ); // get Background tab configuration
        $this->smarty['bkgColor'] = $bskg_bkg['color'];
        $this->smarty['bkgPattern'] = $bskg_bkg['pattern'];
        $this->smarty['bkgImage'] = $bskg_bkg['image'];
        $this->smarty['bkgImagePath'] = $this->_path.'img/'; // begining of image path
        if( $bskg_bkg['image'] != 'no_img.png' ){
            $this->smarty['bkgImagePath'] .= 'theme/bkg/'.$bskg_bkg['image'];
        } else { // no bkg image is set
            $this->smarty['bkgImagePath'] .= $bskg_bkg['image'];
        }
        // bkg repeat radio options
        $bkgRepeat = array( 
            array('id' => 'bkgRepeat_no', 'label' => 'No repeat', 'value'=>'no-repeat'),
            array('id' => 'bkgRepeat_xy', 'label' => 'X Y', 'value'=>'repeat'),
            array('id' => 'bkgRepeat_x', 'label' => 'X', 'value'=>'repeat-x'),
            array('id' => 'bkgRepeat_y', 'label' => 'Y', 'value'=>'repeat-y')
        );
        $this->smarty['bkgRepeat'] = $this->_radioOptions($bkgRepeat, 'bkgRepeat', $bskg_bkg['repeat']);
        // bkg position radio options
        $bkgPosition = array( 
            array('id' => 'bkgPosition_left', 'label' => 'left', 'value'=>'left'),
            array('id' => 'bkgPosition_center', 'label' => 'center', 'value'=>'center'),
            array('id' => 'bkgPosition_right', 'label' => 'right', 'value'=>'right'),
        );
        $this->smarty['bkgPosition'] = $this->_radioOptions($bkgPosition, 'bkgPosition', $bskg_bkg['position']);
        $this->smarty['bkgFixed'] = $this->_switchOption('bkgFixed', $bskg_bkg['fixed']);
        
        $this->smarty['customcss'] = Configuration::get('bskg_css', null, $this->shop->group, $this->shop->id); // get Custom CSS configuration
        
        
        $this->execTemplate();
        return $this->_html;
    }
    
    /**
     * Process data after form submition
     * @return string alert message
     */
    public function processForm() {
        if(Tools::isSubmit('saveSubmit')){ // save data
            // Save General Tab
            $bskg_general = array(
                'links_color'                       => Tools::getValue('linksColor'),
                'links_color_hover'                 => Tools::getValue('linksColor_hover'),
                'price_color'                       => Tools::getValue('priceColor'),
                'text_color'                        => Tools::getValue('textColor'),
                'tab_title_color'                   => Tools::getValue('tabColor'),
                'tab_selected_color'                => Tools::getValue('tabSelectedColor'),
                'product_labels_color'              => Tools::getValue('productLabelsColor'),
                'product_labels_color_bkg'          => Tools::getValue('productLabelsColor_bkg'),
                'product_grid_desc_color'           => Tools::getValue('productGridDescColor'),
                'product_grid_desc_color_bkg'       => Tools::getValue('productGridDescColor_bkg'),
                'product_grid_desc_color_lborder'   => Tools::getValue('productGridDescColor_lborder'),
                'btn_small_exclusive_color'         => Tools::getValue('btnSmallExclusiveColor'),
                'btn_small_exclusive_color_bkg'     => Tools::getValue('btnSmallExclusiveColor_bkg'),
                'btn_exclusive_color'               => Tools::getValue('btnExclusiveColor'),
                'btn_exclusive_color_bkg'           => Tools::getValue('btnExclusiveColor_bkg')
            );
            Configuration::updateValue('bskg_general', serialize($bskg_general), false, $this->shop->group, $this->shop->id);
            Configuration::updateValue('bskg_responsive', Tools::getValue('is_responsive'), false, $this->shop->group, $this->shop->id);
            
            //Save Background Tab
            $bskg_bkg = array(
                'color'     => Tools::getValue('bkgColor'),
                'pattern'   => Tools::getValue('bkgPattern'),
                'image'     => Tools::getValue('bkgImage'),
                'repeat'    => Tools::getValue('bkgRepeat'),
                'position'  => Tools::getValue('bkgPosition'),
                'fixed'     => Tools::getValue('bkgFixed'),
            );
            Configuration::updateValue('bskg_bkg', serialize($bskg_bkg), false, $this->shop->group, $this->shop->id);
            
            //Save Custom CSS Tab
            Configuration::updateValue('bskg_css', Tools::getValue('customcss'), true, $this->shop->group, $this->shop->id);
            
            return '
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                The configuration has been saved succesfully!
            </div>';
            
        } else if(Tools::isSubmit('resetSubmit')){ // reset data
            self::initConfiguration($this->shop->group, $this->shop->id);
            
            return '
            <div class="alert">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                The configuration has been reset to default!
            </div>';
        }
        
        return '';
    }


    /**
     * Replace template format with corresponding variables from smarty
     */
    private function execTemplate() {
        foreach ($this->smarty as $key => $value) {
            $this->_html = str_replace('{*'.$key.'*}', $value, $this->_html);
        }
    }
    
    /**
     * Set default configuration
     */
    public static function initConfiguration( $id_shop_group = 1, $id_shop = 1 ){
        Configuration::updateValue('bskGear_init', true, false, $id_shop_group, $id_shop); // set framework as initiated
        
        // General Tab
        $bskg_general = array(
            //'responsive' => false,
            'links_color' => '#0088cc',
            'links_color_hover' => '#005580',
            'price_color' => '#ff4848',
            'text_color' => '#333',
            'tab_title_color' => '#000',
            'tab_selected_color' => '#000',
            'product_labels_color' => '#fff',
            'product_labels_color_bkg' => 'rgba(255, 72, 72, 0.6)',
            'product_grid_desc_color' => '#fff',
            'product_grid_desc_color_bkg' => 'rgba(0,0,0,0.6)',
            'product_grid_desc_color_lborder' => '#000',
            'btn_small_exclusive_color' => '#fff',
            'btn_small_exclusive_color_bkg' => '#167db2',
            'btn_exclusive_color' => '#fff',
            'btn_exclusive_color_bkg' => '#167db2',
        );
        Configuration::updateValue('bskg_general', serialize($bskg_general), false, $id_shop_group, $id_shop);
        Configuration::updateValue('bskg_responsive', 'on', false, $id_shop_group, $id_shop);
        
        /*// Fonts Tab
        $bskg_fonts = array(
            'headings_font'     => 'psans',
            'text_font'         => 10,
            'text_size'         => 10
        );
        Configuration::updateValue('bskg_fonts', serialize($bskg_fonts));*/
        
        // Background Tab
        $bskg_bkg = array(
            'color'     => '#fff',
            'pattern'   => 1,
            'image'     => 'no_img.png',
            'repeat'    => 'repeat',
            'position'  => 'center',
            'fixed'     => 'on'
        );
        Configuration::updateValue('bskg_bkg', serialize($bskg_bkg), false, $id_shop_group, $id_shop);
        
        /*// Layout Tab
        $bskg_layout = array(
            'header_l1_first_bar_bkg_color'         => '#000', // header > layout 1 > first bar > background color
            'header_l1_first_bar_links_color'       => '#000', // header > layout 1 > first bar > links color
            'header_l1_first_bar_links_color_hover' => '#000', // header > layout 1 > first bar > links color hover
        );
        Configuration::updateValue('bskg_layout', serialize($bskg_layout));*/
        
        // Custom CSS Tab
        Configuration::updateValue('bskg_css', '/* Put your custom css in here. */', true, $id_shop_group, $id_shop);
    }
    
    /**
     * Create HTML output for css file
     * @param string $link
     */
    private function addCSS($link) {
        $this->css_files .= "<link href='{$link}' rel='stylesheet' type='text/css'>";
    }
    
    /**
     * Create HTML output for js file
     * @param string $link
     */
    private function addJS($link) {
        $this->js_files .= "<script src='{$link}' type='text/javascript'></script>";
    }
    
    /**
     * Create HTML output for radio options
     * @param array $radioArr array( array('id' => 'uniqueID', 'label' => 'Label Text', 'value' => 'radioVal') )
     * @param string $name the name of the radio inputs
     * @param type $checked the checked radio
     */
    public function _radioOptions($radioArr, $name, $checked) {
        $radioHTML = '';
        foreach ($radioArr as $radio) {
            extract($radio);
            $radioHTML .= "
                <div class='radio'>
                    <input type='radio' value='{$value}' name='{$name}' id='{$id}' ";
            if( $value == $checked ) $radioHTML .= 'checked';
            $radioHTML .= " />
                    <label for='{$id}'>{$label}</label>
                </div>";
        }
        return $radioHTML;
    }
    
    /**
     * Create HTML output for switch option
     * @param string $name the name of the input
     * @param string $on 'on' for checked
     * @return string
     */
    public function _switchOption($name, $on=false) {
        $icon_ok = '<i class="icon-ok icon-white"></i>';
        $icon_remove = '<i class="icon-remove"></i>';
        $switchHTML = "
            <div class='switch' data-on-label='{$icon_ok}' data-off-label='{$icon_remove}'>
                <input type='checkbox' name='{$name}' ";
        if( $on == 'on' ) $switchHTML .= 'checked';
        $switchHTML .= " />
            </div>";
        return $switchHTML;
    }
}


/***********************************
 *          Show Content
 ***********************************/
if( isset($_GET['start']) ){
    define('__DIR__', dirname(__FILE__));
    $bskGear = new BskGear();
    echo $bskGear->createContent();
}
?>