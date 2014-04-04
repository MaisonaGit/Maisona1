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

if (!defined('_PS_VERSION_')) exit;

class BlockNewProductsBSK extends BlockNewProducts{

    public function hookHomeNFS($params){
        $newProducts = Product::getNewProducts((int)($params['cookie']->id_lang), 0, (int)(Configuration::get('NEW_PRODUCTS_NBR')));
        if (!$newProducts && !Configuration::get('PS_BLOCK_NEWPRODUCTS_DISPLAY'))
                return;
        
        // avg. rating
        if( class_exists('ProductComment') ){
            $avgStars = array();
            foreach ($newProducts as $product) {
                $avg_rating = ProductComment::getAverageGrade($product['id_product']);
                $avgStars[] = $avg_rating['grade'];
            }
            if( count($avgStars) == count($newProducts) ){
                $this->smarty->assign('avgStars', $avgStars);
            }
        }

        $this->smarty->assign(array(
                'new_products' => $newProducts,
                'homeSize' => Image::getSize(ImageType::getFormatedName('home')),
        ));

        return $this->display(__FILE__, 'blocknewproducts-home.tpl');
    }
}


