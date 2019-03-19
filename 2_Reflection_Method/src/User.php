<?php 
namespace App;


class User 
{

	   protected $loggedIn = false;
	   protected $data = [];


	   public function getData($foo)
	   {
	   	    // echo 'invoked';
	   	    // echo $foo;
	   	    
            return 'foo bar';
	   	    // return $this->data;
	   }


	   public function setData($data)
	   {
	   	    $this->data = $data;
	   }


	   public function isLoggedIn()
	   {
	   	   return $this->loggedIn;
	   }
}