<?php

$dsn = "mysql:dbname=projeto_caixaeletronico;port=3306;host=mysql";
$dbuser="root";
$dbpass="master";

try {

    $pdo = new PDO($dsn, $dbuser, $dbpass);

} catch (PDOException $e) {

    echo "Falhou: ".$e->getMessage ();

};
?>