<?php
require 'config.class.php';
require 'contato.class.php';
$contato = new Contato();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <title>Tabela</title>
    </head>
    <body>
        <div class="container">
            <h1>Contatos</h1>
            <table class="table table-hover table-dark">
                <tr>
                    <th>ID</th>
                    <th>NOME</th>
                    <th>E-MAIL</th>
                    <th>AÇÕES</th>
                </tr>
                <?php
                    $lista = $contato->getAll();
                    foreach ($lista as $item) {
                        echo '<tr>';
                        echo '<td>'.$item['id'].'</td>';
                        echo '<td>'.$item['nome'].'</td>';
                        echo '<td>'.$item['email'].'</td>';
                        echo '<td>
                                <a href="editar.php?id='.$item['id'].'"><button type="button" class="btn btn-primary">Editar</button></a>
                                <a href="editartudo.php?id='.$item['id'].'"><button type="button" class="btn btn-secondary">Editar Tudo</button></a>
                                <a href="excluir.php?email='.$item['email'].'"><button type="button" class="btn btn-danger">Excluir</button></a>
                            </td>';
                        echo '</tr>';

                    }
                ?>
            </table>
            <?php echo '<a href="adicionar.php"><button type="button" class="btn btn-primary">Adicionar novo contato</button></a>';?>
        </div>
    </body>
</html>
