<?php

$dsn = "mysql:dbname=projeto_caixaeletronico;port=3306;host=mysql";
$dbuser="root";
$dbpass="master";

try {
    $pdo = new PDO($dsn, $dbuser, $dbpass);

    $nome= "Carlos";
    $agencia= "7894";
    $conta= "5379";
    $senha="8567";
    $saldo= "2897.59";

    $sql = "INSERT INTO contas SET titular='$nome', agencia='$agencia', conta='$conta', senha='$senha', saldo'$saldo'";
    $sql = $pdo->query($sql);

    echo "Usuário inserido: ".$pdo->lastInsertId();

} catch (PDOException $e) {

    echo "Falhou: ".$e->getMessage ();

}

?>