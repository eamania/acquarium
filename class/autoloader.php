<?php
 
//    function __autoload($class_name) {
//    include $class_name . '.php';
//}

class autoloader {

    public static $loader;

    public static function init() {
        if (self::$loader == NULL)
            self::$loader = new self();
        return self::$loader;
    }

    public function __construct() {
        spl_autoload_register(array($this, 'myclass'));
    }

    public function myclass($class) {
        set_include_path(get_include_path() . PATH_SEPARATOR . 'class');
        spl_autoload($class);
        
    }

}

//call
autoloader::init();
?>
