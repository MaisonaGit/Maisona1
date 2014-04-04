<?php
/*
 * BSK Theme Options
 */

if (!defined('_PS_VERSION_')) exit;

	
class BskThemeOptions extends Module{

    public function __construct()
    {
        $this->name = 'bskthemeoptions';
        $this->tab = 'administration';
        $this->version = '1.2';
        $this->author = 'BitSHOK';
        $this->need_instance = 0;

        parent::__construct();

        $this->displayName = $this->l('BitSHOK GEAR Theme Options');
        $this->description = $this->l('Theme Options for RainDrop Theme');
        
        $this->confirmUninstall = $this->l('The RainDrop Theme depends on this module. Are you sure you want to uninstall?');
    }
    
    /**********************************
     * Custom Positions (Hooks)
     *********************************/

    /**
     * Install module
     * 
     * @return boolean
     */
    public function install()
    {
        /* Install Positions */
        $this->installPositions();
        
        if (!parent::install() || !$this->registerHook('displayHeader') )
                return false;
        return true;
    }

    /**
     * Uninstall module
     * 
     * @return boolean
     */
    public function uninstall()
    {
        $this->deletePositions(); // Uninstall Positions

        /* Uninstall this module */
        if (!parent::uninstall())
        return ( parent::uninstall() );
    }
    
    /**
     * Install Positions ( Custom Hooks )
     */
    public function installPositions(){
        /* Display Nav Links Position */
        $this->_addPosition('displayNavLinks', 'Main nav bar - links', 'An area to display links');
        
        /* Display Nav Right Position */
        $this->_addPosition('displayNavSCL', 'Main nav bar - search, currencies and languages', 'An area to display currencies, languages and search');
        
        /* Display Slider Position */
        $this->_addPosition('displaySlider', 'Slider header position', 'display the slider in header');
        
        /* Display Ads Position */
        $this->_addPosition('displayAds', 'Advertising position', 'display ads in header');
        
        /* Display New, Featured and Specials products on home Position */
        $this->_addPosition('homeNFS', 'Home Products Tabs', 'New, Featured and Specials products on home');
        
        /* Display Newsletter and/or Reassurance block Position */
        $this->_addPosition('displayBlueBlock', 'Home Blue Block', 'Newsletter and/or Reassurance block');
        
        /* Display Newsletter and/or Reassurance block Position */
        $this->_addPosition('footerBar', 'Footer Bar', 'Footer Bar with Twitter');
    }
    
    /**
     * Delete all positions from DB
     */
    public function deletePositions() {
        $pos2del = array(
            'displayNavLinks',
            'displayNavSCL',
            'displaySlider',
            'displayAds',
            'homeNFS',
            'displayBlueBlock',
            'footerBar'
            );
        $this->_delPosition($pos2del);
    }
    
    /**
     * Insert position into DB
     * 
     * @param string $name      technical name
     * @param string $title     title to display in BO > Modules > Positions
     * @param string $desc      description
     */
    private function _addPosition($name, $title, $desc) {
        DB::getInstance()->insert('hook', array(
            'name'          =>  $name,
            'title'         =>  $title,
            'description'   =>  $desc
        ));
    }
    
    /**
     * Delete position from DB
     * 
     * @param string $posName   technical name
     */
    private function _delPosition($posName) {
        if( is_string($posName) ){
            DB::getInstance()->delete('hook', 'name="'.$posName.'"');
        } else if(is_array($posName) ){
            foreach ($posName as $name) {
                $this->_delPosition($name);
            }
        }
    }

    
    /**********************************
     * Position Hooks
     *********************************/

    /** 
     * Header of pages (Technical name: displayHeader)
     */
    public function hookHeader() {
        Tools::init_bsresponsive($this->context->smarty);
        Page::setPagesAbbr();
        
        // if right column hook
        if( !Hook::hookHasModules('displayRightColumn') ){
            $this->context->smarty->assign('hide_right_column', true);
        }
        
        // if left column hook
        if( !Hook::hookHasModules('displayLeftColumn') ){
            $this->context->smarty->assign('hide_left_column', true);
        }
        
        // if nav_main_links hook
        if( Hook::hookHasModules('displayNavLinks') ){
            $this->context->smarty->assign('HOOK_NAV_MAIN_LINKS', Hook::exec('displayNavLinks'));
        }
        
        // if nav_main_scl hook
        if( Hook::hookHasModules('displayNavSCL') ){
            $this->context->smarty->assign('HOOK_NAV_MAIN_SCL', Hook::exec('displayNavSCL'));
        }
        
        // if footer_bar hook
        if( Hook::hookHasModules('footerBar') ){
            $this->context->smarty->assign('FOOTER_BAR', Hook::exec('footerBar'));
        }
        
        
        /* 
         * Home Page
         */
        if(Page::is('home')){
            // hide left and right columns  @todo variables to choose from in admin
            $this->context->smarty->assign(array(
                'hide_left_column'      => true,
                'hide_right_column'     => true
            ));
            
            // if home add slider hook
            if( Hook::hookHasModules('displaySlider') ){
                $this->context->smarty->assign('HOOK_SLIDER', Hook::exec('displaySlider'));
            }
            
            // if home add ads hook
            if( Hook::hookHasModules('displayAds') ){
                $this->context->smarty->assign('HOOK_ADS', Hook::exec('displayAds'));
            }
            
            // prepare home products tabs
            if( Hook::hookHasModules('homeNFS') ){
                $hnfs_tabs = array();
                foreach (Hook::getHookModuleExecList('homeNFS') as $tab) {
                    $hnfs_tabs[] = $tab['module'];
                }
                $this->context->smarty->assign(array(
                    'hnfs_tabs'             => $hnfs_tabs,
                    'HOOK_HOME_NFS'         => Hook::exec('homeNFS')
                ));
            }
            
            // home blue block
            if( Hook::hookHasModules('displayBlueBlock') ){
                $this->context->smarty->assign('HOOK_BLUE_BLOCK', Hook::exec('displayBlueBlock'));
            }
        }
        /* END Home Page */
        
        /* 
         * Product Page
         */
        if(Page::is('product')){
            // hide left and right columns  @todo variables to choose from in admin
            $this->context->smarty->assign(array(
                'hide_left_column'      => true,
                'hide_right_column'     => true,
                'thumbs_position'       => 'right' // @todo Configuration variable
            ));
        }
        /* END Product Page */
        
        Tools::calcColumnGrid();
        
        // bskGear front configuration
        return '<link href="'.$this->_path.'bskGear_front.php" rel="stylesheet" type="text/css" />';
    }
    
    /*
     * Configuration page
     */
    public function getContent(){
        require 'bskGear.php';
        // first time init bskGear framework
        if( !Configuration::get('bskGear_init', null, $this->context->shop->id_shop_group, $this->context->shop->id) )
                BskGear::initConfiguration($this->context->shop->id_shop_group, $this->context->shop->id);
        
        return '
        <script type="text/javascript">
        function set_size(ht){
            $("#bskGearFramework").height(ht);
        }
        </script>
        <object id="bskGearFramework" style="width:100%;" type="text/html" data="'.$this->_path.'bskGear.php?start&lang_id='.$this->context->language->id.'&shop_id='.$this->context->shop->id.'&shop_group_id='.$this->context->shop->id_shop_group.'"></object>';
    }
}
?>
