<?php

use System\Block;

class Block_Factory extends \System\Block {

    public function __construct() {
        $callback = function ($callback = null) {
            echo '<br>This function is registered!';
        };

        $factory = new \System\Factory;
        $factory->add_method($callback);
        \System\Helper::print_pre(\System\Application::$config);
        $factory->add_method(\System\Config::class);

        $methods = $factory->get_methods();
        foreach ($methods as $key => $value) {
            if (is_callable($value)) {
                call_user_func($value);
                echo '<br>Callable';
            } else {
                echo '<br>Not callable: ' . $value;
            }
        }

        echo '<br>Callback: ' . \System\Helper::print_pre($new_callback);
    }

}
