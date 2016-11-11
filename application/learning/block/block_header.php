<?php

class Block_Header extends \System\Block {

    public function __construct() {
        $this->view = new \System\View(\System\Application::$config->TEMPLATE_ACTIVE_DIRECTORY . 't_header.php');
        $this->view->add('BUILDER', \System\Application::$builder);
        $this->view->add('ROOT_URL', \System\Application::$config->get('ROOT_URL'));
        $this->view->execute();
    }
}
?>