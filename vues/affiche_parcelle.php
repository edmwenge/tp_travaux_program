<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/accueil.css">
    <?php include_once("../includes/generalStyles.php") ;?>
    <?php include_once("../includes/menu.php"); ?>
</head>
<body>
    <div class="app-content main">
       <div class="scroll ">
            <?php include('../controleurs/get_parcelle.php');?>
            <p>
                <l1>VOS PARCELLES EN VENTE</l1>
                <table>
                    <tr>
                        <td>
                            <div style="display: flex; flex-wrap: wrap;"> <!-- Commencez un conteneur avec un affichage en ligne flexible -->
                             <?php
                               $i = 0;
                               $parcelle=get_parcelles();
                               for ($i=0; $i <count($parcelle) ; $i++) 
                                { 
                            ?>
                            <div style="width: 25%; padding: 5px;"> <!-- Div externe pour chaque élément avec une largeur de 25% et un espace de 5px -->
                                <a style="display: block;" href="info_parcelle.php?id_parcelle=<?php echo $parcelle[$i]->get_id_parcelle(); ?>"><button>
                                <div class="house-picture">
                                    <?php echo "<img src='../img/" .$parcelle[$i]->get_photo(). "' alt=' enregistrée le ".$parcelle[$i]->get_date_enregistrement()."'>";?>
                                </div>
                                <div class="house-informations">
                                    <div class="proprio"><?php echo $parcelle[$i]->get_dimension()." m2 "?>;  </div>
                                    <div class="location"><i class="bi bi-geo-alt"><?php echo $parcelle[$i]->get_pays().", "
                                    .$parcelle[$i]->get_quartier().",<br> "
                                    .$parcelle[$i]->get_avenue().", num ".$parcelle[$i]->get_num()." ";?></i></div>
                                
                                    <div class="price"><?php echo $parcelle[$i]->get_prix()." $ ";?></div>

                                </div>
                            </div>
                            <?php 
                            }  $i++; if ($i % 4 == 0 || $i == count($parcelle)){ ?>
                                <div style="flex-basis: 100%;"></div> <!-- Div vide pour forcer le saut de ligne après chaque 4 éléments -->
                                </button></a><?php } 
                            ?>
                            </div> <!-- Fermez le conteneur avec affichage en ligne flexible -->

                        </td> 
                    </tr>
                </table>
            </p>
        </div>
    </div> <?php include_once("../includes/scripts.php");?>
</body>
</html>