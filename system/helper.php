<?php

namespace System;

class Helper extends \System\Application {

    public static function print_pre($data) {
        echo '<pre>';
        self::code_style_begin('ini');
        print_r($data);
        self::code_style_end();
        echo '</pre>';
    }

    public static function code_style_begin(String $language, String $theme = 'gruvbox-dark') {
        echo '<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.4.0/styles/' . $theme . '.min.css">';
        echo '<script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.4.0/highlight.min.js"></script>';
        echo '<script>hljs.initHighlightingOnLoad();</script> ';
        echo '<pre><code class="' . $language .'" id="codearea">';
    }

    public static function code_style_end() {
        echo ' </code></pre>';
    }
/*
    public static function print_array($data) {
        echo '<pre>';
        foreach ($data as $key => $value) {

            echo PHP_EOL .  $key . '=>' ;
            foreach($value as $key => $value) {
                echo PHP_EOL . $key . '=>';
                foreach($value as $key => $value) {
                echo  PHP_EOL . '=>' . $value;
            }
            }

        }
        echo '</pre>';
    }
*/
    public static function myecho ($data) {
        $view = new \System\View(parent::$config->TEMPLATE_SYSTEM_DIRECTORY . 't_output.php');
        $view->add("DATA", $data);
        $view->execute();
    }
}
