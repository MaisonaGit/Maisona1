<?php class hover_pl_taille extends Module{
    private $_html = '';
	private $_postErrors = array();
    private $_config = array('ATTR_DISPO_PL_BY_EC'=>'');
    
    public function __construct()
	{
		$this->name = 'hover_pl_taille';
		$this->tab = version_compare(_PS_VERSION_, '1.4.0.0', '>=')?'front_office_features':'Tools';
		$this->version = 1.2;
		$this->need_instance = 0;
        $this->author = 'Ether Création';
		$this->displayName = $this->l('Affichage attributs hover');
		$this->description = $this->l('Affichage attributs sur le hover photo product list');
 
		parent::__construct();
	}
 
	public function install()
	{
		if(!parent::install() || !$this->registerHook('header') || !$this->_installConfiguration()){
			return false;
        }
		return true;
	}
 
	public function uninstall()
 	{
 	 	if(!parent::uninstall() || !$this->_uninstallConfiguration()){
			return false;
		}
		return true;
 	}
    private function _installConfiguration()
	{
		foreach ($this->_config as $key => $value) {
			Configuration::updateValue($key, $value);
		}
		return true;
	}	private function _uninstallConfiguration() 
	{
		foreach ($this->_config as $key => $value) {
			Configuration::deleteByName($key);
		}
		return true;
	}
 	public function hookHeader($params){
		global $js_files, $css_files;
		if (version_compare(_PS_VERSION_, '1.4.0.0', '>=')) {
        	Tools::addJS($this->_path.'js/function.js');
        	Tools::addCSS($this->_path.'css/style.css', 'all');
		} else {
        	$js_files[] = $this->_path.'js/function.js';
        	$css_files[$this->_path.'css/style.css'] = 'all';
		}
 	}	
    public function getContent()
	{
	   	global $cookie;	        $html = '';	        // mise à jour attributs
		if(Tools::isSubmit('MAJAttrSpe')) {
            while(list($key, $val) = each($_POST)){
                if($key=='mode2P'){
                    $lstmodeP2 = implode(',',$val);
                    Configuration::updateValue('ATTR_DISPO_PL_BY_EC', $lstmodeP2);
                }      
            }
            $html .= $this->displayConfirmation($this->l('Configuration mise à jour'));
		}
        // FIN mise à jour attributs		
  
        $html .= '<h2>'.$this->l('Configuration des attributs').'</h2>';       /*CONFIG MAJ attributs*/ 
            $lstStatut = Db::getInstance()->ExecuteS('SELECT * FROM `'._DB_PREFIX_.'attribute_group_lang` WHERE id_lang='.$cookie->id_lang.';');             $lstM2P[] = '';
            $lstM2P = explode(',',Configuration::get('ATTR_DISPO_PL_BY_EC'));                      $html .= '<form action="'.$_SERVER['REQUEST_URI'].'" name="form_focus" method="post">
                    <fieldset>
                        <legend>'.$this->l('Attributs dispo sur la product list').'</legend>
                            <br /><br />
                            <label>'.$this->l('Attributs affichable').' :</label>';
                                foreach($lstStatut AS $modP){
                                    $html .= '<input type="checkbox" name="mode2P[]" value="'.$modP['id_attribute_group'].'" style="margin-left:5px" ';
                                    foreach($lstM2P AS $lstPP){
                                        $html .= ($lstPP==$modP['id_attribute_group']?"checked=\"checked\"":'');
                                    }
                                    $html.= '> '.$modP['name'];
                                }                                
                           $html .= '<div class="clear center">
		                      <input type="submit" style="margin-top:20px" name="MAJAttrSpe" id="MAJAttrSpe" value="'.$this->l('   Mettre à jour   ').'" class="button" />
	                       </div>              				
	                 </fieldset>  
                </form><br /><br />';
        /* FIN CONFIG MAJ attributs*/	
        /* INFO */   
            $html .= '<fieldset>
                        <legend>Info / Coordonnées</legend>
                        <p>Module qui permet d\'afficher en hover sur la product list les attributs disponnibles</p>
                        <p>Développé par : Agence '.$this->author.'</p>
                        <p>Site : <a href="http://www.ethercreation.com">www.ethercreation.com</a></p>
                        <p>Tel : 02.85.52.07.81 / Mail: <a href="mailto:contact@ethercreation.com">contact@ethercreation.com</a>
                        <p>&nbsp;</p>
                        <p><i><strong>Ce module ne peut ni être diffusé, modifié, ou vendu sans l\'accord au préalable écrit de la société Ether Création</i></strong></p>
                    </fieldset>';   
        /*FIN INFO */   
        
		return $html;	  
    }
}
?>