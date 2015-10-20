<?php

require_once('./autoloader.php');
Autoloader::register();

$path = ltrim($_SERVER['REQUEST_URI'], '/');    // Trim leading slash(es)
$elements = explode('/', $path);                // Split path on slashes
if($elements[0] == "")                       // No path elements means home
	include_once('./home.php');
else
{
    include_once('./' . $elements[0] . '.php');
}

?>
