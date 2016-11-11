<?php

class Block_Test extends \System\Block {
            
    public function __construct() {        
        $this->view = new \System\View(\System\Application::$config->TEMPLATE_ACTIVE_DIRECTORY . 't_test.php');
        //$this->view->add('TITLE', 'Test page');
        //$this->view->add('LOGO', \System\Application::$config->get('TEMPLATE_ACTIVE_URL') . \System\Application::$config->get('IMAGE_URL') . 'logo.png');
        $this->view->execute();
        
        //\System\Helper::print_pre(\System\Application::$blocks);
        //\System\Helper::print_pre(\System\Application::$builder);
    }
}
