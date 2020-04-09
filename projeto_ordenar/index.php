<?php
require 'config.php';
 if (isset($_GET['ordem'])&& empty($_GET['ordem'])== false) {
        $ordem = addslashes($_GET['ordem']);
        $sql = "SELECT * FROM usuarios ORDER BY ".$ordem;
    }else{
        $ordem = "";
        $sql = "SELECT * FROM usuarios";
    }
        $sql = $pdo->query($sql);
?>
<form mthod="GET">
    Ordenar:
    <select name="ordem" onchange="this.form.submit()">
        <option></option>
        <option value="nome" <?php echo($ordem=="nome")?'selected="selected"':'';?> >Pelo nome</option>
        <option value="idade" <?php echo($ordem=="idade")?'selected="selected"':'';?> >Pela idade</option>
    </select>
</form>
<table border="1" width="50%">
    <tr>
        <th>Nome</th>
        <th>Idade</th>
    </tr>
    <?php
        if ($sql->rowCount() > 0) {
            foreach ($sql->fetchAll() as $usuarios):
        ?>
                <tr>
                    <td><?php echo $usuarios["nome"];?></td>
                    <td><?php echo $usuarios["idade"];?></td>
                </tr>
        <?php
            endforeach;
        }
        ?>
</table>
