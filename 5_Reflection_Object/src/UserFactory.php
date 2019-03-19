<?php 
namespace App;


class UserFactory
{
      
	  public function create(string $objName): UserInterface
	  {
	  	   return new $objName;
	  }
}