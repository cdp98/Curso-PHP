<?php
//comentario de uma linha
/*
comentario de varias linhas...
denindo o nome da variavel.
*/
$nomec = "Carlos";//string variavel que guarda texto.
$sobrenome = "Daniel";//string smpre fica entre "".
$idade = 22;//inteiro, int, integer variavel que guarda números inteiros
$nota = 7.5;//float que guarda números que não sãointeiros
$ligado = true;//boolean. TRUE/FALSE
$caracteristicas = array (1, 2, 3, 4);


echo "Meu nome eh: ".$nome." ".$sobrenome." e eu tenho ".$idade." anos";

$variavel = array (
    "nome" => "Carlos",
    "sobrenome" => "Daniel" ,
    "idade" => 22 ,
    "sexo" => "masculino"
);

print_r ($_SERVER);
echo "</br>";
echo "asdasdasdasd";
echo "</br>";

define("URL", "http//www.seila.com.br");
define("VERSION", "1.0");

echo "meu site eh: " .URL. " ";
echo "Versão: ".VERSION;

?>