<?php 
//session_start();
//var_dump($_SESSION);
$id = $_SESSION['idUser'];
$nom =$_SESSION['nom'];
$prenom =$_SESSION['prenom'];
$mail = $_SESSION['email'];

?>
<form class ="account_form"action="../controllers/account_controller.php" method="post">
    <h2>Mes Informations</h2>
    <input type="hidden" name="id" id="id" value="<?= $id?>">
    <label for="name">Votre nom</label>
        <input name="name" id="name" type="text" value="<?=$nom?>">
    <label for="surname">Votre prénom</label>
        <input name="surname" id ="surname" type="text" value="<?=$prenom?>">
    <label for="email">Votre email</label>
        <input  type="email" id ="mail" value="<?=$mail?>">
    <label for="email">Veuillez confirmez votre email</label>
        <input name ="email" id =email"" type="email" placeholder ="Confirmez votre email">
  
    <div class= "button-container">
        <input class="button-form" type="submit" value ="Modifier mes informations">
    </div>
</form>