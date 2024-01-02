
<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/accueil.css">
    <?php include_once("../includes/generalStyles.php") ;?>
    <?php include_once("../includes/menu.php"); ?>
    <?php include_once("../controleurs/get_appartement.php");
          include_once("../controleurs/get_parcelle.php");?>
    <div class="app-content main">
    <div class="page-content">
            <div class="news">

                <?php
                 
                if($appartement=get_appartements())
                {
                        echo 'Appartement enregistré avec succes ';?><br>
                        <?php echo 'Nous allons passés à une verification, 
                            puis envoyer votre appartement accessible à tous';?>
                            <br><button><p><a href="../vues/accueil.php">OK</a></p></button><?php
                }          
                elseif ($parcelles=get_parcelles()) 
                    {
                        echo 'Parcelle enregistrée avec succes ';?><br>
                        <?php echo 'Nous allons passés à une verification, 
                            puis envoyer votre parcelle accessible à tous';?>
                            <br><button><p><a href="../vues/accueil.php">OK</a></p></button><?php
                            
                    }
                ?>
                
            </div>
        </div>
    </div>
    <?php include_once("../includes/scripts.php")?>
</body>
</html>