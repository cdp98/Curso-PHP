<?php
$db = "mysql:dbname=projeto_ordenar;port=3306;host=mysql";
$dbuser = "root";
$dbpass = "master";

try {
    $pdo = new PDO($db, $dbuser, $dbpass);
} catch (PDOException $e) {
    echo"Erro na conexão: ".$e->getMessage();
}
?>