<?php
require 'config2.php';
?>
<table border="0" width="80%">
    <tr>
        <th>Nome</th>
        <th>E-mail</th>
        <th>Saldo</th>
        <th>Ações</th>
    </tr>
    <?php
    $sql = "SELECT * FROM tabela";
    $sql = $pdo->query($sql);
    if ($sql->rowCount() > 0) {
        foreach ($sql->fetchAll() as $tabela) {
            echo '<tr>';
            echo '<td>'.$tabela['nome'].'</td>';
            echo '<td>'.$tabela['e-mail'].'</td>';
            echo '<td>'.$tabela['saldo'].'</td>';
            echo '<td><a href="editar2.php?id='.$tabela['id'].'">Editar</a> - <a href="excluir2.php?id='.$tabela['id'].'">Excluir</a></td>';
            echo '</tr>';
        }
    }
    ?>
</table>