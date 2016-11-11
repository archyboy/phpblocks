<?php

class Block_Finish extends \System\Block {
            
    public function __construct() {        
        $this->view = new \System\View(parent::$config->TEMPLATE_ACTIVE_DIRECTORY . 't_finish.php');
        $this->view->execute();
    }
}