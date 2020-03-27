<?php
// foreach processa uma listagem de arrays. Para cada item//
$nome = array (
    "Daniel",
    "Fulano",
    "Beltrano",
    "Cicrano"
);

foreach ($nome as $outro) {
    echo "Alunos: ".$outro."</br>";
}

echo "</br></br>";

$serie = array (
    array ("nome" => "Daniel", "idade" => "22"),
    array ("nome" => "Beltrano", "idade" => "22"),
    array ("nome" => "Fulano", "idade" => "22"),
    array ("nome" => "Cicrano", "idade" => "22"),
);
foreach ($serie as  $aluno) {
    echo "Aluno: ".$aluno ["nome"];
    echo " idade: ".$aluno ["idade"] ;
    echo "</br>";
};

echo "</br></br>";

$pessoa = array (
    "nome" => "Daniel",
    "idade" => "22, anos",
    "estado" => "SP",
    "pais" => "BR"
);
foreach ($pessoa as $chave => $dado) {
    echo $chave. " = ".$dado."</br>";
};
?>