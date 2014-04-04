<?php

if (!defined('_PS_VERSION_'))
  exit;

class Blockicemenu extends Module {
	public function __construct() {
		$this->name = 'blockicemenu';
		$this->tab = 'front_office_features';
		$this->version = '1.0';
		$this->author = 'Yarflam';
		$this->need_instance = 1;

		parent::__construct();

		$this->displayName = $this->l('Block Ice Menu');
		$this->description = $this->l('Build by Yarflam.');

		$this->confirmUninstall = $this->l('Are you sure you want to uninstall?');
	}

	public function hookIcemenu ($params) {
		global $smarty;
		$img_path = "/modules/blockicemenu/images";
		$menu_items = "<li><a href='index.php'>Accueil</a></li>\n";
		$sql = "SELECT id_linksmenutop, label FROM ps_linksmenutop_lang WHERE id_lang = 1";
		$list_cat = Db::getInstance()->executeS($sql);
		for($i_cat = 0; $i_cat < count($list_cat); $i_cat++) {
			$menu_items .= "<li>\n\t";
			$menu_items .= $list_cat[$i_cat]['label'];
			$menu_items .= "\n\t<div class=\"icecat_float\">";
			$menu_items .= "\n\t\t<div class=\"ic_list\">\n\t\t\t<ul>";

			/* First section */
			$sql = "SELECT ps_category.id_category, ps_category_lang.name FROM ps_category, ps_category_lang ";
			$sql .= "WHERE ps_category.id_category = ps_category_lang.id_category AND id_parent = 2 AND id_lang = 1";
			$list_first_child = Db::getInstance()->executeS($sql);
			$id_section = $list_first_child[$i_cat+1]['id_category'];
			$menu_items .= "\n\t\t\t\t<li class=\"section\"><a href='index.php?id_category=".$id_section."&controller=category'>".$list_first_child[$i_cat+1]['name']."</a></li>";

			/* Second section */
			$sql = "SELECT ps_category.id_category, ps_category_lang.name FROM ps_category, ps_category_lang ";
			$sql .= "WHERE ps_category.id_category = ps_category_lang.id_category AND id_parent = ".$id_section." AND id_lang = 1";
			$list_second_child = Db::getInstance()->executeS($sql);
			foreach($list_second_child as $rows) {
				$menu_items .= "\n\t\t\t\t<li><a href='index.php?id_category=".$rows['id_category']."&controller=category'>".$rows['name']."</a></li>";
			}

			$img_cat = "default.jpg";

			$menu_items .= "\n\t\t\t</ul>\n\t\t</div>";
			$menu_items .= "\n\t\t<div class=\"ic_view\"><img src=\"".$img_path."/".$img_cat."\" alt=\"maisona.menu\"/></div>";
			$menu_items .= "\n\t</div>";
			$menu_items .= "\n</li>";
		}
		$smarty->assign('menu_items', $menu_items);
		return $this->display(__FILE__, 'blockicemenu.tpl');
	}

	public function install () {
		if(!parent::install() || !$this->registerHook('Icemenu'))
			return false;
		return true;
	}
}

?>