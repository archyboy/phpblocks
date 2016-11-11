<?php
namespace System;

class Block extends \System\Application {

    public function __construct($blockname) {
        $path = parent::$config->BLOCK_DIRECTORY . $blockname . '.php';
        if(file_exists($path)) {
            require_once $path;
            if(class_exists($blockname)) {
                parent::$blocks[$blockname] = new $blockname;
            } else {
                echo '<br>' . __CLASS__ . ': Class <b>' . $blockname . '</b> is not defined or syntax error<br>';
            }
        } else {
            echo '<br>File: ' . parent::$config->BLOCK_DIRECTORY . '<b>' . $blockname . '</b> does not exists or miss spelled in declaration<br>';
        }
    }
}
