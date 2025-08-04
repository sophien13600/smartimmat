<?php
session_start();
include "../repository/login_repository.php";
include "../classes/User.php";

//$user = new user($_POST['']);
// traiter les données de la page login.php

if (str_contains($_SERVER['HTTP_REFERER'], "login.php") and $_SERVER['REQUEST_METHOD'] == 'POST')  {
    $mail= $_POST['mail'];
    $password = $_POST['password'];
   
    
    check_mail_and_password($mail,  $password );
    header("location: ../views/dashboard.php");
    die();
}

if (str_contains($_SERVER['HTTP_REFERER'], "http://localhost/smartimmat/views/dashboard.php")) {
    session_start();
    session_destroy();
   
header("location: ../views/login.php");
}

    
