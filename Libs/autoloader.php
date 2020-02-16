<?php


class autoloader{

   public static function autoloaderController($classname)
   {
   	 if (file_exists(CONTROLLER_PATH.DS.$classname.".php")) {
   	 
   	  require_once CONTROLLER_PATH.DS.$classname.".php";
      }
    }

    public static function autoloaderModel($classname)
   {
   	   if (file_exists(MODEL_PATH.DS.$classname.".php")) { 
   	   require_once MODEL_PATH.DS.$classname.".php";
         }
    }

    public static function autoloaderLib($classname)
   {
       if (file_exists(LIB_PATH.DS.$classname.".php")) { 
       require_once LIB_PATH.DS.$classname.".php";
         }
    }


    

}  