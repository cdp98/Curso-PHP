<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Cadastro</title>
        <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1"/>
        <link rel="stylesheet" href="<?=$base;?>/assets/css/login.css" />
    </head>
    <body>
        <header>
            <div class="container">
                <a href=""><img src="<?=$base;?>/assets/images/devsbook_logo.png" /></a>
            </div>
        </header>
        <section class="container main">
            <form method="POST" action="">
            <?php if(!empty($flash)):?>
                <div class="flash">
                    <?=$flash;?>
                </div>
            <?php endif?>
                <input placeholder="Digite seu nome" class="input" type="text" name="name" />

                <input placeholder="Digite sua data de nascimento" class="input" id="date-mask" type="text" name="birthDate" />

                <input placeholder="Digite seu e-mail" class="input" type="email" name="email" />

                <input placeholder="Digite sua senha" class="input" type="password" name="password" />

                <input class="button" type="submit" value="Cadastrar" />

                <a href="<?=$base;?>/login">Já está cadastrado? Login</a>
            </form>
        </section>
        <script src="https://unpkg.com/imask"></script>
        <script>
            IMask(
                document.getElementById('date-mask'),
                {
                    mask: '00/00/0000',
                    min: new Date(1950, 0, 1),
                    max: new Date(2020, 0, 1)
                }
            );
        </script>
    </body>
</html>