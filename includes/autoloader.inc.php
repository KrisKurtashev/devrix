<?php
spl_autoload_register('myAutoLoader');

function myAutoLoader($className) {
	$url = $_SERVER['HTTP_HOST']. '/wp-content/themes/twentytwentyone-child/';
	if (strpos(__DIR__, 'xampp') !== false)
    {
        $url = 'C:/xampp/htdocs/projects/Devrix/wp-content/themes/twentytwentyone-child/';
    }

	if (strpos($url, 'includes') !== false) {
		$path = '../classes/';
	} else {
		$path = "classes/";
	}

    $className = strtolower($className);
	$extension = ".class.php";
	$fullPath = $url. $path . $className . $extension;

	if (!file_exists($fullPath)) {
		return false;
	}


	require_once $fullPath;
}