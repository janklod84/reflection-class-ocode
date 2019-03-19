<?php 

require_once __DIR__.'/autoload.php';


$user = new App\User;

# 0 signifit le premier parametre, parameter a l'index 0
// $rp = new ReflectionParameter([$user, 'setData'], 0); 
// echo $rp->isOptional(); verify if is optional parameter


# 1 signifit le second parametre, parameter a l'index 1
$rp = new ReflectionParameter([$user, 'setData'], 1); 
echo $rp->isOptional();

 
//debug(get_class_methods($rp));





