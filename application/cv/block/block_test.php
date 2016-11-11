<?php

class Block_Test extends \System\Block {

    public function __construct() {
      //echo '<br>' . parent::$config->TEMPLATE_ACTIVE_DIRECTORY;
        //\System\Helper::print_pre(\System\Application::$config);
        $this->view = new \System\View(parent::$config->TEMPLATE_ACTIVE_DIRECTORY . 't_index.php');
        $this->view->add('TITLE', 'My page');
        $this->view->execute();
    }
}
