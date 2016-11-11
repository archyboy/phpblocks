<?php

/*
 * Copyright 2016 Anders Habberstad. All rights reserved!
 * This source code is made by Anders Habberstad.
 * Contact me on habberstad@mail.com before any reuse or redistrubution of this code.
 */

namespace System;

class Builder extends \System\Application {
    public $request_array = array();
    public $url_array = array();
    public $form_array = array();
    public $varval_array = array();

    public $url;
    public $buildername;
    public $builderfile;
    public $projectname;

    public function __construct ($request, $redirect = null) {
        parent::$builder = $this;

        $this->request_array = $request;
        $this->url = rtrim($this->request_array['url'], '/');
        $this->url_array = explode('/', str_replace(' ', null, $this->url));

        $this->debug = new Debug;


        if($this->url_array[0][0] == '@') {
            $this->projectname = strtolower(ltrim($this->url_array[0], '@'));
            if($this->url_array[1]) {
               $this->buildername = $this->url_array[1];
            } else {
              $this->buildername = 'index';
              $this->url_array[1] = $this->buildername;
            }
             //Helper::print_pre(\System\Application::$config);
            array_shift($this->url_array);
        } else {
          $this->projectname = 'default';
          $this->buildername = 'index';
        }
        //\System\Application::$config->set('APPLICATION_NAME', (string)$this->projectname);
        \System\Application::$config = new Config((string)$this->projectname); //
            array_shift($this->url_array);

            $tmp_array = $this->request_array;
            array_shift($tmp_array);

            $this->form_array = $tmp_array;

            if(!empty($this->url_array)) {
                foreach($this->url_array as $key => $value) {
                    $tmp_array[$key] = explode( '=', $value);
                }
                foreach($tmp_array as $key => $value) {
                    $this->varval_array[$value[0]] = $value[1];
                }
            }
            if(!empty($this->form_array)) {
                foreach($this->form_array as $key => $value) {
                    $this->varval_array[$key] = $value;
                }
            }
        $this->builderfile = \System\Application::$config->get('BUILDER_DIRECTORY') . 'builder_' . $this->buildername . '.php';

        if(!$redirect) {
              if (!is_file($this->builderfile)) {
                \System\Application::$debug->add('FAIL', __CLASS__, 'Could NOT find the builder file: ' . $this->builderfile . ' in ' . __FILE__ . ':' . __LINE__);
              } else {
                    \System\Application::$debug->add('SUCCESS', __CLASS__, 'Included the builder file ' . $this->builderfile . ' in ' .   __FILE__ . ':' . __LINE__);
                    require_once $this->builderfile;
            }
        } else {
        header('Location: ' . $url);
        }
    }
}
