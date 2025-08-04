<?php
session_start();
require_once "../partials/head.php";
require_once "../partials/nav.php";
//var_dump($_SESSION);    
require_once "../repository/utilisateur_repository.php";

$user = check_mail_and_password(   $_SESSION['mail'] , $_SESSION['pwd'] );
?>  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h2>Name <?= $_SESSION['']?></h2>
</body>
</html>

