<?php
class AuthController {
    public function LoginForm(){
         //info de usuario
        //comprobar si existe una sesion
        if(isset($_SESSION['user'])) {
            $user = $_SESSION['user'];
        } else {
            $user = "Invitado";
        }
        $icon = "public/images/new-logo.jpg";
        $title = "Iniciar Sesion - Santa Fe";
        require_once "views/layout/header.php";
        require_once "views/auth/LoginForm.php";
        require_once "views/layout/footer.php";
    }
}
    