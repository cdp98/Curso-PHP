<?php
require 'config.php';
$id = 0;
if (isset($_GET['id']) && empty($_GET['id']) == false) {
    $id = addslashes($_GET['id']);
}else {
    header("location: index.php");
};

if (isset($_POST['titular']) && empty($_POST['titular'])==false) {

    $titular = addslashes($_POST['titular']);
    $agencia = addslashes($_POST['agencia']);
    $conta = addslashes($_POST['conta']);
    $saldo = addslashes($_POST['saldo']);

    $sql = "UPDATE contas
            SET
                titular = '$titular',
                agencia = '$agencia',
                conta = '$conta',
                saldo = '$saldo'
            WHERE id = '$id'";
    $sql = $pdo->query($sql);

    header("location: index.php");
}

$sql = "SELECT * FROM contas WHERE id = '$id'";
$sql = $pdo->query($sql);
if ($sql->rowCount() > 0) {
    $dado = $sql->fetch();
}else {
    header("location: index.php");
};
?>
<form method="POST">
    Nome:</br>
    <input type="text" name="titular" value="<?php echo $dado['titular']?>"/></br>
    Agencia:</br>
    <input type="text" name="agencia" value="<?php echo $dado['agencia']?>"/></br>
    Conta:</br>
    <input type="text" name="conta" value="<?php echo $dado['conta']?>"/></br>
    Saldo:</br>
    <input type="text" name="saldo" value="<?php echo $dado['saldo']?>"/></br>
    </br>
    <input type="submit" value="Atualizar" />
</form>
