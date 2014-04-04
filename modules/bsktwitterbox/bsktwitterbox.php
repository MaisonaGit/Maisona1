<?php
/*
 * BitSHOK Starter Module
 * 
 * @author BitSHOK <office@bitshok.net>
 * @copyright 2012 BitSHOK
 * @version 1.0
 * @license http://creativecommons.org/licenses/by/3.0/ CC BY 3.0
 */

if (!defined('_PS_VERSION_')) exit;
define('__DIR__', dirname(__FILE__));

class BskTwitterBox extends Module{
   
    public function __construct() {
        $this->name = 'bsktwitterbox'; // internal identifier, unique and lowercase
        $this->tab = 'other'; // backend module coresponding category
        $this->version = '1.0'; // version number for the module
        $this->author = 'BitSHOK'; // module author
        $this->need_instance = 0; // load the module when displaying the "Modules" page in backend

        parent::__construct();

        $this->displayName = $this->l('Twitter Box'); // public name
        $this->description = $this->l('Twitter Box for PrestaShop 1.5.x'); // public description
    }

    /*
     * Install this module
     */
    public function install()
    {
        if (!parent::install() ||
            !$this->registerHook('displayHeader') ||
            !$this->registerHook('footerBar') )
                return false;
        
        $this->initConfiguration(); // set default values for settings
        
        return true;
    }

    /*
     * Uninstall this module
     */
    public function uninstall()
    {
        if (!parent::uninstall())
            Db::getInstance()->Execute('DELETE FROM `'._DB_PREFIX_.$this->name.'`');
        
        $this->deleteConfiguration(); // delete settings
        
        return parent::uninstall();
    }

    /*
     * Header of pages hook (Technical name: displayHeader)
     */
    public function hookHeader(){
        $this->context->controller->addCSS($this->_path.'style.css');
        $this->context->controller->addJS($this->_path.'script.js');
    }

    /*
     * Homepage content hook (Technical name: displayHome)
     */
    public function hookFooterBar(){
        $settings = unserialize( Configuration::get($this->name.'_settings') );
        
        $this->context->smarty->assign(array(
            'widget_id'     =>  $settings['widget_id'],
            'tweets_limit'   =>  $settings['tweets_limit']
        ));
        
        return $this->display(__FILE__, $this->name.'.tpl');
    }
    
    /**
     * Configuration page
     */
    public function getContent(){
        $output = $this->processForm();
        $settings = unserialize( Configuration::get($this->name.'_settings') );
        
        $output .= '
        <form action="'.Tools::safeOutput($_SERVER['REQUEST_URI']).'" method="post" enctype="multipart/form-data">
            <fieldset>
                <legend>'.$this->l('Twitter Box').'</legend>
                    
                <div class="multishop_info">
                    <ol>
                        <li>1. Go to <a href="https://twitter.com/">Twitter</a> and sign in as normal.</li>
                        <li>2. Go to your settings page.</li>
                        <li>3. Go to "Widgets" on the left hand side.</li>
                        <li>4. Create a new widget for what you need eg "user timeline" or "search" etc.</li>
                        <li>5. Now go back to settings page, and then go back to widgets page, you should see the widget you just created. Click edit.</li>
                        <li>6. Now look at the URL in your web browser, you will see a long number like this: 355763562850942976 . Use this as your ID below.</li>
                    </ol>
                    <br class="clear" />
                </div>
                <div class="opt clearfix">
                    <label for="widget_id">'.$this->l('Widget ID').'</label>
                    <div class="margin-form">
                        <input id="widget_id" type="text" name="widget_id" value="'.$settings['widget_id'].'" style="width:250px">
                    </div>
                </div>
                <div class="opt clearfix">
                    <label for="tweets_limit">'.$this->l('Tweets limit').'</label>
                    <div class="margin-form">
                        <input id="tweets_limit" type="text" name="tweets_limit" value="'.$settings['tweets_limit'].'" style="width:250px">
                    </div>
                </div>
                
                <div class="margin-form">
                    <input class="button" type="submit" name="saveBtn" value="Save">
                </div>
            </fieldset>
        </form>';
        
        return $output;
    }
    
    /**
     * Process data from Configuration page after form submition
     * @return string message
     */
    protected function processForm() {
        if(Tools::isSubmit('saveBtn')){ // save data
            $settings = array(
                'widget_id'           => Tools::getValue('widget_id'),
                'tweets_limit'          => Tools::getValue('tweets_limit')
            );
            Configuration::updateValue($this->name.'_settings', serialize($settings));
            
            // display success message
            return $this->displayConfirmation($this->l('The settings have been successfully saved!'));
        }
        
        return '';
    }
    
    /**
     * Set the default values for Configuration page settings
     */
    protected function initConfiguration() {
        $settings = array(
            'widget_id'           => '355763562850942976',
            'tweets_limit'        => 5
        );
        Configuration::updateValue($this->name.'_settings', serialize($settings));
    }
    
    /**
     * Delete configuration from database
     */
    protected function deleteConfiguration() {
        Configuration::deleteByName($this->name.'_settings');
    }
}