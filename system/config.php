<?php

namespace System;
use System\Config;

class Config  {
    protected $property;

    public function __construct($projectname = null, $buildername = null) {
        // Application namespace
        $this->set('APPLICATION_TITLE' , 'PHP Blocks - Made for building application block by block');

        // Defaults
        if(!empty($projectname)) { $this->set('PROJECT_NAME' , $projectname);  }
        if(!empty($buildername)) { $this->set('BUILDER_NAME' , $buildername); }

        if(empty($this->get('PROJECT_NAME'))) { $this->set('PROJECT_NAME' , 'default'); echo $this->get('PROJECT_NAME'); }
        if(empty($this->get('BUILDER_NAME'))) { $this->set('BUILDER_NAME' , 'index'); }



        // Active url
        $this->set('ACTIVE_URL' , $this->get_active_url($_SERVER[REQUEST_URI]));

        // Specials
        $this->set('DS' , '/');

        // Directories constant
        $this->set('ROOT_DIRECTORY' , dirname(__DIR__) . $this->DS);
        $this->set('ROOT_PATH' , realpath(dirname(__FILE__) . '/../') . '/');
        $this->set('SYSTEM_DIRECTORY' , $this->ROOT_DIRECTORY . 'system/');
        $this->set('THIRDPARTY_DIRECTORY' , $this->ROOT_DIRECTORY . '3rdparty/');
        $this->set('UPLOAD_DIRECTORY' , $this->PROJECT_DIRECTORY . 'upload/');
        $this->set('APPLICATION_DIRECTORY' , $this->ROOT_DIRECTORY . 'application/');

        // Directories variables
        $this->set('PROJECT_DIRECTORY' , $this->APPLICATION_DIRECTORY . strtolower($this->PROJECT_NAME) . $this->DS);
        $this->set('BUILDER_DIRECTORY' , $this->PROJECT_DIRECTORY . 'builder/');
        $this->set('BLOCK_DIRECTORY' , $this->PROJECT_DIRECTORY . 'block/');
        $this->set('TEMPLATE_DIRECTORY' , $this->PROJECT_DIRECTORY . 'template/');
        $this->set('TEMPLATE_ACTIVE_DIRECTORY' , $this->TEMPLATE_DIRECTORY . 'default/');

        // Directories assets
        $this->set('IMAGE_DIRECTORY' , $this->PROJECT_DIRECTORY . 'image/');
        $this->set('AUDIO_DIRECTORY' , $this->PROJECT_DIRECTORY . 'audio/');
        $this->set('CSS_DIRECTORY' , $this->PROJECT_DIRECTORY . 'css/');
        $this->set('JS_DIRECTORY' , $this->PROJECT_DIRECTORY . 'js/');

        // URL's
        $this->set('ROOT_URL' , 'http://' . $_SERVER['SERVER_NAME'] . $this->DS . 'mywork/blocks' . $this->DS);
        //$this->set('SYSTEM_URL' , $this->ROOT_URL . 'system/');
        //$this->set('APPLICATION_URL' , $this->ROOT_URL . 'application/');
        $this->set('PROJECT_URL' , $this->ROOT_URL . '@' . $this->PROJECT_NAME . $this->DS);
        $this->set('THIRDPARTY_URL' , $this->ROOT_URL . '3rdparty/');
        $this->set('TEMPLATE_URL' , $this->PROJECT_URL . 'template/');
        $this->set('TEMPLATE_ACTIVE_URL' , $this->TEMPLATE_URL . 'default/');
        $this->set('UPLOAD_URL' , $this->APPLICATION_URL . 'upload/');
        $this->set('IMAGE_URL' , $this->TEMPLATE_ACTIVE_URL . 'image/');
        $this->set('AUDIO_URL' , $this->TEMPLATE_ACTIVE_URL . 'audio/');
        $this->set('CSS_URL' , $this->TEMPLATE_ACTIVE_URL . 'css/');
        $this->set('JS_URL' , $this->TEMPLATE_ACTIVE_URL . 'js/');

        // Database
        $domain = $_SERVER[SERVER_NAME];
        $ip = gethostbyname($domain);
        if ($ip == '178.79.155.84') {
            $this->set('DB_HOST' , 'localhost');
            $this->set('DB_DATABASE' , 'blocks');
            $this->set('DB_USERNAME' , 'root');
            $this->set('DB_PASSWORD' , 'Syntomaten2016');
        } else {
            $this->set('DB_HOST' , 'localhost');
            $this->set('DB_DATABASE' , 'blocks');
            $this->set('DB_USERNAME' , 'root');
            $this->set('DB_PASSWORD' , 'xzxz');
        }
        //parent::$config = $this;
    }


    public function get($property = null) {
        if($property) {
            return $this->$property;
        } else {
            return $this->config_array;
        }
    }

    public function set($property, $value) {
        $this->$property = $value;
        \System\Application::$config = $this;
    }

    public function get_active_url($url) {
        $url_array = explode('/', $url);
        $active_url = $url_array[2];
        return $active_url;
    }
}


?>
