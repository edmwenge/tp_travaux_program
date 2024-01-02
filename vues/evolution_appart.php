
<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/accueil.css">
    <?php include_once("../includes/generalStyles.php");?>
    <?php include_once("../includes/menu.php");?>
</head>
<body>
    <div class="app-content main">
       <div class="scroll">

            <?php 
                  include('../controleurs/get_appartement.php');
            if($postules=get_postule_appart())
            {?>
                   <l1>Vous avez la possibilité de choisir le client selon vos attentes</l1>

            <p>
                <table>
                    <tr>
                        <td>
                            <div style="display: flex; flex-wrap: wrap;"> <!-- Commencez un conteneur avec un affichage en ligne flexible -->

                                <?php
                                    $postules=get_postule_appart();
                                    for ($i=0; $i <count($postules) ; $i++) 
                                    { ?>
                                        <div style="width: 30%; padding: 10px;"> <!-- Div externe pour chaque élément avec une largeur de 25% et un espace de 5px -->
                                        <?php echo $postules[$i]->get_montant()." $ ";?> 
                                <button><a href="profil_client.php?id_visiteur=<?php echo $postules[$i]->get_client(); ?>">verifier l'identité du client</a></button>
                                <button><a href="appart_en_location.php">VALIDER</a> </button>

                                </div><?php }?><!-- Fermez le conteneur avec affichage en ligne flexible -->
                            </div>
                        </td> 
                    </tr>
                </table></p>  
            <?php }
             else 
             {
                 echo 'rien de nouveau pour le moment';
             }
             ?>            
        </div>
    </div> <?php include_once("../includes/scripts.php");?>
</body>
</html>