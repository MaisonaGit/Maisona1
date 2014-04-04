<?php /* Smarty version Smarty-3.1.14, created on 2014-03-18 22:25:19
         compiled from "/homez.742/maisona/www/maisona/themes/raindrop_yarflam/product.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1950140444530a59987e6442-04532101%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b94375791f6a85bee5b1e71aba66b7a3043062d0' => 
    array (
      0 => '/homez.742/maisona/www/maisona/themes/raindrop_yarflam/product.tpl',
      1 => 1395177916,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1950140444530a59987e6442-04532101',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_530a599a951bb3_14592256',
  'variables' => 
  array (
    'errors' => 0,
    'currencySign' => 0,
    'currencyRate' => 0,
    'currencyFormat' => 0,
    'currencyBlank' => 0,
    'tax_rate' => 0,
    'jqZoomEnabled' => 0,
    'product' => 0,
    'groups' => 0,
    'display_qties' => 0,
    'allow_oosp' => 0,
    'key_specific_price' => 0,
    'specific_price_value' => 0,
    'group_reduction' => 0,
    'ecotaxTax_rate' => 0,
    'last_qties' => 0,
    'no_tax' => 0,
    'priceDisplay' => 0,
    'restricted_country_mode' => 0,
    'PS_CATALOG_MODE' => 0,
    'cover' => 0,
    'stock_management' => 0,
    'priceDisplayPrecision' => 0,
    'productPriceWithoutReduction' => 0,
    'productPrice' => 0,
    'img_ps_dir' => 0,
    'customizationFields' => 0,
    'field' => 0,
    'imgIndex' => 0,
    'textFieldIndex' => 0,
    'key' => 0,
    'pictures' => 0,
    'img_prod_dir' => 0,
    'combinationImages' => 0,
    'combinationId' => 0,
    'combination' => 0,
    'image' => 0,
    'images' => 0,
    'combinations' => 0,
    'idCombination' => 0,
    'attributesCombinations' => 0,
    'aC' => 0,
    'thumbs_position' => 0,
    'adminActionDisplay' => 0,
    'base_dir' => 0,
    'confirmation' => 0,
    'have_image' => 0,
    'imageIds' => 0,
    'link' => 0,
    'imageTitlte' => 0,
    'lang_iso' => 0,
    'HOOK_EXTRA_LEFT' => 0,
    'quantity_discounts' => 0,
    'quantity_discount' => 0,
    'features' => 0,
    'accessories' => 0,
    'HOOK_PRODUCT_TAB' => 0,
    'attachments' => 0,
    'img_dir' => 0,
    'averageTotal' => 0,
    'packItems' => 0,
    'packItem' => 0,
    'HOOK_PRODUCT_ACTIONS' => 0,
    'static_token' => 0,
    'group' => 0,
    'id_attribute_group' => 0,
    'groupName' => 0,
    'colors' => 0,
    'id_attribute' => 0,
    'group_attribute' => 0,
    'col_img_dir' => 0,
    'img_col_dir' => 0,
    'default_colorpicker' => 0,
    'virtual' => 0,
    'quantityBackup' => 0,
    'HOOK_PRODUCT_OOS' => 0,
    'customizationFormTarget' => 0,
    'pic_dir' => 0,
    'customizationField' => 0,
    'textFields' => 0,
    'HOOK_EXTRA_RIGHT' => 0,
    'feature' => 0,
    'attachment' => 0,
    'accessory' => 0,
    'accessoryLink' => 0,
    'HOOK_PRODUCT_TAB_CONTENT' => 0,
    'tax_enabled' => 0,
    'display_tax_label' => 0,
    'unit_price' => 0,
    'ecotax_tax_exc' => 0,
    'ecotax_tax_inc' => 0,
    'HOOK_PRODUCT_FOOTER' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530a599a951bb3_14592256')) {function content_530a599a951bb3_14592256($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/homez.742/maisona/www/maisona/tools/smarty/plugins/modifier.escape.php';
if (!is_callable('smarty_modifier_date_format')) include '/homez.742/maisona/www/maisona/tools/smarty/plugins/modifier.date_format.php';
if (!is_callable('smarty_function_counter')) include '/homez.742/maisona/www/maisona/tools/smarty/plugins/function.counter.php';
if (!is_callable('smarty_function_math')) include '/homez.742/maisona/www/maisona/tools/smarty/plugins/function.math.php';
?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php if (count($_smarty_tpl->tpl_vars['errors']->value)==0){?>
<script type="text/javascript">
// <![CDATA[

var labelAvailable = '<?php echo smartyTranslate(array('s'=>'Available','js'=>1),$_smarty_tpl);?>
';
var labelNotAvailable = '<?php echo smartyTranslate(array('s'=>'Not Available','js'=>1),$_smarty_tpl);?>
';

// PrestaShop internal settings
var currencySign = '<?php echo html_entity_decode($_smarty_tpl->tpl_vars['currencySign']->value,2,"UTF-8");?>
';
var currencyRate = '<?php echo floatval($_smarty_tpl->tpl_vars['currencyRate']->value);?>
';
var currencyFormat = '<?php echo intval($_smarty_tpl->tpl_vars['currencyFormat']->value);?>
';
var currencyBlank = '<?php echo intval($_smarty_tpl->tpl_vars['currencyBlank']->value);?>
';
var taxRate = <?php echo floatval($_smarty_tpl->tpl_vars['tax_rate']->value);?>
;
var jqZoomEnabled = <?php if ($_smarty_tpl->tpl_vars['jqZoomEnabled']->value){?>true<?php }else{ ?>false<?php }?>;

//JS Hook
var oosHookJsCodeFunctions = new Array();

// Parameters
var id_product = '<?php echo intval($_smarty_tpl->tpl_vars['product']->value->id);?>
';
var productHasAttributes = <?php if (isset($_smarty_tpl->tpl_vars['groups']->value)){?>true<?php }else{ ?>false<?php }?>;
var quantitiesDisplayAllowed = <?php if ($_smarty_tpl->tpl_vars['display_qties']->value==1){?>true<?php }else{ ?>false<?php }?>;
var quantityAvailable = <?php if ($_smarty_tpl->tpl_vars['display_qties']->value==1&&$_smarty_tpl->tpl_vars['product']->value->quantity){?><?php echo $_smarty_tpl->tpl_vars['product']->value->quantity;?>
<?php }else{ ?>0<?php }?>;
var allowBuyWhenOutOfStock = <?php if ($_smarty_tpl->tpl_vars['allow_oosp']->value==1){?>true<?php }else{ ?>false<?php }?>;
var availableNowValue = '<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value->available_now, 'quotes', 'UTF-8');?>
';
var availableLaterValue = '<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value->available_later, 'quotes', 'UTF-8');?>
';
var productPriceTaxExcluded = <?php echo (($tmp = @$_smarty_tpl->tpl_vars['product']->value->getPriceWithoutReduct(true))===null||$tmp==='' ? 'null' : $tmp);?>
 - <?php echo $_smarty_tpl->tpl_vars['product']->value->ecotax;?>
;
var productBasePriceTaxExcluded = <?php echo $_smarty_tpl->tpl_vars['product']->value->base_price;?>
 - <?php echo $_smarty_tpl->tpl_vars['product']->value->ecotax;?>
;

var reduction_percent = <?php if ($_smarty_tpl->tpl_vars['product']->value->specificPrice&&$_smarty_tpl->tpl_vars['product']->value->specificPrice['reduction']&&$_smarty_tpl->tpl_vars['product']->value->specificPrice['reduction_type']=='percentage'){?><?php echo $_smarty_tpl->tpl_vars['product']->value->specificPrice['reduction']*100;?>
<?php }else{ ?>0<?php }?>;
var reduction_price = <?php if ($_smarty_tpl->tpl_vars['product']->value->specificPrice&&$_smarty_tpl->tpl_vars['product']->value->specificPrice['reduction']&&$_smarty_tpl->tpl_vars['product']->value->specificPrice['reduction_type']=='amount'){?><?php echo floatval($_smarty_tpl->tpl_vars['product']->value->specificPrice['reduction']);?>
<?php }else{ ?>0<?php }?>;
var specific_price = <?php if ($_smarty_tpl->tpl_vars['product']->value->specificPrice&&$_smarty_tpl->tpl_vars['product']->value->specificPrice['price']){?><?php echo $_smarty_tpl->tpl_vars['product']->value->specificPrice['price'];?>
<?php }else{ ?>0<?php }?>;
var product_specific_price = new Array();
<?php  $_smarty_tpl->tpl_vars['specific_price_value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['specific_price_value']->_loop = false;
 $_smarty_tpl->tpl_vars['key_specific_price'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['product']->value->specificPrice; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['specific_price_value']->key => $_smarty_tpl->tpl_vars['specific_price_value']->value){
$_smarty_tpl->tpl_vars['specific_price_value']->_loop = true;
 $_smarty_tpl->tpl_vars['key_specific_price']->value = $_smarty_tpl->tpl_vars['specific_price_value']->key;
?>
	product_specific_price['<?php echo $_smarty_tpl->tpl_vars['key_specific_price']->value;?>
'] = '<?php echo $_smarty_tpl->tpl_vars['specific_price_value']->value;?>
';
<?php } ?>
var specific_currency = <?php if ($_smarty_tpl->tpl_vars['product']->value->specificPrice&&$_smarty_tpl->tpl_vars['product']->value->specificPrice['id_currency']){?>true<?php }else{ ?>false<?php }?>;
var group_reduction = '<?php echo $_smarty_tpl->tpl_vars['group_reduction']->value;?>
';
var default_eco_tax = <?php echo $_smarty_tpl->tpl_vars['product']->value->ecotax;?>
;
var ecotaxTax_rate = <?php echo $_smarty_tpl->tpl_vars['ecotaxTax_rate']->value;?>
;
var currentDate = '<?php echo smarty_modifier_date_format(time(),'%Y-%m-%d %H:%M:%S');?>
';
var maxQuantityToAllowDisplayOfLastQuantityMessage = <?php echo $_smarty_tpl->tpl_vars['last_qties']->value;?>
;
var noTaxForThisProduct = <?php if ($_smarty_tpl->tpl_vars['no_tax']->value==1){?>true<?php }else{ ?>false<?php }?>;
var displayPrice = <?php echo $_smarty_tpl->tpl_vars['priceDisplay']->value;?>
;
var productReference = '<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value->reference, 'htmlall', 'UTF-8');?>
';
var productAvailableForOrder = <?php if ((isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)&&$_smarty_tpl->tpl_vars['restricted_country_mode']->value)||$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value){?>'0'<?php }else{ ?>'<?php echo $_smarty_tpl->tpl_vars['product']->value->available_for_order;?>
'<?php }?>;
var productShowPrice = '<?php if (!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value){?><?php echo $_smarty_tpl->tpl_vars['product']->value->show_price;?>
<?php }else{ ?>0<?php }?>';
var productUnitPriceRatio = '<?php echo $_smarty_tpl->tpl_vars['product']->value->unit_price_ratio;?>
';
var idDefaultImage = <?php if (isset($_smarty_tpl->tpl_vars['cover']->value['id_image_only'])){?><?php echo $_smarty_tpl->tpl_vars['cover']->value['id_image_only'];?>
<?php }else{ ?>0<?php }?>;
var stock_management = <?php echo intval($_smarty_tpl->tpl_vars['stock_management']->value);?>
;
<?php if (!isset($_smarty_tpl->tpl_vars['priceDisplayPrecision']->value)){?>
	<?php $_smarty_tpl->tpl_vars['priceDisplayPrecision'] = new Smarty_variable(2, null, 0);?>
<?php }?>
<?php if (!$_smarty_tpl->tpl_vars['priceDisplay']->value||$_smarty_tpl->tpl_vars['priceDisplay']->value==2){?>
	<?php $_smarty_tpl->tpl_vars['productPrice'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value->getPrice(true,@constant('NULL'),$_smarty_tpl->tpl_vars['priceDisplayPrecision']->value), null, 0);?>
	<?php $_smarty_tpl->tpl_vars['productPriceWithoutReduction'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value->getPriceWithoutReduct(false,@constant('NULL')), null, 0);?>
<?php }elseif($_smarty_tpl->tpl_vars['priceDisplay']->value==1){?>
	<?php $_smarty_tpl->tpl_vars['productPrice'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value->getPrice(false,@constant('NULL'),$_smarty_tpl->tpl_vars['priceDisplayPrecision']->value), null, 0);?>
	<?php $_smarty_tpl->tpl_vars['productPriceWithoutReduction'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value->getPriceWithoutReduct(true,@constant('NULL')), null, 0);?>
<?php }?>


var productPriceWithoutReduction = '<?php echo $_smarty_tpl->tpl_vars['productPriceWithoutReduction']->value;?>
';
var productPrice = '<?php echo $_smarty_tpl->tpl_vars['productPrice']->value;?>
';

// Customizable field
var img_ps_dir = '<?php echo $_smarty_tpl->tpl_vars['img_ps_dir']->value;?>
';
var customizationFields = new Array();
<?php $_smarty_tpl->tpl_vars['imgIndex'] = new Smarty_variable(0, null, 0);?>
<?php $_smarty_tpl->tpl_vars['textFieldIndex'] = new Smarty_variable(0, null, 0);?>
<?php  $_smarty_tpl->tpl_vars['field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['customizationFields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['customizationFields']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['field']->key => $_smarty_tpl->tpl_vars['field']->value){
$_smarty_tpl->tpl_vars['field']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['customizationFields']['index']++;
?>
	<?php $_smarty_tpl->tpl_vars["key"] = new Smarty_variable("pictures_".((string)$_smarty_tpl->tpl_vars['product']->value->id)."_".((string)$_smarty_tpl->tpl_vars['field']->value['id_customization_field']), null, 0);?>
	customizationFields[<?php echo intval($_smarty_tpl->getVariable('smarty')->value['foreach']['customizationFields']['index']);?>
] = new Array();
	customizationFields[<?php echo intval($_smarty_tpl->getVariable('smarty')->value['foreach']['customizationFields']['index']);?>
][0] = '<?php if (intval($_smarty_tpl->tpl_vars['field']->value['type'])==0){?>img<?php echo $_smarty_tpl->tpl_vars['imgIndex']->value++;?>
<?php }else{ ?>textField<?php echo $_smarty_tpl->tpl_vars['textFieldIndex']->value++;?>
<?php }?>';
	customizationFields[<?php echo intval($_smarty_tpl->getVariable('smarty')->value['foreach']['customizationFields']['index']);?>
][1] = <?php if (intval($_smarty_tpl->tpl_vars['field']->value['type'])==0&&isset($_smarty_tpl->tpl_vars['pictures']->value[$_smarty_tpl->tpl_vars['key']->value])&&$_smarty_tpl->tpl_vars['pictures']->value[$_smarty_tpl->tpl_vars['key']->value]){?>2<?php }else{ ?><?php echo intval($_smarty_tpl->tpl_vars['field']->value['required']);?>
<?php }?>;
<?php } ?>

// Images
var img_prod_dir = '<?php echo $_smarty_tpl->tpl_vars['img_prod_dir']->value;?>
';
var combinationImages = new Array();

<?php if (isset($_smarty_tpl->tpl_vars['combinationImages']->value)){?>
	<?php  $_smarty_tpl->tpl_vars['combination'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['combination']->_loop = false;
 $_smarty_tpl->tpl_vars['combinationId'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['combinationImages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['combination']->key => $_smarty_tpl->tpl_vars['combination']->value){
$_smarty_tpl->tpl_vars['combination']->_loop = true;
 $_smarty_tpl->tpl_vars['combinationId']->value = $_smarty_tpl->tpl_vars['combination']->key;
?>
		combinationImages[<?php echo $_smarty_tpl->tpl_vars['combinationId']->value;?>
] = new Array();
		<?php  $_smarty_tpl->tpl_vars['image'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['image']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['combination']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['f_combinationImage']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['image']->key => $_smarty_tpl->tpl_vars['image']->value){
$_smarty_tpl->tpl_vars['image']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['f_combinationImage']['index']++;
?>
			combinationImages[<?php echo $_smarty_tpl->tpl_vars['combinationId']->value;?>
][<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['f_combinationImage']['index'];?>
] = <?php echo intval($_smarty_tpl->tpl_vars['image']->value['id_image']);?>
;
		<?php } ?>
	<?php } ?>
<?php }?>

combinationImages[0] = new Array();
<?php if (isset($_smarty_tpl->tpl_vars['images']->value)){?>
	<?php  $_smarty_tpl->tpl_vars['image'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['image']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['images']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['f_defaultImages']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['image']->key => $_smarty_tpl->tpl_vars['image']->value){
$_smarty_tpl->tpl_vars['image']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['f_defaultImages']['index']++;
?>
		combinationImages[0][<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['f_defaultImages']['index'];?>
] = <?php echo $_smarty_tpl->tpl_vars['image']->value['id_image'];?>
;
	<?php } ?>
<?php }?>

// Translations
var doesntExist = '<?php echo smartyTranslate(array('s'=>'This combination does not exist for this product. Please select another combination.','js'=>1),$_smarty_tpl);?>
';
var doesntExistNoMore = '<?php echo smartyTranslate(array('s'=>'This product is no longer in stock','js'=>1),$_smarty_tpl);?>
';
var doesntExistNoMoreBut = '<?php echo smartyTranslate(array('s'=>'with those attributes but is available with others.','js'=>1),$_smarty_tpl);?>
';
var uploading_in_progress = '<?php echo smartyTranslate(array('s'=>'Uploading in progress, please be patient.','js'=>1),$_smarty_tpl);?>
';
var fieldRequired = '<?php echo smartyTranslate(array('s'=>'Please fill in all the required fields before saving your customization.','js'=>1),$_smarty_tpl);?>
';

<?php if (isset($_smarty_tpl->tpl_vars['groups']->value)){?>
	// Combinations
	<?php  $_smarty_tpl->tpl_vars['combination'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['combination']->_loop = false;
 $_smarty_tpl->tpl_vars['idCombination'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['combinations']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['combination']->key => $_smarty_tpl->tpl_vars['combination']->value){
$_smarty_tpl->tpl_vars['combination']->_loop = true;
 $_smarty_tpl->tpl_vars['idCombination']->value = $_smarty_tpl->tpl_vars['combination']->key;
?>
		var specific_price_combination = new Array();
		var available_date = new Array();
		specific_price_combination['reduction_percent'] = <?php if ($_smarty_tpl->tpl_vars['combination']->value['specific_price']&&$_smarty_tpl->tpl_vars['combination']->value['specific_price']['reduction']&&$_smarty_tpl->tpl_vars['combination']->value['specific_price']['reduction_type']=='percentage'){?><?php echo $_smarty_tpl->tpl_vars['combination']->value['specific_price']['reduction']*100;?>
<?php }else{ ?>0<?php }?>;
		specific_price_combination['reduction_price'] = <?php if ($_smarty_tpl->tpl_vars['combination']->value['specific_price']&&$_smarty_tpl->tpl_vars['combination']->value['specific_price']['reduction']&&$_smarty_tpl->tpl_vars['combination']->value['specific_price']['reduction_type']=='amount'){?><?php echo $_smarty_tpl->tpl_vars['combination']->value['specific_price']['reduction'];?>
<?php }else{ ?>0<?php }?>;
		specific_price_combination['price'] = <?php if ($_smarty_tpl->tpl_vars['combination']->value['specific_price']&&$_smarty_tpl->tpl_vars['combination']->value['specific_price']['price']){?><?php echo $_smarty_tpl->tpl_vars['combination']->value['specific_price']['price'];?>
<?php }else{ ?>0<?php }?>;
		specific_price_combination['reduction_type'] = '<?php if ($_smarty_tpl->tpl_vars['combination']->value['specific_price']){?><?php echo $_smarty_tpl->tpl_vars['combination']->value['specific_price']['reduction_type'];?>
<?php }?>';
		specific_price_combination['id_product_attribute'] = <?php if ($_smarty_tpl->tpl_vars['combination']->value['specific_price']){?><?php echo intval($_smarty_tpl->tpl_vars['combination']->value['specific_price']['id_product_attribute']);?>
<?php }else{ ?>0<?php }?>;
		available_date['date'] = '<?php echo $_smarty_tpl->tpl_vars['combination']->value['available_date'];?>
';
		available_date['date_formatted'] = '<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0][0]->dateFormat(array('date'=>$_smarty_tpl->tpl_vars['combination']->value['available_date'],'full'=>false),$_smarty_tpl);?>
';
		addCombination(<?php echo intval($_smarty_tpl->tpl_vars['idCombination']->value);?>
, new Array(<?php echo $_smarty_tpl->tpl_vars['combination']->value['list'];?>
), <?php echo $_smarty_tpl->tpl_vars['combination']->value['quantity'];?>
, <?php echo $_smarty_tpl->tpl_vars['combination']->value['price'];?>
, <?php echo $_smarty_tpl->tpl_vars['combination']->value['ecotax'];?>
, <?php echo $_smarty_tpl->tpl_vars['combination']->value['id_image'];?>
, '<?php echo addslashes($_smarty_tpl->tpl_vars['combination']->value['reference']);?>
', <?php echo $_smarty_tpl->tpl_vars['combination']->value['unit_impact'];?>
, <?php echo $_smarty_tpl->tpl_vars['combination']->value['minimal_quantity'];?>
, available_date, specific_price_combination);
	<?php } ?>
<?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['attributesCombinations']->value)){?>
	// Combinations attributes informations
	var attributesCombinations = new Array();
	<?php  $_smarty_tpl->tpl_vars['aC'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['aC']->_loop = false;
 $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['attributesCombinations']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['aC']->key => $_smarty_tpl->tpl_vars['aC']->value){
$_smarty_tpl->tpl_vars['aC']->_loop = true;
 $_smarty_tpl->tpl_vars['id']->value = $_smarty_tpl->tpl_vars['aC']->key;
?>
		tabInfos = new Array();
		tabInfos['id_attribute'] = '<?php echo intval($_smarty_tpl->tpl_vars['aC']->value['id_attribute']);?>
';
		tabInfos['attribute'] = '<?php echo $_smarty_tpl->tpl_vars['aC']->value['attribute'];?>
';
		tabInfos['group'] = '<?php echo $_smarty_tpl->tpl_vars['aC']->value['group'];?>
';
		tabInfos['id_attribute_group'] = '<?php echo intval($_smarty_tpl->tpl_vars['aC']->value['id_attribute_group']);?>
';
		attributesCombinations.push(tabInfos);
	<?php } ?>
<?php }?>
    
<?php if (isset($_smarty_tpl->tpl_vars['thumbs_position']->value)){?>
var thumbs_position = '<?php echo $_smarty_tpl->tpl_vars['thumbs_position']->value;?>
';
<?php }?>
//]]>
</script>

<div class="row col-lg-12">
    <?php if (isset($_smarty_tpl->tpl_vars['adminActionDisplay']->value)&&$_smarty_tpl->tpl_vars['adminActionDisplay']->value){?>
    <div id="admin-action">
            <p><?php echo smartyTranslate(array('s'=>'This product is not visible to your customers.'),$_smarty_tpl);?>

            <input type="hidden" id="admin-action-product-id" value="<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
" />
            <input type="submit" value="<?php echo smartyTranslate(array('s'=>'Publish'),$_smarty_tpl);?>
" class="exclusive" onclick="submitPublishProduct('<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
<?php echo smarty_modifier_escape($_GET['ad'], 'htmlall', 'UTF-8');?>
', 0, '<?php echo smarty_modifier_escape($_GET['adtoken'], 'htmlall', 'UTF-8');?>
')"/>
            <input type="submit" value="<?php echo smartyTranslate(array('s'=>'Back'),$_smarty_tpl);?>
" class="exclusive" onclick="submitPublishProduct('<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
<?php echo smarty_modifier_escape($_GET['ad'], 'htmlall', 'UTF-8');?>
', 1, '<?php echo smarty_modifier_escape($_GET['adtoken'], 'htmlall', 'UTF-8');?>
')"/>
            </p>
            <p id="admin-action-result"></p>
            </p>
    </div>
    <?php }?>

    <?php if (isset($_smarty_tpl->tpl_vars['confirmation']->value)&&$_smarty_tpl->tpl_vars['confirmation']->value){?>
    <p class="confirmation">
            <?php echo $_smarty_tpl->tpl_vars['confirmation']->value;?>

    </p>
    <?php }?>
    <div id="product_left" class="col-lg-<?php if ($_smarty_tpl->tpl_vars['thumbs_position']->value=='bottom'){?>5<?php }else{ ?>6<?php }?> col-lg-offset-0 col-md-7 col-md-offset-3 col-sm-10 col-sm-offset-1">
        <div class="frame_wrap frame_wrap_prodImg clearfix <?php if ($_smarty_tpl->tpl_vars['thumbs_position']->value=='left'){?>thumbs_left thumbs_side<?php }elseif($_smarty_tpl->tpl_vars['thumbs_position']->value=='right'){?>thumbs_right thumbs_side<?php }?>">
            <?php if ($_smarty_tpl->tpl_vars['thumbs_position']->value=='left'&&isset($_smarty_tpl->tpl_vars['images']->value)&&count($_smarty_tpl->tpl_vars['images']->value)>0){?>
            <!-- thumbnails -->
            <div id="views_block" class="clearfix <?php if (isset($_smarty_tpl->tpl_vars['images']->value)&&count($_smarty_tpl->tpl_vars['images']->value)<2){?>hidden<?php }?> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['bsvisible'][0][0]->bsvisible(array('val'=>false,'media'=>'xs'),$_smarty_tpl);?>
">
                <div id="thumbs_list">
                    <ul id="thumbs_list_frame">
                        <?php if (isset($_smarty_tpl->tpl_vars['images']->value)){?>
                            <?php  $_smarty_tpl->tpl_vars['image'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['image']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['images']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['image']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['image']->key => $_smarty_tpl->tpl_vars['image']->value){
$_smarty_tpl->tpl_vars['image']->_loop = true;
 $_smarty_tpl->tpl_vars['image']->index++;
 $_smarty_tpl->tpl_vars['image']->first = $_smarty_tpl->tpl_vars['image']->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['thumbnails']['first'] = $_smarty_tpl->tpl_vars['image']->first;
?>
                            <?php $_smarty_tpl->tpl_vars['imageIds'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['product']->value->id)."-".((string)$_smarty_tpl->tpl_vars['image']->value['id_image']), null, 0);?>
                            <?php if (!empty($_smarty_tpl->tpl_vars['image']->value['legend'])){?>
                                <?php $_smarty_tpl->tpl_vars['imageTitlte'] = new Smarty_variable(smarty_modifier_escape($_smarty_tpl->tpl_vars['image']->value['legend'], 'htmlall', 'UTF-8'), null, 0);?>
                            <?php }else{ ?>
                                <?php $_smarty_tpl->tpl_vars['imageTitlte'] = new Smarty_variable(smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value->name, 'htmlall', 'UTF-8'), null, 0);?>
                            <?php }?>
                            <li id="thumbnail_<?php echo $_smarty_tpl->tpl_vars['image']->value['id_image'];?>
">
                                <?php if ($_smarty_tpl->tpl_vars['jqZoomEnabled']->value){?>
                                <a <?php if ($_smarty_tpl->tpl_vars['have_image']->value[0]==$_smarty_tpl->tpl_vars['image']->value['id_image']){?>class="zoomThumbActive"<?php }?> href="javascript:void(0);" rel="&#123;gallery: 'galprod', smallimage: '<?php echo $_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value->link_rewrite,$_smarty_tpl->tpl_vars['imageIds']->value,'large_default');?>
',largeimage: '<?php echo $_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value->link_rewrite,$_smarty_tpl->tpl_vars['imageIds']->value,'thickbox_default');?>
'&#125;" data-thumb="<?php echo $_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value->link_rewrite,$_smarty_tpl->tpl_vars['imageIds']->value,'large_default');?>
">  
                                    <img id="thumb_<?php echo $_smarty_tpl->tpl_vars['image']->value['id_image'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value->link_rewrite,$_smarty_tpl->tpl_vars['imageIds']->value,'small_default');?>
" />  
                                </a>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value->link_rewrite,$_smarty_tpl->tpl_vars['imageIds']->value,'thickbox_default');?>
" class="thickbox hidden" rel="galprod">&nbsp;</a>
                                <?php }else{ ?>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value->link_rewrite,$_smarty_tpl->tpl_vars['imageIds']->value,'thickbox_default');?>
" rel="galprod" class="thickbox<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['thumbnails']['first']){?> shown<?php }?>" title="<?php echo $_smarty_tpl->tpl_vars['imageTitlte']->value;?>
"  data-thumb="<?php echo $_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value->link_rewrite,$_smarty_tpl->tpl_vars['imageIds']->value,'large_default');?>
">
                                    <img id="thumb_<?php echo $_smarty_tpl->tpl_vars['image']->value['id_image'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value->link_rewrite,$_smarty_tpl->tpl_vars['imageIds']->value,'small_default');?>
" alt="<?php echo $_smarty_tpl->tpl_vars['imageTitlte']->value;?>
" />
                                </a>
                                <?php }?>
                            </li>
                            <?php } ?>
                        <?php }?>
                    </ul>
                    <div id="thumbs_prev" class="arrow_up"></div>
                    <div id="thumbs_next" class="arrow_down"></div>
                </div>
            </div>
            <?php }?>
            <!-- product img-->
            <div id="image-block" class="clearfix">
                <span id="view_full_size">
                    <div class="sale_online">
                        <?php if ($_smarty_tpl->tpl_vars['product']->value->on_sale){?>
                            <p class="on_sale"><?php echo smartyTranslate(array('s'=>'On sale!'),$_smarty_tpl);?>
</p>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['product']->value->online_only){?>
                        <p class="online_only"><?php echo smartyTranslate(array('s'=>'Online only'),$_smarty_tpl);?>
</p>
                        <?php }?>
                    </div>
                    <div class="reduction">
                        <p id="reduction_percent" <?php if (!$_smarty_tpl->tpl_vars['product']->value->specificPrice||$_smarty_tpl->tpl_vars['product']->value->specificPrice['reduction_type']!='percentage'){?> style="display:none;"<?php }?>><span id="reduction_percent_display"><?php if ($_smarty_tpl->tpl_vars['product']->value->specificPrice&&$_smarty_tpl->tpl_vars['product']->value->specificPrice['reduction_type']=='percentage'){?>-<?php echo $_smarty_tpl->tpl_vars['product']->value->specificPrice['reduction']*100;?>
%<?php }?></span></p>
                        <p id="reduction_amount" <?php if (!$_smarty_tpl->tpl_vars['product']->value->specificPrice||$_smarty_tpl->tpl_vars['product']->value->specificPrice['reduction_type']!='amount'&&intval($_smarty_tpl->tpl_vars['product']->value->specificPrice['reduction'])==0){?> style="display:none"<?php }?>>
                            <span id="reduction_amount_display">
                            <?php if ($_smarty_tpl->tpl_vars['product']->value->specificPrice&&$_smarty_tpl->tpl_vars['product']->value->specificPrice['reduction_type']=='amount'&&intval($_smarty_tpl->tpl_vars['product']->value->specificPrice['reduction'])!=0){?>
                                    -<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['productPriceWithoutReduction']->value-floatval($_smarty_tpl->tpl_vars['productPrice']->value)),$_smarty_tpl);?>

                            <?php }?>
                            </span>
                        </p>
                    </div>
                            
            <?php if ($_smarty_tpl->tpl_vars['have_image']->value){?>
                    <?php if ($_smarty_tpl->tpl_vars['jqZoomEnabled']->value){?>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value->link_rewrite,$_smarty_tpl->tpl_vars['cover']->value['id_image'],'thickbox_default');?>
" class="jqzoom" rel="galprod">  
                        <img src="<?php echo $_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value->link_rewrite,$_smarty_tpl->tpl_vars['cover']->value['id_image'],'large_default');?>
" title="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value->name, 'htmlall', 'UTF-8');?>
" id="bigpic">
                        <span class="span_link"><!--<?php echo smartyTranslate(array('s'=>'View Full Size'),$_smarty_tpl);?>
--></span>
                    </a>
                    <?php }else{ ?>
                    <img src="<?php echo $_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value->link_rewrite,$_smarty_tpl->tpl_vars['cover']->value['id_image'],'large_default');?>
" title="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value->name, 'htmlall', 'UTF-8');?>
" alt="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value->name, 'htmlall', 'UTF-8');?>
" id="bigpic" cla />
                    <span class="span_link"><!--<?php echo smartyTranslate(array('s'=>'View Full Size'),$_smarty_tpl);?>
--></span>
                    <?php }?>
            <?php }else{ ?>
                    <img src="<?php echo $_smarty_tpl->tpl_vars['img_prod_dir']->value;?>
<?php echo $_smarty_tpl->tpl_vars['lang_iso']->value;?>
-default-large_default.jpg" id="bigpic" alt="" title="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value->name, 'htmlall', 'UTF-8');?>
" />
                    <span class="span_link"><!--<?php echo smartyTranslate(array('s'=>'View Full Size'),$_smarty_tpl);?>
--></span>
                
            <?php }?>
                </span>
            </div>
            <?php if (isset($_smarty_tpl->tpl_vars['images']->value)&&count($_smarty_tpl->tpl_vars['images']->value)>0){?>
            <!-- thumbnails -->
                <?php if ($_smarty_tpl->tpl_vars['thumbs_position']->value=='bottom'){?>
            <div id="views_block" class="clearfix <?php if (isset($_smarty_tpl->tpl_vars['images']->value)&&count($_smarty_tpl->tpl_vars['images']->value)<2){?>hidden<?php }?> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['bsvisible'][0][0]->bsvisible(array('val'=>false,'media'=>'xs'),$_smarty_tpl);?>
">
                <div id="thumbs_list">
                    <div id="thumbs_prev" class="arrow_left"></div>
                    <div id="thumbs_next" class="arrow_right"></div>
                    <ul id="thumbs_list_frame">
                        <?php if (isset($_smarty_tpl->tpl_vars['images']->value)){?>
                            <?php  $_smarty_tpl->tpl_vars['image'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['image']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['images']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['image']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['image']->key => $_smarty_tpl->tpl_vars['image']->value){
$_smarty_tpl->tpl_vars['image']->_loop = true;
 $_smarty_tpl->tpl_vars['image']->index++;
 $_smarty_tpl->tpl_vars['image']->first = $_smarty_tpl->tpl_vars['image']->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['thumbnails']['first'] = $_smarty_tpl->tpl_vars['image']->first;
?>
                            <?php $_smarty_tpl->tpl_vars['imageIds'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['product']->value->id)."-".((string)$_smarty_tpl->tpl_vars['image']->value['id_image']), null, 0);?>
                            <?php if (!empty($_smarty_tpl->tpl_vars['image']->value['legend'])){?>
                                <?php $_smarty_tpl->tpl_vars['imageTitlte'] = new Smarty_variable(smarty_modifier_escape($_smarty_tpl->tpl_vars['image']->value['legend'], 'htmlall', 'UTF-8'), null, 0);?>
                            <?php }else{ ?>
                                <?php $_smarty_tpl->tpl_vars['imageTitlte'] = new Smarty_variable(smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value->name, 'htmlall', 'UTF-8'), null, 0);?>
                            <?php }?>
                            <li id="thumbnail_<?php echo $_smarty_tpl->tpl_vars['image']->value['id_image'];?>
">
                                <?php if ($_smarty_tpl->tpl_vars['jqZoomEnabled']->value){?>
                                <a <?php if ($_smarty_tpl->tpl_vars['have_image']->value[0]==$_smarty_tpl->tpl_vars['image']->value['id_image']){?>class="zoomThumbActive"<?php }?> href="javascript:void(0);" rel="&#123;gallery: 'galprod', smallimage: '<?php echo $_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value->link_rewrite,$_smarty_tpl->tpl_vars['imageIds']->value,'large_default');?>
',largeimage: '<?php echo $_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value->link_rewrite,$_smarty_tpl->tpl_vars['imageIds']->value,'thickbox_default');?>
'&#125;" data-thumb="<?php echo $_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value->link_rewrite,$_smarty_tpl->tpl_vars['imageIds']->value,'large_default');?>
">  
                                    <img id="thumb_<?php echo $_smarty_tpl->tpl_vars['image']->value['id_image'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value->link_rewrite,$_smarty_tpl->tpl_vars['imageIds']->value,'small_default');?>
" />  
                                </a>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value->link_rewrite,$_smarty_tpl->tpl_vars['imageIds']->value,'thickbox_default');?>
" class="thickbox hidden" rel="galprod">&nbsp;</a>
                                <?php }else{ ?>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value->link_rewrite,$_smarty_tpl->tpl_vars['imageIds']->value,'thickbox_default');?>
" rel="galprod" class="thickbox<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['thumbnails']['first']){?> shown<?php }?>" title="<?php echo $_smarty_tpl->tpl_vars['imageTitlte']->value;?>
"  data-thumb="<?php echo $_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value->link_rewrite,$_smarty_tpl->tpl_vars['imageIds']->value,'large_default');?>
">
                                    <img id="thumb_<?php echo $_smarty_tpl->tpl_vars['image']->value['id_image'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value->link_rewrite,$_smarty_tpl->tpl_vars['imageIds']->value,'small_default');?>
" alt="<?php echo $_smarty_tpl->tpl_vars['imageTitlte']->value;?>
" />
                                </a>
                                <?php }?>
                            </li>
                            <?php } ?>
                        <?php }?>
                    </ul>
                </div>
            </div>
                <?php }elseif($_smarty_tpl->tpl_vars['thumbs_position']->value=='right'){?>
            <div id="views_block" class="clearfix <?php if (isset($_smarty_tpl->tpl_vars['images']->value)&&count($_smarty_tpl->tpl_vars['images']->value)<2){?>hidden<?php }?> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['bsvisible'][0][0]->bsvisible(array('val'=>false,'media'=>'xs'),$_smarty_tpl);?>
">
                <div id="thumbs_list">
                    <ul id="thumbs_list_frame">
                        <?php if (isset($_smarty_tpl->tpl_vars['images']->value)){?>
                            <?php  $_smarty_tpl->tpl_vars['image'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['image']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['images']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['image']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['image']->key => $_smarty_tpl->tpl_vars['image']->value){
$_smarty_tpl->tpl_vars['image']->_loop = true;
 $_smarty_tpl->tpl_vars['image']->index++;
 $_smarty_tpl->tpl_vars['image']->first = $_smarty_tpl->tpl_vars['image']->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['thumbnails']['first'] = $_smarty_tpl->tpl_vars['image']->first;
?>
                            <?php $_smarty_tpl->tpl_vars['imageIds'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['product']->value->id)."-".((string)$_smarty_tpl->tpl_vars['image']->value['id_image']), null, 0);?>
                            <?php if (!empty($_smarty_tpl->tpl_vars['image']->value['legend'])){?>
                                <?php $_smarty_tpl->tpl_vars['imageTitlte'] = new Smarty_variable(smarty_modifier_escape($_smarty_tpl->tpl_vars['image']->value['legend'], 'htmlall', 'UTF-8'), null, 0);?>
                            <?php }else{ ?>
                                <?php $_smarty_tpl->tpl_vars['imageTitlte'] = new Smarty_variable(smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value->name, 'htmlall', 'UTF-8'), null, 0);?>
                            <?php }?>
                            <li id="thumbnail_<?php echo $_smarty_tpl->tpl_vars['image']->value['id_image'];?>
">
                                <?php if ($_smarty_tpl->tpl_vars['jqZoomEnabled']->value){?>
                                <a <?php if ($_smarty_tpl->tpl_vars['have_image']->value[0]==$_smarty_tpl->tpl_vars['image']->value['id_image']){?>class="zoomThumbActive"<?php }?> href="javascript:void(0);" rel="&#123;gallery: 'galprod', smallimage: '<?php echo $_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value->link_rewrite,$_smarty_tpl->tpl_vars['imageIds']->value,'large_default');?>
',largeimage: '<?php echo $_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value->link_rewrite,$_smarty_tpl->tpl_vars['imageIds']->value,'thickbox_default');?>
'&#125;" data-thumb="<?php echo $_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value->link_rewrite,$_smarty_tpl->tpl_vars['imageIds']->value,'large_default');?>
">  
                                    <img id="thumb_<?php echo $_smarty_tpl->tpl_vars['image']->value['id_image'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value->link_rewrite,$_smarty_tpl->tpl_vars['imageIds']->value,'small_default');?>
" />  
                                </a>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value->link_rewrite,$_smarty_tpl->tpl_vars['imageIds']->value,'thickbox_default');?>
" class="thickbox hidden" rel="galprod">&nbsp;</a>
                                <?php }else{ ?>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value->link_rewrite,$_smarty_tpl->tpl_vars['imageIds']->value,'thickbox_default');?>
" rel="galprod" class="thickbox<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['thumbnails']['first']){?> shown<?php }?>" title="<?php echo $_smarty_tpl->tpl_vars['imageTitlte']->value;?>
"  data-thumb="<?php echo $_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value->link_rewrite,$_smarty_tpl->tpl_vars['imageIds']->value,'large_default');?>
">
                                    <img id="thumb_<?php echo $_smarty_tpl->tpl_vars['image']->value['id_image'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value->link_rewrite,$_smarty_tpl->tpl_vars['imageIds']->value,'small_default');?>
" alt="<?php echo $_smarty_tpl->tpl_vars['imageTitlte']->value;?>
" />
                                </a>
                                <?php }?>
                            </li>
                            <?php } ?>
                        <?php }?>
                    </ul>
                    <div id="thumbs_prev" class="arrow_up"></div>
                    <div id="thumbs_next" class="arrow_down"></div>
                </div>
            </div>
                <?php }?>
            <?php }?>
            <?php if (isset($_smarty_tpl->tpl_vars['images']->value)&&count($_smarty_tpl->tpl_vars['images']->value)>1){?><p class="resetimg clear"><span id="wrapResetImages" style="display: none;"><a id="resetImages" href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['product']->value);?>
" onclick="$('span#wrapResetImages').hide('slow');return (false);"><?php echo smartyTranslate(array('s'=>'Display all pictures'),$_smarty_tpl);?>
</a></span></p><?php }?>
        </div>
        <!-- usefull links-->
        <?php if ($_smarty_tpl->tpl_vars['HOOK_EXTRA_LEFT']->value){?>
        <div class="frame_wrap">
            <ul id="usefull_link_block">
                <?php echo $_smarty_tpl->tpl_vars['HOOK_EXTRA_LEFT']->value;?>

            </ul>
        </div>
        <?php }?>
    </div>

<?php if ((isset($_smarty_tpl->tpl_vars['quantity_discounts']->value)&&count($_smarty_tpl->tpl_vars['quantity_discounts']->value)>0)){?>
<!-- quantity discount -->
<ul class="idTabs clearfix">
	<li><a href="#discount" style="cursor: pointer" class="selected"><?php echo smartyTranslate(array('s'=>'Sliding scale pricing'),$_smarty_tpl);?>
</a></li>
</ul>
<div id="quantityDiscount">
	<table class="std">
        <thead>
            <tr>
                <th><?php echo smartyTranslate(array('s'=>'Product'),$_smarty_tpl);?>
</th>
                <th><?php echo smartyTranslate(array('s'=>'From (qty)'),$_smarty_tpl);?>
</th>
                <th><?php if (Configuration::get('PS_DISPLAY_DISCOUNT_PRICE')){?><?php echo smartyTranslate(array('s'=>'Price'),$_smarty_tpl);?>
<?php }else{ ?><?php echo smartyTranslate(array('s'=>'Discount'),$_smarty_tpl);?>
<?php }?></th>
            </tr>
        </thead>
		<tbody>
            <?php  $_smarty_tpl->tpl_vars['quantity_discount'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['quantity_discount']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['quantity_discounts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['quantity_discount']->key => $_smarty_tpl->tpl_vars['quantity_discount']->value){
$_smarty_tpl->tpl_vars['quantity_discount']->_loop = true;
?>
            <tr id="quantityDiscount_<?php echo $_smarty_tpl->tpl_vars['quantity_discount']->value['id_product_attribute'];?>
">
                <td>
                    <?php if ((isset($_smarty_tpl->tpl_vars['quantity_discount']->value['attributes'])&&($_smarty_tpl->tpl_vars['quantity_discount']->value['attributes']))){?>
                        <?php echo $_smarty_tpl->tpl_vars['product']->value->getProductName($_smarty_tpl->tpl_vars['quantity_discount']->value['id_product'],$_smarty_tpl->tpl_vars['quantity_discount']->value['id_product_attribute']);?>

                    <?php }else{ ?>
                        <?php echo $_smarty_tpl->tpl_vars['product']->value->getProductName($_smarty_tpl->tpl_vars['quantity_discount']->value['id_product']);?>

                    <?php }?>
                </td>
                <td><?php echo intval($_smarty_tpl->tpl_vars['quantity_discount']->value['quantity']);?>
</td>
                <td>
                <?php if ($_smarty_tpl->tpl_vars['quantity_discount']->value['price']>=0||$_smarty_tpl->tpl_vars['quantity_discount']->value['reduction_type']=='amount'){?>
                    <?php if (Configuration::get('PS_DISPLAY_DISCOUNT_PRICE')){?>
                        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['productPrice']->value-floatval($_smarty_tpl->tpl_vars['quantity_discount']->value['real_value'])),$_smarty_tpl);?>

                    <?php }else{ ?>
                        -<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>floatval($_smarty_tpl->tpl_vars['quantity_discount']->value['real_value'])),$_smarty_tpl);?>

                    <?php }?>
                <?php }else{ ?>
                    <?php if (Configuration::get('PS_DISPLAY_DISCOUNT_PRICE')){?>
                        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['productPrice']->value-floatval(($_smarty_tpl->tpl_vars['productPrice']->value*$_smarty_tpl->tpl_vars['quantity_discount']->value['reduction']))),$_smarty_tpl);?>

                    <?php }else{ ?>
                        -<?php echo floatval($_smarty_tpl->tpl_vars['quantity_discount']->value['real_value']);?>
%
                    <?php }?>
                <?php }?>
                </td>
            </tr>
            <?php } ?>
        </tbody>
	</table>
</div>
<?php }?>
<div class="clearfix <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['bsvisible'][0][0]->bsvisible(array('val'=>false,'media'=>'lg'),$_smarty_tpl);?>
"></div>
<!-- description and features -->
<?php if ((isset($_smarty_tpl->tpl_vars['product']->value)&&$_smarty_tpl->tpl_vars['product']->value->description||$_smarty_tpl->tpl_vars['product']->value->description_short)||(isset($_smarty_tpl->tpl_vars['features']->value)&&$_smarty_tpl->tpl_vars['features']->value)||(isset($_smarty_tpl->tpl_vars['accessories']->value)&&$_smarty_tpl->tpl_vars['accessories']->value)||(isset($_smarty_tpl->tpl_vars['HOOK_PRODUCT_TAB']->value)&&$_smarty_tpl->tpl_vars['HOOK_PRODUCT_TAB']->value)||(isset($_smarty_tpl->tpl_vars['attachments']->value)&&$_smarty_tpl->tpl_vars['attachments']->value)||isset($_smarty_tpl->tpl_vars['product']->value)&&$_smarty_tpl->tpl_vars['product']->value->customizable){?>
<div class="col-lg-<?php if ($_smarty_tpl->tpl_vars['thumbs_position']->value=='bottom'){?>7<?php }else{ ?>6<?php }?>" col-xs-12>
    <div id="more_info_block" class="clear">
        <div id="product_header">
            <div class="ph_title">
                <h1 id="productName"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value->name, 'htmlall', 'UTF-8');?>
</h1>
                <?php if (($_smarty_tpl->tpl_vars['display_qties']->value==1&&!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value&&$_smarty_tpl->tpl_vars['product']->value->available_for_order)){?>
                <!-- number of item in stock -->
                <p id="pQuantityAvailable"<?php if ($_smarty_tpl->tpl_vars['product']->value->quantity<=0){?> style="display: none;"<?php }?>>
                    <img src="<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
remaining_items.png" />
                    <span id="quantityAvailable"><?php echo intval($_smarty_tpl->tpl_vars['product']->value->quantity);?>
</span>
                    <span <?php if ($_smarty_tpl->tpl_vars['product']->value->quantity>1){?> style="display: none;"<?php }?> id="quantityAvailableTxt"><?php echo smartyTranslate(array('s'=>'item remaining'),$_smarty_tpl);?>
</span>
                    <span <?php if ($_smarty_tpl->tpl_vars['product']->value->quantity==1){?> style="display: none;"<?php }?> id="quantityAvailableTxtMultiple"><?php echo smartyTranslate(array('s'=>'items remaining'),$_smarty_tpl);?>
</span>
                </p>
                <?php }?>
                <p id="availability_date" <?php if (($_smarty_tpl->tpl_vars['product']->value->quantity>0)||!$_smarty_tpl->tpl_vars['product']->value->available_for_order||$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value||!isset($_smarty_tpl->tpl_vars['product']->value->available_date)||$_smarty_tpl->tpl_vars['product']->value->available_date<smarty_modifier_date_format(time(),'%Y-%m-%d')){?> style="display: none;"<?php }?>>
                    <img src="<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
availability.png" />
                    <span id="availability_date_label"><?php echo smartyTranslate(array('s'=>'Availability date:'),$_smarty_tpl);?>
</span>
                    <span id="availability_date_value"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0][0]->dateFormat(array('date'=>$_smarty_tpl->tpl_vars['product']->value->available_date,'full'=>false),$_smarty_tpl);?>
</span>
                </p>
            </div>
            <div class="clearfix">
                <?php if (isset($_smarty_tpl->tpl_vars['averageTotal']->value)&&$_smarty_tpl->tpl_vars['averageTotal']->value>0){?>
                <div class="product_rating">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
stars/big/stars_<?php echo $_smarty_tpl->tpl_vars['averageTotal']->value;?>
.png" alt="<?php echo $_smarty_tpl->tpl_vars['averageTotal']->value;?>
 stars" />
                </div>
                <?php }?>
                <ul>
                    <!-- reference -->
                    <li>
                        <p id="product_reference" <?php if (isset($_smarty_tpl->tpl_vars['groups']->value)||!$_smarty_tpl->tpl_vars['product']->value->reference){?>style="display: none;"<?php }?>>
                            <label for="product_reference"><?php echo smartyTranslate(array('s'=>'Reference:'),$_smarty_tpl);?>
 </label>
                            <span class="editable"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value->reference, 'htmlall', 'UTF-8');?>
</span>
                        </p>
                    </li>
                    <li id="ph_available">
                        <!-- availability -->
                        <?php if ($_smarty_tpl->tpl_vars['product']->value->quantity>0&&$_smarty_tpl->tpl_vars['product']->value->available_for_order&&!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value){?>
                        <span class="label label-success"><?php echo smartyTranslate(array('s'=>"Available"),$_smarty_tpl);?>
</span>
                        <?php }else{ ?>
                        <span class="label label-danger"><?php echo smartyTranslate(array('s'=>"Not Available"),$_smarty_tpl);?>
</span>
                        <?php }?>
                    </li>
                </ul>
            </div>
        </div>
        <ul id="more_info_tabs" class="nav nav-tabs frame_wrap frame_wrap_header">
            <li class="active"><a id="more_info_tab_description" href="#idTab11" data-toggle="tab"><?php echo smartyTranslate(array('s'=>'Description'),$_smarty_tpl);?>
</a></li>
            <?php if ($_smarty_tpl->tpl_vars['product']->value->description){?><li><a id="more_info_tab_more_info" href="#idTab1" data-toggle="tab"><?php echo smartyTranslate(array('s'=>'More info'),$_smarty_tpl);?>
</a></li><?php }?>
            <?php if ($_smarty_tpl->tpl_vars['attachments']->value){?><li><a id="more_info_tab_attachments" href="#idTab9" data-toggle="tab"><?php echo smartyTranslate(array('s'=>'Download'),$_smarty_tpl);?>
</a></li><?php }?>
            <?php if (isset($_smarty_tpl->tpl_vars['accessories']->value)&&$_smarty_tpl->tpl_vars['accessories']->value){?><li><a href="#idTab4" data-toggle="tab"><?php echo smartyTranslate(array('s'=>'Accessories'),$_smarty_tpl);?>
</a></li><?php }?>
			<li><a id="more_info_tab_more_info" href="#reinsurance_block" data-toggle="tab"><?php echo smartyTranslate(array('s'=>'Commentaires'),$_smarty_tpl);?>
</a></li>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_PRODUCT_TAB']->value;?>


        </ul>
        <div id="more_info_sheets" class="tab-content frame_wrap frame_wrap_desc auto_scroll">
            <!-- description -->
            <div id="idTab11" class="tab-pane active">
                <?php if ($_smarty_tpl->tpl_vars['product']->value->description_short||count($_smarty_tpl->tpl_vars['packItems']->value)>0){?>
                <div id="short_description_block">
                        <?php if ($_smarty_tpl->tpl_vars['product']->value->description_short){?>
                                <div id="short_description_content" class="rte align_justify"><?php echo $_smarty_tpl->tpl_vars['product']->value->description_short;?>
</div>
                        <?php }?>
                        <?php if (count($_smarty_tpl->tpl_vars['packItems']->value)>0){?>
                        <div class="short_description_pack">
                                <h3><?php echo smartyTranslate(array('s'=>'Pack content'),$_smarty_tpl);?>
</h3>
                                <?php  $_smarty_tpl->tpl_vars['packItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['packItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['packItems']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['packItem']->key => $_smarty_tpl->tpl_vars['packItem']->value){
$_smarty_tpl->tpl_vars['packItem']->_loop = true;
?>
                                <div class="pack_content">
                                        <?php echo $_smarty_tpl->tpl_vars['packItem']->value['pack_quantity'];?>
 x <a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['packItem']->value['id_product'],$_smarty_tpl->tpl_vars['packItem']->value['link_rewrite'],$_smarty_tpl->tpl_vars['packItem']->value['category']);?>
"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['packItem']->value['name'], 'htmlall', 'UTF-8');?>
</a>
                                        <p><?php echo $_smarty_tpl->tpl_vars['packItem']->value['description_short'];?>
</p>
                                </div>
                                <?php } ?>
                        </div>
                        <?php }?>
                </div>
                <?php }?>
                <div class="clearfix">
                <?php if (($_smarty_tpl->tpl_vars['product']->value->show_price&&!isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value))||isset($_smarty_tpl->tpl_vars['groups']->value)||$_smarty_tpl->tpl_vars['product']->value->reference||(isset($_smarty_tpl->tpl_vars['HOOK_PRODUCT_ACTIONS']->value)&&$_smarty_tpl->tpl_vars['HOOK_PRODUCT_ACTIONS']->value)){?>
                <!-- add to cart form-->
                <form id="buy_block" <?php if ($_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value&&!isset($_smarty_tpl->tpl_vars['groups']->value)&&$_smarty_tpl->tpl_vars['product']->value->quantity>0){?>class="hidden"<?php }?> action="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('cart');?>
" method="post" <?php if (isset($_smarty_tpl->tpl_vars['product']->value)&&$_smarty_tpl->tpl_vars['product']->value->customizable){?>class="col-lg-6"<?php }?>>

                        <!-- hidden datas -->
                        <p class="hidden">
                                <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['static_token']->value;?>
" />
                                <input type="hidden" name="id_product" value="<?php echo intval($_smarty_tpl->tpl_vars['product']->value->id);?>
" id="product_page_product_id" />
                                <input type="hidden" name="add" value="1" />
                                <input type="hidden" name="id_product_attribute" id="idCombination" value="" />
                        </p>

                        <div class="product_attributes">
                                <?php if (isset($_smarty_tpl->tpl_vars['groups']->value)){?>
                                <!-- attributes -->
                                <div id="attributes">
                                <?php  $_smarty_tpl->tpl_vars['group'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['group']->_loop = false;
 $_smarty_tpl->tpl_vars['id_attribute_group'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['groups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['group']->key => $_smarty_tpl->tpl_vars['group']->value){
$_smarty_tpl->tpl_vars['group']->_loop = true;
 $_smarty_tpl->tpl_vars['id_attribute_group']->value = $_smarty_tpl->tpl_vars['group']->key;
?>
                                    <?php if (count($_smarty_tpl->tpl_vars['group']->value['attributes'])){?>
                                    <fieldset class="attribute_fieldset form-horizontal">
                                        <div class="form-group">
                                            <label class="attribute_label col-lg-4 control-label" for="group_<?php echo intval($_smarty_tpl->tpl_vars['id_attribute_group']->value);?>
"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['group']->value['name'], 'htmlall', 'UTF-8');?>
</label>
                                            <?php $_smarty_tpl->tpl_vars["groupName"] = new Smarty_variable("group_".((string)$_smarty_tpl->tpl_vars['id_attribute_group']->value), null, 0);?>
                                            <div class="attribute_list col-lg-6">
                                            <?php if (($_smarty_tpl->tpl_vars['group']->value['group_type']=='select')){?>
                                                    <select name="<?php echo $_smarty_tpl->tpl_vars['groupName']->value;?>
" id="group_<?php echo intval($_smarty_tpl->tpl_vars['id_attribute_group']->value);?>
" class="attribute_select form-control" onchange="findCombination();getProductAttribute();<?php if (count($_smarty_tpl->tpl_vars['colors']->value)>0){?>$('#wrapResetImages').show('slow');<?php }?>;">
                                                            <?php  $_smarty_tpl->tpl_vars['group_attribute'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['group_attribute']->_loop = false;
 $_smarty_tpl->tpl_vars['id_attribute'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['group']->value['attributes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['group_attribute']->key => $_smarty_tpl->tpl_vars['group_attribute']->value){
$_smarty_tpl->tpl_vars['group_attribute']->_loop = true;
 $_smarty_tpl->tpl_vars['id_attribute']->value = $_smarty_tpl->tpl_vars['group_attribute']->key;
?>
                                                                    <option value="<?php echo intval($_smarty_tpl->tpl_vars['id_attribute']->value);?>
"<?php if ((isset($_GET[$_smarty_tpl->tpl_vars['groupName']->value])&&intval($_GET[$_smarty_tpl->tpl_vars['groupName']->value])==$_smarty_tpl->tpl_vars['id_attribute']->value)||$_smarty_tpl->tpl_vars['group']->value['default']==$_smarty_tpl->tpl_vars['id_attribute']->value){?> selected="selected"<?php }?> title="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['group_attribute']->value, 'htmlall', 'UTF-8');?>
"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['group_attribute']->value, 'htmlall', 'UTF-8');?>
</option>
                                                            <?php } ?>
                                                    </select>
                                            <?php }elseif(($_smarty_tpl->tpl_vars['group']->value['group_type']=='color')){?>
                                                    <ul id="color_to_pick_list" class="clearfix">
                                                            <?php $_smarty_tpl->tpl_vars["default_colorpicker"] = new Smarty_variable('', null, 0);?>
                                                            <?php  $_smarty_tpl->tpl_vars['group_attribute'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['group_attribute']->_loop = false;
 $_smarty_tpl->tpl_vars['id_attribute'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['group']->value['attributes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['group_attribute']->key => $_smarty_tpl->tpl_vars['group_attribute']->value){
$_smarty_tpl->tpl_vars['group_attribute']->_loop = true;
 $_smarty_tpl->tpl_vars['id_attribute']->value = $_smarty_tpl->tpl_vars['group_attribute']->key;
?>
                                                            <li<?php if ($_smarty_tpl->tpl_vars['group']->value['default']==$_smarty_tpl->tpl_vars['id_attribute']->value){?> class="selected"<?php }?>>
                                                                    <a id="color_<?php echo intval($_smarty_tpl->tpl_vars['id_attribute']->value);?>
" class="color_pick<?php if (($_smarty_tpl->tpl_vars['group']->value['default']==$_smarty_tpl->tpl_vars['id_attribute']->value)){?> selected<?php }?>" style="background: <?php echo $_smarty_tpl->tpl_vars['colors']->value[$_smarty_tpl->tpl_vars['id_attribute']->value]['value'];?>
;" title="<?php echo $_smarty_tpl->tpl_vars['colors']->value[$_smarty_tpl->tpl_vars['id_attribute']->value]['name'];?>
" onclick="colorPickerClick(this);getProductAttribute();<?php if (count($_smarty_tpl->tpl_vars['colors']->value)>0){?>$('#wrapResetImages').show('slow');<?php }?>">
                                                                            <?php if (file_exists((($_smarty_tpl->tpl_vars['col_img_dir']->value).($_smarty_tpl->tpl_vars['id_attribute']->value)).('.jpg'))){?>
                                                                                    <img src="<?php echo $_smarty_tpl->tpl_vars['img_col_dir']->value;?>
<?php echo $_smarty_tpl->tpl_vars['id_attribute']->value;?>
.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['colors']->value[$_smarty_tpl->tpl_vars['id_attribute']->value]['name'];?>
" width="20" height="20" /><br>
                                                                            <?php }?>
                                                                    </a>
                                                            </li>
                                                            <?php if (($_smarty_tpl->tpl_vars['group']->value['default']==$_smarty_tpl->tpl_vars['id_attribute']->value)){?>
                                                                    <?php $_smarty_tpl->tpl_vars['default_colorpicker'] = new Smarty_variable($_smarty_tpl->tpl_vars['id_attribute']->value, null, 0);?>
                                                            <?php }?>
                                                            <?php } ?>
                                                    </ul>
                                                    <input type="hidden" class="color_pick_hidden" name="<?php echo $_smarty_tpl->tpl_vars['groupName']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['default_colorpicker']->value;?>
" />
                                            <?php }elseif(($_smarty_tpl->tpl_vars['group']->value['group_type']=='radio')){?>
                                                    <?php  $_smarty_tpl->tpl_vars['group_attribute'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['group_attribute']->_loop = false;
 $_smarty_tpl->tpl_vars['id_attribute'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['group']->value['attributes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['group_attribute']->key => $_smarty_tpl->tpl_vars['group_attribute']->value){
$_smarty_tpl->tpl_vars['group_attribute']->_loop = true;
 $_smarty_tpl->tpl_vars['id_attribute']->value = $_smarty_tpl->tpl_vars['group_attribute']->key;
?>
                                                            <input type="radio" class="attribute_radio" name="<?php echo $_smarty_tpl->tpl_vars['groupName']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['id_attribute']->value;?>
" <?php if (($_smarty_tpl->tpl_vars['group']->value['default']==$_smarty_tpl->tpl_vars['id_attribute']->value)){?> checked="checked"<?php }?> onclick="findCombination();getProductAttribute();<?php if (count($_smarty_tpl->tpl_vars['colors']->value)>0){?>$('#wrapResetImages').show('slow');<?php }?>">
                                                            <span><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['group_attribute']->value, 'htmlall', 'UTF-8');?>
</span><br/>
                                                    <?php } ?>
                                            <?php }?>
                                            </div>
                                        </div>
                                    </fieldset>
                                    <?php }?>
                                <?php } ?>
                                    <!-- quantity wanted -->
                                    <fieldset class="attribute_fieldset form-horizontal">
                                        <div class="form-group" id="quantity_wanted_p"<?php if ((!$_smarty_tpl->tpl_vars['allow_oosp']->value&&$_smarty_tpl->tpl_vars['product']->value->quantity<=0)||$_smarty_tpl->tpl_vars['virtual']->value||!$_smarty_tpl->tpl_vars['product']->value->available_for_order||$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value){?> style="display: none;"<?php }?>>
                                            <label class="attribute_label col-lg-4 control-label"><?php echo smartyTranslate(array('s'=>'Quantity'),$_smarty_tpl);?>
</label>
                                            <div class="attribute_list col-lg-6">
                                                <input type="number" name="qty" id="quantity_wanted" class="text form-control" <?php if ($_smarty_tpl->tpl_vars['product']->value->minimal_quantity>1){?>min="<?php echo $_smarty_tpl->tpl_vars['product']->value->minimal_quantity;?>
"<?php }else{ ?>min="1"<?php }?> <?php if ($_smarty_tpl->tpl_vars['product']->value->quantity>0){?>max="<?php echo intval($_smarty_tpl->tpl_vars['product']->value->quantity);?>
"<?php }?> value="<?php if (isset($_smarty_tpl->tpl_vars['quantityBackup']->value)){?><?php echo intval($_smarty_tpl->tpl_vars['quantityBackup']->value);?>
<?php }else{ ?><?php if ($_smarty_tpl->tpl_vars['product']->value->minimal_quantity>1){?><?php echo $_smarty_tpl->tpl_vars['product']->value->minimal_quantity;?>
<?php }else{ ?>1<?php }?><?php }?>" <?php if ($_smarty_tpl->tpl_vars['product']->value->minimal_quantity>1){?>onkeyup="checkMinimalQuantity(<?php echo $_smarty_tpl->tpl_vars['product']->value->minimal_quantity;?>
);"<?php }?> />
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>
                        <?php }?>

                        <!-- availability -->
                        <p id="availability_statut"<?php if (($_smarty_tpl->tpl_vars['product']->value->quantity<=0&&!$_smarty_tpl->tpl_vars['product']->value->available_later&&$_smarty_tpl->tpl_vars['allow_oosp']->value)||($_smarty_tpl->tpl_vars['product']->value->quantity>0&&!$_smarty_tpl->tpl_vars['product']->value->available_now)||!$_smarty_tpl->tpl_vars['product']->value->available_for_order||$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value){?> style="display: none;"<?php }?>>
                            <span id="availability_label"><?php echo smartyTranslate(array('s'=>'Availability:'),$_smarty_tpl);?>
</span>
                            <span id="availability_value"<?php if ($_smarty_tpl->tpl_vars['product']->value->quantity<=0){?> class="alert alert-danger"<?php }?>><?php if ($_smarty_tpl->tpl_vars['product']->value->quantity<=0){?><?php if ($_smarty_tpl->tpl_vars['allow_oosp']->value){?><?php echo $_smarty_tpl->tpl_vars['product']->value->available_later;?>
<?php }else{ ?><?php echo smartyTranslate(array('s'=>'This product is no longer in stock'),$_smarty_tpl);?>
<?php }?><?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['product']->value->available_now;?>
<?php }?></span>				
                        </p>
                        <!-- minimal quantity wanted -->
                        <p class="alert" id="minimal_quantity_wanted_p"<?php if ($_smarty_tpl->tpl_vars['product']->value->minimal_quantity<=1||!$_smarty_tpl->tpl_vars['product']->value->available_for_order||$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value){?> style="display: none;"<?php }?>>
                                <?php echo smartyTranslate(array('s'=>'This product is not sold individually. You must select at least'),$_smarty_tpl);?>
 <b id="minimal_quantity_label"><?php echo $_smarty_tpl->tpl_vars['product']->value->minimal_quantity;?>
</b> <?php echo smartyTranslate(array('s'=>'quantity for this product.'),$_smarty_tpl);?>

                        </p>
                        <?php if ($_smarty_tpl->tpl_vars['product']->value->minimal_quantity>1){?>
                        <script type="text/javascript">
                                checkMinimalQuantity();
                        </script>
                        <?php }?>

                        <!-- Out of stock hook -->
                        <div id="oosHook"<?php if ($_smarty_tpl->tpl_vars['product']->value->quantity>0){?> style="display: none;"<?php }?>>
                                <?php echo $_smarty_tpl->tpl_vars['HOOK_PRODUCT_OOS']->value;?>

                        </div>

                        <p class="alert" id="last_quantities"<?php if (($_smarty_tpl->tpl_vars['product']->value->quantity>$_smarty_tpl->tpl_vars['last_qties']->value||$_smarty_tpl->tpl_vars['product']->value->quantity<=0)||$_smarty_tpl->tpl_vars['allow_oosp']->value||!$_smarty_tpl->tpl_vars['product']->value->available_for_order||$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value){?> style="display: none"<?php }?> ><?php echo smartyTranslate(array('s'=>'Last items in stock!'),$_smarty_tpl);?>
</p>
                </div>
                </form>
                <?php }?>
                <!-- Customizable products -->
                <?php if (isset($_smarty_tpl->tpl_vars['product']->value)&&$_smarty_tpl->tpl_vars['product']->value->customizable){?>
                <div id="customizable" class="col-lg-6">
                    <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['customizationFormTarget']->value;?>
" enctype="multipart/form-data" id="customizationForm" class="clearfix">
                        <p class="infoCustomizable">
                            <div class="alert">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <?php echo smartyTranslate(array('s'=>'After saving your customized product, remember to add it to your cart.'),$_smarty_tpl);?>

                                <?php if ($_smarty_tpl->tpl_vars['product']->value->uploadable_files){?><br /><?php echo smartyTranslate(array('s'=>'Allowed file formats are: GIF, JPG, PNG'),$_smarty_tpl);?>
<?php }?>
                            </div>
                        </p>
                        <?php if (intval($_smarty_tpl->tpl_vars['product']->value->uploadable_files)){?>
                        <div class="customizableProductsFile">
                            <h3><?php echo smartyTranslate(array('s'=>'Pictures'),$_smarty_tpl);?>
</h3>
                            <ul id="uploadable_files" class="clearfix">
                                <?php echo smarty_function_counter(array('start'=>0,'assign'=>'customizationField'),$_smarty_tpl);?>

                                <?php  $_smarty_tpl->tpl_vars['field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['customizationFields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['customizationFields']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['field']->key => $_smarty_tpl->tpl_vars['field']->value){
$_smarty_tpl->tpl_vars['field']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['customizationFields']['index']++;
?>
                                    <?php if ($_smarty_tpl->tpl_vars['field']->value['type']==0){?>
                                        <li class="customizationUploadLine<?php if ($_smarty_tpl->tpl_vars['field']->value['required']){?> required<?php }?>"><?php $_smarty_tpl->tpl_vars['key'] = new Smarty_variable(((('pictures_').($_smarty_tpl->tpl_vars['product']->value->id)).('_')).($_smarty_tpl->tpl_vars['field']->value['id_customization_field']), null, 0);?>
                                            <div class="customizationUploadBrowse">
                                                <label class="customizationUploadBrowseDescription"><?php if (!empty($_smarty_tpl->tpl_vars['field']->value['name'])){?><?php echo $_smarty_tpl->tpl_vars['field']->value['name'];?>
<?php }else{ ?><?php echo smartyTranslate(array('s'=>'Please select an image file from your computer'),$_smarty_tpl);?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['field']->value['required']){?><sup>*</sup><?php }?></label>
                                                <?php if (isset($_smarty_tpl->tpl_vars['pictures']->value[$_smarty_tpl->tpl_vars['key']->value])){?>
                                                <div class="customizationUploadBrowse">
                                                    <img src="<?php echo $_smarty_tpl->tpl_vars['pic_dir']->value;?>
<?php echo $_smarty_tpl->tpl_vars['pictures']->value[$_smarty_tpl->tpl_vars['key']->value];?>
_small" alt="" />
                                                    <a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getProductDeletePictureLink($_smarty_tpl->tpl_vars['product']->value,$_smarty_tpl->tpl_vars['field']->value['id_customization_field']);?>
" title="<?php echo smartyTranslate(array('s'=>'Delete'),$_smarty_tpl);?>
" >
                                                        <img src="<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
icon/delete.gif" alt="<?php echo smartyTranslate(array('s'=>'Delete'),$_smarty_tpl);?>
" class="customization_delete_icon" width="11" height="13" />
                                                    </a>
                                                </div>
                                                <?php }?>
                                                <input type="file" name="file<?php echo $_smarty_tpl->tpl_vars['field']->value['id_customization_field'];?>
" id="img<?php echo $_smarty_tpl->tpl_vars['customizationField']->value;?>
" class="customization_block_input <?php if (isset($_smarty_tpl->tpl_vars['pictures']->value[$_smarty_tpl->tpl_vars['key']->value])){?>filled<?php }?>" />
                                            </div>
                                        </li>
                                        <?php echo smarty_function_counter(array(),$_smarty_tpl);?>

                                    <?php }?>
                                <?php } ?>
                            </ul>
                        </div>
                        <?php }?>
                        <?php if (intval($_smarty_tpl->tpl_vars['product']->value->text_fields)){?>
                        <div class="customizableProductsText">
                            <h3><?php echo smartyTranslate(array('s'=>'Text'),$_smarty_tpl);?>
</h3>
                            <ul id="text_fields">
                            <?php echo smarty_function_counter(array('start'=>0,'assign'=>'customizationField'),$_smarty_tpl);?>

                            <?php  $_smarty_tpl->tpl_vars['field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['customizationFields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['customizationFields']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['field']->key => $_smarty_tpl->tpl_vars['field']->value){
$_smarty_tpl->tpl_vars['field']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['customizationFields']['index']++;
?>
                                <?php if ($_smarty_tpl->tpl_vars['field']->value['type']==1){?>
                                <li class="customizationUploadLine<?php if ($_smarty_tpl->tpl_vars['field']->value['required']){?> required<?php }?>">
                                        <label for ="textField<?php echo $_smarty_tpl->tpl_vars['customizationField']->value;?>
"><?php $_smarty_tpl->tpl_vars['key'] = new Smarty_variable(((('textFields_').($_smarty_tpl->tpl_vars['product']->value->id)).('_')).($_smarty_tpl->tpl_vars['field']->value['id_customization_field']), null, 0);?> <?php if (!empty($_smarty_tpl->tpl_vars['field']->value['name'])){?><?php echo $_smarty_tpl->tpl_vars['field']->value['name'];?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['field']->value['required']){?><sup>*</sup><?php }?></label>
                                        <textarea type="text" name="textField<?php echo $_smarty_tpl->tpl_vars['field']->value['id_customization_field'];?>
" id="textField<?php echo $_smarty_tpl->tpl_vars['customizationField']->value;?>
" rows="1" cols="40" class="customization_block_input" /><?php if (isset($_smarty_tpl->tpl_vars['textFields']->value[$_smarty_tpl->tpl_vars['key']->value])){?><?php echo stripslashes($_smarty_tpl->tpl_vars['textFields']->value[$_smarty_tpl->tpl_vars['key']->value]);?>
<?php }?></textarea>
                                </li>
                                <?php echo smarty_function_counter(array(),$_smarty_tpl);?>

                                <?php }?>
                            <?php } ?>
                            </ul>
                        </div>
                        <?php }?>
                        <p class="required"><sup>*</sup> <?php echo smartyTranslate(array('s'=>'required fields'),$_smarty_tpl);?>
</p>
                        <p id="customizedDatas">
                            <input type="hidden" name="quantityBackup" id="quantityBackup" value="" />
                            <input type="hidden" name="submitCustomizedDatas" value="1" />
                            <input type="button" class="btn button" value="<?php echo smartyTranslate(array('s'=>'Save'),$_smarty_tpl);?>
" onclick="javascript:saveCustomization()" />
                            <span id="ajax-loader" style="display:none"><img src="<?php echo $_smarty_tpl->tpl_vars['img_ps_dir']->value;?>
loader.gif" alt="loader" /></span>
                        </p>
                    </form>
                </div>
                <?php }?>
                </div>
                <?php if (isset($_smarty_tpl->tpl_vars['HOOK_EXTRA_RIGHT']->value)&&$_smarty_tpl->tpl_vars['HOOK_EXTRA_RIGHT']->value){?><?php echo $_smarty_tpl->tpl_vars['HOOK_EXTRA_RIGHT']->value;?>
<?php }?>
        </div>
        <?php if (isset($_smarty_tpl->tpl_vars['product']->value)&&$_smarty_tpl->tpl_vars['product']->value->description){?>
            <!-- full description -->
            <div id="idTab1" class="tab-pane"><?php echo $_smarty_tpl->tpl_vars['product']->value->description;?>
</div>
        <?php }?>
        <?php if (isset($_smarty_tpl->tpl_vars['features']->value)&&$_smarty_tpl->tpl_vars['features']->value){?>
            <!-- product's features -->
            <ul id="idTab2" class="tab-pane">
            <?php  $_smarty_tpl->tpl_vars['feature'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['feature']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['features']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['feature']->key => $_smarty_tpl->tpl_vars['feature']->value){
$_smarty_tpl->tpl_vars['feature']->_loop = true;
?>
            <?php if (isset($_smarty_tpl->tpl_vars['feature']->value['value'])){?>
                <li><span><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['feature']->value['name'], 'htmlall', 'UTF-8');?>
</span> <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['feature']->value['value'], 'htmlall', 'UTF-8');?>
</li>
            <?php }?>
                <?php } ?>
                </ul>
        <?php }?>
        <?php if (isset($_smarty_tpl->tpl_vars['attachments']->value)&&$_smarty_tpl->tpl_vars['attachments']->value){?>
            <ul id="idTab9" class="tab-pane">
            <?php  $_smarty_tpl->tpl_vars['attachment'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['attachment']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['attachments']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['attachment']->key => $_smarty_tpl->tpl_vars['attachment']->value){
$_smarty_tpl->tpl_vars['attachment']->_loop = true;
?>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('attachment',true,null,"id_attachment=".((string)$_smarty_tpl->tpl_vars['attachment']->value['id_attachment']));?>
"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['attachment']->value['name'], 'htmlall', 'UTF-8');?>
</a><br /><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['attachment']->value['description'], 'htmlall', 'UTF-8');?>
</li>
            <?php } ?>
            </ul>
        <?php }?>
        <?php if (isset($_smarty_tpl->tpl_vars['accessories']->value)&&$_smarty_tpl->tpl_vars['accessories']->value){?>
            <!-- accessories -->
            <div id="idTab4" class="tab-pane">
                <div class="block products_block accessories_block clearfix">
                    <div class="block_content">
                        <ul>
                        <?php  $_smarty_tpl->tpl_vars['accessory'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['accessory']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['accessories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['accessory']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['accessory']->iteration=0;
 $_smarty_tpl->tpl_vars['accessory']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['accessory']->key => $_smarty_tpl->tpl_vars['accessory']->value){
$_smarty_tpl->tpl_vars['accessory']->_loop = true;
 $_smarty_tpl->tpl_vars['accessory']->iteration++;
 $_smarty_tpl->tpl_vars['accessory']->index++;
 $_smarty_tpl->tpl_vars['accessory']->first = $_smarty_tpl->tpl_vars['accessory']->index === 0;
 $_smarty_tpl->tpl_vars['accessory']->last = $_smarty_tpl->tpl_vars['accessory']->iteration === $_smarty_tpl->tpl_vars['accessory']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['accessories_list']['first'] = $_smarty_tpl->tpl_vars['accessory']->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['accessories_list']['last'] = $_smarty_tpl->tpl_vars['accessory']->last;
?>
                            <?php if (($_smarty_tpl->tpl_vars['accessory']->value['allow_oosp']||$_smarty_tpl->tpl_vars['accessory']->value['quantity_all_versions']>0)&&$_smarty_tpl->tpl_vars['accessory']->value['available_for_order']&&!isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)){?>
                                <?php $_smarty_tpl->tpl_vars['accessoryLink'] = new Smarty_variable($_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['accessory']->value['id_product'],$_smarty_tpl->tpl_vars['accessory']->value['link_rewrite'],$_smarty_tpl->tpl_vars['accessory']->value['category']), null, 0);?>
                                <li class="ajax_block_product <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['accessories_list']['first']){?>first_item<?php }elseif($_smarty_tpl->getVariable('smarty')->value['foreach']['accessories_list']['last']){?>last_item<?php }else{ ?>item<?php }?> product_accessories_description">
                                    <p class="s_title_block clearfix">
                                        <a href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['accessoryLink']->value, 'htmlall', 'UTF-8');?>
"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['accessory']->value['name'], 'htmlall', 'UTF-8');?>
</a>
                                        <?php if ($_smarty_tpl->tpl_vars['accessory']->value['show_price']&&!isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)&&!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value){?><span class="price"><?php if ($_smarty_tpl->tpl_vars['priceDisplay']->value!=1){?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPrice'][0][0]->displayWtPrice(array('p'=>$_smarty_tpl->tpl_vars['accessory']->value['price']),$_smarty_tpl);?>
<?php }else{ ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPrice'][0][0]->displayWtPrice(array('p'=>$_smarty_tpl->tpl_vars['accessory']->value['price_tax_exc']),$_smarty_tpl);?>
<?php }?></span><?php }?>
                                    </p>
                                    <div class="product_desc clearfix">
                                        <a href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['accessoryLink']->value, 'htmlall', 'UTF-8');?>
" title="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['accessory']->value['legend'], 'htmlall', 'UTF-8');?>
" class="product_image"><img src="<?php echo $_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['accessory']->value['link_rewrite'],$_smarty_tpl->tpl_vars['accessory']->value['id_image'],'small_default');?>
" alt="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['accessory']->value['legend'], 'htmlall', 'UTF-8');?>
" /></a>
                                        <div class="block_description">
                                                <a href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['accessoryLink']->value, 'htmlall', 'UTF-8');?>
" title="<?php echo smartyTranslate(array('s'=>'More'),$_smarty_tpl);?>
" class="product_description"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['accessory']->value['description_short']),400,'...');?>
</a>
                                        </div>
                                        <?php if (!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value&&($_smarty_tpl->tpl_vars['accessory']->value['allow_oosp']||$_smarty_tpl->tpl_vars['accessory']->value['quantity']>0)){?>
                                        <a class="btn button ajax_add_to_cart_button" href="<?php ob_start();?><?php echo intval($_smarty_tpl->tpl_vars['accessory']->value['id_product']);?>
<?php $_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('cart',true,null,"qty=1&amp;id_product=".$_tmp1."&amp;token=".((string)$_smarty_tpl->tpl_vars['static_token']->value)."&amp;add");?>
" rel="ajax_id_product_<?php echo intval($_smarty_tpl->tpl_vars['accessory']->value['id_product']);?>
" title="<?php echo smartyTranslate(array('s'=>'Add to cart'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Add to cart'),$_smarty_tpl);?>
</a>
                                        <?php }?>
                                    </div>
                                </li>
                            <?php }?>
                        <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
        <?php }?>
		            <!-- product's commentaires -->
            <ul id="idTab20" class="tab-pane">

                </ul>
        <?php if (isset($_smarty_tpl->tpl_vars['HOOK_PRODUCT_TAB_CONTENT']->value)&&$_smarty_tpl->tpl_vars['HOOK_PRODUCT_TAB_CONTENT']->value){?><?php echo $_smarty_tpl->tpl_vars['HOOK_PRODUCT_TAB_CONTENT']->value;?>
<?php }?>
        </div>
        <div class="content_prices clearfix">
        <!-- prices -->
        <?php if ($_smarty_tpl->tpl_vars['product']->value->show_price&&!isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)&&!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value){?>

        <?php if ((!$_smarty_tpl->tpl_vars['allow_oosp']->value&&$_smarty_tpl->tpl_vars['product']->value->quantity<=0)||!$_smarty_tpl->tpl_vars['product']->value->available_for_order||(isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)&&$_smarty_tpl->tpl_vars['restricted_country_mode']->value)||$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value){?>
                <span class="btn exclusive">
                        <?php echo smartyTranslate(array('s'=>'Add to cart'),$_smarty_tpl);?>

                </span>
        <?php }else{ ?>
                <p id="add_to_cart" class="buttons_bottom_block">
                        <input type="submit" name="Submit" value="<?php echo smartyTranslate(array('s'=>'Add to cart'),$_smarty_tpl);?>
" class="btn exclusive" />
                </p>
        <?php }?>
        
        <div class="price_detail">
            <div class="price">
                <?php if (!$_smarty_tpl->tpl_vars['priceDisplay']->value||$_smarty_tpl->tpl_vars['priceDisplay']->value==2){?>
                        <?php $_smarty_tpl->tpl_vars['productPrice'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value->getPrice(true,@constant('NULL'),$_smarty_tpl->tpl_vars['priceDisplayPrecision']->value), null, 0);?>
                        <?php $_smarty_tpl->tpl_vars['productPriceWithoutReduction'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value->getPriceWithoutReduct(false,@constant('NULL')), null, 0);?>
                <?php }elseif($_smarty_tpl->tpl_vars['priceDisplay']->value==1){?>
                        <?php $_smarty_tpl->tpl_vars['productPrice'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value->getPrice(false,@constant('NULL'),$_smarty_tpl->tpl_vars['priceDisplayPrecision']->value), null, 0);?>
                        <?php $_smarty_tpl->tpl_vars['productPriceWithoutReduction'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value->getPriceWithoutReduct(true,@constant('NULL')), null, 0);?>
                <?php }?>

                <?php if ($_smarty_tpl->tpl_vars['product']->value->specificPrice&&$_smarty_tpl->tpl_vars['product']->value->specificPrice['reduction']){?>
                        <p id="old_price">
                        <?php if ($_smarty_tpl->tpl_vars['priceDisplay']->value>=0&&$_smarty_tpl->tpl_vars['priceDisplay']->value<=2){?>
                                <?php if ($_smarty_tpl->tpl_vars['productPriceWithoutReduction']->value>$_smarty_tpl->tpl_vars['productPrice']->value){?>
                                        <span id="old_price_display"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['productPriceWithoutReduction']->value),$_smarty_tpl);?>
</span>
                                        <!-- <?php if ($_smarty_tpl->tpl_vars['tax_enabled']->value&&$_smarty_tpl->tpl_vars['display_tax_label']->value==1){?>
                                                <?php if ($_smarty_tpl->tpl_vars['priceDisplay']->value==1){?><?php echo smartyTranslate(array('s'=>'tax excl.'),$_smarty_tpl);?>
<?php }else{ ?><?php echo smartyTranslate(array('s'=>'tax incl.'),$_smarty_tpl);?>
<?php }?>
                                        <?php }?> -->
                                <?php }?>
                        <?php }?>
                        </p>
                <?php }?>

                <p class="our_price_display">
                <?php if ($_smarty_tpl->tpl_vars['priceDisplay']->value>=0&&$_smarty_tpl->tpl_vars['priceDisplay']->value<=2){?>
                        <span id="our_price_display"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['productPrice']->value),$_smarty_tpl);?>
</span>
                        <!--<?php if ($_smarty_tpl->tpl_vars['tax_enabled']->value&&((isset($_smarty_tpl->tpl_vars['display_tax_label']->value)&&$_smarty_tpl->tpl_vars['display_tax_label']->value==1)||!isset($_smarty_tpl->tpl_vars['display_tax_label']->value))){?>
                                <?php if ($_smarty_tpl->tpl_vars['priceDisplay']->value==1){?><?php echo smartyTranslate(array('s'=>'tax excl.'),$_smarty_tpl);?>
<?php }else{ ?><?php echo smartyTranslate(array('s'=>'tax incl.'),$_smarty_tpl);?>
<?php }?>
                        <?php }?>-->
                <?php }?>
                </p>

                <?php if ($_smarty_tpl->tpl_vars['priceDisplay']->value==2){?>
                        <br />
                        <span id="pretaxe_price"><span id="pretaxe_price_display"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['product']->value->getPrice(false,@constant('NULL'))),$_smarty_tpl);?>
</span>&nbsp;<?php echo smartyTranslate(array('s'=>'tax excl.'),$_smarty_tpl);?>
</span>
                <?php }?>
            </div>

            <?php if (count($_smarty_tpl->tpl_vars['packItems']->value)&&$_smarty_tpl->tpl_vars['productPrice']->value<$_smarty_tpl->tpl_vars['product']->value->getNoPackPrice()){?>
                <p class="pack_price"><?php echo smartyTranslate(array('s'=>'Instead of'),$_smarty_tpl);?>
 <span style="text-decoration: line-through;"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['product']->value->getNoPackPrice()),$_smarty_tpl);?>
</span></p>
            <?php }?>
            <?php if (!empty($_smarty_tpl->tpl_vars['product']->value->unity)&&$_smarty_tpl->tpl_vars['product']->value->unit_price_ratio>0.000000){?>
                <?php echo smarty_function_math(array('equation'=>"pprice / punit_price",'pprice'=>$_smarty_tpl->tpl_vars['productPrice']->value,'punit_price'=>$_smarty_tpl->tpl_vars['product']->value->unit_price_ratio,'assign'=>'unit_price'),$_smarty_tpl);?>

                <p class="unit-price"><span id="unit_price_display"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['unit_price']->value),$_smarty_tpl);?>
</span> <?php echo smartyTranslate(array('s'=>'per'),$_smarty_tpl);?>
 <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value->unity, 'htmlall', 'UTF-8');?>
</p>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['product']->value->ecotax!=0){?>
                <img class="price-ecotax" src="<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
eco.gif" title="<?php echo smartyTranslate(array('s'=>'Include'),$_smarty_tpl);?>
 <?php if ($_smarty_tpl->tpl_vars['priceDisplay']->value==2){?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convertAndFormatPrice'][0][0]->convertAndFormatPrice($_smarty_tpl->tpl_vars['ecotax_tax_exc']->value);?>
<?php }else{ ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convertAndFormatPrice'][0][0]->convertAndFormatPrice($_smarty_tpl->tpl_vars['ecotax_tax_inc']->value);?>
<?php }?> <?php echo smartyTranslate(array('s'=>'for green tax'),$_smarty_tpl);?>

                    <?php if ($_smarty_tpl->tpl_vars['product']->value->specificPrice&&$_smarty_tpl->tpl_vars['product']->value->specificPrice['reduction']){?>
                    <?php echo smartyTranslate(array('s'=>'(not impacted by the discount)'),$_smarty_tpl);?>

                    <?php }?>" />
            <?php }?>
        </div>
        
        <?php }?>
        
        <?php if (isset($_smarty_tpl->tpl_vars['HOOK_PRODUCT_ACTIONS']->value)&&$_smarty_tpl->tpl_vars['HOOK_PRODUCT_ACTIONS']->value){?><?php echo $_smarty_tpl->tpl_vars['HOOK_PRODUCT_ACTIONS']->value;?>
<?php }?>
        </div>
    </div>
</div>
<?php }?>
</div>

<?php if (isset($_smarty_tpl->tpl_vars['packItems']->value)&&count($_smarty_tpl->tpl_vars['packItems']->value)>0){?>
<div id="blockpack">
    <h2><?php echo smartyTranslate(array('s'=>'Pack content'),$_smarty_tpl);?>
</h2>
    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('products'=>$_smarty_tpl->tpl_vars['packItems']->value), 0);?>

</div>
<?php }?>

<div class="col-lg-12" id="product_footer">
<?php if (isset($_smarty_tpl->tpl_vars['HOOK_PRODUCT_FOOTER']->value)&&$_smarty_tpl->tpl_vars['HOOK_PRODUCT_FOOTER']->value){?><?php echo $_smarty_tpl->tpl_vars['HOOK_PRODUCT_FOOTER']->value;?>
<?php }?>
</div>

<?php }?>
<?php }} ?>