<?php

$dsn = "mysql:dbname=projeto_caixaeletronico;port=3306;host=mysql";
$dbuser="root";
$dbpass="master";

try {
    $pdo = new PDO($dsn, $dbuser, $dbpass);
    // proteção contra erros.//
    $sql = "SELECT * FROM contas";
    $sql = $pdo->query($sql);

    if ($sql->rowCount()>0) {
        foreach ($sql->fetchAll() as $contas) {
            echo "Nome: ".$contas["titular"]." - contas: ".$contas["conta"]."</br>";
        }
    }else {
        echo "não há usuários.";
    };

}catch (PDOExcception $e) {
    echo"Falhou: ".$e->getMessage();
    //mensagem que vai aparecer caso tenha um erro.//
};


?>