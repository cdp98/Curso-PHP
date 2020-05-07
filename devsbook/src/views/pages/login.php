<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Login</title>
        <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1"/>
        <link rel="stylesheet" href="<?=$base;?>/assets/css/login.css" />
        <link rel="stylesheet" href="<?=$base;?>/assets/css/sweetalert.css" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>
    <body class="bodyy">
        <header>
            <div class="container">
                <a href=""><img src="<?=$base;?>/assets/images/devsbook_logo.png" /></a>
            </div>
        </header>
        <section class="container main">
            <form method="POST" class="js-form" action="">
            <?php if(!empty($flash)):?>
                <div class="flash">
                    <?=$flash;?>
                </div>
            <?php endif?>
                <input placeholder="Digite seu e-mail" class="input js-email" type="email" name="email" />

                <input placeholder="Digite sua senha" class="input js-password" type="password" name="password" />

                <input class="button js-button" type="submit" value="Acessar o sistema" />

                <a href="<?=$base;?>/cadastro">Ainda não tem conta? Cadastre-se</a>
            </form>
        </section>
        <script type="text/javascript" src="<?=$base?>/assets/js/jquery-3.5.0.min.js"></script>
        <script type="text/javascript" src="<?=$base?>/assets/js/sweetalert.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script>
            $(function () {
                $('.js-button').bind('click', function () {
                    var email = $('.js-email').val();
                    var password = $('.js-password').val();
                    if (email) {
                        if(password) {
                            var email = email;

                            $('.js-form').submit(function() {
                                return true;
                            });
                        }else {
                            $('.js-form').submit(function() {
                            return false;
                            });
                            swal('Insira sua senha ', 'Aviso!', 'warning');
                        }
                    }else {
                        $('.js-form').submit(function() {
                            return false;
                        });
                        swal('Insira um email válido', 'Aviso!', 'warning');
                    }
                });
            });
        </script>
    </body>
</html>