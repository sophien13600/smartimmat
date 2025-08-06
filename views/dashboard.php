<?php
session_start();
require_once "../partials/head.php";
require_once "../partials/nav.php";
var_dump($_SESSION);    

//$user = check_mail_and_password(   $_POST['email'] , $_POST['password'] );
?>  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h2>Name <?= $_SESSION['nom']?></h2>
</body>
</html>

