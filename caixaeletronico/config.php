<?php
$db = "mysql:dbname=projeto_caixaeletronico;port=3306;host=mysql";
$dbuser = "root";
$dbpass = "master";

try {
    $pdo = new PDO($db, $dbuser, $dbpass);
} catch (PDOException $e) {
    echo "Erro: ".$e->getMessage();
}