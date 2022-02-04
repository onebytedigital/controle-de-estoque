<?php \Controllers\UsuarioController::logout(); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Intitmidade Confecções - Estoque</title>
    
    <!--Estilos-->
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH_FULL ?>css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH_FULL ?>css/fontawesome.css">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH_FULL ?>css/aos.css">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH_FULL ?>css/slick.css">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH_FULL ?>css/slick-theme.css">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH_FULL ?>css/style.css">
</head>
<body>
    <section class="estoque h-100">
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
                    <h1 class="bem-vindo">Bem-vindo, <b>Usuário</b></h1>
                    <a class="logout" href="?logout">Sair</a>

                    <div class="controle-estoque">
                        <h1 class="title">Controle de Estoque</h1>
                        <span>
                            <a href="@" class="btn btn-new"><i class="fa fa-plus"></i> Novo</a>
                        </span>
                        <div class="table-container">
                            <table class="table">
                                <tr>
                                    <th>SKU</th>
                                    <th>GTIN</th>
                                    <th>Descrição</th>
                                    <th>Qtd</th>
                                    <th>Opções</th>
                                </tr>
                                <tr class="tr-hover">
                                    <td>CBSPP-pp</td>
                                    <td>7897452365214</td>
                                    <td>Camiseta Básica São Padre Pio - PP</td>
                                    <td>5</td>
                                    <td>
                                        <a href="#" class="btn btn-primary btn-small">Alterar</a>
                                    </td>
                                </tr>
                            </table>
                        </div>
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