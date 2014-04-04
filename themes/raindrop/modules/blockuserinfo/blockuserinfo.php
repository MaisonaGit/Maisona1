<?php
if (!defined('_PS_VERSION_')) exit;

class BlockUserInfoBSK extends BlockUserInfo {
	/**
	* Returns module content for header
	*
	* @param array $params Parameters
	* @return string Content
	*/
	public function hookTop($params) {
		if (!$this->active)
			return;

		$this->smarty->assign(array(
			'cart' => $this->context->cart,
			'cart_qties' => $this->context->cart->nbProducts(),
			'logged' => $this->context->customer->isLogged(),
			'customerName' => ($this->context->customer->logged ? $this->context->customer->firstname.' '.$this->context->customer->lastname : false),
			'firstName' => ($this->context->customer->logged ? $this->context->customer->firstname : false),
			'lastName' => ($this->context->customer->logged ? $this->context->customer->lastname : false),
			'order_process' => Configuration::get('PS_ORDER_PROCESS_TYPE') ? 'order-opc' : 'order'
		));
		return $this->display(__FILE__, 'blockuserinfo.tpl');
	}
        
        public function hookDisplayNavLinks($param) {
		return $this->display(__FILE__, 'topblockuserinfo.tpl');
	}

	public function hookHeader($params) {
		$this->context->controller->addCSS(($this->_path).'blockuserinfo.css', 'all');
	}
}


