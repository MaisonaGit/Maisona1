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
*  International Registred Trademark & Property of PrestaShop SA
*/

if (!defined('_PS_VERSION_'))
	exit;

class BlockLayeredBSK extends BlockLayered
{
	public function hookHeader($params){
		global $smarty, $cookie;
		
		// No filters => module disable
		if ($filter_block = $this->getFilterBlock($this->getSelectedFilters()))
			if ($filter_block['nbr_filterBlocks'] == 0)
				return false;
		
		if (Tools::getValue('id_category', Tools::getValue('id_category_layered', 1)) == 1)
			return;
		
		$id_lang = (int)$cookie->id_lang;
		$category = new Category((int)Tools::getValue('id_category'));

		// Generate meta title and meta description
		$category_title = (empty($category->meta_title[$id_lang]) ? $category->name[$id_lang] : $category->meta_title[$id_lang]);
		$title = '';
		$description = '';
		$keywords = '';
		if (is_array($filter_block['meta_values']))
			foreach ($filter_block['meta_values'] as $key => $val)
			{
				if (!empty($val['title']))
					$val['title'] = $val['title'].' ';

				foreach ($val['values'] as $value)
				{
					$title .= $category_title.' '.$val['title'].$value.' - ';
					$description .= $category_title.' '.$val['title'].$value.', ';
					$keywords .= $val['title'].$value.', ';
				}
			}
		// Title attributes (ex: <attr1> <value1>/<value2> - <attr2> <value1>)
		$title = strtolower(rtrim(substr($title, 0, -3)));
		// Title attributes (ex: <attr1> <value1>/<value2>, <attr2> <value1>)
		$description = strtolower(rtrim(substr($description, 0, -2)));
		// kewords attributes (ex: <attr1> <value1>, <attr1> <value2>, <attr2> <value1>)
			$category_metas = Meta::getMetaTags($id_lang, 'category', $title);

		if (!empty($title))
		{
			$smarty->assign('meta_title', ucfirst(substr($category_metas['meta_title'], 3)));
			$smarty->assign('meta_description', $description.'. '.$category_metas['meta_description']);
		}
		else
			$smarty->assign('meta_title', $category_metas['meta_title']);

		$keywords = substr(strtolower($keywords), 0, 1000);
		if (!empty($keywords))
			$smarty->assign('meta_keywords', rtrim($category_title.', '.$keywords.', '.$category_metas['meta_keywords'], ', '));


			$this->context->controller->addJS(($this->_path).'blocklayered.js');
                        $this->context->controller->addCSS(_THEME_CSS_DIR_.'webtools/ui-lightness/jquery-ui-1.9.2.custom.min.css');
			$this->context->controller->addJS(_THEME_JS_DIR_.'webtools/jquery-ui-1.9.2.custom.min.js');
			$this->context->controller->addCSS(($this->_path).'blocklayered-15.css', 'all');
			$this->context->controller->addJQueryPlugin('scrollTo');

		$filters = $this->getSelectedFilters();

		// Get non indexable attributes
		$attribute_group_list = Db::getInstance()->executeS('SELECT id_attribute_group FROM '._DB_PREFIX_.'layered_indexable_attribute_group WHERE indexable = 0');
		// Get non indexable features
		$feature_list = Db::getInstance()->executeS('SELECT id_feature FROM '._DB_PREFIX_.'layered_indexable_feature WHERE indexable = 0');

		$attributes = array();
		$features = array();

		$blacklist = array('weight', 'price');
		if (!Configuration::get('PS_LAYERED_FILTER_INDEX_CDT'))
			$blacklist[] = 'condition';
		if (!Configuration::get('PS_LAYERED_FILTER_INDEX_QTY'))
			$blacklist[] = 'quantity';
		if (!Configuration::get('PS_LAYERED_FILTER_INDEX_MNF'))
			$blacklist[] = 'manufacturer';
		if (!Configuration::get('PS_LAYERED_FILTER_INDEX_CAT'))
			$blacklist[] = 'category';

		foreach ($filters as $type => $val)
		{
			switch ($type)
			{
				case 'id_attribute_group':
					foreach ($val as $attr)
					{
						$attr_id = preg_replace('/_\d+$/', '', $attr);
						if (in_array($attr_id, $attributes) || in_array(array('id_attribute_group' => $attr_id), $attribute_group_list))
						{
							$smarty->assign('nobots', true);
							$smarty->assign('nofollow', true);
							return;
						}
						$attributes[] = $attr_id;
					}
					break;
				case 'id_feature':
					foreach ($val as $feat)
					{
						$feat_id = preg_replace('/_\d+$/', '', $feat);
						if (in_array($feat_id, $features) || in_array(array('id_feature' => $feat_id), $feature_list))
						{
							$smarty->assign('nobots', true);
							$smarty->assign('nofollow', true);
							return;
						}
						$features[] = $feat_id;
					}
					break;
				default:
					if (in_array($type, $blacklist))
					{
						if (count($val))
						{
							$smarty->assign('nobots', true);
							$smarty->assign('nofollow', true);
							return;
						}
					}
					elseif (count($val) > 1)
					{
						$smarty->assign('nobots', true);
						$smarty->assign('nofollow', true);
						return;
					}
					break;
			}
		}
	}
        
