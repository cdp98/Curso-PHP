<?php
session_start();
require 'config.php';
if (isset($_POST['tipo'])) {
    $tipo = $_POST['tipo'];
    $valor = str_replace(",",".",$_POST['valor']);
    $valor = floatval($valor);

    $sql = $pdo->prepare("INSERT INTO historico SET id_conta = :id_conta, tipo = :tipo,
     valor = :valor, data_operacao = NOW()");
    $sql->bindValue(":id_conta", $_SESSION['banco']);
    $sql->bindValue(":tipo", $tipo);
    $sql->bindValue(":valor", $valor);
    $sql->execute();

    if ($tipo == '0') {
        // Depósito
        $sql = $pdo->prepare("UPDATE contas SET saldo = saldo + :valor WHERE id = :id");
        $sql->bindValue(':valor', $valor);
        $sql->bindValue(':id', $_SESSION['banco']);
        $sql->execute();

    }else {
        // Saque
        $sql = $pdo->prepare("UPDATE contas SET saldo = saldo - :valor WHERE id = :id");
        $sql->bindValue(':valor', $valor);
        $sql->bindValue(':id', $_SESSION['banco']);
        $sql->execute();
    }
    header("Location: index.php");
    exit;
}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Adicionar Transação</title>
    </head>
    <body>
        <form method="POST">
            <h3>Tipo de Transação: </h3>
            <select name="tipo">
                <option></option>
                <option value="0">Deposito</option>
                <option value="1">Saque</option>
            </select>
            <h3>Valor:</h3>
            <input type="text" name="valor" pattern="[0-9.,]{1,}"></br></br>
            <input type="submit" value="Adicionar">
        </fomr>
    </body>
</html>