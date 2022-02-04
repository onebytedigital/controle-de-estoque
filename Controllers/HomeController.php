<?php

namespace Controllers;
class HomeController
{

    public function __construct()
    {
        if (isset($_SESSION["usuarioLogado"])) {
            $this->view = new \Views\MainView('index');
        } else {
            $this->view = new \Views\MainView('login');
        }
    }

    public function executar()
    {
        $this->view->render();
    }
}

?>