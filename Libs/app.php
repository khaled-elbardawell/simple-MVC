<?php 

 class app{
 	private $_controller;
 	private $_action;
 	private $_param = array();
 	public function __construct()
 	{
     if (isset($_GET['url'])) {
         $this->urlProcessing($_GET['url']);
         try{
         	$control =  new $this->_controller();
          if (!empty($this->_action)) {
          	if ( method_exists ( $control ,  $this->_action ) ) {
          	  $control->{$this->_action}($this->_param);
          	}
          }
         }catch(Throwable  $e){
            echo "<script>alert('not found class !!  ')</script>";

             header("Location: http://localhost/MVC");
             //exit;
             echo "cxcxcx";
         }
          
          
        }
 	}

 	public function urlProcessing($url)
 	{
	     
	    $url = trim($url,'/');
	    $url = explode('/', $url);
	    $sizeUrl=sizeof($url);

	    if ($sizeUrl == 1) {
	      $this->_controller = $url[0];
	    }else if($sizeUrl == 2){
	      $this->_controller = $url[0];
	      $this->_action = $url[1];
	    }else if($sizeUrl >= 2){
          $this->_controller = $url[0];
	      $this->_action = $url[1];
	      $this->_action = $url[1];

	     for ($i=2; $i <sizeof($url) ; $i++) { 
	        $this->_param[$i-2] =$url[$i];
	     }

	    }
	     

	 	}

    }