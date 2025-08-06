<form action="../controllers/register_controller.php" method="post">
    <h2>Infomation utilisateur</h2>
    <label for="name">Votre nom</label>
        <input name="name" id="name" type="text" placeholder="Nom">
    <label for="surname">Votre prénom</label>
        <input name="surname" id ="surname" type="text" placeholder="Prenom">
    <label for="email">Votre email</label>
        <input  type="email" id ="mail" placeholder ="Votre email">
    <label for="email">Veuillez confirmez votre email</label>
        <input name ="email" id =email"" type="email" placeholder ="Confirmez votre email">
    <h2>Creation de votre mot de passe</h2>
    <label for="password">Votre mot de passe</label>
        <input type="password" id ="password" placeholder="Saisissez votre mot de passe">
    <label for="password">Veuillez confirmez votre mot de passe</label>
        <input name ="password" id ="password" type="password" placeholder="Confirmez votre mot de  passe">
    <div class= "button-container">
        <input class="button-form" type="submit" value ="Je créé mon compte">
    </div>
</form>