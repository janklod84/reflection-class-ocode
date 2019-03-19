<?php 
namespace App;


class UserRepository
{
     
	  public function __construct(UserInterface $user)
	  {
	  	    $this->user = $user;
	  }
}