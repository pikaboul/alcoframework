<?php

require_once('./autoloader.php');
Autoloader::register(); 

$engine = new engine();

$path = ltrim($_SERVER['REQUEST_URI'], '/');    // Trim leading slash(es)
$elements = explode('/', $path);                // Split path on slashes
if(count($elements) == 1)                       // No path elements means home
    ShowHomepage();
else
{
    include_once('./' . $elements[1] . '.php');
}

?>
