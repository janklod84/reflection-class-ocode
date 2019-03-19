<?php 
namespace App;


class User implements UserInterface
{

	   protected $loggedIn = false;
	   protected $data = [
          'username' => 'Test',
          'password' => 'password',
          'lastSeen' => '2014-05-15 10:05:32'
	   ];


	   public function getData()
	   {
	   	    return $this->data;
	   }


	   public function setData(array $data, $autoSave = false)
	   {
	   	    $this->data = $data;
	   }


	   public function isLoggedIn()
	   {
	   	   return $this->loggedIn;
	   }
}