<?php

require_once('./autoloader.php');
Autoloader::register();

session_start();

$ADMIN = isset($_SESSION['admin']) ? $_SESSION['admin'] : false;

$path = ltrim($_SERVER['REQUEST_URI'], '/');    // Trim leading slash(es)
$elements = explode('/', $path);                // Split path on slashes
if($elements[0] == "")                       // No path elements means home
	include_once('./home.php');
else
{
    include_once('./' . $elements[0] . '.php');
}

?>
