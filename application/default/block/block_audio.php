<?php


class Block_Audio extends \System\Block {
            
    public function __construct() {        
        $this->view = new \System\View(parent::$config->TEMPLATE_ACTIVE_DIRECTORY . 't_audio.php');
        //$this->view->add('TITLE', 'My page');
        $this->view->execute();
    }
}