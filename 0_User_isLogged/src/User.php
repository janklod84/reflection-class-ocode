<?php 


class User 
{

	   protected $loggedIn = false;
	   protected $data = [];


	   public function getData()
	   {
	   	    return $this->data;
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