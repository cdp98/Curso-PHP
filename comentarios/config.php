<?php
$db = "mysql:dbname=comentarios;port=3306;host=mysql";
$dbuser = "root";
$dbpass = "master";

try {
    $pdo = new PDO($db, $dbuser, $dbpass);
} catch (PDOException $e) {
    echo "Erro ao se conectar: ".$e->getMessage();
}