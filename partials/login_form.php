 <h1>Preparez votre dossier d'immatriculation facilement</h1>
<form class="login_form" action="../controllers/login_controller.php" method="post">   
    <h2>Connexion</h2>
    <input type="mail" name="mail" placeholder ="Votre email">
    <input type="password" name="password" placeholder="Saisissez votre mot de passe">
    <div class= "button-container">
        <input class="button-form" type="submit" value ="Je me connecte">
    </div>
     <a href="/smartimmat/views/register.php">Pas encore de compte, Inscrivez vous</a>   
</form>


<form action="../controllers/login_controller.php" method="post" enctype="multipart/form-data">
 Selectionner un image à compresser
  <input type="file" name="fileToUpload" id="fileToUpload">
  <input type="submit" value="Upload Image" name="submit">
</form>