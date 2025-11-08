<?php
class HomeController {
    public function index() {
        $icon = "public\images\logtype.png";
        $title = "Santa Fe";
        $file_css = "public\css\index.css";
        require_once "views/layout/header.php";
        require_once "views/home/index.php";
        require_once "views/layout/footer.php";
    }
}
?>