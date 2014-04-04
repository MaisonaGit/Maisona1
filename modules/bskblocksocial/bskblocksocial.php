<?php
/*
 * BSK Social Module
 */

if (!defined('_PS_VERSION_')) exit;
	
class BskBlockSocial extends Module
{
    /**
     * Configuration of social media
     * Array of stdClass with:
     *      - name
     *      - link
     *      - icon
     *      - hover
     * 
     * @var array  contains stdClass
     */
    private $social = array();
    
    /**
     * Configuration for share buttons
     *      - facebook
     *      - twitter
     *      - google
     *      - pinterest
     * 
     * @var array  contains boolean 
     */
    private $share = array();


    public function __construct(){
        $this->name = 'bskblocksocial';
        $this->tab = 'social_networks';
        $this->version = '1.2';
        $this->author = 'BitSHOK';

        parent::__construct();

        $this->displayName = $this->l('BitSHOK Block social');
        $this->description = $this->l('Add your social networks');
        
        
        if(Configuration::hasKey('bskblocksocial_social'))
            $this->social = $this->_unserializeStdArray(Configuration::get('bskblocksocial_social'));
    }

    /**
     * Install module
     * 
     * @return boolean
     */
    public function install(){
        /*
         * temporary sample data
         * @todo remove when admin
         */
        $this->social[] = new stdClass();
        $this->social[0]->name  = 'Facebook';
        $this->social[0]->link  = '#facebook';
        $this->social[0]->icon  = $this->_path.'img/icons/facebook.png';
        $this->social[0]->hover = '';
        $this->social[] = new stdClass();
        $this->social[1]->name  = 'Twitter';
        $this->social[1]->link  = '#twitter';
        $this->social[1]->icon  = $this->_path.'img/icons/twitter.png';
        $this->social[1]->hover = '';
        $this->social[] = new stdClass();
        $this->social[2]->name  = 'Youtube';
        $this->social[2]->link  = '#youtube';
        $this->social[2]->icon  = $this->_path.'img/icons/youtube.png';
        $this->social[2]->hover = '';
        /* END temporary sample data */
        
        return (parent::install() AND
                Configuration::updateValue( 'bskblocksocial_social', $this->_serializeStdArray($this->social) ) &&
                //Configuration::updateValue( 'bskblocksocial_share', serialize($this->share) ) &&
                $this->registerHook('displayHeader') &&
                $this->registerHook('displayFooter')
                //$this->registerHook('displayFooterProduct') && @todo rewrite share buttons for product
                );
    }

    /**
     * Uninstall module
     * 
     * @return boolean
     */
    public function uninstall(){
            //Delete configuration			
            return (Configuration::deleteByName('bskblocksocial_social') && 
                    Configuration::deleteByName('bskblocksocial_share')
                    AND parent::uninstall());
    }
    
