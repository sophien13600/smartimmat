<?php 
include "../repository/register_repository.php";
// $nom = $user->getName();
// var_dump($nom);


if (str_contains($_SERVER['HTTP_REFERER'], "http://localhost/smartimmat/views/register.php")  and $_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $user->getName();
    $surname = $user->getSurname();
    $mail = $user->getEmail();
    $pwd = $user->getPassword();
    register($name, $surname, $mail,$pwd);
    header("location: ../views/login.php");
}