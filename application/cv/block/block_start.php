<?php


class Block_Start extends \System\Block {

    public function __construct() {
        $this->view = new \System\View(parent::$config->TEMPLATE_ACTIVE_DIRECTORY . 't_start.php');
        $this->view->add('TITLE','CV - Anders Habberstad');
        $this->view->execute();

    }
}
