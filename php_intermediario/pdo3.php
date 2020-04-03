<?php
$dsn = "mysql:dbname=projeto_caixaeletronico;port=3306;host=mysql";
$dbuser="root";
$dbpass="master";

try {
    $pdo = new PDO($dsn, $dbuser, $dbpass);

    $sql = "UPDATE contas SET agencia = '3214' WHERE agencia ='4862'";
    $sql = $pdo->query($sql);

    echo "Usuário alterado com sucesso.";
}  catch (PDOException $e) {

    echo "Falhou: ".$e->getMessage ();

}

?>