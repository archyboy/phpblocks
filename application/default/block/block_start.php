<?php


class Block_Start extends \System\Block {

    public function __construct() {

        $this->view = new \System\View(parent::$config->TEMPLATE_ACTIVE_DIRECTORY . 't_start.php');
        $this->view->add('HTML_SHIT', array('ARRAY_SHIT' => 'Some new array shit'));
        $this->view->add('TITLE','Blocks Framework');
        $this->view->add('CSS_URL',\System\Application::$config->get('CSS_URL') . 'layout.css');
        $this->view->add('CSS_JQUERY_URL',\System\Application::$config->get('THIRDPARTY_URL') . 'jquery/jquery-ui.css');
        $this->view->add('JS_URL',\System\Application::$config->get('JS_URL') . 'helper.js');
        $this->view->add('JS_TEMPLATE_URL',\System\Application::$config->get('JS_TEMPLATE_URL') . 'main.js');
        $this->view->add('JS_JQUERY_URL',\System\Application::$config->get('THIRDPARTY_URL') . 'jquery/jquery-2.1.3.js');
        $this->view->add('JS_JQUERY_UI_URL',\System\Application::$config->get('THIRDPARTY_URL') . 'jquery-ui/jquery-ui.js');
        $this->view->execute();

    }
}
