<?php 
namespace App;


class User 
{

	   protected $loggedIn = false;
	   protected $data = [
          'username' => 'Janklod',
          'password' => 'password',
          'lastSeen' => '2014-05-15 10:05:32'
	   ];


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