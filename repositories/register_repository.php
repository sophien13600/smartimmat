<?php
include "../classes/User.php";
include "../config/connexion.php";

if (isset($_POST['name']) && isset($_POST['surname']) && isset($_POST['email']) && isset($_POST['password'])) {
    $name = htmlspecialchars($_POST['name']);
    $surname = htmlspecialchars($_POST['surname']);
    $mail = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    if (filter_var($mail, FILTER_VALIDATE_EMAIL)) {
        $user = new user($name, $surname, $mail, $password);
        return $user;
    }
}

function register($name, $surname, $mail, $password)
{
    try {
        $pdo = get_connection();
        $insert = "INSERT INTO user  (nom, prenom, mail, password) VALUES (:nom,:prenom, :mail, :pwd)";
        $query = $pdo->prepare($insert);
        $query->bindValue(":nom", $name);
        $query->bindValue(":prenom", $surname);
        $query->bindValue(":mail", $mail);
        $query->bindValue(":pwd", $password);
        $query->execute();
    } catch (PDOException $ex) {
        echo "\nErreur : problème de connexion avec la BD" . $ex->getMessage();
        echo $ex->getMessage();
        die();
    }
}
