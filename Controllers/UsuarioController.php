<?php

namespace Controllers;

class UsuarioController
{
    public static function logout() {
        if (isset($_GET['logout'])) {
            session_destroy();
            echo "<script> window.location.href='/controle-de-estoque'</script>";
        }
    }
}