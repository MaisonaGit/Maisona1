<?php

if (!defined('_PS_VERSION_')) exit;

class BlockPermanentLinksBSK extends BlockPermanentLinks {
	
	/**
	* Returns module content for header
	*
	* @param array $params Parameters
	* @return string Content
	*/
	public function hookDisplayNavLinks($param) {
		return $this->display(__FILE__, 'blockpermanentlinks-header.tpl');
	}
}


