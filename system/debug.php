<?php

namespace System;

class Debug extends Application {
    protected $records;
    
    public function __construct() {
        parent::$debug = $this;
    }
    
    public function add($code, $where = null, $text) {
        $this->records[$code][$where]['text'] = $text;
    }

    public function get() {
        return $this->records;
    }
    
    public function show() {
        $view = new \System\View(parent::$config->TEMPLATE_ACTIVE_DIRECTORY . 't_debug.php');
        $view->add('RECORDS', $this->records);
        $view->execute();
    }
    
    public function loader($builder = null) {
        if($builder) {
            $builder->View();    
        } else {}
        $loader = new \System\Builder('debug');
        $loader->View();
    }    
}

?>