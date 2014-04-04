<?php

if (!defined('_PS_VERSION_'))
	exit;

include_once(_PS_MODULE_DIR_.'bskcameraslider/BskSlide.php');

class BskCameraSlider extends Module
{
	private $_html = '';

	public function __construct()
	{
		$this->name = 'bskcameraslider';
		$this->tab = 'front_office_features';
		$this->version = '1.0';
		$this->author = 'BitSHOK';
		$this->need_instance = 0;
		$this->secure_key = Tools::encrypt($this->name);

		parent::__construct();

		$this->displayName = $this->l('Camera Slider');
		$this->description = $this->l('Adds an image slider to your homepage.');
	}

	/**
	 * @see Module::install()
	 */
	public function install()
	{
		/* Adds Module */
            //if (parent::install() && $this->registerHook('displayHome') && $this->registerHook('displayFullWidthSlider') && $this->registerHook('actionShopDataDuplication'))
		if (parent::install() && $this->registerHook('displaySlider') && $this->registerHook('displayFullWidthSlider') && $this->registerHook('actionShopDataDuplication'))
		{
			/* Sets up configuration */
                    $res = Configuration::updateValue('BSKSLIDER_TRANSITION', 'scrollTop');
                    $res &= Configuration::updateValue('BSKSLIDER_THUMB', 'off');
                    $res &= Configuration::updateValue('BSKSLIDER_HEIGHT', '510');
                    $res &= Configuration::updateValue('BSKSLIDER_AUTOADVANCE', 'on');
                    $res &= Configuration::updateValue('BSKSLIDER_LOADER', 'bar');
                    $res &= Configuration::updateValue('BSKSLIDER_PIEDIAMETER', '38');
                    $res &= Configuration::updateValue('BSKSLIDER_PIEPOSITION', 'rightTop');
                    $res &= Configuration::updateValue('BSKSLIDER_BARDIRECTION', 'leftToRight');
                    $res &= Configuration::updateValue('BSKSLIDER_BARPOSITION', 'bottom');
                    $res &= Configuration::updateValue('BSKSLIDER_NAVIGATION', 'on');
                    $res &= Configuration::updateValue('BSKSLIDER_NAVIGATIONHOVER', 'on');
                    $res &= Configuration::updateValue('BSKSLIDER_PLAYPAUSE', 'off');
                    $res &= Configuration::updateValue('BSKSLIDER_SKIN', 'camera_dark_skin');
                    $res &= Configuration::updateValue('BSKSLIDER_LOADEROPACITY', '0.8');
                    $res &= Configuration::updateValue('BSKSLIDER_PAUSEONCLICK', 'off');
                    $res &= Configuration::updateValue('BSKSLIDER_TIME', '7000');
                    $res &= Configuration::updateValue('BSKSLIDER_TRANSPERIOD', '1500');
                    $res &= Configuration::updateValue('BSKSLIDER_PORTRAIT', 'off');
                    $res &= Configuration::updateValue('BSKSLIDER_LOADERBGCOLOR', '222222');
                    $res &= Configuration::updateValue('BSKSLIDER_LOADERCOLOR', 'eeeeee');
                    $res &= Configuration::updateValue('BSKSLIDER_FULLWIDTH', 'off');
			/* Creates tables */
			$res &= $this->createTables();

			return $res;
		}
		return false;
	}

	/**
	 * @see Module::uninstall()
	 */
	public function uninstall()
	{
		/* Deletes Module */
		if (parent::uninstall())
		{ 
			/* Deletes tables */
			$res = $this->deleteTables();
			/* Unsets configuration */
			$res &= Configuration::deleteByName('BSKSLIDER_TRANSITION');
                        $res &= Configuration::deleteByName('BSKSLIDER_THUMB');
                        $res &= Configuration::deleteByName('BSKSLIDER_HEIGHT');
                        $res &= Configuration::deleteByName('BSKSLIDER_AUTOADVANCE');
                        $res &= Configuration::deleteByName('BSKSLIDER_LOADER');
                        $res &= Configuration::deleteByName('BSKSLIDER_PIEDIAMETER');
                        $res &= Configuration::deleteByName('BSKSLIDER_PIEPOSITION');
                        $res &= Configuration::deleteByName('BSKSLIDER_BARDIRECTION');
                        $res &= Configuration::deleteByName('BSKSLIDER_BARPOSITION');
                        $res &= Configuration::deleteByName('BSKSLIDER_NAVIGATION');
                        $res &= Configuration::deleteByName('BSKSLIDER_NAVIGATIONHOVER');
                        $res &= Configuration::deleteByName('BSKSLIDER_PLAYPAUSE');
                        $res &= Configuration::deleteByName('BSKSLIDER_SKIN');
                        $res &= Configuration::deleteByName('BSKSLIDER_LOADEROPACITY');
                        $res &= Configuration::deleteByName('BSKSLIDER_PAUSEONCLICK');
                        $res &= Configuration::deleteByName('BSKSLIDER_TIME');
                        $res &= Configuration::deleteByName('BSKSLIDER_TRANSPERIOD');
                        $res &= Configuration::deleteByName('BSKSLIDER_PORTRAIT');
                        $res &= Configuration::deleteByName('BSKSLIDER_LOADERBGCOLOR');
                        $res &= Configuration::deleteByName('BSKSLIDER_LOADERCOLOR');
                        $res &= Configuration::deleteByName('BSKSLIDER_FULLWIDTH');
			return $res;
		}
		return false;
	}

