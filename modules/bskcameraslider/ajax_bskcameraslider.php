<?php

include_once('../../config/config.inc.php');
include_once('../../init.php');
include_once('bskcameraslider.php');

$context = Context::getContext();
$bsk_slider = new BskCameraSlider();
$slides = array();

if (!Tools::isSubmit('secure_key') || Tools::getValue('secure_key') != $bsk_slider->secure_key || !Tools::getValue('action'))
	die(1);

if (Tools::getValue('action') == 'updateSlidesPosition' && Tools::getValue('slides'))
{

	$slides = Tools::getValue('slides');

	foreach ($slides as $position => $id_slide)
	{
		$res = Db::getInstance()->execute('
			UPDATE `'._DB_PREFIX_.'bskslider_slides` SET `position` = '.(int)$position.'
			WHERE `id_bskslider_slides` = '.(int)$id_slide
		);

	}
}

