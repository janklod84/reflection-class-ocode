<?php 

require_once __DIR__.'/autoload.php';

$user = new User();

if($user->isLoggedIn())
{
	  echo 'You are logged in';
}