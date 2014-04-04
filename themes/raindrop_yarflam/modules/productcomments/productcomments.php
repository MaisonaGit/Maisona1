<?php

if (!defined('_PS_VERSION_'))
	exit;

class ProductCommentsBSK extends ProductComments{
    public function hookHomeNFS($params) {
        require_once(dirname(__FILE__).'/ProductComment.php');
    }
    
    public function hookProductTabContent($params){
		$this->context->controller->addJS($this->_path.'js/jquery.rating.pack.js');
		$this->context->controller->addJS($this->_path.'js/jquery.textareaCounter.plugin.js');
		$this->context->controller->addJS($this->_path.'js/productcomments.js');

		$id_guest = (!$id_customer = (int)$this->context->cookie->id_customer) ? (int)$this->context->cookie->id_guest : false;
		$customerComment = ProductComment::getByCustomer((int)(Tools::getValue('id_product')), (int)$this->context->cookie->id_customer, true, (int)$id_guest);

		$averages = ProductComment::getAveragesByProduct((int)Tools::getValue('id_product'), $this->context->language->id);
		$averageTotal = 0;
		foreach ($averages as $average)
			$averageTotal += (float)($average);
		$averageTotal = count($averages) ? ($averageTotal / count($averages)) : 0;

		$image = Product::getCover((int)Tools::getValue('id_product'));

		$this->context->smarty->assign(array(
			'logged' => (int)$this->context->customer->isLogged(true),
			'action_url' => '',
			'comments' => ProductComment::getByProduct((int)Tools::getValue('id_product'), 1, null, $this->context->cookie->id_customer),
			'criterions' => ProductCommentCriterion::getByProduct((int)Tools::getValue('id_product'), $this->context->language->id),
			'averages' => $averages,
			'product_comment_path' => $this->_path,
			'averageTotal' => $averageTotal,
			'allow_guests' => (int)Configuration::get('PRODUCT_COMMENTS_ALLOW_GUESTS'),
			'too_early' => ($customerComment && (strtotime($customerComment['date_add']) + Configuration::get('PRODUCT_COMMENTS_MINIMAL_TIME')) > time()),
			'delay' => Configuration::get('PRODUCT_COMMENTS_MINIMAL_TIME'),
			'id_product_comment_form' => (int)Tools::getValue('id_product'),
			'secure_key' => $this->secure_key,
			'productcomment_cover' => (int)Tools::getValue('id_product').'-'.(int)$image['id_image'],
			'mediumSize' => Image::getSize(ImageType::getFormatedName('medium')),
			'nbComments' => (int)ProductComment::getCommentNumber((int)Tools::getValue('id_product')),
			'productcomments_controller_url' => $this->context->link->getModuleLink('productcomments'),
			'productcomments_url_rewriting_activated' => Configuration::get('PS_REWRITING_SETTINGS', 0),
			'moderation_active' => (int)Configuration::get('PRODUCT_COMMENTS_MODERATE')
		));

		$this->context->controller->pagination((int)ProductComment::getCommentNumber((int)Tools::getValue('id_product')));
                
                // bug fix undefined product in smarty
                if(get_class($this->context->smarty->getVariable('product')) !== 'Smarty_Variable'){ // variable is not defined in smarty
                    $this->context->smarty->assign('product', new Product((int)Tools::getValue('id_product'), true, $this->context->language->id, $this->context->shop->id));
                }

		return ($this->display(__FILE__, '/productcomments.tpl'));
	}
}
