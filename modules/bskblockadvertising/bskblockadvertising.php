<?php
if (!defined('_PS_VERSION_')) exit;

class bskBlockAdvertising extends Module {
    public $img1;
    public $img2;
    public $img3;
    
    public function __construct() {
        $this->name = 'bskblockadvertising';
        $this->tab = 'advertising_marketing';
        $this->version = '1.0';
        $this->author = 'BitSHOK';
        $this->need_instance = 0;

        parent::__construct();

        $this->displayName = $this->l('BitSHOK Block advertising');
        $this->description = $this->l('Adds an advertisement block to the header.');
    }
    
    public function install() {
        // 1st image
        Configuration::updateGlobalValue('IMG1_PATH', $this->context->link->protocol_content.Tools::getMediaServer($this->name)._MODULE_DIR_.$this->name.'/img/adv_sample.png');
        Configuration::updateGlobalValue('IMG1_LINK', 'http://www.bitshok.net');
        Configuration::updateGlobalValue('IMG1_TITLE', 'Sample title');
        // 2nd image
        Configuration::updateGlobalValue('IMG2_PATH', $this->context->link->protocol_content.Tools::getMediaServer($this->name)._MODULE_DIR_.$this->name.'/img/adv_sample.png');
        Configuration::updateGlobalValue('IMG2_LINK', 'http://www.bitshok.net');
        Configuration::updateGlobalValue('IMG2_TITLE', 'Sample title');
        // 3rd image
        Configuration::updateGlobalValue('IMG3_PATH', $this->context->link->protocol_content.Tools::getMediaServer($this->name)._MODULE_DIR_.$this->name.'/img/adv_sample.png');
        Configuration::updateGlobalValue('IMG3_LINK', 'http://www.bitshok.net');
        Configuration::updateGlobalValue('IMG3_TITLE', 'Sample title');
        
        return (parent::install() && $this->registerHook('displayAds') && $this->registerHook('displayHeader'));
    }
    
    public function uninstall() {
        // 1st image
        Configuration::deleteByName('IMG1_PATH');
        Configuration::deleteByName('IMG1_LINK');
        Configuration::deleteByName('IMG1_TITLE');
        // 2nd image
        Configuration::deleteByName('IMG2_PATH');
        Configuration::deleteByName('IMG2_LINK');
        Configuration::deleteByName('IMG2_TITLE');
        // 3rd image
        Configuration::deleteByName('IMG3_PATH');
        Configuration::deleteByName('IMG3_LINK');
        Configuration::deleteByName('IMG3_TITLE');
        return parent::uninstall();
    }
    
    public function getContent() {
        $this->postProcess();
        
        $this->img1 = Configuration::get('IMG1_PATH');
        $this->img2 = Configuration::get('IMG2_PATH');
        $this->img3 = Configuration::get('IMG3_PATH');
        
        $output = '
        <form action="'.Tools::safeOutput($_SERVER['REQUEST_URI']).'" method="post" enctype="multipart/form-data">
            <fieldset>
                <legend>'.$this->l('BitSHOK Advertising block').'</legend>';
        // 1st image
        $output .= '<div class="img1_wrapper">
            <p class="margin-form" style="font-size:18px">First Image</p>
            <div class="margin-form">
                <img src="'.$this->img1.'" alt="'.Configuration::get('IMG1_TITLE').'" title="'.Configuration::get('IMG1_TITLE').'" style="width:370px;height:150px;"/>
            </div>
            <label for="img1">'.$this->l('Change image').'</label>
            <div class="margin-form">
                <input id="img1" type="file" name="img1" />
                <p>'.$this->l('Image should be 370x150').'</p>
            </div>
            <label for="img1_link">'.$this->l('Image link').'</label>
            <div class="margin-form">
                <input id="img1_link" type="text" name="img1_link" value="'.Configuration::get('IMG1_LINK').'"/>
            </div>
            <label for="img1_title">'.$this->l('Image Title').'</label>
            <div class="margin-form">
                <input id="img1_title" type="text" name="img1_title" value="'.Configuration::get('IMG1_TITLE').'"/>
            </div>
        </div>';
        // 2nd image
        $output .= '<div class="img2_wrapper" style="margin-top:35px;">
            <p class="margin-form" style="font-size:18px">Second Image</p>
            <div class="margin-form">
                <img src="'.$this->img2.'" alt="'.Configuration::get('IMG2_TITLE').'" title="'.Configuration::get('IMG2_TITLE').'" style="width:370px;height:150px;"/>
            </div>
            <label for="img2">'.$this->l('Change image').'</label>
            <div class="margin-form">
                <input id="img2" type="file" name="img2" />
                <p>'.$this->l('Image should be 370x150').'</p>
            </div>
            <label for="img2_link">'.$this->l('Image link').'</label>
            <div class="margin-form">
                <input id="img2_link" type="text" name="img2_link" value="'.Configuration::get('IMG2_LINK').'"/>
            </div>
            <label for="img2_title">'.$this->l('Image Title').'</label>
            <div class="margin-form">
                <input id="img2_title" type="text" name="img2_title" value="'.Configuration::get('IMG2_TITLE').'"/>
            </div>
        </div>';
        // 3rd image
        $output .= '<div class="img3_wrapper" style="margin-top:35px;">
            <p class="margin-form" style="font-size:18px">Third Image</p>
            <div class="margin-form">
                <img src="'.$this->img3.'" alt="'.Configuration::get('IMG3_TITLE').'" title="'.Configuration::get('IMG3_TITLE').'" style="width:370px;height:150px;"/>
            </div>
            <label for="img3">'.$this->l('Change image').'</label>
            <div class="margin-form">
                <input id="img3" type="file" name="img3" />
                <p>'.$this->l('Image should be 370x150').'</p>
            </div>
            <label for="img3_link">'.$this->l('Image link').'</label>
            <div class="margin-form">
                <input id="img3_link" type="text" name="img3_link" value="'.Configuration::get('IMG3_LINK').'"/>
            </div>
            <label for="img3_title">'.$this->l('Image Title').'</label>
            <div class="margin-form">
                <input id="img3_title" type="text" name="img3_title" value="'.Configuration::get('IMG3_TITLE').'"/>
            </div>
        </div>';
        // submit
        $output .= '
        <div class="margin-form">
            <input class="button" type="submit" name="submitAds" value="'.$this->l('Validate').'"/>
        </div>';
        
        $output .= '</fieldset></form>';
        
        return $output;
    }
    
