<?php
session_start ();
//sessaõ é para guardar informação até fechar o navegador.//
setcookie ("meuteste", "fulano", time()+3600);
//o coockie é para guardar informação conforme o tempo que for determinado.//

$_SESSION ["teste"] = "Carlos Daniel";

echo "minha sessão foi setada. </br>";
echo "meu nome é: ".$_SESSION["teste"];
echo "</br>";
echo "</br>";

echo "coockie setado com sucesso. </br>";
echo "meu coockie é de: ".$_COOKIE["meuteste"];
?>