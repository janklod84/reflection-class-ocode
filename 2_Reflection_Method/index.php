<?php 

require_once __DIR__.'/autoload.php';


$rm = new ReflectionMethod('App\User', 'getData');

# debug(get_class_methods($rm));

# echo $rm->isPublic();


$user = new App\User;

// $rm->invoke($user);
// $rm->invokeArgs($user, ['hello world']);

$foobar = $rm->invokeArgs($user, ['hello world']);
echo $foobar;


