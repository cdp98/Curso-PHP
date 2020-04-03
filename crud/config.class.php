<?php

class Config {

    public $pdo = null;

    public function __construct() {

        $dsn= "mysql:dbname=crudoo;port=3306;host=mysql;";
        $dbuser= "root";
        $dbpass= "master";

        try {
            $this->pdo = new PDO($dsn, $dbuser, $dbpass);
        } catch (PDOException $e) {
            echo "Erro: ".$e->getMessage();
        }

    }
}
?>