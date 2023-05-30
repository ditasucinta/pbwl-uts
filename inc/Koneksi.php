<?php

class Koneksi {

    public $db;

    public function __construct() {
        $this->db = new PDO("mysql:host=localhost;dbname=kede_kopi", "root", "");
    }
}

?>