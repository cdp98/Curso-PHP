<?php
require 'config.php';
?>
<table border="0" width="100%">
    <tr>
        <th>Titular</th>
        <th>Conta</th>
        <th>Saldo</th>
        <th>Ações</th>
    </tr>
    <?php
    $sql = "SELECT * FROM contas";
    $sql = $pdo->query($sql);
    if ($sql->rowCount() > 0) {
        foreach ($sql->fetchAll() as $contas) {
            echo '<tr>';
            echo '<td>'.$contas['titular'].'</td>';
            echo '<td>'.$contas['conta'].'</td>';
            echo '<td>'.$contas['saldo'].'</td>';
            echo '<td><a href="editar.php?id='.$contas['id'].'">Editar</a> - <a href="excluir.php?id='.$contas['id'].'">Excluir</a></td>';
            echo '</tr>';
        }
    }
    ?>
</table>

<a href="adicionar.php">Adicionar Usuário</a>