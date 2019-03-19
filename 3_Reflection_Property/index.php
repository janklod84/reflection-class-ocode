<?php 

require_once __DIR__.'/autoload.php';


$user = new App\User;

$rp = new ReflectionProperty($user, 'data');

// Permettre l'access aux proprietes privees ou protegees
$rp->setAccessible(true);


// echo $rp->getName(); data
// echo $rp->isProtected(); true
// echo $rp->isStatic();


debug($rp->getValue($user));

debug(get_class_methods($rp));



