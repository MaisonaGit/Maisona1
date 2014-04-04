<?php

if (!defined('_PS_VERSION_'))
    exit;

class BlockSearchBSK extends BlockSearch
{
	
	/**
	* Returns module content for header
	*
	* @param array $params Parameters
	* @return string Content
	*/
	public function hookDisplayNavSCL($params)
	{
            $this->context->smarty->assign(array(
                'instantSearch'     => __FILE__ . "\blocksearch-istantsearch.tpl",
                'blocksearch_type'  => "top"
            ));
            $this->calculHookCommon($params);
            return $this->display(__FILE__, 'blocksearch-top.tpl');
	}
        
        private function calculHookCommon($params)
	{
            $this->smarty->assign(array(
                    'ENT_QUOTES'    =>		ENT_QUOTES,
                    'search_ssl'    =>		Tools::usingSecureMode(),
                    'ajaxsearch'    =>		Configuration::get('PS_SEARCH_AJAX'),
                    'instantsearch' =>          Configuration::get('PS_INSTANT_SEARCH'),
                    'self'          =>		dirname(__FILE__),
            ));

            return true;
	}
        
        public function hookHeader($params)
	{
            if (Configuration::get('PS_SEARCH_AJAX')) $this->context->controller->addJqueryPlugin('autocomplete');
            $this->context->controller->addCSS(_THEME_CSS_DIR_.'product_list.css');
            $this->context->controller->addCSS(($this->_path).'blocksearch.css', 'all');
            $this->context->controller->addJS(($this->_path).'blocksearch.js');
	}
        
        
}
