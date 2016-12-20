<?php

require_once 'autoload.php'; // Autoloads classes

//session_start();
//$_SESSION['user'] = 170;
//date_default_timezone_set('Europe/Oslo');

//\System\Application::$config = new \System\Config($projectname = 'default', $buildername = 'index'); // Initiates new Config object



// Slimming down index.php (One line initial application in index file!!!!!!!!!!!!!.....

$test = new \System\Builder($_REQUEST); // New loader object from URL

// echo $test->builderfile;

//\System\Helper::print_pre(\System\Application::$config);
//\System\Helper::print_pre(\System\Application::$config);
//\System\Application::$debug = new \System\Debug; // Initiates new Debug object
//\System\Application::$debug = $debug;
//\System\Application::$devmode = true;
//\System\Helper::print_pre(\System\Application::$builder);
//\System\Helper::print_pre(\System\Application::$blocks);
//\System\Helper::print_pre(\System\Application::$builder);
//\System\Helper::print_pre(\System\Application::$debug);
//\System\Helper::print_pre(\System\Application);
//\System\Helper::print_pre($application::$blocks);
//$data_object = $application::$blocks['block_index']->data_object;
//\System\Helper::print_pre($data_object);
//echo $data_object->username;
