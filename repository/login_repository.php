<?php
include_once "../config/connexion.php";

function check_mail_and_password($mail, $password)
{
  
try {
       $pdo = get_connection(); 
        $select = "SELECT * FROM user  WHERE mail = :mail AND password = :pwd";
        //echo "<br>$select<br>";
        $query = $pdo->prepare($select);
        $query->bindValue(":mail", $mail);
        $query->bindValue(":pwd", $password);
        $query->execute();
        $resultat = $query->fetch(PDO::FETCH_ASSOC);
        return $resultat;
        //retourne un tableau associatif du resultat de la requete
        // if ($resultat != false) {
        //     $user= "Vous êtes bien connectés :" . $resultat['nom']  . " ". $resultat['prenom'];
        //     return $user;
        // } else {
        //     return "Identifiants incorrects";
        // }
    } catch (PDOException $ex) {
        echo "\nErreur : problème de connexion avec la BD" . $ex->getMessage();
    }
}
