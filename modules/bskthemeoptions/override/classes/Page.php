<?php

class Page extends PageCore{
    
    /**
     * The name of the current page
     * 
     * @var string
     */
    private static $page_name;
    /**
     *
     * @var array   key is name of page, value is boolean. Eg. $this->is_page['home'] 
     */
    private static $is_page;

    /**
     * Sets an array to check the name of the page. Use the Page::is($name) function to verify what page it is.
     * Also makes this array available in Smarty.
     * 
     * @static
     */
    public static function setPagesAbbr()
    {
        $context = Context::getContext();
        self::$page_name = $context->smarty->tpl_vars['page_name']->value;
        $is_page = array_fill_keys( 
                array('home','product','category','order','manufacturer','search','contact','authentication','myaccount','history','sitemap'), 
                false);
        
        switch (self::$page_name) {
            case 'index':           $is_page['home'] = true; break;
            case 'product':         $is_page['product'] = true; break;
            case 'category':        $is_page['category'] = true; break;
            case 'order':           $is_page['order'] = true; break;
            case 'manufacturer':    $is_page['manufacturer'] = true; break;
            case 'search':          $is_page['search'] = true; break;
            case 'contact':         $is_page['contact'] = true; break;
            case 'authentication':  $is_page['authentication'] = true; break;
            case 'my-account':      $is_page['myaccount'] = true; break;
            case 'history':         $is_page['history'] = true; break;
            case 'sitemap':         $is_page['sitemap'] = true; break;

            default: break;
        }
        
        $context->smarty->assign('is_page', $is_page);
        
        self::$is_page = $is_page;
    }
    
    /**
     * Test if page is the abbreviated name.
     * 
     * @uses Page::setPagesAbbr() Run this one time before using this method
     * @static
     * 
     * @param string $nameAbbr
     * @return boolean
     */
    public static function is($nameAbbr)
    {
        return self::$is_page[$nameAbbr];
    }
}
