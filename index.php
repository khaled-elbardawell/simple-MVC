<?php 
define("DS",DIRECTORY_SEPARATOR);
define("APP_PATH",realpath(dirname(__FILE__)));
require APP_PATH.DS.'app'.DS.'config.php';
require APP_PATH.DS.'Libs'.DS.'autoloader.php';
spl_autoload_register( array('autoloader','autoloaderController' ));
spl_autoload_register( array('autoloader','autoloaderModel' ));
spl_autoload_register( array('autoloader','autoloaderLib' ));


 $app=new app();
