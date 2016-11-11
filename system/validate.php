<?php

namespace System;

class Validate extends \System\Application {
    private $data = array();
    private $errors = array();
    private $cleandata = array();

    public function __construct($data = null) {

        $this->data = $data;
            if($this->data) {
            foreach ($this->data as $key => $value) {
                if(!$value) {
                    $this->errors[$key] = ' has no data!';
                } else {
                    $this->cleandata[$key] = $value;
                }
            }
        }
        parent::$validates[] = $this;
    }
    
    public function get_errors() {
        return $this->errors;
    }

    public function get_data() {
        return $this->data;
    }
    
    public function get_cleandata() {
        return $this->cleandata;
    }
    
    public function check_login($model) {
        if(($model->result[0][email] != $this->cleandata[email])) {
             $this->errors[email] = 'Login failed: Cannot find any members with that email!';
        } 
        elseif(($model->result[0][email] == $this->cleandata[email]) && ($model->result[0][password] != $this->cleandata[password])) {
             $this->errors[password] = 'Login failed: You password is wrong!';  
        }        
        else {
           return true;
        }
    }
    

}

 