<?php

function somarNumero ($x, $y) {
    $conta = $x + $y;
    return $conta;
}
$resultado = somarNumero(10, 20);

echo "Resultado = ".$resultado;
echo "</br></br>";

function mostraNome () {
    return "Daniel";
}

echo "Meu nome é = ".mostraNome ();
?>