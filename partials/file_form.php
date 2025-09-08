<div class="logout">
    <h2>
        Bienvenue <?= $_SESSION['prenom'] . ' '  . $_SESSION['nom']?>
    </h2>
    <form action="../controllers/login_controller.php" method="post">
        <button>
            Se déconnecter
        </button>
        </form>
        <!-- 
        </div>
        <form action="../controllers/file_controller.php" method="post">
            
            <input type="file" id="files" name="file accept="pdf" required />
            <button>
                Compresser
                </button>
            </form> -->
            <form action="../controllers/file_controller.php" method="post" enctype="multipart/form-data">
             Selectionner un image à compresser
              <input type="file" name="fileToUpload" id="fileToUpload">
              <input type="submit" value="Soumettre" name="submit">
            </form>


        
    

