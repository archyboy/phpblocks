<?php


class Block_Index extends \System\Block {

    public function __construct() {
        $model = new \System\Model;
        $model->query("SELECT * FROM users WHERE id='$_SESSION[user]'");
        $model->fetch('object');
        $this->data_object = $model->result;

        $model = new \System\Model;
        $model->query("SELECT * FROM users WHERE id='$_SESSION[user]'");
        $model->fetch();
        $this->data_array = $model->result;

        $this->view = new \System\View(parent::$config->TEMPLATE_ACTIVE_DIRECTORY . 't_index.php');
        $this->view->add('TITLE', 'Learning page');
        $this->view->add('BUILDER', \System\Application::$builder);
        $this->view->execute();



    }
}
