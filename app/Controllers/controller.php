<?php 


 class controller
 {
 	
 	public function Action( $arr)
 	{
 	   if (sizeof($arr) == 0) {
       	echo "no event !! ";
       }
       else if (sizeof($arr) == 1) {
       	$this->event($arr);
       }else if (sizeof($arr) == 2) {
       	$this->event2($arr);
       }else if (sizeof($arr) > 2) {
       	$this->event3($arr);
       }
 	 
 	}

 	public function event($arr)
 	{
 	  	 echo "controller class >> ".$arr[0]. " !! <br> ";
 	}

 	public function event2($arr)
 	{
 	  	 foreach ($arr as $val) {
 	  	 	echo "controller class >> ".$val. " !! <br> ";
 	  	 }
 	}

 	public function event3($arr)
 	{
 	  	 foreach ($arr as $val) {
 	  	 	echo "controller class >> ".$val. " !! <br> ";
 	  	 }
 	}
 }