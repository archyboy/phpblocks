<?php

namespace System;

class View extends \System\Application {
    public $filepath;
    public $data;

    public function __construct($filepath) {
        $this->filepath = $filepath;
    }

	function add($name, $value) {
            $this->data[$name] = $value;
	}

	function showData() {
            foreach ($this->data as $key => $value) {
				\System\Helper::print_pre($value);
            }
	}

	function getData() {
            return $this->data;
	}

        function execute() {
			if(file_exists($this->filepath)) {
				if($this->data) {
					extract($this->data);
				}
				require ($this->filepath);
				\System\Application::$debug->add(get_class($this), 'success', 'Loaded the template file: ' . $this->filepath, __FILE__ . ': ' . __LINE__);
			} else {
				\System\Application::$debug->add(get_class($this), 'fail', 'Could NOT load the template file: ' . $this->filepath, __FILE__ . ': ' . __LINE__);
			}

        }

	function load() {
            $this->content = '<pre>' . htmlspecialchars(file_get_contents($this->filepath)) . '</pre>';
	}

        public function get() {
            return $this->content;
        }

	function show() {
            echo $this->content;
	}

        function clean () {
            $this->content = null;
        }
}

?>
