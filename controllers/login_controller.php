<?php
session_start();
include "../repository/login_repository.php";
include "../classes/User.php";

//$user = new user($_POST['']);
// traiter les données de la page login.php
//var_dump($_SERVER['REQUEST_METHOD']);
// echo str_contains($_SERVER['REQUEST_METHOD'] == 'POST');
// die();
if (str_contains($_SERVER['HTTP_REFERER'], "http://localhost/smartimmat/views/login.php") and ($_SERVER['REQUEST_METHOD'] == 'POST')) {

    $mail = $_POST["mail"];
    $password = $_POST["password"];
    
    $resultat = check_mail($mail);
    var_dump( $resultat);
     if ($resultat and password_verify($password, $resultat[4])){
 
        // utilisteur authéntifié
        $_SESSION['nom'] = $resultat[1];
        $_SESSION['prenom'] = $resultat[2];
        $_SESSION['email'] = $resultat[3];

        header("location: ../views/dashboard.php");
        die();
   // } else {
        // Identifiants incorrects
      //  header("location: ../../views/connexion.php");
      //  die();
  //  }//
//}

// if (str_contains($_SERVER['HTTP_REFERER'], "http://localhost/smartimmat/views/dashboard.php")) {
//     session_start();
//     session_destroy();
   
// header("location: ../views/login.php");
}
}
if (str_contains($_SERVER['HTTP_REFERER'], "http://localhost/smartimmat/views/dashboard.php") and ($_SERVER['REQUEST_METHOD'] == 'POST')){
  session_destroy();
  header("location: ../views/login.php");
  die();
}