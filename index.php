<?php
session_start();
require_once "views/partials/head.php";
require_once "views/partials/nav.php";
if(isset($_SESSION['nom'])){
    include_once "views/partials/file_form.php";
}else{

    include_once "views/partials/login_form.php";
}
require_once "views/partials/footer.php";
