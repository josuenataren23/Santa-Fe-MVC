<?php
class HomeController {
    public function index() {
        $icon = "public/images/new-logo.jpg";
        $title = "Santa Fe";
        require_once "views/layout/header.php";
        require_once "views/home/index.php";
        require_once "views/layout/footer.php";
    }
}
?>