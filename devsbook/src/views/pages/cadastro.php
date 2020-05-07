<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Cadastro</title>
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
            <form class="js-form" method="POST" action="<?=$base;?>/cadastro">
                <input placeholder="Digite seu nome" class="input js-name" type="text" name="name" />

                <input placeholder="Digite sua data de nascimento" class="input js-birthdate" id="date-mask" type="text" name="birthdate" />

                <input placeholder="Digite seu e-mail" class="input js-email" type="email" name="email" />

                <input placeholder="Digite sua senha" class="input js-password" type="password" name="password" />

                <input class="button js-button" type="submit" value="Cadastrar" />

                <a href="<?=$base;?>/login">Já está cadastrado? Login</a>
            </form>
        </section>
        <script src="https://unpkg.com/imask"></script>
        <script type="text/javascript" src="<?=$base?>/assets/js/jquery-3.5.0.min.js"></script>
        <script type="text/javascript" src="<?=$base?>/assets/js/sweetalert.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script>
            $(function () {
                $('.js-button').bind('click', function () {
                    var name = $('.js-name').val();
                    var birthdate = $('.js-birthdate').val();
                    var email = $('.js-email').val();
                    var password = $('.js-password').val();
                    if (name) {
                        if(birthdate) {
                            if (email) {
                                if (password) {
                                    console.log(name);
                                    $('.js-form').submit(function() {
                                        return true;
                                    });
                                }else {
                                    $('.js-form').submit(function() {
                                        return false;
                                    });
                                    swal('Insira uma senha', 'Aviso!', 'warning');
                                }
                            }else {
                                $('.js-form').submit(function() {
                                    return false;
                                });
                                swal('Insira um email válido', 'Aviso!', 'warning');
                            }
                        }else {
                            $('.js-form').submit(function() {
                            return false;
                            });
                            swal('Insira sua data de nascimento', 'Aviso!', 'warning');
                        }
                    }else {
                        $('.js-form').submit(function() {
                            return false;
                        });
                        swal('Insira seu nome', 'Aviso!', 'warning');
                    }
                });
            });
        </script>
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