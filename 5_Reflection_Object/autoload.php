<?php 

define('DS', DIRECTORY_SEPARATOR);
define('ROOT', __DIR__);
define('SRC', 'src');

//>
$paths = [
 'App\\' => 'src'
];
//>

spl_autoload_register(function($class) {
    
    $class = str_replace('App\\', SRC.DS, $class);
    $file = sprintf('%s%s.php', ROOT.DS, $class);
    if(file_exists($file))
    {
    	require_once($file);
    	return true;
    }

    return false;
});



function debug($arr, $die = false)
{
	echo '<pre>';
	print_r($arr);
	echo '</pre>';
	if($die) die;
}