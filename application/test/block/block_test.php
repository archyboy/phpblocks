<?php

class Block_Test extends \System\Block {

    public function __construct() {
        $this->view = new \System\View(\System\Application::$config->TEMPLATE_ACTIVE_DIRECTORY . 't_test.php');
        //$this->view->add('TITLE', 'Test page');
        //$this->view->add('LOGO', \System\Application::$config->get('TEMPLATE_ACTIVE_URL') . \System\Application::$config->get('IMAGE_URL') . 'logo.png');
        $this->view->execute();


        //$globals = \System\Helper::convert_array_to_obj_recursive($GLOBALS);
        $globals_encoded = strtolower(json_encode(array("server" => $_SERVER, "get" => $_GET, "post" => $_POST, "request" => $_REQUEST)));
        //echo $globals_encoded;

        $globals_decoded = json_decode($globals_encoded);

        \System\Helper::print_pre($globals_decoded);

        echo $globals_decoded->server->redirect_status;

        //\System\Helper::print_pre($GLOBALS);
        //\System\Helper::print_pre(\System\Application::$builder);
    }
}
