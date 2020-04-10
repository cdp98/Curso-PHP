<?php
session_start();
require 'config.php';
if (isset($_SESSION['banco'])&& !empty($_SESSION['banco'])) {
    $id = $_SESSION['banco'];

    $sql = $pdo->prepare("SELECT * FROM contas WHERE id = :id");
    $sql->bindValue(':id', $id);
    $sql->execute();

    if ($sql->rowCount()>0) {
        $info = $sql->fetch();
    }else {
        header("Location: login.php");
    }
}else {
    header('Location: login.php');
}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Caixa Eletrônico</title>
    </head>
    <body>
        <div>
            <h1>Banco Piedade</h1>
            Agência: <?php echo $info['agencia'];?> </br>
            Conta:  <?php echo $info['conta'];?> </br>
            Saldo: <?php echo $info['saldo'];?> </br></br>
            <a href="sair.php"><button>Sair</button></a>
        </div>
        <hr>
        <div>
            <a href="add-transcao.php"><button>Adicionar Transação</button></a>
        </div>
        <div>
            <h2>Movimentaçõ/Extrato</h2>
            <table border="1" width="60%">
                <tr>
                    <th>Data</th>
                    <th>Tipo</th>
                    <th>Valor</th>
                </tr>
                <?php
                $sql = $pdo->prepare("SELECT * FROM historico WHERE id_conta = :id_conta");
                $sql->bindValue(":id_conta", $id);
                $sql->execute();

                if ($sql->rowCount() > 0) {
                    foreach($sql->fetchAll() as $item) {
                        ?>
                        <tr>
                            <td><?php echo date('d/m/Y H:i', strtotime($item['data_operacao']));?></td>
                            <td>
                                <?php
                                    if ($item['tipo'] == 0) {
                                        echo "<font color='gree'>Desposito</font>";
                                    }else {
                                        echo "<font color='red'>Saque</font>";
                                    }
                                ?>
                            </td>
                            <td>
                                <?php if($item['tipo'] == '0'): ?>
                                <font color="green">R$ <?php echo $item['valor'] ?></font>
                                <?php else: ?>
                                <font color="red">- R$ <?php echo $item['valor'] ?></font>
                                <?php endif; ?>
                            </td>
                        <?php
                    }
                }else {
                    echo "<h3>Não há transações!</h3>";
                }
                ?>
            </table>
        </div>
    </body>
</html>