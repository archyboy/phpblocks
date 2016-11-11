<?php

namespace System;

class Model extends \System\Application {
    public $validate;
    public $data;
    public $mysqli;
    public $query;
    public $table;
    public $result;
    public $sql;

    public function __construct($validate = null) {
        if($validate) {
            $this->validate = $validate;
            $this->data = $this->validate->get_cleandata();
        }
        $this->data[datetime] = date('y-m-d h:m:s');
        $this->data[status] = 'active';
        $this->connect();
    }

    public function connect() {
        $this->mysqli = mysqli_connect(parent::$config->DB_HOST, parent::$config->DB_USERNAME, parent::$config->DB_PASSWORD, parent::$config->DB_DATABASE);
        if (mysqli_connect_errno($this->mysqli)) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
    }

    public function query ($sql) {
        $this->sql = $sql;
        $this->query = $this->mysqli->query($this->sql);
    }


    public function fetch($datatype = null) {
        //if($datatype == 'object') {  while($this->result[] = $this->query->fetch_object()) {} }
        //else { while($this->result[] = $this->query->fetch_assoc()) {} }
        if($datatype == 'object') {  $this->result = $this->query->fetch_object();  }
        else { $this->result = $this->query->fetch_assoc(); }
    }

    public function setTable($table) {
        $this->table = $table;
    }

    public function insert () {
        if(!$this->validate->get_errors() && $this->validate->get_cleandata()) {
            foreach ($this->data as $key => $value) {
                $key = trim($key);
                $value = trim($value);
                $key_str .= $key . ", ";
                $value_str .= "'" . $value  . "'" . ", ";
            }
            $key_pos = strripos($key_str, ',');
            $value_pos = strripos($value_str, ',');
            $key_str[$key_pos] = '';
            $key_str = '(' . rtrim($key_str) . ')';
            $value_str[$value_pos] = '';
            $value_str = '(' . rtrim($value_str) . ')';
            if(count($this->data) >= 1) {
                $this->sql = "INSERT INTO `$this->table` '$key_str' VALUES '$value_str'";
                $this->query = $this->mysqli->query($this->sql);
            }
            if($this->query) {
                return true;
            }
            //echo $sql_str;
             echo '<br>' . $this->mysqli->error;
        } else {
            parent::$debug->add( 'No data to insert into database. Hint: $model->data = $data_array');
        }
    }
}
?>
