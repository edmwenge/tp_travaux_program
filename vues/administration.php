
<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/accueil.css">
    <?php include_once("../includes/generalStyles.php") ;?>
    <?php include_once("../includes/menu.php"); ?>
    
    <div class="app-content main">
       <div class="scroll ">
            
                <p>
                    vous etes admin? entrer le bon mot de pass: <br>
                    <form action="../administration/accueil_admin.php" method="post">
                        <input type="password" name="pass" id="pass">
                        <input type="submit" value="valider">
                    </form>
                    <?php
                        if (isset($_POST['pass']) AND $_POST['pass'] ==
                        "edmwenge") // Si le mot de passe est bon
                        {echo" liste des appart et parcelle avec possibilite de modifier";}
                         else echo " vous n'etez pas admin";?><br><a href="acount.php">Consulter votre compte</a><?php echo " ";
                    ?>
                </p>
            
        </div>
    </div>
    <?php include_once("../includes/scripts.php")?>
</body>
</html>