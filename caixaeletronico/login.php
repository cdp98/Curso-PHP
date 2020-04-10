<?php
session_start();
require 'config.php';

if(isset($_POST['agencia']) && empty($_POST['agencia']) == false) {
    $agencia = addslashes($_POST['agencia']);
    $conta = addslashes($_POST['conta']);
    $senha = addslashes($_POST['senha']);

    $sql = $pdo->prepare("SELECT * FROM contas WHERE agencia = :agencia AND conta = :conta AND senha = :senha");
    $sql->bindValue(":agencia", $agencia);
    $sql->bindValue(":conta", $conta);
    $sql->bindValue(":senha", $senha);
    $sql->execute();

    if($sql->rowCount() > 0) {
        $sql = $sql->fetch();

        $_SESSION['banco'] = $sql['id'];

        header("Location: index.php");
        exit;
    }else {
        echo"Usuario não encontrado";
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
    </head>
    <body>
        <form method="POST">
            <h3>Agência:</h3>
            <input type="text" name="agencia"></br>
            <h3>Conta:</h3>
            <input type="text" name="conta"></br>
            <h3>Senha:</h3>
            <input type="password" name="senha"></br></br>
            <input type="submit" value="Entrar"/>
        </form>
    </body>
</html>