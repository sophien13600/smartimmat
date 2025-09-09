<?php
session_start(); 
require_once "../repositories/account_repository.php";

if(isset($_SESSION['idUser'])){
     update($_POST['id'], $_POST['name'], $_POST['surname'], $_POST['email']);
     header("location: ../views/dashboard.php");
    die();
}