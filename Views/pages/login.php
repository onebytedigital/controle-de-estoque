<?php \DAO\UsuarioDAO::autenticarUsuario(); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Intitmidade Confecções - Login</title>
    
    <!--Estilos-->
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH_FULL ?>css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH_FULL ?>css/fontawesome.css">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH_FULL ?>css/aos.css">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH_FULL ?>css/slick.css">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH_FULL ?>css/slick-theme.css">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH_FULL ?>css/style.css">
</head>
<body>
    <section class="login h-100">
        <div class="container-fluid h-100">
            <div class="row h-100">
                <div class="col-12 col-md-5 col-lg-4 left">
                    <div class="d-flex flex-wrap align-items-center align-content-center w-100 h-100">
                        <h1 class="icon text-center w-100">
                            <img src="<?php echo INCLUDE_PATH_FULL ?>img/logo.png" alt="">
                        </h1>
                        <h2 class="subtitle w-100 text-center">Intimidade <b>Confecções</b></h2>
                    </div>
                </div>
                <div class="col-12 col-md-7 col-lg-8 right">
                    <div class="d-flex flex-wrap align-items-center align-content-center w-100 h-100">
                        <h1 class="text-center w-100 title">Faça <b>Login</b></h1>
                        <form class="form d-flex flex-wrap mx-auto w-100" method="post">
                            <input class="input w-100" type="text" name="usuario" placeholder="Nome de Usuário...">
                            <input class="input w-100" type="password" name="senha" placeholder="Sua senha...">
                            <input class="btn btn-primary btn-large w-100" type="submit" name="logar" value="Entrar!">
                        </form>
                    </div>
                </div>
            </div>
        </div><!--container-->
    </section><!--agenda-->


<script src="<?php echo INCLUDE_PATH_FULL ?>js/jquery.js"></script>
<script src="<?php echo INCLUDE_PATH_FULL ?>js/bootstrap.js"></script>
<script src="<?php echo INCLUDE_PATH_FULL ?>js/fontawesome.js"></script>
<script src="<?php echo INCLUDE_PATH_FULL ?>js/aos.js"></script>
<script src="<?php echo INCLUDE_PATH_FULL ?>js/slick.js"></script>
<script src="<?php echo INCLUDE_PATH_FULL ?>js/main.js"></script>
</body>
</html>