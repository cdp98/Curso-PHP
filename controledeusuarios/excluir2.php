<?php
require 'config2.php';

if (isset($_GET['id']) && empty($_GET['id'] == false)) {
    $id = addslashes($_GET['id']);

    $sql = "DELETE FROM tabela WHERE id = '$id' ";
    $sql = $pdo->query($sql);

    header("location: index2.php");
}else {
    header("location: index2.php");
};
?>