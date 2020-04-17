<?php $render('header'); ?>

<h2>Adicionar novo Usuário</h2>

<form method="POST" action="<?=$base?>/adicionar">
    <label>
        Nome:</br>
        <input type="text" name="nome"></br></br>
    </label>
    <label>
        E-mail:</br>
        <input type="email" name="email"></br></br>
    </label>
    <label>
        Senha:</br>
        <input type="password" name="senha"></br></br>
    </label>
    <label>
        <input type="submit" value="Salvar">
    </label>
</from>
<?php $render('footer'); ?>