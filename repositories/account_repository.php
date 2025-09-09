<?php
include "../config/connexion.php";

function update($id, $nom, $prenom, $mail)
{
    $select = "UPDATE user SET nom =:nom, prenom=:prenom, mail =:mail WHERE  id =:id";
    $db = get_connection();
    $req = $db->prepare($select);
    $req->bindValue(":id", $id);
    $req->bindValue(":nom", $nom);
    $req->bindValue(":prenom", $prenom);
    $req->bindValue(":mail", $mail);
    $req->execute();
}