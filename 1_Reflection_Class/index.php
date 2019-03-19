<?php 

require_once __DIR__.'/autoload.php';


$rc = new ReflectionClass('App\User');

# debug(get_class_methods($rc));

echo $rc->getShortName() , '<br>'; // User
echo $rc->getName() , '<br>'; // App\User


if($rc->hasMethod('isLoggedIn'))
{
	 echo '<strong>Has</strong>'; // Has
}