	/**
	 * Creates tables
	 */
	protected function createTables()
	{
		/* Slides */
		$res = (bool)Db::getInstance()->execute('
			CREATE TABLE IF NOT EXISTS `'._DB_PREFIX_.'bskslider` (
				`id_bskslider_slides` int(10) unsigned NOT NULL AUTO_INCREMENT,
				`id_shop` int(10) unsigned NOT NULL,
				PRIMARY KEY (`id_bskslider_slides`, `id_shop`)
			) ENGINE='._MYSQL_ENGINE_.' DEFAULT CHARSET=UTF8;
		');

		/* Slides configuration */
		$res &= Db::getInstance()->execute('
			CREATE TABLE IF NOT EXISTS `'._DB_PREFIX_.'bskslider_slides` (
			  `id_bskslider_slides` int(10) unsigned NOT NULL AUTO_INCREMENT,
			  `position` int(10) unsigned NOT NULL DEFAULT \'0\',
			  `active` tinyint(1) unsigned NOT NULL DEFAULT \'0\',
			  PRIMARY KEY (`id_bskslider_slides`)
			) ENGINE='._MYSQL_ENGINE_.' DEFAULT CHARSET=UTF8;
		');

		/* Slides lang configuration */
		$res &= Db::getInstance()->execute('
			CREATE TABLE IF NOT EXISTS `'._DB_PREFIX_.'bskslider_slides_lang` (
			  `id_bskslider_slides` int(10) unsigned NOT NULL,
			  `id_lang` int(10) unsigned NOT NULL,
			  `title` varchar(255) NOT NULL,
			  `description` text NOT NULL,
			  `legend` varchar(255) NOT NULL,
			  `url` varchar(255) NOT NULL,
			  `image` varchar(255) NOT NULL,
			  PRIMARY KEY (`id_bskslider_slides`,`id_lang`)
			) ENGINE='._MYSQL_ENGINE_.' DEFAULT CHARSET=UTF8;
		');

		return $res;
	}

	/**
	 * deletes tables
	 */
	protected function deleteTables()
	{
		$slides = $this->getSlides();
		foreach ($slides as $slide)
		{
			$to_del = new BskSlide($slide['id_slide']);
			$to_del->delete();
		}
		return Db::getInstance()->execute('
			DROP TABLE IF EXISTS `'._DB_PREFIX_.'bskslider`, `'._DB_PREFIX_.'bskslider_slides`, `'._DB_PREFIX_.'bskslider_slides_lang`;
		');
	}

	public function getContent()
	{
        // bskslider_backend script
        $this->context->controller->addJS($this->_path.'scripts/bskslider_backend.js');
        
        /* Add ColorPicker jQuery plugin */
        $this->context->controller->addCSS($this->_path.'scripts/colorpicker/css/colorpicker.css');
        $this->context->controller->addCSS($this->_path.'scripts/colorpicker/css/layout.css');
        $this->context->controller->addJS($this->_path.'scripts/colorpicker/js/colorpicker.js');
        
		$this->_html .= $this->headerHTML();
		$this->_html .= '<h2>'.$this->displayName.'.</h2>';

		/* Validate & process */
		if ( Tools::isSubmit('submitSlide') || Tools::isSubmit('delete_id_slide') ||	Tools::isSubmit('submitSlider') || Tools::isSubmit('changeStatus') || Tools::isSubmit('resetOptions'))
		{
			if ($this->_postValidation())
				$this->_postProcess();
			$this->_displayForm();
		}
		elseif (Tools::isSubmit('addSlide') || (Tools::isSubmit('id_slide') && $this->slideExists((int)Tools::getValue('id_slide'))))
			$this->_displayAddForm();
		else
			$this->_displayForm();

		return $this->_html;
	}

	private function _displayForm()
	{
        
		/* Gets Slides */
		$slides = $this->getSlides();
        
        /* Begin fieldset slides */
		$this->_html .= '
		<fieldset>
			<legend><img src="'._PS_BASE_URL_.__PS_BASE_URI__.'modules/'.$this->name.'/logo.gif" alt="" /> '.$this->l('Slides configuration').'</legend>
			<strong>
				<a href="'.AdminController::$currentIndex.'&configure='.$this->name.'&token='.Tools::getAdminTokenLite('AdminModules').'&addSlide">
					<img src="'._PS_ADMIN_IMG_.'add.gif" alt="" /> '.$this->l('Add Slide').'
				</a>
			</strong>';

		/* Display notice if there are no slides yet */
		if (!$slides)
			$this->_html .= '<p style="margin-left: 40px;">'.$this->l('You have not added any slides yet.').'</p>';
		else /* Display slides */
		{
			$this->_html .= '
			<div id="slidesContent" style="width: 400px; margin-top: 30px;">
				<ul id="slides">';

			foreach ($slides as $slide)
			{
				$this->_html .= '
					<li id="slides_'.$slide['id_slide'].'">
						<strong>#'.$slide['id_slide'].'</strong> '.$slide['title'].'
						<p style="float: right">'.
							$this->displayStatus($slide['id_slide'], $slide['active']).'
							<a href="'.AdminController::$currentIndex.'&configure='.$this->name.'&token='.Tools::getAdminTokenLite('AdminModules').'&id_slide='.(int)($slide['id_slide']).'" title="'.$this->l('Edit').'"><img src="'._PS_ADMIN_IMG_.'edit.gif" alt="" /></a>
							<a href="'.AdminController::$currentIndex.'&configure='.$this->name.'&token='.Tools::getAdminTokenLite('AdminModules').'&delete_id_slide='.(int)($slide['id_slide']).'" title="'.$this->l('Delete').'"><img src="'._PS_ADMIN_IMG_.'delete.gif" alt="" /></a>
						</p>
					</li>';
			}
			$this->_html .= '</ul></div>';
		}
		// End fieldset
		$this->_html .= '</fieldset>';
        
        $this->_html .= '<br /><br />';

		/* Begin fieldset slider */
		$this->_html .= '
		<fieldset>
			<legend><img src="'._PS_BASE_URL_.__PS_BASE_URI__.'modules/'.$this->name.'/logo.gif" alt="" /> '.$this->l('Slider configuration').'</legend>';
		/* Begin form */
		$this->_html .= '<form action="'.Tools::safeOutput($_SERVER['REQUEST_URI']).'" method="post">';
		
        $transitionOptions = Configuration::get('BSKSLIDER_TRANSITION');
        $transitionOptionsArr = explode(",", $transitionOptions);
        
        foreach( $transitionOptionsArr as $value ) {
            // random
            if( $value == 'random' ) {
                $random = '<option value="random" selected>Random</option>';
            }
            
            // simpleFade
            if( $value == 'simpleFade' ) {
                $simpleFade = '<option value="simpleFade" selected>simpleFade</option>';
            }
                
            // curtainTopLeft
            if( $value == 'curtainTopLeft' ) {
                $curtainTopLeft = '<option value="curtainTopLeft" selected>curtainTopLeft</option>';
            }
            
            // curtainTopRight
            if( $value == 'curtainTopRight' ) {
                $curtainTopRight = '<option value="curtainTopRight" selected>curtainTopRight</option>';
            }
            
            // curtainBottomLeft
            if( $value == 'curtainBottomLeft' ) {
                $curtainBottomLeft = '<option value="curtainBottomLeft" selected>curtainBottomLeft</option>';
            }
            
            // curtainBottomRight
            if( $value == 'curtainBottomRight' ) {
                $curtainBottomRight = '<option value="curtainBottomRight" selected>curtainBottomRight</option>';
            }
            
            // curtainSliceLeft
            if( $value == 'curtainSliceLeft' ) {
                $curtainSliceLeft = '<option value="curtainSliceLeft" selected>curtainSliceLeft</option>';
            }
            
            // curtainSliceRight
            if( $value == 'curtainSliceRight' ) {
                $curtainSliceRight = '<option value="curtainSliceRight" selected>curtainSliceRight</option>';
            }
            
            // blindCurtainTopLeft
            if( $value == 'blindCurtainTopLeft' ) {
                $blindCurtainTopLeft = '<option value="blindCurtainTopLeft" selected>blindCurtainTopLeft</option>';
            }
            
            // blindCurtainTopRight
            if( $value == 'blindCurtainTopRight' ) {
                $blindCurtainTopRight = '<option value="blindCurtainTopRight" selected>blindCurtainTopRight</option>';
            }
            
            // blindCurtainBottomLeft
            if( $value == 'blindCurtainBottomLeft' ) {
                $blindCurtainBottomLeft = '<option value="blindCurtainBottomLeft" selected>blindCurtainBottomLeft</option>';
            }
            
            // blindCurtainBottomRight
            if( $value == 'blindCurtainBottomRight' ) {
                $blindCurtainBottomRight = '<option value="blindCurtainBottomRight" selected>blindCurtainBottomRight</option>';
            }
            
            // blindCurtainSliceBottom
            if( $value == 'blindCurtainSliceBottom' ) {
                $blindCurtainSliceBottom = '<option value="blindCurtainSliceBottom" selected>blindCurtainSliceBottom</option>';
            }
            
            // blindCurtainSliceTop
            if( $value == 'blindCurtainSliceTop' ) {
                $blindCurtainSliceTop = '<option value="blindCurtainSliceTop" selected>blindCurtainSliceTop</option>';
            }
            
            // stampede
            if( $value == 'stampede' ) {
                $stampede = '<option value="stampede" selected>stampede</option>';
            }
            
            // mosaic
            if( $value == 'mosaic' ) {
                $mosaic = '<option value="mosaic" selected>mosaic</option>';
            }
            
            // mosaicReverse
            if( $value == 'mosaicReverse' ) {
                $mosaicReverse = '<option value="mosaicReverse" selected>mosaicReverse</option>';
            }
            
            // mosaicRandom
            if( $value == 'mosaicRandom' ) {
                $mosaicRandom = '<option value="mosaicRandom" selected>mosaicRandom</option>';
            }
            
            // mosaicSpiral
            if( $value == 'mosaicSpiral' ) {
                $mosaicSpiral = '<option value="mosaicSpiral" selected>mosaicSpiral</option>';
            }
            
            // mosaicSpiralReverse
            if( $value == 'mosaicSpiralReverse' ) {
                $mosaicSpiralReverse = '<option value="mosaicSpiralReverse" selected>mosaicSpiralReverse</option>';
            }
            
            // topLeftBottomRight
            if( $value == 'topLeftBottomRight' ) {
                $topLeftBottomRight = '<option value="topLeftBottomRight" selected>topLeftBottomRight</option>';
            }
            
            // bottomRightTopLeft
            if( $value == 'bottomRightTopLeft' ) {
                $bottomRightTopLeft = '<option value="bottomRightTopLeft" selected>bottomRightTopLeft</option>';
            }
            
            // bottomLeftTopRight
            if( $value == 'bottomLeftTopRight' ) {
                $bottomLeftTopRight = '<option value="bottomLeftTopRight" selected>bottomLeftTopRight</option>';
            }
            
            // scrollLeft
            if( $value == 'scrollLeft' ) {
                $scrollLeft = '<option value="scrollLeft" selected>scrollLeft</option>';
            }
            
            // scrollRight
            if( $value == 'scrollRight' ) {
                $scrollRight = '<option value="scrollRight" selected>scrollRight</option>';
            }
            
            // scrollHorz
            if( $value == 'scrollHorz' ) {
                $scrollHorz = '<option value="scrollHorz" selected>scrollHorz</option>';
            }
            
            // scrollBottom
            if( $value == 'scrollBottom' ) {
                $scrollBottom = '<option value="scrollBottom" selected>scrollBottom</option>';
            }
            
            // scrollTop
            if( $value == 'scrollTop' ) {
                $scrollTop = '<option value="scrollTop" selected>scrollTop</option>';
            }
        }
        
        /* Slide Transition field */
        $this->_html .= '
        <label>'.$this->l('Slide Transition:').'</label>
            <div class="margin-form">
                <select name="BSKSLIDER_TRANSITION[]" size="10" id="transition" multiple="multiple">
        ';

        if ( isset($random) ) {
            $this->_html .= $random;
        } else {
            $this->_html .= '<option value="random">random</option>';
        }
        
        if ( isset($simpleFade) ) {
            $this->_html .= $simpleFade;
        } else {
            $this->_html .= '<option value="simpleFade">simpleFade</option>';
        }
        
        if ( isset($curtainTopLeft) ) {
            $this->_html .= $curtainTopLeft;
        } else {
            $this->_html .= '<option value="curtainTopLeft">curtainTopLeft</option>';
        }
        
        if ( isset($curtainTopRight) ) {
            $this->_html .= $curtainTopRight;
        } else {
            $this->_html .= '<option value="curtainTopRight">curtainTopRight</option>';
        }
        
        if ( isset($curtainBottomLeft) ) {
            $this->_html .= $curtainBottomLeft;
        } else {
            $this->_html .= '<option value="curtainBottomLeft">curtainBottomLeft</option>';
        }
        
        if ( isset($curtainBottomRight) ) {
            $this->_html .= $curtainBottomRight;
        } else {
            $this->_html .= '<option value="curtainBottomRight">curtainBottomRight</option>';
        }
        
        if ( isset($curtainSliceLeft) ) {
            $this->_html .= $curtainSliceLeft;
        } else {
            $this->_html .= '<option value="curtainSliceLeft">curtainSliceLeft</option>';
        }
        
        if ( isset($curtainSliceRight) ) {
            $this->_html .= $curtainSliceRight;
        } else {
            $this->_html .= '<option value="curtainSliceRight">curtainSliceRight</option>';
        }
        
        if ( isset($blindCurtainTopLeft) ) {
            $this->_html .= $blindCurtainTopLeft;
        } else {
            $this->_html .= '<option value="blindCurtainTopLeft">blindCurtainTopLeft</option>';
        }
        
        if ( isset($blindCurtainTopRight) ) {
            $this->_html .= $blindCurtainTopRight;
        } else {
            $this->_html .= '<option value="blindCurtainTopRight">blindCurtainTopRight</option>';
        }
        
        if ( isset($blindCurtainBottomLeft) ) {
            $this->_html .= $blindCurtainBottomLeft;
        } else {
            $this->_html .= '<option value="blindCurtainBottomLeft">blindCurtainBottomLeft</option>';
        }
        
        if ( isset($blindCurtainBottomRight) ) {
            $this->_html .= $blindCurtainBottomRight;
        } else {
            $this->_html .= '<option value="blindCurtainBottomRight">blindCurtainBottomRight</option>';
        }
        
        if ( isset($blindCurtainSliceBottom) ) {
            $this->_html .= $blindCurtainSliceBottom;
        } else {
            $this->_html .= '<option value="blindCurtainSliceBottom">blindCurtainSliceBottom</option>';
        }
        
        if ( isset($blindCurtainSliceTop) ) {
            $this->_html .= $blindCurtainSliceTop;
        } else {
            $this->_html .= '<option value="blindCurtainSliceTop">blindCurtainSliceTop</option>';
        }
        
        if ( isset($stampede) ) {
            $this->_html .= $stampede;
        } else {
            $this->_html .= '<option value="stampede">stampede</option>';
        }
        
        if ( isset($mosaic) ) {
            $this->_html .= $mosaic;
        } else {
            $this->_html .= '<option value="mosaic">mosaic</option>';
        }
        
        if ( isset($mosaicReverse) ) {
            $this->_html .= $mosaicReverse;
        } else {
            $this->_html .= '<option value="mosaicReverse">mosaicReverse</option>';
        }
        
        if ( isset($mosaicRandom) ) {
            $this->_html .= $mosaicRandom;
        } else {
            $this->_html .= '<option value="mosaicRandom">mosaicRandom</option>';
        }
        
        if ( isset($mosaicSpiral) ) {
            $this->_html .= $mosaicSpiral;
        } else {
            $this->_html .= '<option value="mosaicSpiral">mosaicSpiral</option>';
        }
        
        if ( isset($mosaicSpiralReverse) ) {
            $this->_html .= $mosaicSpiralReverse;
        } else {
            $this->_html .= '<option value="mosaicSpiralReverse">mosaicSpiralReverse</option>';
        }
        
        if ( isset($topLeftBottomRight) ) {
            $this->_html .= $topLeftBottomRight;
        } else {
            $this->_html .= '<option value="topLeftBottomRight">topLeftBottomRight</option>';
        }
        
        if ( isset($bottomRightTopLeft) ) {
            $this->_html .= $bottomRightTopLeft;
        } else {
            $this->_html .= '<option value="bottomRightTopLeft">bottomRightTopLeft</option>';
        }
        
        if ( isset($bottomLeftTopRight) ) {
            $this->_html .= $bottomLeftTopRight;
        } else {
            $this->_html .= '<option value="bottomLeftTopRight">bottomLeftTopRight</option>';
        }
        
        if ( isset($scrollLeft) ) {
            $this->_html .= $scrollLeft;
        } else {
            $this->_html .= '<option value="scrollLeft">scrollLeft</option>';
        }
        
        if ( isset($scrollRight) ) {
            $this->_html .= $scrollRight;
        } else {
            $this->_html .= '<option value="scrollRight">scrollRight</option>';
        }
        
        if ( isset($scrollHorz) ) {
            $this->_html .= $scrollHorz;
        } else {
            $this->_html .= '<option value="scrollHorz">scrollHorz</option>';
        }
        
        if ( isset($scrollBottom) ) {
            $this->_html .= $scrollBottom;
        } else {
            $this->_html .= '<option value="scrollBottom">scrollBottom</option>';
        }
        
        if ( isset($scrollTop) ) {
            $this->_html .= $scrollTop;
        } else {
            $this->_html .= '<option value="scrollTop">scrollTop</option>';
        }
        
        $this->_html .= '
                </select>
                <p>Multiple transitions can be selected.</p>
            </div>
        ';
        /* /Slide Transition field */
        
        /* Slide Time field */
        $timeOption = Configuration::get('BSKSLIDER_TIME');

        $this->_html .= '
        <label>'.$this->l('Time:').'</label>
            <div class="margin-form">
                <input name="BSKSLIDER_TIME" id="bsk_time" size="3" value="'; $this->_html .= $timeOption; $this->_html .= '"/>';
        $this->_html .= '
                <p>milliseconds between the end of the sliding effect and the start of the nex one</p>
            </div>
        ';
        /* /Slide Time field */
        
        /* Slide transPeriod field */
        $transPeriodOption = Configuration::get('BSKSLIDER_TRANSPERIOD');

        $this->_html .= '
        <label>'.$this->l('Transition Period:').'</label>
            <div class="margin-form">
                <input name="BSKSLIDER_TRANSPERIOD" id="bsk_transPeriod" size="3" value="'; $this->_html .= $transPeriodOption; $this->_html .= '"/>';
        $this->_html .= '
                <p>length of the sliding effect in milliseconds</p>
            </div>
        ';
        /* /Slide transPeriod field */
        
         /* Slide Portrait field */
        $portraitOption = Configuration::get('BSKSLIDER_PORTRAIT');
        
        $this->_html .= '
        <label>'.$this->l('Portrait:').'</label>
            <div class="margin-form">
                <select name="BSKSLIDER_PORTRAIT" id="portrait">';
        if ( $portraitOption == "on" ) {
            $this->_html .= '<option value="on" selected>On</option>';
            $this->_html .= '<option value="off">Off</option>';
        } else if ( $portraitOption == "off" ) {
            $this->_html .= '<option value="off" selected>Off</option>';
            $this->_html .= '<option value="on">On</option>';
        }
        $this->_html .= '</select>
            <p>Select on if you don\'t want that your images are cropped</p>
        </div>';
        /* /Slide Portrait field */
        
        /* Slide Thumb field */
        $thumbOption = Configuration::get('BSKSLIDER_THUMB');
        
        $this->_html .= '
        <label>'.$this->l('Slider Thumbnails:').'</label>
            <div class="margin-form">
                <select name="BSKSLIDER_THUMB" id="thumb">';
        if ( $thumbOption == "on" ) {
            $this->_html .= '<option value="on" selected>On</option>';
            $this->_html .= '<option value="off">Off</option>';
        } else if ( $thumbOption == "off" ) {
            $this->_html .= '<option value="off" selected>Off</option>';
            $this->_html .= '<option value="on">On</option>';
        }
        $this->_html .= '</select></div>';
        /* /Slide Thumb field */
        
        /* Slide Height field */
        $heightOption = Configuration::get('BSKSLIDER_HEIGHT');
        
        $this->_html .= '
        <label>'.$this->l('Slider Height:').'</label>
            <div class="margin-form">
                <input name="BSKSLIDER_HEIGHT" id="height" size="3" value="'; $this->_html .= $heightOption; $this->_html .= '"/> px';
        $this->_html .= '
            </div>
        ';
        /* /Slide Height field */
        
        /* Slide Full Width field */
        $fullwidthOption = Configuration::get('BSKSLIDER_FULLWIDTH');
        
        $this->_html .= '
        <label>'.$this->l('Slider Full Width:').'</label>
            <div class="margin-form">
                <select name="BSKSLIDER_FULLWIDTH" id="fullwidth">';
        if ( $fullwidthOption == "on" ) {
            $this->_html .= '<option value="on" selected>On</option>';
            $this->_html .= '<option value="off">Off</option>';
        } else if ( $fullwidthOption == "off" ) {
            $this->_html .= '<option value="off" selected>Off</option>';
            $this->_html .= '<option value="on">On</option>';
        }
        $this->_html .= '</select></div>';
        /* /Slide Full Width field */
        
        /* Slide AutoAdvance field */
        $autoAdvanceOption = Configuration::get('BSKSLIDER_AUTOADVANCE');
        
        $this->_html .= '
        <label>'.$this->l('Slider Auto Advance:').'</label>
            <div class="margin-form">
                <select name="BSKSLIDER_AUTOADVANCE" id="autoadvance">';
        if ( $autoAdvanceOption == "on" ) {
            $this->_html .= '<option value="on" selected>On</option>';
            $this->_html .= '<option value="off">Off</option>';
        } else if ( $autoAdvanceOption == "off" ) {
            $this->_html .= '<option value="off" selected>Off</option>';
            $this->_html .= '<option value="on">On</option>';
        }
        $this->_html .= '</select></div>';
        /* /Slide AutoAdvance field */
        
        /* Slide Loader Opacity field */
        $loaderOpacityOption = Configuration::get('BSKSLIDER_LOADEROPACITY');
        
        $this->_html .= '
        <label>'.$this->l('Slider Loader Opacity:').'</label>
            <div class="margin-form">
                <input name="BSKSLIDER_LOADEROPACITY" id="bsk_loaderopacity" min="0" type="number" max="1" step="0.1" value="'; $this->_html .= $loaderOpacityOption; $this->_html .= '"/>';
        $this->_html .= '</div>';
        /* /Slide Loader Opacity field */
        
        /* Slide Loader field */
        $loaderOption = Configuration::get('BSKSLIDER_LOADER');
        
        $this->_html .= '
        <label>'.$this->l('Slider Loader:').'</label>
            <div class="margin-form">
                <select name="BSKSLIDER_LOADER" id="bsk_loader">';
        if ( $loaderOption == "pie" ) {
            $this->_html .= '<option value="pie" selected>Pie</option>';
            $this->_html .= '<option value="bar">Bar</option>';
        } else if ( $loaderOption == "bar" ) {
            $this->_html .= '<option value="bar" selected>Bar</option>';
            $this->_html .= '<option value="pie">Pie</option>';
        }
        $this->_html .= '</select></div>';
        /* /Slide Loader field */
        
        /* Slide pie diameter field */
        $pieDiameterOption = Configuration::get('BSKSLIDER_PIEDIAMETER');

        $this->_html .= '
        <label>'.$this->l('Loader Pie Diameter:').'</label>
            <div class="margin-form pie">
                <input name="BSKSLIDER_PIEDIAMETER" id="bsk_piediameter" size="3" value="'; $this->_html .= $pieDiameterOption; $this->_html .= '"/>';
        $this->_html .= '
            </div>
        ';
        /* /Slide pie diameter field */
        
        /* Slide pie position field */
        $piePositionOption = Configuration::get('BSKSLIDER_PIEPOSITION');
        
        $this->_html .= '
            <label>'.$this->l('Loader Pie Position:').'</label>
                <div class="margin-form pie">
                <select name="BSKSLIDER_PIEPOSITION" id="bsk_pieposition">';
        
        if ( $piePositionOption == "rightTop" ) {
            $this->_html .= '<option value="rightTop" selected>Right Top</option>';
        } else {
            $this->_html .= '<option value="rightTop">Right Top</option>';
        }
        
        if ( $piePositionOption == "leftTop" ) {
            $this->_html .= '<option value="leftTop" selected>Left Top</option>';
        } else {
            $this->_html .= '<option value="leftTop">Left Top</option>';
        }
        
        if ( $piePositionOption == "leftBottom" ) {
            $this->_html .= '<option value="leftBottom" selected>Left Bottom</option>';
        } else {
            $this->_html .= '<option value="leftBottom">Left Bottom</option>';
        }
        
        if ( $piePositionOption == "rightBottom" ) {
            $this->_html .= '<option value="rightBottom" selected>Right Bottom</option>';
        } else {
            $this->_html .= '<option value="rightBottom">Right Bottom</option>';
        }
        
        $this->_html .='</select></div>';
        /* /Slide pie position field */
        
        /* Slide bar direction field */
        $barDirectionOption = Configuration::get('BSKSLIDER_BARDIRECTION');
        
        $this->_html .= '
            <label>'.$this->l('Loader Bar Direction:').'</label>
                <div class="margin-form bar">
                <select name="BSKSLIDER_BARDIRECTION" id="bsk_bardirection">';
        
        if ( $barDirectionOption == "leftToRight" ) {
            $this->_html .= '<option value="leftToRight" selected>Left to Right</option>';
        } else {
            $this->_html .= '<option value="leftToRight">Left to Right</option>';
        }
        
        if ( $barDirectionOption == "rightToLeft" ) {
            $this->_html .= '<option value="rightToLeft" selected>Right to Left</option>';
        } else {
            $this->_html .= '<option value="rightToLeft">Right to Left</option>';
        }
        
        if ( $barDirectionOption == "topToBottom" ) {
            $this->_html .= '<option value="topToBottom" selected>Top to Bottom</option>';
        } else {
            $this->_html .= '<option value="topToBottom">Top to Bottom</option>';
        }
        
        if ( $barDirectionOption == "bottomToTop" ) {
            $this->_html .= '<option value="bottomToTop" selected>Bottom to Top</option>';
        } else {
            $this->_html .= '<option value="bottomToTop">Bottom to Top</option>';
        }
        
        $this->_html .='</select></div>';
        /* /Slide bar direction field */
        
        /* Slide bar position field */
        $barPositionOption = Configuration::get('BSKSLIDER_BARPOSITION');
        
        $this->_html .= '
            <label>'.$this->l('Loader Bar Position:').'</label>
                <div class="margin-form bar">
                <select name="BSKSLIDER_BARPOSITION" id="bsk_barposition">';
        
        if ( $barPositionOption == "leftToRight" ) {
            $this->_html .= '<option value="left" selected>Left</option>';
        } else {
            $this->_html .= '<option value="left">Left</option>';
        }
        
        if ( $barPositionOption == "right" ) {
            $this->_html .= '<option value="right" selected>Right</option>';
        } else {
            $this->_html .= '<option value="right">Right</option>';
        }
        
        if ( $barPositionOption == "top" ) {
            $this->_html .= '<option value="top" selected>Top</option>';
        } else {
            $this->_html .= '<option value="top">Top</option>';
        }
        
        if ( $barPositionOption == "bottom" ) {
            $this->_html .= '<option value="bottom" selected>Bottom</option>';
        } else {
            $this->_html .= '<option value="bottom">Bottom</option>';
        }
        
        $this->_html .='</select></div>';
        /* /Slide bar direction field */
        
        /* Slide loaderBgColor field */
        $loaderBgColorOption = Configuration::get('BSKSLIDER_LOADERBGCOLOR');

        $this->_html .= '
        <label>'.$this->l('Loader background color:').'</label>
            <div class="margin-form">
                <input name="BSKSLIDER_LOADERBGCOLOR" id="loader_bg_colorfield" size="4" value="'; $this->_html .= $loaderBgColorOption; $this->_html .= '"/>';
        $this->_html .= '
            </div>
        ';
        /* /Slide loaderBgColor field */
        
        /* Slide loaderColor field */
        $loaderColorOption = Configuration::get('BSKSLIDER_LOADERCOLOR');

        $this->_html .= '
        <label>'.$this->l('Loader color:').'</label>
            <div class="margin-form">
                <input name="BSKSLIDER_LOADERCOLOR" id="loader_colorfield" size="4" value="'; $this->_html .= $loaderColorOption; $this->_html .= '"/>';
        $this->_html .= '
            </div>
        ';
        /* /Slide loaderColor field */
        
        /* Slide Navigation field */
        $navigationOption = Configuration::get('BSKSLIDER_NAVIGATION');
        
        $this->_html .= '
        <label>'.$this->l('Slider Navigation:').'</label>
            <div class="margin-form">
                <select name="BSKSLIDER_NAVIGATION" id="navigation">';
        if ( $navigationOption == "on" ) {
            $this->_html .= '<option value="on" selected>On</option>';
            $this->_html .= '<option value="off">Off</option>';
        } else if ( $navigationOption == "off" ) {
            $this->_html .= '<option value="off" selected>Off</option>';
            $this->_html .= '<option value="on">On</option>';
        }
        $this->_html .= '</select></div>';
        /* /Slide Navigation field */
        
        /* Slide NavigationHover field */
        $navigationHoverOption = Configuration::get('BSKSLIDER_NAVIGATIONHOVER');
        
        $this->_html .= '
        <label>'.$this->l('Slider Navigation Hover:').'</label>
            <div class="margin-form">
                <select name="BSKSLIDER_NAVIGATIONHOVER" id="navigation_hover">';
        if ( $navigationHoverOption == "on" ) {
            $this->_html .= '<option value="on" selected>On</option>';
            $this->_html .= '<option value="off">Off</option>';
        } else if ( $navigationHoverOption == "off" ) {
            $this->_html .= '<option value="off" selected>Off</option>';
            $this->_html .= '<option value="on">On</option>';
        }
        $this->_html .= '</select></div>';
        /* /Slide NavigationHover field */
        
        /* Slide PlayPause field */
        $playpauseOption = Configuration::get('BSKSLIDER_PLAYPAUSE');
        
        $this->_html .= '
        <label>'.$this->l('Slider Play/Pause:').'</label>
            <div class="margin-form">
                <select name="BSKSLIDER_PLAYPAUSE" id="playpause">';
        if ( $playpauseOption == "on" ) {
            $this->_html .= '<option value="on" selected>On</option>';
            $this->_html .= '<option value="off">Off</option>';
        } else if ( $playpauseOption == "off" ) {
            $this->_html .= '<option value="off" selected>Off</option>';
            $this->_html .= '<option value="on">On</option>';
        }
        $this->_html .= '</select></div>';
        /* /Slide PlayPause field */
        
        /* Slide Pause on click field */
        $pauseOnClickOption = Configuration::get('BSKSLIDER_PAUSEONCLICK');
        
        $this->_html .= '
        <label>'.$this->l('Slider Pause on click:').'</label>
            <div class="margin-form">
                <select name="BSKSLIDER_PAUSEONCLICK" id="pauseonclick">';
        if ( $pauseOnClickOption == "on" ) {
            $this->_html .= '<option value="on" selected>On</option>';
            $this->_html .= '<option value="off">Off</option>';
        } else if ( $pauseOnClickOption == "off" ) {
            $this->_html .= '<option value="off" selected>Off</option>';
            $this->_html .= '<option value="on">On</option>';
        }
        $this->_html .= '</select></div>';
        /* Slide Pause on click field */
        
        /* Slider Skin field */
        $skinOption = Configuration::get('BSKSLIDER_SKIN');
        
        $this->_html .= '
        <label>'.$this->l('Slider Skin:').'</label>
            <div class="margin-form">
                <select name="BSKSLIDER_SKIN" id="bskslider_skin">';
        
        if ( $skinOption == 'camera_white_skin' ) {
            $this->_html .= '<option value="camera_white_skin" selected>White Skin</option>'; 
        } else {
            $this->_html .= '<option value="camera_white_skin">White Skin</option>'; 
        }
        
        if ( $skinOption == 'camera_amber_skin' ) {
            $this->_html .= '<option value="camera_amber_skin" selected>Amber Skin</option>'; 
        } else {
            $this->_html .= '<option value="camera_amber_skin">Amber Skin</option>';
        }
        
        if ( $skinOption == 'camera_ash_skin' ) {
            $this->_html .= '<option value="camera_ash_skin" selected>Ash Skin</option>'; 
        } else {
            $this->_html .= '<option value="camera_ash_skin">Ash Skin</option>';
        }
        
        if ( $skinOption == 'camera_azure_skin' ) {
            $this->_html .= '<option value="camera_azure_skin" selected>Azure Skin</option>'; 
        } else {
            $this->_html .= '<option value="camera_azure_skin">Azure Skin</option>';
        }
        
        if ( $skinOption == 'camera_beige_skin' ) {
            $this->_html .= '<option value="camera_beige_skin" selected>Beige Skin</option>'; 
        } else {
            $this->_html .= '<option value="camera_beige_skin">Beige Skin</option>';
        }
        
        if ( $skinOption == 'camera_black_skin' ) {
            $this->_html .= '<option value="camera_black_skin" selected>Black Skin</option>'; 
        } else {
            $this->_html .= '<option value="camera_black_skin">Black Skin</option>';
        }
        
        if ( $skinOption == 'camera_blue_skin' ) {
            $this->_html .= '<option value="camera_blue_skin" selected>Blue Skin</option>'; 
        } else {
            $this->_html .= '<option value="camera_blue_skin">Blue Skin</option>';
        }
        
        if ( $skinOption == 'camera_brown_skin' ) {
            $this->_html .= '<option value="camera_brown_skin" selected>Brown Skin</option>'; 
        } else {
            $this->_html .= '<option value="camera_brown_skin">Brown Skin</option>';
        }
        
        if ( $skinOption == 'camera_burgundy_skin' ) {
            $this->_html .= '<option value="camera_burgundy_skin" selected>Burgundy Skin</option>'; 
        } else {
            $this->_html .= '<option value="camera_burgundy_skin">Burgundy Skin</option>';
        }
        
        if ( $skinOption == 'camera_charcoal_skin' ) {
            $this->_html .= '<option value="camera_charcoal_skin" selected>Charcoal Skin</option>'; 
        } else {
            $this->_html .= '<option value="camera_charcoal_skin">Charcoal Skin</option>';
        }
        
        if ( $skinOption == 'camera_chocolate_skin' ) {
            $this->_html .= '<option value="camera_chocolate_skin" selected>Chocolate Skin</option>'; 
        } else {
            $this->_html .= '<option value="camera_chocolate_skin">Chocolate Skin</option>';
        }
        
        if ( $skinOption == 'camera_coffee_skin' ) {
            $this->_html .= '<option value="camera_coffee_skin" selected>Coffee Skin</option>'; 
        } else {
            $this->_html .= '<option value="camera_coffee_skin">Coffee Skin</option>';
        }
        
        if ( $skinOption == 'camera_cyan_skin' ) {
            $this->_html .= '<option value="camera_cyan_skin" selected>Cyan Skin</option>'; 
        } else {
            $this->_html .= '<option value="camera_cyan_skin">Cyan Skin</option>';
        }
        
        if ( $skinOption == 'camera_fuchsia_skin' ) {
            $this->_html .= '<option value="camera_fuchsia_skin" selected>Fuchsia Skin</option>'; 
        } else {
            $this->_html .= '<option value="camera_fuchsia_skin">Fuchsia Skin</option>';
        }
        
        if ( $skinOption == 'camera_gold_skin' ) {
            $this->_html .= '<option value="camera_gold_skin" selected>Gold Skin</option>'; 
        } else {
            $this->_html .= '<option value="camera_gold_skin">Gold Skin</option>';
        }
        
        if ( $skinOption == 'camera_green_skin' ) {
            $this->_html .= '<option value="camera_green_skin" selected>Green Skin</option>'; 
        } else {
            $this->_html .= '<option value="camera_green_skin">Green Skin</option>';
        }
        
        if ( $skinOption == 'camera_grey_skin' ) {
            $this->_html .= '<option value="camera_grey_skin" selected>Grey Skin</option>'; 
        } else {
            $this->_html .= '<option value="camera_grey_skin">Grey Skin</option>';
        }
        
        if ( $skinOption == 'camera_indigo_skin' ) {
            $this->_html .= '<option value="camera_indigo_skin" selected>Indigo Skin</option>'; 
        } else {
            $this->_html .= '<option value="camera_indigo_skin">Indigo Skin</option>';
        }
        
        if ( $skinOption == 'camera_khaki_skin' ) {
            $this->_html .= '<option value="camera_khaki_skin" selected>Khaki Skin</option>'; 
        } else {
            $this->_html .= '<option value="camera_khaki_skin">Khaki Skin</option>';
        }
        
        if ( $skinOption == 'camera_lime_skin' ) {
            $this->_html .= '<option value="camera_lime_skin" selected>Lime Skin</option>'; 
        } else {
            $this->_html .= '<option value="camera_lime_skin">Lime Skin</option>';
        }
        
        if ( $skinOption == 'camera_magenta_skin' ) {
            $this->_html .= '<option value="camera_magenta_skin" selected>Magenta Skin</option>'; 
        } else {
            $this->_html .= '<option value="camera_magenta_skin">Magenta Skin</option>';
        }
        
        if ( $skinOption == 'camera_maroon_skin' ) {
            $this->_html .= '<option value="camera_magenta_skin" selected>Maroon Skin</option>'; 
        } else {
            $this->_html .= '<option value="camera_magenta_skin">Maroon Skin</option>';
        }
        
        if ( $skinOption == 'camera_orange_skin' ) {
            $this->_html .= '<option value="camera_orange_skin" selected>Orange Skin</option>'; 
        } else {
            $this->_html .= '<option value="camera_orange_skin">Orange Skin</option>';
        }
        
        if ( $skinOption == 'camera_olive_skin' ) {
            $this->_html .= '<option value="camera_olive_skin" selected>Olive Skin</option>'; 
        } else {
            $this->_html .= '<option value="camera_olive_skin">Olive Skin</option>';
        }
        
        if ( $skinOption == 'camera_pink_skin' ) {
            $this->_html .= '<option value="camera_pink_skin" selected>Pink Skin</option>'; 
        } else {
            $this->_html .= '<option value="camera_pink_skin">Pink Skin</option>';
        }
        
        if ( $skinOption == 'camera_pistachio_skin' ) {
            $this->_html .= '<option value="camera_pistachio_skin" selected>Pistachio Skin</option>'; 
        } else {
            $this->_html .= '<option value="camera_pistachio_skin">Pistachio Skin</option>';
        }
        
        if ( $skinOption == 'camera_red_skin' ) {
            $this->_html .= '<option value="camera_red_skin" selected>Red Skin</option>'; 
        } else {
            $this->_html .= '<option value="camera_red_skin">Red Skin</option>';
        }
        
        if ( $skinOption == 'camera_tangerine_skin' ) {
            $this->_html .= '<option value="camera_tangerine_skin" selected>Tangerine Skin</option>'; 
        } else {
            $this->_html .= '<option value="camera_tangerine_skin">Tangerine Skin</option>';
        }
        
        if ( $skinOption == 'camera_turquoise_skin' ) {
            $this->_html .= '<option value="camera_turquoise_skin" selected>Turquoise Skin</option>'; 
        } else {
            $this->_html .= '<option value="camera_turquoise_skin">Turquoise Skin</option>';
        }
        
        if ( $skinOption == 'camera_violet_skin' ) {
            $this->_html .= '<option value="camera_violet_skin" selected>Violet Skin</option>'; 
        } else {
            $this->_html .= '<option value="camera_violet_skin">Violet Skin</option>';
        }
        
        if ( $skinOption == 'camera_yellow_skin' ) {
            $this->_html .= '<option value="camera_yellow_skin" selected>Yellow Skin</option>'; 
        } else {
            $this->_html .= '<option value="camera_yellow_skin">Yellow Skin</option>';
        }
        
        $this->_html .= '</select></div>';
        /* /Slider Skin field */
        
		/* Save & Reset Options */
		$this->_html .= '
		<div class="margin-form">
			<input type="submit" class="button" name="submitSlider" value="'.$this->l('Save').'" />
            <input type="submit" class="button" name="resetOptions" value="'.$this->l('Reset Options').'" />
		</div>';
		/* End form */
		$this->_html .= '</form>';
		/* End fieldset slider */
		$this->_html .= '</fieldset>';
	}

	private function _displayAddForm()
	{
		/* Sets Slide : depends if edited or added */
		$slide = null;
		if (Tools::isSubmit('id_slide') && $this->slideExists((int)Tools::getValue('id_slide')))
			$slide = new BskSlide((int)Tools::getValue('id_slide'));
		/* Checks if directory is writable */
		if (!is_writable('.'))
			$this->adminDisplayWarning(sprintf($this->l('modules %s must be writable (CHMOD 755 / 777)'), $this->name));

		/* Gets languages and sets which div requires translations */
		$id_lang_default = (int)Configuration::get('PS_LANG_DEFAULT');
		$languages = Language::getLanguages(false);
		$divLangName = 'image¤title¤url¤description';
		$this->_html .= '<script type="text/javascript">id_language = Number('.$id_lang_default.');</script>';

		/* Form */
		$this->_html .= '<form action="'.Tools::safeOutput($_SERVER['REQUEST_URI']).'" method="post" enctype="multipart/form-data">';

		/* Fieldset Upload */
		$this->_html .= '
		<fieldset class="width3">
			<br />
			<legend><img src="'._PS_ADMIN_IMG_.'add.gif" alt="" />1 - '.$this->l('Upload your slide').'</legend>';
		/* Image */
		$this->_html .= '<label>'.$this->l('Select a file:').' * </label><div class="margin-form">';
		foreach ($languages as $language)
		{
			$this->_html .= '<div id="image_'.$language['id_lang'].'" style="display: '.($language['id_lang'] == $id_lang_default ? 'block' : 'none').';float: left;">';
			$this->_html .= '<input type="file" name="image_'.$language['id_lang'].'" id="image_'.$language['id_lang'].'" size="30" value="'.(isset($slide->image[$language['id_lang']]) ? $slide->image[$language['id_lang']] : '').'"/>';
			/* Sets image as hidden in case it does not change */
			if ($slide && $slide->image[$language['id_lang']])
				$this->_html .= '<input type="hidden" name="image_old_'.$language['id_lang'].'" value="'.($slide->image[$language['id_lang']]).'" id="image_old_'.$language['id_lang'].'" />';
			/* Display image */
			if ($slide && $slide->image[$language['id_lang']])
				$this->_html .= '<input type="hidden" name="has_picture" value="1" /><img src="'.__PS_BASE_URI__.'modules/'.$this->name.'/images/'.$slide->image[$language['id_lang']].'" alt=""/>';
			$this->_html .= '</div>';
		}
		$this->_html .= $this->displayFlags($languages, $id_lang_default, $divLangName, 'image', true);
		/* End Fieldset Upload */
		$this->_html .= '</fieldset><br /><br />';

		/* Fieldset edit/add */
		$this->_html .= '<fieldset class="width3">';
		if (Tools::isSubmit('addSlide')) /* Configure legend */
			$this->_html .= '<legend><img src="'._PS_ADMIN_IMG_.'add.gif" alt="" /> 2 - '.$this->l('Configure your slide').'</legend>';
		elseif (Tools::isSubmit('id_slide')) /* Edit legend */
			$this->_html .= '<legend><img src="'._PS_BASE_URL_.__PS_BASE_URI__.'modules/'.$this->name.'/logo.gif" alt="" /> 2 - '.$this->l('Edit your slide').'</legend>';
		/* Sets id slide as hidden */
		if ($slide && Tools::getValue('id_slide'))
			$this->_html .= '<input type="hidden" name="id_slide" value="'.$slide->id.'" id="id_slide" />';
		/* Sets position as hidden */
		$this->_html .= '<input type="hidden" name="position" value="'.(($slide != null) ? ($slide->position) : ($this->getNextPosition())).'" id="position" />';

		/* Form content */
		/* Title */
		$this->_html .= '<br /><label>'.$this->l('Title:').' * </label><div class="margin-form">';
		foreach ($languages as $language)
		{
			$this->_html .= '
					<div id="title_'.$language['id_lang'].'" style="display: '.($language['id_lang'] == $id_lang_default ? 'block' : 'none').';float: left;">
						<input type="text" name="title_'.$language['id_lang'].'" id="title_'.$language['id_lang'].'" size="30" value="'.(isset($slide->title[$language['id_lang']]) ? $slide->title[$language['id_lang']] : '').'"/>
					</div>';
		}
		$this->_html .= $this->displayFlags($languages, $id_lang_default, $divLangName, 'title', true);
		$this->_html .= '</div><br /><br />';
        
        /* Url */
		$this->_html .= '
		<label>'.$this->l('URL:').' </label>
		<div class="margin-form">';
		foreach ($languages as $language)
		{
			$this->_html .= '<div id="url_'.$language['id_lang'].'" style="display: '.($language['id_lang'] == $id_lang_default ? 'block' : 'none').';float: left;">
				<input type="text" placeholder="http://www.example.com" name="url_'.$language['id_lang'].'" id="url_'.$language['id_lang'].'" size="30" value="'.(isset($slide->url[$language['id_lang']]) ? $slide->url[$language['id_lang']] : '').'"/>
			</div>';
		}
		$this->_html .= $this->displayFlags($languages, $id_lang_default, $divLangName, 'url', true);
		$this->_html .= '</div><div class="clear"></div><br />';
        
		/* Description */
		$this->_html .= '
		<label>'.$this->l('Description:').' </label>
		<div class="margin-form">';
		foreach ($languages as $language)
		{
			$this->_html .= '<div id="description_'.$language['id_lang'].'" style="display: '.($language['id_lang'] == $id_lang_default ? 'block' : 'none').';float: left;">
				<textarea name="description_'.$language['id_lang'].'" rows="10" cols="29">'.(isset($slide->description[$language['id_lang']]) ? $slide->description[$language['id_lang']] : '').'</textarea>
			</div>';
		}
		$this->_html .= $this->displayFlags($languages, $id_lang_default, $divLangName, 'description', true);
		$this->_html .= '</div><div class="clear"></div><br />';

		/* Active */
		$this->_html .= '
		<label for="active_on">'.$this->l('Active:').'</label>
		<div class="margin-form">
			<img src="../img/admin/enabled.gif" alt="Yes" title="Yes" />
			<input type="radio" name="active_slide" id="active_on" '.(($slide && (isset($slide->active) && (int)$slide->active == 0)) ? '' : 'checked="checked" ').' value="1" />
			<label class="t" for="active_on">'.$this->l('Yes').'</label>
			<img src="../img/admin/disabled.gif" alt="No" title="No" style="margin-left: 10px;" />
			<input type="radio" name="active_slide" id="active_off" '.(($slide && (isset($slide->active) && (int)$slide->active == 0)) ? 'checked="checked" ' : '').' value="0" />
			<label class="t" for="active_off">'.$this->l('No').'</label>
		</div>';

		/* Save */
		$this->_html .= '
		<p class="center">
			<input type="submit" class="button" name="submitSlide" value="'.$this->l('Save').'" />
			<a class="button" style="position:relative; padding:3px 3px 4px 3px; top:1px" href="'.AdminController::$currentIndex.'&configure='.$this->name.'&token='.Tools::getAdminTokenLite('AdminModules').'">'.$this->l('Cancel').'</a>
		</p>';

		/* End of fieldset & form */
		$this->_html .= '
			<p>*'.$this->l('Required fields').'</p>
			</fieldset>
		</form>';
	}

	private function _postValidation()
	{
		$errors = array();

		/* Validation for Slider configuration */
		if (Tools::isSubmit('submitSlider'))
		{
            $transition_string = "";
            $transition_arr = Tools::getValue('BSKSLIDER_TRANSITION');
            
            foreach( $transition_arr as $index => $value ) {
                if( $index != 0 ){
                    $transition_string .= ",";
                }
                $transition_string .= $value;
            }
            
			if ( !Validate::isString($transition_string) )
					$errors[] = $this->l('Invalid values');
		} /* Validation for status */
		elseif (Tools::isSubmit('changeStatus'))
		{
			if (!Validate::isInt(Tools::getValue('id_slide')))
				$errors[] = $this->l('Invalid slide');
		}
		/* Validation for Slide */
		elseif (Tools::isSubmit('submitSlide'))
		{
			/* Checks state (active) */
			if (!Validate::isInt(Tools::getValue('active_slide')) || (Tools::getValue('active_slide') != 0 && Tools::getValue('active_slide') != 1))
				$errors[] = $this->l('Invalid slide state');
			/* Checks position */
			if (!Validate::isInt(Tools::getValue('position')) || (Tools::getValue('position') < 0))
				$errors[] = $this->l('Invalid slide position');
			/* If edit : checks id_slide */
			if (Tools::isSubmit('id_slide'))
			{
				if (!Validate::isInt(Tools::getValue('id_slide')) && !$this->slideExists(Tools::getValue('id_slide')))
					$errors[] = $this->l('Invalid id_slide');
			}
			/* Checks title/description/image */
			$languages = Language::getLanguages(false);
			foreach ($languages as $language)
			{
				if (strlen(Tools::getValue('title_'.$language['id_lang'])) > 40)
					$errors[] = $this->l('Title is too long');
				if (strlen(Tools::getValue('description_'.$language['id_lang'])) > 400)
					$errors[] = $this->l('Description is too long');
				if (Tools::getValue('image_'.$language['id_lang']) != null && !Validate::isFileName(Tools::getValue('image_'.$language['id_lang'])))
					$errors[] = $this->l('Invalid filename');
				if (Tools::getValue('image_old_'.$language['id_lang']) != null && !Validate::isFileName(Tools::getValue('image_old_'.$language['id_lang'])))
					$errors[] = $this->l('Invalid filename');
			}

			/* Checks title/url/description for default lang */
			$id_lang_default = (int)Configuration::get('PS_LANG_DEFAULT');
			if (strlen(Tools::getValue('title_'.$id_lang_default)) == 0)
				$errors[] = $this->l('Title is not set');
			if (!Tools::isSubmit('has_picture') && (!isset($_FILES['image_'.$id_lang_default]) || empty($_FILES['image_'.$id_lang_default]['tmp_name'])))
				$errors[] = $this->l('Image is not set');
			if (Tools::getValue('image_old_'.$id_lang_default) && !Validate::isFileName(Tools::getValue('image_old_'.$id_lang_default)))
				$errors[] = $this->l('Image is not set');
		} /* Validation for deletion */
		elseif (Tools::isSubmit('delete_id_slide') && (!Validate::isInt(Tools::getValue('delete_id_slide')) || !$this->slideExists((int)Tools::getValue('delete_id_slide'))))
			$errors[] = $this->l('Invalid id_slide');

		/* Display errors if needed */
		if (count($errors))
		{
			$this->_html .= $this->displayError(implode('<br />', $errors));
			return false;
		}

		/* Returns if validation is ok */
		return true;
	}

	private function _postProcess()
	{
		$errors = array();

        /* Reset Options */
        if (Tools::isSubmit('resetOptions')) {
            $res = Configuration::updateValue('BSKSLIDER_TRANSITION', 'scrollTop');
            $res &= Configuration::updateValue('BSKSLIDER_THUMB', 'off');
            $res &= Configuration::updateValue('BSKSLIDER_HEIGHT', '510');
            $res &= Configuration::updateValue('BSKSLIDER_AUTOADVANCE', 'on');
            $res &= Configuration::updateValue('BSKSLIDER_LOADER', 'bar');
            $res &= Configuration::updateValue('BSKSLIDER_PIEDIAMETER', '38');
            $res &= Configuration::updateValue('BSKSLIDER_PIEPOSITION', 'rightTop');
            $res &= Configuration::updateValue('BSKSLIDER_BARDIRECTION', 'leftToRight');
            $res &= Configuration::updateValue('BSKSLIDER_BARPOSITION', 'bottom');
            $res &= Configuration::updateValue('BSKSLIDER_NAVIGATION', 'on');
            $res &= Configuration::updateValue('BSKSLIDER_NAVIGATIONHOVER', 'on');
            $res &= Configuration::updateValue('BSKSLIDER_PLAYPAUSE', 'off');
            $res &= Configuration::updateValue('BSKSLIDER_SKIN', 'camera_dark_skin');
            $res &= Configuration::updateValue('BSKSLIDER_LOADEROPACITY', '0.8');
            $res &= Configuration::updateValue('BSKSLIDER_PAUSEONCLICK', 'off');
            $res &= Configuration::updateValue('BSKSLIDER_TIME', '7000');
            $res &= Configuration::updateValue('BSKSLIDER_TRANSPERIOD', '1500');
            $res &= Configuration::updateValue('BSKSLIDER_PORTRAIT', 'off');
            $res &= Configuration::updateValue('BSKSLIDER_LOADERBGCOLOR', '222222');
            $res &= Configuration::updateValue('BSKSLIDER_LOADERCOLOR', 'eeeeee');
            $res &= Configuration::updateValue('BSKSLIDER_FULLWIDTH', 'off');
        }
        /* /Reset Options */
        
		/* Processes Slider */
		if (Tools::isSubmit('submitSlider'))
		{
            $transition_string = "";
            $transition_arr = Tools::getValue('BSKSLIDER_TRANSITION');
            
            foreach( $transition_arr as $index => $value ) {
                if( $index != 0 ){
                    $transition_string .= ",";
                }
                $transition_string .= $value;
            }
            
            $thumbOption = Tools::getValue('BSKSLIDER_THUMB');
            $heightOption = Tools::getValue('BSKSLIDER_HEIGHT');
            $autoAdvanceOption = Tools::getValue('BSKSLIDER_AUTOADVANCE');
            $loaderOption = Tools::getValue('BSKSLIDER_LOADER');
            $pieDiameterOption = Tools::getValue('BSKSLIDER_PIEDIAMETER');
            $navigationOption = Tools::getValue('BSKSLIDER_NAVIGATION');
            $navigationHoverOption = Tools::getValue('BSKSLIDER_NAVIGATIONHOVER');
            $playpauseOption = Tools::getValue('BSKSLIDER_PLAYPAUSE');
            $skinOption = Tools::getValue('BSKSLIDER_SKIN');
            $piePositionOption = Tools::getValue('BSKSLIDER_PIEPOSITION');
            $barPositionOption = Tools::getValue('BSKSLIDER_BARPOSITION');
            $barDirectionOption = Tools::getValue('BSKSLIDER_BARDIRECTION');
            $loaderOpacityOption = Tools::getValue('BSKSLIDER_LOADEROPACITY');
            $pauseOnClickOption = Tools::getValue('BSKSLIDER_PAUSEONCLICK');
            $timeOption = Tools::getValue('BSKSLIDER_TIME');
            $transPeriodOption = Tools::getValue('BSKSLIDER_TRANSPERIOD');
            $portraitOption = Tools::getValue('BSKSLIDER_PORTRAIT');
            $loaderBgColorOption = Tools::getValue('BSKSLIDER_LOADERBGCOLOR');
            $loaderColorOption = Tools::getValue('BSKSLIDER_LOADERCOLOR');
            $fullwidthOption = Tools::getValue('BSKSLIDER_FULLWIDTH');
            
            
            $res = Configuration::updateValue('BSKSLIDER_THUMB', $thumbOption);
			$res &= Configuration::updateValue('BSKSLIDER_TRANSITION', $transition_string);
            $res &= Configuration::updateValue('BSKSLIDER_HEIGHT', $heightOption);
            $res &= Configuration::updateValue('BSKSLIDER_AUTOADVANCE', $autoAdvanceOption);
            $res &= Configuration::updateValue('BSKSLIDER_LOADER', $loaderOption);
            $res &= Configuration::updateValue('BSKSLIDER_PIEDIAMETER', $pieDiameterOption);
            $res &= Configuration::updateValue('BSKSLIDER_NAVIGATION', $navigationOption);
            $res &= Configuration::updateValue('BSKSLIDER_NAVIGATIONHOVER', $navigationHoverOption);
            $res &= Configuration::updateValue('BSKSLIDER_PLAYPAUSE', $playpauseOption);
            $res &= Configuration::updateValue('BSKSLIDER_SKIN', $skinOption);
            $res &= Configuration::updateValue('BSKSLIDER_PIEPOSITION', $piePositionOption);
            $res &= Configuration::updateValue('BSKSLIDER_BARPOSITION', $barPositionOption);
            $res &= Configuration::updateValue('BSKSLIDER_BARDIRECTION', $barDirectionOption);
            $res &= Configuration::updateValue('BSKSLIDER_LOADEROPACITY', $loaderOpacityOption);
            $res &= Configuration::updateValue('BSKSLIDER_PAUSEONCLICK', $pauseOnClickOption);
            $res &= Configuration::updateValue('BSKSLIDER_TIME', $timeOption);
            $res &= Configuration::updateValue('BSKSLIDER_TRANSPERIOD', $transPeriodOption);
            $res &= Configuration::updateValue('BSKSLIDER_PORTRAIT', $portraitOption);
            $res &= Configuration::updateValue('BSKSLIDER_LOADERBGCOLOR', $loaderBgColorOption);
            $res &= Configuration::updateValue('BSKSLIDER_LOADERCOLOR', $loaderColorOption);
            $res &= Configuration::updateValue('BSKSLIDER_FULLWIDTH', $fullwidthOption);
			if (!$res)
				$errors[] = $this->displayError($this->l('Configuration could not be updated'));
			$this->_html .= $this->displayConfirmation($this->l('Configuration updated'));
		} /* Process Slide status */
		elseif (Tools::isSubmit('changeStatus') && Tools::isSubmit('id_slide'))
		{
			$slide = new BskSlide((int)Tools::getValue('id_slide'));
			if ($slide->active == 0)
				$slide->active = 1;
			else
				$slide->active = 0;
			$res = $slide->update();
			$this->_html .= ($res ? $this->displayConfirmation($this->l('Configuration updated')) : $this->displayError($this->l('Configuration could not be updated')));
		}
		/* Processes Slide */
		elseif (Tools::isSubmit('submitSlide'))
		{
			/* Sets ID if needed */
			if (Tools::getValue('id_slide'))
			{
				$slide = new BskSlide((int)Tools::getValue('id_slide'));
				if (!Validate::isLoadedObject($slide))
				{
					$this->_html .= $this->displayError($this->l('Invalid id_slide'));
					return;
				}
			}
			else
				$slide = new BskSlide();
			/* Sets position */
			$slide->position = (int)Tools::getValue('position');
			/* Sets active */
			$slide->active = (int)Tools::getValue('active_slide');

			/* Sets each langue fields */
			$languages = Language::getLanguages(false);
			foreach ($languages as $language)
			{
				if (Tools::getValue('title_'.$language['id_lang']) != '')
					$slide->title[$language['id_lang']] = pSQL(Tools::getValue('title_'.$language['id_lang']));
                if (Tools::getValue('url_'.$language['id_lang']) != '')
					$slide->url[$language['id_lang']] = pSQL(Tools::getValue('url_'.$language['id_lang']));
				if (Tools::getValue('description_'.$language['id_lang']) != '')
					$slide->description[$language['id_lang']] = pSQL(Tools::getValue('description_'.$language['id_lang']));
				/* Uploads image and sets slide */
				$type = strtolower(substr(strrchr($_FILES['image_'.$language['id_lang']]['name'], '.'), 1));
				$imagesize = array();
				$imagesize = @getimagesize($_FILES['image_'.$language['id_lang']]['tmp_name']);
				if (isset($_FILES['image_'.$language['id_lang']]) &&
					isset($_FILES['image_'.$language['id_lang']]['tmp_name']) &&
					!empty($_FILES['image_'.$language['id_lang']]['tmp_name']) &&
					!empty($imagesize) &&
					in_array(strtolower(substr(strrchr($imagesize['mime'], '/'), 1)), array('jpg', 'gif', 'jpeg', 'png')) &&
					in_array($type, array('jpg', 'gif', 'jpeg', 'png')))
				{
					$temp_name = tempnam(_PS_TMP_IMG_DIR_, 'PS');
					$salt = sha1(microtime());
					if ($error = ImageManager::validateUpload($_FILES['image_'.$language['id_lang']]))
						$errors[] = $error;
					elseif (!$temp_name || !move_uploaded_file($_FILES['image_'.$language['id_lang']]['tmp_name'], $temp_name))
						return false;
					elseif (!ImageManager::resize($temp_name, dirname(__FILE__).'/images/'.Tools::encrypt($_FILES['image_'.$language['id_lang']]['name'].$salt).'.'.$type) || !ImageManager::resize($temp_name, dirname(__FILE__).'/images/'.Tools::encrypt($_FILES['image_'.$language['id_lang']]['name'].$salt).'_thumb.'.$type, 200, 70))
						$errors[] = $this->displayError($this->l('An error occurred during the image upload.'));
					if (isset($temp_name))
						@unlink($temp_name);
					$slide->image[$language['id_lang']] = pSQL(Tools::encrypt($_FILES['image_'.($language['id_lang'])]['name'].$salt).'.'.$type);
				}
				elseif (Tools::getValue('image_old_'.$language['id_lang']) != '')
					$slide->image[$language['id_lang']] = pSQL(Tools::getValue('image_old_'.$language['id_lang']));
			}

			/* Processes if no errors  */
			if (!$errors)
			{
				/* Adds */
				if (!Tools::getValue('id_slide'))
				{
					if (!$slide->add())
						$errors[] = $this->displayError($this->l('Slide could not be added'));
				} /* Update */
				elseif (!$slide->update())
					$errors[] = $this->displayError($this->l('Slide could not be updated'));
			}
		} /* Deletes */
		elseif (Tools::isSubmit('delete_id_slide'))
		{
			$slide = new BskSlide((int)Tools::getValue('delete_id_slide'));
			$res = $slide->delete();
			if (!$res)
				$this->_html .= $this->displayError('Could not delete');
			else
				$this->_html .= $this->displayConfirmation($this->l('Slide deleted'));
		}

		/* Display errors if needed */
		if (count($errors))
			$this->_html .= $this->displayError(implode('<br />', $errors));
		elseif (Tools::isSubmit('submitSlide') && Tools::getValue('id_slide'))
			$this->_html .= $this->displayConfirmation($this->l('Slide updated'));
		elseif (Tools::isSubmit('submitSlide'))
			$this->_html .= $this->displayConfirmation($this->l('Slide added'));
	}

	public function _prepareHook()
	{
		$slider = array(
			'transition'        => Configuration::get('BSKSLIDER_TRANSITION'),
                        'thumb'             => Configuration::get('BSKSLIDER_THUMB'),
                        'height'            => Configuration::get('BSKSLIDER_HEIGHT'),
                        'autoadvance'       => Configuration::get('BSKSLIDER_AUTOADVANCE'),
                        'loader'            => Configuration::get('BSKSLIDER_LOADER'),
                        'navigation'        => Configuration::get('BSKSLIDER_NAVIGATION'),
                        'navigationhover'   => Configuration::get('BSKSLIDER_NAVIGATIONHOVER'),
                        'playpause'         => Configuration::get('BSKSLIDER_PLAYPAUSE'),
                        'skin'              => Configuration::get('BSKSLIDER_SKIN'),
                        'piediameter'       => Configuration::get('BSKSLIDER_PIEDIAMETER'),
                        'pieposition'       => Configuration::get('BSKSLIDER_PIEPOSITION'),
                        'barposition'       => Configuration::get('BSKSLIDER_BARPOSITION'),
                        'bardirection'      => Configuration::get('BSKSLIDER_BARDIRECTION'),
                        'loaderopacity'     => Configuration::get('BSKSLIDER_LOADEROPACITY'),
                        'pauseonclick'      => Configuration::get('BSKSLIDER_PAUSEONCLICK'),
                        'time'              => Configuration::get('BSKSLIDER_TIME'),
                        'transperiod'       => Configuration::get('BSKSLIDER_TRANSPERIOD'),
                        'portrait'          => Configuration::get('BSKSLIDER_PORTRAIT'),
                        'loaderbgcolor'     => Configuration::get('BSKSLIDER_LOADERBGCOLOR'),
                        'loadercolor'       => Configuration::get('BSKSLIDER_LOADERCOLOR')
		);
        
		$slides = $this->getSlides(true);
		if (!$slides) {
            return false;
        } else {
            $newSlides = array();
            foreach ( $slides as $slide ) {
                // slide extension
                $ext = strstr($slide['image'], '.');
                
                // image name for thumb prep
                $dotpos = strpos($slide['image'], '.');
                $image_name = substr($slide['image'], 0, $dotpos);
                
                $thumb = $image_name.'_thumb'.$ext;
                $slide['thumb'] = $thumb;
                array_push($newSlides, $slide);
            }
            $slides = $newSlides;
        }

		$this->smarty->assign('bskslider_slides', $slides);
		$this->smarty->assign('bskslider', $slider);
		return true;
	}
    
        public function hookDisplaySlider() {
        global $smarty;
        
		if(!$this->_prepareHook())
			return;

        $smarty->assign(array(
            'test' => $this->_path
        ));
        
        /* Camera Slider Files */
        $this->context->controller->addCSS($this->_path.'css/camera.css');
        $this->context->controller->addJS($this->_path.'scripts/camera.min.js');
        
        /* BskSlider Files*/
        $this->context->controller->addCSS($this->_path.'css/bskslider.css');
        $this->context->controller->addJS($this->_path.'scripts/bskslider.js');
        
        if( Configuration::get('BSKSLIDER_FULLWIDTH') == 'on' ) {
            $this->context->smarty->assign(array(
                'HOOK_FULLWIDTHSLIDER'   => 'on'
            ));
        }
        
		return $this->display(__FILE__, 'bskcameraslider.tpl');
	}
        
	public function hookDisplayHome() {
        global $smarty;
        
		if(!$this->_prepareHook())
			return;

        $smarty->assign(array(
            'test' => $this->_path
        ));
        
        /* Camera Slider Files */
        $this->context->controller->addCSS($this->_path.'css/camera.css');
        $this->context->controller->addJS($this->_path.'scripts/camera.min.js');
        
        /* BskSlider Files*/
       $this->context->controller->addCSS($this->_path.'css/bskslider.css');
        $this->context->controller->addJS($this->_path.'scripts/bskslider.js');
        
        if( Configuration::get('BSKSLIDER_FULLWIDTH') == 'on' ) {
            $this->context->smarty->assign(array(
                'HOOK_FULLWIDTHSLIDER'   => 'on'
            ));
        }
        
		return $this->display(__FILE__, 'bskcameraslider.tpl');
	}
    
    public function hookdisplayFullWidthSlider()
	{
        global $smarty;
        
		if(!$this->_prepareHook())
			return;

		return $this->display(__FILE__, 'bskcameraslider.tpl');
	}

	public function hookActionShopDataDuplication($params)
	{
		Db::getInstance()->execute('
		INSERT IGNORE INTO '._DB_PREFIX_.'bskslider (id_bskslider_slides, id_shop)
		SELECT id_bskslider_slides, '.(int)$params['new_id_shop'].'
		FROM '._DB_PREFIX_.'bskslider
		WHERE id_shop = '.(int)$params['old_id_shop']);
	}

	public function headerHTML()
	{
		if (Tools::getValue('controller') != 'AdminModules' && Tools::getValue('configure') != $this->name)
			return;

		$this->context->controller->addJqueryUI('ui.sortable');
		/* Style & js for fieldset 'slides configuration' */
		$html = '
		<style>
		#slides li {
			list-style: none;
			margin: 0 0 4px 0;
			padding: 10px;
			background-color: #F4E6C9;
			border: #CCCCCC solid 1px;
			color:#000;
		}
		</style>
		<script type="text/javascript" src="'.__PS_BASE_URI__.'js/jquery/jquery-ui.will.be.removed.in.1.6.js"></script>
		<script type="text/javascript">
			$(function() {
				var $mySlides = $("#slides");
				$mySlides.sortable({
					opacity: 0.6,
					cursor: "move",
					update: function() {
						var order = $(this).sortable("serialize") + "&action=updateSlidesPosition";
						$.post("'._PS_BASE_URL_.__PS_BASE_URI__.'modules/'.$this->name.'/ajax_'.$this->name.'.php?secure_key='.$this->secure_key.'", order);
						}
					});
				$mySlides.hover(function() {
					$(this).css("cursor","move");
					},
					function() {
					$(this).css("cursor","auto");
				});
			});
		</script>';

		return $html;
	}

	public function getNextPosition()
	{
		$row = Db::getInstance(_PS_USE_SQL_SLAVE_)->getRow('
				SELECT MAX(hss.`position`) AS `next_position`
				FROM `'._DB_PREFIX_.'bskslider_slides` hss, `'._DB_PREFIX_.'bskslider` hs
				WHERE hss.`id_bskslider_slides` = hs.`id_bskslider_slides` AND hs.`id_shop` = '.(int)$this->context->shop->id
		);

		return (++$row['next_position']);
	}

	public function getSlides($active = null)
	{
		$this->context = Context::getContext();
		$id_shop = $this->context->shop->id;
		$id_lang = $this->context->language->id;

		return Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS('
			SELECT hs.`id_bskslider_slides` as id_slide,
					   hssl.`image`,
					   hss.`position`,
					   hss.`active`,
					   hssl.`title`,
					   hssl.`url`,
					   hssl.`legend`,
					   hssl.`description`
			FROM '._DB_PREFIX_.'bskslider hs
			LEFT JOIN '._DB_PREFIX_.'bskslider_slides hss ON (hs.id_bskslider_slides = hss.id_bskslider_slides)
			LEFT JOIN '._DB_PREFIX_.'bskslider_slides_lang hssl ON (hss.id_bskslider_slides = hssl.id_bskslider_slides)
			WHERE (id_shop = '.(int)$id_shop.')
			AND hssl.id_lang = '.(int)$id_lang.
			($active ? ' AND hss.`active` = 1' : ' ').'
			ORDER BY hss.position');
	}

	public function displayStatus($id_slide, $active)
	{
		$title = ((int)$active == 0 ? $this->l('Disabled') : $this->l('Enabled'));
		$img = ((int)$active == 0 ? 'disabled.gif' : 'enabled.gif');
		$html = '<a href="'.AdminController::$currentIndex.
				'&configure='.$this->name.'
				&token='.Tools::getAdminTokenLite('AdminModules').'
				&changeStatus&id_slide='.(int)$id_slide.'" title="'.$title.'"><img src="'._PS_ADMIN_IMG_.''.$img.'" alt="" /></a>';
		return $html;
	}

	public function slideExists($id_slide)
	{
		$req = 'SELECT hs.`id_bskslider_slides` as id_slide
				FROM `'._DB_PREFIX_.'bskslider` hs
				WHERE hs.`id_bskslider_slides` = '.(int)$id_slide;
		$row = Db::getInstance(_PS_USE_SQL_SLAVE_)->getRow($req);
		return ($row);
	}
}