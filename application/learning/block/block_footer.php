<?php

class Block_Footer extends \System\Block {

    public function __construct() {
        $this->view = new \System\View(\System\Application::$config->TEMPLATE_ACTIVE_DIRECTORY . 't_footer.php');
        $this->view->execute();
    }
}
?>
