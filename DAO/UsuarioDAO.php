<?php

namespace DAO;

use Controllers\HomeController;
use Models\Usuario;
use Views\MainView;

class UsuarioDAO
{
    public static function autenticarUsuario() {
        if (isset($_POST["logar"])) {
            $usuario = new Usuario();
            $usuario->setUsuario($_POST["usuario"]);
            $usuario->setSenha($_POST["senha"]);

            $pdo = DAO::conectar();
            $sql = ("SELECT * FROM usuarios WHERE usuario = ? AND senha = ?");
            $pst = $pdo->prepare($sql);
            $pst->execute(array($usuario->getUsuario(),$usuario->getSenha()));
            $fetch = $pst->fetchAll();

            if (count($fetch) === 1) {
                $_SESSION["usuarioLogado"] = $fetch[0]['nome'];
                echo "<script> window.location.href='/controle-de-estoque'</script>";
            } else {
                echo "Usuário ou senha incorretos!";
            }
        }
    }
}