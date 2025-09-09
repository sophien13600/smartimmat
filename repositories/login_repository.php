<?php
include_once "../config/connexion.php";

function check_mail($mail)
{

    try {
        $select = "SELECT * FROM user  WHERE mail = :mail ";
        $pdo = get_connection();
        //echo "<br>$select<br>";
        $query = $pdo->prepare($select);
        $query->bindValue(":mail", $mail);

        $query->execute();
        // $resultat = $query->fetch(PDO::FETCH_ASSOC);
        return $query->fetch();
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
function logout()
{
    session_destroy();
}
