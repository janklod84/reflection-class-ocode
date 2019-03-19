<?php 

require_once __DIR__.'/autoload.php';


$user = new App\User;

$ro = new ReflectionObject($user); 

# GET FILE NAME
echo $ro->getFileName();

$data = file_get_contents($ro->getFileName());

// debug($data);

file_put_contents($ro->getFileName(), str_replace('App', 'Janklod', $data));


# PRINT OUT ALL CLASS METHOD
debug(get_class_methods($ro));






