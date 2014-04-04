<?php
/*
* 2007-2013 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2013 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*/

if (!defined('_PS_VERSION_'))
	exit;

class BlockWishListBSK extends BlockWishList{
    
    public function hookHeader($params) {
        parent::hookHeader($params);
        
        /* Add to wishlist button */
        // @todo bskgear variables
        $add_to_wishlist_position = 'center';
        $this->context->smarty->assign(array(
                'add_to_wishlist_home'      => true, // enable add to wishlist button on homepage
                'add_to_wishlist_position'  => $add_to_wishlist_position // add to wishlist button position (bottom, center)
            ));
        // workaround for category page when loads ajax doesn't recognize smarty vars
        $this->context->cookie->__set('add_to_wishlist_category', true);
        $this->context->cookie->__set('add_to_wishlist_position', $add_to_wishlist_position);
    }
    
    public function hookTop($params){
            global $errors;
            if( (Tools::getValue('controller') != 'mywishlist') ){
                require_once(dirname(__FILE__).'/WishList.php');
            } else {
                $this->context->smarty->assign('hide_left_column', true);
            }


            if ($this->context->customer->isLogged())
            {
                    $wishlists = Wishlist::getByIdCustomer($this->context->customer->id);
                    if (empty($this->context->cookie->id_wishlist) === true ||
                            WishList::exists($this->context->cookie->id_wishlist, $this->context->customer->id) === false)
                    {
                            if (!sizeof($wishlists))
                                    $id_wishlist = false;
                            else
                            {
                                    $id_wishlist = (int)($wishlists[0]['id_wishlist']);
                                    $this->context->cookie->id_wishlist = (int)($id_wishlist);
                            }
                    }
                    else
                            $id_wishlist = $this->context->cookie->id_wishlist;
                    $this->smarty->assign(array(
                            'wishlist_link' => $this->context->link->getModuleLink('blockwishlist', 'mywishlist'),
                            'id_wishlist' => $id_wishlist,
                            'isLogged' => true,
                            'wishlist_products' => ($id_wishlist == false ? false : WishList::getProductByIdCustomer($id_wishlist, $this->context->customer->id, $this->context->language->id, null, true)),
                            'wishlists' => $wishlists,
                            'ptoken' => Tools::getToken(false)));
            }
            else
                    $this->smarty->assign(array('wishlist_products' => false, 'wishlists' => false));

            return ($this->display(__FILE__, 'blockwishlist_top.tpl'));
    }

    public function hookCustomerAccount($params){
        $this->smarty->assign(array('wishlist_link' => $this->context->link->getModuleLink('blockwishlist', 'mywishlist')));
        return $this->display(__FILE__, 'my-account.tpl');
    }

}
