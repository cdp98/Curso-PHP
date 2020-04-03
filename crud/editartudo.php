<?php
require 'config.class.php';
require 'contato.class.php';
$contato = new Contato();
if (!empty($_GET['id'])) {
   $id = $_GET['id'];

   $info = $contato->getInfo($id);
   if (empty($info)) {
       header('Location: index.teste.php');
   }
}else {
    header('Location: index.teste.php');
    exit;
}
?>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css"/>
        <title>Document</title>
    </head>
    <body>
        <form method="POST" action="editartudo_submit.php">
            <div class="corpo">
                <div class="formu">
                    <div class="outra">
                        <input type="hidden" name="id" value="<?php echo $info['id']?>"/>
                        <h3>Nome:</h3>
                        <input type="text" name="nome" value="<?php echo $info['nome'];?>"/></br></br>
                        <h3>E-mail:</h3>
                        <input type="email" name="email" value="<?php echo $info['email'];?>"/></br></br>
                        <button type="submit" class="btn btn-primary">Salvar</button>
                    </div>
                </div>
            </div>
        </form>
    </body>
</html>
