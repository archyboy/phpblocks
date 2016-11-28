<?php

class Block_Finish extends \System\Block {

    public function __construct() {
        $this->view = new \System\View(\System\Application::$config->TEMPLATE_ACTIVE_DIRECTORY . 't_finish.php');
        $this->view->execute();
    }
}