    /**
     * Prepare an array of stdClass to be saved into database
     * 
     * @param array $stdArray
     * @return string
     * @throws Exception
     */
    private function _serializeStdArray($stdArray) {
        try {
            if( !is_array($stdArray) ) throw new Exception('Invalid parameter: not array');

            $serStd = array();
            foreach ($stdArray as $std) {
                if( !($std instanceof stdClass) ) throw new Exception('Array contains non stdClass objects');
                $serStd[] = serialize($std);
            }
            
            return serialize($serStd);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    
    /**
     * Unserialize an array of stdClass from database
     * 
     * @param string $stdArray
     * @return array
     */
    private function _unserializeStdArray($stdArray){
        $serStd = unserialize($stdArray);
        $result = array();
        foreach ($serStd as $std) {
            $result[] = unserialize($std);
        }
        return $result;
    }

    // @todo admin for module
    /**
     * Set scripts for Configuration Page
     */
//    private function _adminSetScripts(){
//       /* Add Switch Button checkbox plugin */
//       Tools::addCSS($this->_path.'js/plugins/switchbutton/ui.switchbutton.min.css');
//       Tools::addJS($this->_path.'js/plugins/switchbutton/demo/jquery.tmpl.min.js');
//       Tools::addJS($this->_path.'js/plugins/switchbutton/demo/jquery-ui-1.8.16.custom.min.js');
//       Tools::addJS($this->_path.'js/plugins/switchbutton/jquery.switchbutton.min.js');
//
//       /* Backend CSS an JS scripts */
//       Tools::addCSS($this->_path.'css/backend.css');
//       Tools::addJS($this->_path.'js/backend.js');
//    }
    
    /**
     * Process submited data
     */
//    private function _postProcess(){
//        $output = '';
//        if ( isset($_POST['submitProfiles']) ){	
//            Configuration::updateValue('bsk_blocksocial_facebook', Tools::getValue('bsk_facebook_url'));
//            Configuration::updateValue('bsk_blocksocial_behance', Tools::getValue('bsk_behance_url'));
//            Configuration::updateValue('bsk_blocksocial_deviantart', Tools::getValue('bsk_deviantart_url'));
//            Configuration::updateValue('bsk_blocksocial_dribbble', Tools::getValue('bsk_dribbble_url'));
//            Configuration::updateValue('bsk_blocksocial_forrst', Tools::getValue('bsk_forrst_url'));
//            Configuration::updateValue('bsk_blocksocial_github', Tools::getValue('bsk_github_url'));
//            Configuration::updateValue('bsk_blocksocial_lastfm', Tools::getValue('bsk_github_url'));
//            Configuration::updateValue('bsk_blocksocial_linkedin', Tools::getValue('bsk_linkedin_url'));
//            Configuration::updateValue('bsk_blocksocial_picasa', Tools::getValue('bsk_picasa_url'));
//            Configuration::updateValue('bsk_blocksocial_skype', Tools::getValue('bsk_skype_url'));
//            Configuration::updateValue('bsk_blocksocial_tumblr', Tools::getValue('bsk_tumblr_url'));
//            Configuration::updateValue('bsk_blocksocial_twitter', Tools::getValue('bsk_twitter_url'));
//            Configuration::updateValue('bsk_blocksocial_rss', Tools::getValue('bsk_rss_url'));
//            Configuration::updateValue('bsk_blocksocial_youtube', Tools::getValue('bsk_youtube_url'));
//            $output = '<div class="conf confirm">'.$this->l('Social Profiles updated').'</div>';
//
//            return $output;
//        }
//        
//        if ( isset($_POST['submitShare']) ){	
//            Configuration::updateValue( 'bsk_blocksocial_share_facebook', Tools::getValue('enableFacebook') );
//            Configuration::updateValue( 'bsk_blocksocial_share_twitter', Tools::getValue('enableTwitter') );
//            Configuration::updateValue( 'bsk_blocksocial_share_google', Tools::getValue('enableGoogle') );
//            Configuration::updateValue( 'bsk_blocksocial_share_pinterest', Tools::getValue('enablePinterest') );
//            $output = '<div class="conf confirm">'.$this->l('Social Share updated').'</div>';
//
//            return $output;
//        }
//        
//        
//    }
//
//    public function getContent()
//    {
//        $this->_adminSetScripts();
//        // If we try to update the settings
//        $output = $this->_postProcess();
//
//        $output = '
//        <h2>'.$this->displayName.'</h2>
//        '.$output.'
//        <form action="'.Tools::htmlentitiesutf8($_SERVER['REQUEST_URI']).'" method="post">
//            <fieldset class="width2" style="float:left; margin-right:50px;">
//                <legend>Social Profiles</legend>
//                <label for="facebook_url">'.$this->l('Facebook URL: ').'</label>
//                <input type="text" id="facebook_url" name="bsk_facebook_url" value="'.Tools::safeOutput(Configuration::get('bsk_blocksocial_facebook')).'" />
//                <div class="clear">&nbsp;</div>		
//                <label for="twitter_url">'.$this->l('Twitter URL: ').'</label>
//                <input type="text" id="twitter_url" name="bsk_twitter_url" value="'.Tools::safeOutput(Configuration::get('bsk_blocksocial_twitter')).'" />
//                <div class="clear">&nbsp;</div>		
//                <label for="rss_url">'.$this->l('RSS URL: ').'</label>
//                <input type="text" id="rss_url" name="bsk_rss_url" value="'.Tools::safeOutput(Configuration::get('bsk_blocksocial_rss')).'" />
//                <div class="clear">&nbsp;</div>		
//                <label for="youtube_url">'.$this->l('Youtube URL: ').'</label>
//                <input type="text" id="youtube_url" name="bsk_youtube_url" value="'.Tools::safeOutput(Configuration::get('bsk_blocksocial_youtube')).'" />
//                <div class="clear">&nbsp;</div>		
//                <label for="linkedin_url">'.$this->l('LinkedIn URL: ').'</label>
//                <input type="text" id="linkedin_url" name="bsk_linkedin_url" value="'.Tools::safeOutput(Configuration::get('bsk_blocksocial_linkedin')).'" />
//                <div class="clear">&nbsp;</div>		
//                <label for="skype_url">'.$this->l('Skype ID: ').'</label>
//                <input type="text" id="skype_url" name="bsk_skype_url" value="'.Tools::safeOutput(Configuration::get('bsk_blocksocial_skype')).'" />
//                <div class="clear">&nbsp;</div>		
//                <label for="tumblr_url">'.$this->l('Tumblr URL: ').'</label>
//                <input type="text" id="tumblr_url" name="bsk_tumblr_url" value="'.Tools::safeOutput(Configuration::get('bsk_blocksocial_tumblr')).'" />
//                <div class="clear">&nbsp;</div>		
//                <label for="picasa_url">'.$this->l('Picasa URL: ').'</label>
//                <input type="text" id="picasa_url" name="bsk_picasa_url" value="'.Tools::safeOutput(Configuration::get('bsk_blocksocial_picasa')).'" />
//                <div class="clear">&nbsp;</div>		
//                <label for="lastfm_url">'.$this->l('Last FM URL: ').'</label>
//                <input type="text" id="lastfm_url" name="bsk_lastfm_url" value="'.Tools::safeOutput(Configuration::get('bsk_blocksocial_lastfm')).'" />
//                <div class="clear">&nbsp;</div>		
//                <label for="github_url">'.$this->l('Git Hub URL: ').'</label>
//                <input type="text" id="github_url" name="bsk_github_url" value="'.Tools::safeOutput(Configuration::get('bsk_blocksocial_github')).'" />
//                <div class="clear">&nbsp;</div>		
//                <label for="forrst_url">'.$this->l('Forrst URL: ').'</label>
//                <input type="text" id="forrst_url" name="bsk_forrst_url" value="'.Tools::safeOutput(Configuration::get('bsk_blocksocial_forrst')).'" />
//                <div class="clear">&nbsp;</div>		
//                <label for="dribbble_url">'.$this->l('Dribbble URL: ').'</label>
//                <input type="text" id="dribbble_url" name="bsk_dribbble_url" value="'.Tools::safeOutput(Configuration::get('bsk_blocksocial_dribbble')).'" />
//                <div class="clear">&nbsp;</div>		
//                <label for="deviantart_url">'.$this->l('Deviantart URL: ').'</label>
//                <input type="text" id="deviantart_url" name="bsk_deviantart_url" value="'.Tools::safeOutput(Configuration::get('bsk_blocksocial_deviantart')).'" />
//                <div class="clear">&nbsp;</div>		
//                <label for="behance_url">'.$this->l('Behance URL: ').'</label>
//                <input type="text" id="behance_url" name="bsk_behance_url" value="'.Tools::safeOutput(Configuration::get('bsk_blocksocial_behance')).'" />
//                <div>
//                    <br />
//                    <input type="submit" name="submitProfiles" value="'.$this->l('Save').'" class="button" />
//                </div>
//            </fieldset>
//        </form>';
//
//        $enableFacebook = Tools::safeOutput( Configuration::get('bsk_blocksocial_share_facebook') );
//        if($enableFacebook) $enableFacebook = 'checked="checked"'; else $enableFacebook = '';
//        $enableTwitter = Tools::safeOutput( Configuration::get('bsk_blocksocial_share_twitter') );
//        if($enableTwitter) $enableTwitter = 'checked="checked"'; else $enableTwitter = '';
//        $enableGoogle = Tools::safeOutput( Configuration::get('bsk_blocksocial_share_google') );
//        if($enableGoogle) $enableGoogle = 'checked="checked"'; else $enableGoogle = '';
//        $enablePinterest = Tools::safeOutput( Configuration::get('bsk_blocksocial_share_pinterest') );
//        if($enablePinterest) $enablePinterest = 'checked="checked"'; else $enablePinterest = '';
//        $output .= '
//        <form action="'.Tools::htmlentitiesutf8($_SERVER['REQUEST_URI']).'" method="post">
//            <fieldset class="width2" style="float:left;">
//                <legend>Social Share Product</legend>
//                <div class="section">
//                    <label for="enableFacebook">'.$this->l('Facebook').'</label>
//                    <input type="checkbox" class="switchbutton" name="enableFacebook" id="enableFacebook" '.$enableFacebook.' />
//                </div>
//                <div class="section">
//                    <label for="enableTwitter">'.$this->l('Twitter').'</label>
//                    <input type="checkbox" class="switchbutton" name="enableTwitter" id="enableTwitter" '.$enableTwitter.' />
//                </div>
//                <div class="section">
//                    <label for="enableGoogle">'.$this->l('Google +1').'</label>
//                    <input type="checkbox" class="switchbutton" name="enableGoogle" id="enableGoogle" '.$enableGoogle.' />
//                </div>
//                <div class="section">
//                    <label for="enablePinterest">'.$this->l('Pinterest').'</label>
//                    <input type="checkbox" class="switchbutton" name="enablePinterest" id="enablePinterest" '.$enablePinterest.' />
//                </div>
//                <div>
//                    <br />
//                    <input type="submit" name="submitShare" value="'.$this->l('Save').'" class="button" />
//                </div>
//            </fieldset>
//        </form>
//        ';
//        
//        return $output;
//    }

    public function hookDisplayHeader(){
        $this->context->controller->addCSS($this->_path.'bskblocksocial.css', 'all');
    }

    public function hookDisplayFooter(){
        $this->context->smarty->assign(array(
            'bskblocksocial_path'   => $this->_path, // @todo remove when admin
            'bskblocksocial_social' => $this->social
        ));
        
        return $this->display(__FILE__, 'bskblocksocial.tpl');
    }
    
    /**
     * Hook on Product Footer (displayFooterProduct)
     * 
     * @todo rewrite function
     * @todo Add support for facebook appId instead of using my own id
     * 
     * @return string
     */
    public function hookDisplayFooterProduct(){
        
    }
}
?>
