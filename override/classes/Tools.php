<?php

class Tools extends ToolsCore{
    
    /**
     * Calculate columns grid based on what columns are hidden
     */
    public static function calcColumnGrid() {
        $context = Context::getContext();
        /* set grid for columns */
        $hide_left_column = $context->smarty->getVariable('hide_left_column')->value;
        $hide_right_column = $context->smarty->getVariable('hide_right_column')->value;
        
        $center_column_grid = 6;
        if($hide_left_column or $hide_right_column){
            if($hide_left_column xor $hide_right_column){ // (!left right) or (left !right)
                $center_column_grid = 9;
            } else { // !left !right
                $center_column_grid = 12;
            }
        }
        
        $context->smarty->assign('center_column_grid', $center_column_grid);
    }
    
    /**
     * Create smarty functions for Bootstrap responsive
     * 
     * @param Smarty $smarty
     */
    public static function init_bsresponsive(&$smarty) {
        smartyRegisterFunction($smarty, 'function', 'bsvisible', array('Tools', 'bsvisible')); // @see Tools::bsvisible()
    }
    
    /**
     * Smarty function for Bootstrap responsive utilities classes
     * Return class only when bootstrap is responsive.
     * Eg. {bsvisible val='true' media='md'}
     * 
     * @param type $param
     * @param type $smarty
     * @return string
     * @throws SmartyException
     */
    public static function bsvisible($param, &$smarty){
        if( !array_key_exists('val', $param) || !is_bool($param['val']) ) throw new SmartyException('Bootstrap echo parameter val is missing or invalid.');
        if( !array_key_exists('media', $param) || !in_array($param['media'], array('xs','sm','md','lg'))  ) throw new SmartyException('Bootstrap echo parameter media is missing or invalid.');
        
        extract($param);
        $is_responsive = $smarty->getVariable('is_responsive')->value;
        if( $is_responsive || $media == 'lg' ){
            if($val) return 'visible-'.$media;
            else return 'hidden-'.$media;
        } else if($val) return 'hidden-lg';
        else return '';
    }
    
}
