<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/accueil.css">
    <link rel="stylesheet" href="../css/info.css">
    <!-- <link rel="stylesheet" href="../css/general.css"> -->
    <?php include_once("../includes/generalStyles.php") ;?>
    <?php include_once("../includes/menu.php"); include('../controleurs/info_parcelle.php'); ?>
    <div class="app-content main">
       <div class="scroll ">
        <div class="login-section grid">
        <div class="left-side flex">
        <?php

        if($parcelles=info_parcelle())
        {
        
            foreach ($parcelles as $parcelle) 
            {
                echo "<img src='../img/" .$parcelle->get_photo()."'>";?>
                <!-- <span class="medinfo flex"></span> 
                </div> -->
                </div>
                <div class="login flex">
                    <fieldset>
                        <legend><h1>Dites nous en detail  </h1></legend>
                        <div class="login flex">
        <form action="../controleurs/postule_parcelle.php?id_parcelle=<?php echo $parcelle->get_id_parcelle() ; ?>&amp;id_visiteur=<?php echo $_SESSION['id_visiteur'];?>" method="post" enctype="multipart/form-data">
                <fieldset>
                  
                    
                    <div class="divInputs">
                        <div class="divInputsI">
                            
                        </div>

                        <div class="divInputsII">
                            <label for="montant">Quel montant souhaitez vous proposer?(soyez proche de celui proposer par le proprietaire)</label>
                            <br><input type="number" name="montant" id="montant"><br>
                       
                            <label for="carte">Votre piece didentite pour mieux valider votre demande:</label><br>
                            <input type="file" id="carte" name="carte" required><br>
                           
                             </form>
                        </div>
                    </div>
                    </p>

                    <div class="login-button"><button type="submit">Login</button> </div>
                   </fieldset>                
           </form>
        </div>
                <?php 
    
            }
        }
       
        ?>
    </div>
    </div>
    </div>
</div><?php include_once("../includes/scripts.php")?>
</body>
</html>