    public function postProcess() {
        $errors = '';
        if(Tools::isSubmit('submitAds')) {
            // 1st image
            Configuration::updateValue('IMG1_LINK', Tools::getValue('img1_link'));
            Configuration::updateValue('IMG1_TITLE', Tools::getValue('img1_title'));
            
            if( isset($_FILES['img1']) && isset($_FILES['img1']['tmp_name']) && !empty($_FILES['img1']['tmp_name']) ) {
                if ( $error = ImageManager::validateUpload($_FILES['img1'], Tools::convertBytes(ini_get('upload_max_filesize'))) ) $errors .= $error;
                else {
                    Configuration::updateValue('IMG1_PATH', $this->context->link->protocol_content.Tools::getMediaServer($this->name)._MODULE_DIR_.$this->name.'/img/'.$_FILES['img1']['name']);
                    // Copy the image in the module directory with its new name
                    if ( !move_uploaded_file($_FILES['img1']['tmp_name'], _PS_MODULE_DIR_.$this->name.'/img/'.$_FILES['img1']['name']) ) $errors .= $this->l('File upload error.');
                }
            }
            // 2nd image
            Configuration::updateValue('IMG2_LINK', Tools::getValue('img2_link'));
            Configuration::updateValue('IMG2_TITLE', Tools::getValue('img2_title'));
            
            if( isset($_FILES['img2']) && isset($_FILES['img2']['tmp_name']) && !empty($_FILES['img2']['tmp_name']) ) {
                if ( $error = ImageManager::validateUpload($_FILES['img2'], Tools::convertBytes(ini_get('upload_max_filesize'))) ) $errors .= $error;
                else {
                    Configuration::updateValue('IMG2_PATH', $this->context->link->protocol_content.Tools::getMediaServer($this->name)._MODULE_DIR_.$this->name.'/img/'.$_FILES['img2']['name']);
                    // Copy the image in the module directory with its new name
                    if ( !move_uploaded_file($_FILES['img2']['tmp_name'], _PS_MODULE_DIR_.$this->name.'/img/'.$_FILES['img2']['name']) ) $errors .= $this->l('File upload error.');
                }
            }
            // 3rd image
            Configuration::updateValue('IMG3_LINK', Tools::getValue('img3_link'));
            Configuration::updateValue('IMG3_TITLE', Tools::getValue('img3_title'));
            
            if( isset($_FILES['img3']) && isset($_FILES['img3']['tmp_name']) && !empty($_FILES['img3']['tmp_name']) ) {
                if ( $error = ImageManager::validateUpload($_FILES['img3'], Tools::convertBytes(ini_get('upload_max_filesize'))) ) $errors .= $error;
                else {
                    Configuration::updateValue('IMG3_PATH', $this->context->link->protocol_content.Tools::getMediaServer($this->name)._MODULE_DIR_.$this->name.'/img/'.$_FILES['img3']['name']);
                    // Copy the image in the module directory with its new name
                    if ( !move_uploaded_file($_FILES['img3']['tmp_name'], _PS_MODULE_DIR_.$this->name.'/img/'.$_FILES['img3']['name']) ) $errors .= $this->l('File upload error.');
                }
            }
            
        } //end issubmit if
        if ($errors)
            echo $this->displayError($errors);
    }

    public function hookHeader($params) {
        $this->context->controller->addCSS($this->_path.'bskblockadvertising.css');
    }

    public function hookDisplayAds($params) {
        $this->smarty->assign(array(
            // 1st image
            'img1_path' => Configuration::get('IMG1_PATH'),
            'img1_link' => Configuration::get('IMG1_LINK'),
            'img1_title' => Configuration::get('IMG1_TITLE'),
            // 2nd image
            'img2_path' => Configuration::get('IMG2_PATH'),
            'img2_link' => Configuration::get('IMG2_LINK'),
            'img2_title' => Configuration::get('IMG2_TITLE'),
            // 3rd image
            'img3_path' => Configuration::get('IMG3_PATH'),
            'img3_link' => Configuration::get('IMG3_LINK'),
            'img3_title' => Configuration::get('IMG3_TITLE')
        ));
        return $this->display(__FILE__, 'bskblockadvertising.tpl');
    }
}