        private function getSelectedFilters()
	{
		$id_parent = (int)Tools::getValue('id_category', Tools::getValue('id_category_layered', 1));
		if ($id_parent == 1)
			return;
		
		// Force attributes selection (by url '.../2-mycategory/color-blue' or by get parameter 'selected_filters')
		if (strpos($_SERVER['SCRIPT_FILENAME'], 'blocklayered-ajax.php') === false || Tools::getValue('selected_filters') !== false)
		{
			if (Tools::getValue('selected_filters'))
				$url = Tools::getValue('selected_filters');
			else
				$url = preg_replace('/\/(?:\w*)\/(?:[0-9]+[-\w]*)([^\?]*)\??.*/', '$1', Tools::safeOutput($_SERVER['REQUEST_URI'], true));
			
			$url_attributes = explode('/', ltrim($url, '/'));
			$selected_filters = array('category' => array());
			if (!empty($url_attributes))
			{
				foreach ($url_attributes as $url_attribute)
				{
					$url_parameters = explode('-', $url_attribute);
					$attribute_name  = array_shift($url_parameters);
					if ($attribute_name == 'page')
						$this->page = (int)$url_parameters[0];
					else if (in_array($attribute_name, array('price', 'weight')))
						$selected_filters[$attribute_name] = array($url_parameters[0], $url_parameters[1]);
					else
					{
						foreach ($url_parameters as $url_parameter)
						{
							$data = Db::getInstance()->getValue('SELECT data FROM `'._DB_PREFIX_.'layered_friendly_url` WHERE `url_key` = \''.md5('/'.$attribute_name.'-'.$url_parameter).'\'');
							if ($data)
								foreach (self::unSerialize($data) as $key_params => $params)
								{
									if (!isset($selected_filters[$key_params]))
										$selected_filters[$key_params] = array();
									foreach ($params as $key_param => $param)
									{
										if (!isset($selected_filters[$key_params][$key_param]))
											$selected_filters[$key_params][$key_param] = array();
										$selected_filters[$key_params][$key_param] = $param;
									}
								}
						}
					}
				}
				return $selected_filters;
			}
		}

		/* Analyze all the filters selected by the user and store them into a tab */
		$selected_filters = array('category' => array(), 'manufacturer' => array(), 'quantity' => array(), 'condition' => array());
		foreach ($_GET as $key => $value)
			if (substr($key, 0, 8) == 'layered_')
			{
				preg_match('/^(.*)_([0-9]+|new|used|refurbished|slider)$/', substr($key, 8, strlen($key) - 8), $res);
				if (isset($res[1]))
				{
					$tmp_tab = explode('_', $value);
					$value = $tmp_tab[0];
					$id_key = false;
					if (isset($tmp_tab[1]))
						$id_key = $tmp_tab[1];
					if ($res[1] == 'condition' && in_array($value, array('new', 'used', 'refurbished')))
						$selected_filters['condition'][] = $value;
					else if ($res[1] == 'quantity' && (!$value || $value == 1))
						$selected_filters['quantity'][] = $value;
					else if (in_array($res[1], array('category', 'manufacturer')))
					{
						if (!isset($selected_filters[$res[1].($id_key ? '_'.$id_key : '')]))
							$selected_filters[$res[1].($id_key ? '_'.$id_key : '')] = array();
						$selected_filters[$res[1].($id_key ? '_'.$id_key : '')][] = (int)$value;
					}
					else if (in_array($res[1], array('id_attribute_group', 'id_feature')))
					{
						if (!isset($selected_filters[$res[1]]))
							$selected_filters[$res[1]] = array();
						$selected_filters[$res[1]][(int)$value] = $id_key.'_'.(int)$value;
					}
					else if ($res[1] == 'weight')
						$selected_filters[$res[1]] = $tmp_tab;
					else if ($res[1] == 'price')
						$selected_filters[$res[1]] = $tmp_tab;
				}
			}
		return $selected_filters;
	}
}
