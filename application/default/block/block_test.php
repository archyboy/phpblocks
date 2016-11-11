<?php


class Block_Test extends \System\Block {

    public function __construct() {
        $model = new \System\Model;
        $model->query("SELECT * FROM users WHERE id='$_SESSION[user]'");
        $model->fetch('object');
        $this->data_object = $model->result;

        $this->view = new \System\View(parent::$config->TEMPLATE_ACTIVE_DIRECTORY . 't_test.php');
        $this->view->add('TITLE', 'My page');
        $this->view->add('MODEL', $model);
        $this->view->execute();
    }
}
