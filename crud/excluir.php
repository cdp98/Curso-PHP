<?php
require 'config.class.php';
require 'contato.class.php';
$contato = new Contato;
if (!empty($_GET['email'])) {
    $email = $_GET['email'];

    $contato->excluir($_GET['email']);

    header("Location: index.teste.php");
}else {
    header("Location: index.teste.php");
}
