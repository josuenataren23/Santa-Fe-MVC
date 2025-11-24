<?php
// require necesarios
require_once __DIR__ . "/../config/conect.php";
require_once __DIR__ . "/../models/UsuarioCRUD.php";

// iniciar sesión antes de cualquier salida
session_start();

class HomeController {

    public function index() {
        
        $icon = "public/images/new-logo.jpg";
        $title = "Santa Fe";

        //info de usuario
        //comprobar si existe una sesion
        if(isset($_SESSION['user'])) {
            $user = $_SESSION['user'];
        } else {
            $user = "Invitado";
        }

        require_once "views/layout/header.php";
        require_once "views/home/index.php";
        require_once "views/layout/footer.php";
    }
}
?>