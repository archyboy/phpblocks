<?php
//Autoload's classes without having to include them manualy each time

function __autoload($class)
{
    //$parts = explode('_', $class);
    //$path = 'system/' . strtolower(implode(DIRECTORY_SEPARATOR,$parts));
    $path = str_replace('\\', "/", strtolower($class)) . '.php';
        require_once $path;
}
