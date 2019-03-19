<?php 
namespace App;


class UserRepository
{
      
	  private $user;
	  
	  
	  public function __construct(UserInterface $user)
	  {
	  	    $this->user = $user;
	  }
}