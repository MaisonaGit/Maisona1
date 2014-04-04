<?php

class Hook extends HookCore{
    
    /**
     * Test if hook has modules set
     * 
     * @param string $hook_name The name of the hook
     * @return boolean
     */
    public static function hookHasModules($hook_name)
    {
        $module_list = Hook::getHookModuleExecList($hook_name);
        if( !is_array($module_list) ) return false;
        //check exceptions
        $context = Context::getContext();
	foreach ($module_list as $array){
            if (!($moduleInstance = Module::getInstanceByName($array['module'])))
                    continue;
            
            // blocklayered module is displayed only on category pages
            if($array['module'] == 'blocklayered'){
                $category = (int)Tools::getValue('id_category', Tools::getValue('id_category_layered', 1));
                if($category == 1)
                    continue;
            }

            // Check permissions
            $exceptions = $moduleInstance->getExceptions($array['id_hook']);
            $controller = Dispatcher::getInstance()->getController();

            if (in_array($controller, $exceptions))
                    continue;

            //retro compat of controller names
            $matching_name = array(
                    'authentication' => 'auth',
                    'compare' => 'products-comparison',
                    );
            if (isset($matching_name[$controller]) && in_array($matching_name[$controller], $exceptions))
                    continue;
            if (Validate::isLoadedObject($context->employee) && !$moduleInstance->getPermission('view', $context->employee))
                    continue;

            return true;
        }
        return false;
    }
    
    /**
     * Insert position into DB
     * 
     * @param string $name      technical name
     * @param string $title     title to display in BO > Modules > Positions
     * @param string $desc      description
     */
    public static function addPosition($name, $title, $desc)
    {
        DB::getInstance()->insert('hook', array(
            'name'          =>  $name,
            'title'         =>  $title,
            'description'   =>  $desc
        ));
    }
    
    /**
     * Delete position from DB
     * 
     * @param string/array $posName   technical name
     */
    public static function delPosition($posName)
    {
        if( is_string($posName) ){
            DB::getInstance()->delete('hook', 'name="'.$posName.'"');
        } else if(is_array($posName) ){
            foreach ($posName as $name) {
                self::delPosition($name);
            }
        }
    }
}

