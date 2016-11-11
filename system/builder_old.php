<?php

namespace System;

class Builder extends \System\Application {
    public $url;
    public $url_array;
    public $filelist;      
    
    public function __construct ($url, $redirect = null) {
        parent::$builder = $this;

        $this->url = rtrim($url, '/'); 
        
        $this->url_array = explode('/', str_replace(' ', null, $this->url));
        if($this->url_array[0] == null) {
            array_unshift($this->url_array, 'index');
            $last_key = count($this->url_array) - 1;
            if(empty($this->url_array[$last_key])) array_pop($this->url_array);
        }
        //Helper::print_pre($this->url_array);
        for($i = 0; $i < count($this->url_array); $i++) {
            $builder_file = \System\Application::$config->BUILDER_DIRECTORY . 'builder_' . $this->url_array[$i] . '.php';
            $this->filelist[] = $builder_file;
        } 
        if(!$redirect) {
            foreach ($this->filelist as $key => $value) {
              if (!file_exists($value)) {
                \System\Application::$debug->add(__CLASS__, 'fail', 'Could NOT find the builder file: ' . $value , __FILE__. ':' . __LINE__);
              } else {
                if($key == 0) {
                    require_once $value;
                    \System\Application::$debug->add(__CLASS__, 'success', 'Included the builder file: ' . $value , __FILE__ . ':' . __LINE__);
                }
              }
            }
        } else {
        header('Location: ' . $url);
        }
    }
}