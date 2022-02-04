<?php

session_start();

define('INCLUDE_PATH','http://localhost/controle-de-estoque/');
define('INCLUDE_PATH_FULL','http://localhost/controle-de-estoque/Views/pages/');

//dados para banco de dados
define('HOST','mysql:host=intimidadeconfeccoes.com.br;dbname=admin_intimidade2');
define('USER','admin_intimidade2');
define('PASSWORD','Lipe3009!');

$autoload = function($class){
    if($class == 'Email'){
        include('phpmailer/PHPMailerAutoload.php');
    }
    include($class.'.php');
};

spl_autoload_register($autoload);