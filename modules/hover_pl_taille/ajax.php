<?php
    include(dirname(__FILE__).'/../../config/config.inc.php');
    include(dirname(__FILE__).'/../../init.php');
    $id_lang = $cookie->id_lang;
    $urlR = Db::getInstance()->getValue('SELECT value FROM `'._DB_PREFIX_.'configuration` WHERE name="PS_REWRITING_SETTINGS"');
    if($urlR==0){
        $idP1 = explode('id_product=',$_GET['lienP']);
        $idP = $idP1[1];
    }else{
        $idP1 = explode('/',$_GET['lienP']);
        $idP2 = explode('-',$idP1[count($idP1)-1]);
        $idP = $idP2[0];
    }
    $product = new Product($idP,true,$id_lang);
    $attributs = array();
    $lstM2P = Configuration::get('ATTR_DISPO_PL_BY_EC'); 
    $attributesGroups = Db::getInstance()->ExecuteS('
		SELECT ag.`id_attribute_group`, ag.`is_color_group`, agl.`name` AS group_name, agl.`public_name` AS public_group_name, a.`id_attribute`, al.`name` AS attribute_name,
		a.`color` AS attribute_color, pa.*
		FROM `'._DB_PREFIX_.'product_attribute` pa
		LEFT JOIN `'._DB_PREFIX_.'product_attribute_combination` pac ON pac.`id_product_attribute` = pa.`id_product_attribute`
		LEFT JOIN `'._DB_PREFIX_.'attribute` a ON a.`id_attribute` = pac.`id_attribute`
		LEFT JOIN `'._DB_PREFIX_.'attribute_group` ag ON ag.`id_attribute_group` = a.`id_attribute_group`
		LEFT JOIN `'._DB_PREFIX_.'attribute_lang` al ON a.`id_attribute` = al.`id_attribute`
		LEFT JOIN `'._DB_PREFIX_.'attribute_group_lang` agl ON ag.`id_attribute_group` = agl.`id_attribute_group`
		WHERE pa.`id_product` = '.$idP.'
		AND al.`id_lang` = '.$id_lang.'
        AND ag.`id_attribute_group` in ('.$lstM2P.')
		AND agl.`id_lang` = '.$id_lang.'
		ORDER BY agl.`public_name`, al.`name`');
    if (Db::getInstance()->numRows()){
    	$vir = 0;
        $previous2 = '';
        foreach ($attributesGroups AS $k => $rowattr){
            
            if($rowattr['public_group_name'] != $previous2){
        	   $vir = 0;
        	}
        	if ($rowattr['attribute_name'] != $previous)
        	{
	            if($rowattr['is_color_group']){
	               if(Attribute::checkAttributeQty($rowattr['id_product_attribute'],1)>0){
	                   if(file_exists(_PS_ROOT_DIR_.'/img/co/'.$rowattr['id_attribute'].'.jpg')){
	                       $attributs[$rowattr['public_group_name']][] = ' <span class="squareAttrSpe" style="background:url(\''.__PS_BASE_URI__.'img/co/'.$rowattr['id_attribute'].'.jpg\')">&nbsp;&nbsp;&nbsp;</span>';
	                   }else{
	                       $attributs[$rowattr['public_group_name']][] = ' <span class="squareAttrSpe" style="background:'.$rowattr['attribute_color'].'">&nbsp;&nbsp;&nbsp;</span>';
	                   }	                   
                    }
	            } else {
	            	($vir != 0) ? $virgule = ',' : $virgule = '';
                    if(Attribute::checkAttributeQty($rowattr['id_product_attribute'],1)>0){
                        $attributs[$rowattr['public_group_name']][] = $virgule.' <span class="nameAttrSpe">'.$rowattr['attribute_name'].'</span>';
                        $vir++;
                    }
	            }
	            
           		$previous = $rowattr['attribute_name'];
           		$previous2 = $rowattr['public_group_name'];
        	}
        }
        echo json_encode($attributs);
    }else{
        echo 'NULL';
    }