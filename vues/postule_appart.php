<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/accueil.css">
    <link rel="stylesheet" href="../css/info.css">
    <?php include_once("../includes/generalStyles.php") ;?>
    <?php include_once("../includes/menu.php");include('../controleurs/info_appart.php');?>
    <div class="app-content main">
       <div class="scroll ">
        <div class="login-section grid">
        <div class="left-side flex">
        <?php
        
        if($appartements=info_appartement())
        {
       
        foreach ($appartements as $appartement) 
        { 
        echo "<img src='../img/" .$appartement->get_photo()."'>";?>
            
                <!-- <span class="medinfo flex"></span>  -->
                <!-- </div> -->
                </div>
                <div class="login flex">
                    <fieldset>
                        <legend><h1>Dites nous en detail  </h1></legend>
                        <div class="login flex">
        <form action="../controleurs/postule_appart.php?id_location=<?php echo $appartement->get_id_location() ; ?>&amp;id_visiteur=<?php echo $_SESSION['id_visiteur'];?>" method="post" enctype="multipart/form-data">
                <fieldset>
                  
                    
                    <div class="divInputs">
                        <div class="divInputsI">
                            <label for="dates">Souhaitez vous amenager quand?</label>
                            <input type="date" id="dates" name="dates" placeholder="25/01/2024 "required><br><br>
                            <label for="amenagement">choisissez le garenti de votre premier contrat(peut etre changer)</label>
                            <select name="garenti">
                                <option value="3mois">plus ou moins 3mois</option>
                                <option value="6mois">6 mois</option>
                                <option value="1an">1 an</option>
                                
                            </select><br>
                            <label for="montant">Quel montant souhaitez vous proposer?(soyez proche de celui proposer par le proprietaire)</label>
                            <br><input type="number" name="montant" id="montant">
                        </div>

                        <div class="divInputsII">
                            <label for="carte">Votre piece d'identite pour mieux valider votre demande:</label><br>
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


