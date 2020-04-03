<?php
require 'config.php';
if (isset($_POST ['titular']) && empty($_POST ['titular']) == false) {
    $titular = addslashes($_POST['titular']);
    $agencia = addslashes($_POST['agencia']);
    $conta = addslashes($_POST['conta']);
    $saldo = addslashes($_POST['saldo']);
    $senha = addslashes($_POST['senha']);

    $sql= "INSERT INTO contas SET titular = '$titular', agencia = '$agencia', conta = '$conta', saldo = '$saldo', senha = '$senha'";
    $sql= $pdo->query($sql);

    header("location: index.php");

};
?>

<form method="POST">
    Nome:</br>
    <input type="text" name="titular"/></br>
    Agencia:</br>
    <input type="text" name="agencia"/></br>
    Conta:</br>
    <input type="text" name="conta"/></br>
    Saldo:</br>
    <input type="text" name="saldo"/></br>
    Senha:</br>
    <input type="password" name="senha"/></br>
    </br>
    <input type="submit" value="Cadastrar" />
</form>