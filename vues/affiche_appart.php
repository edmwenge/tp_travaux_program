<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appartement</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/accueil.css">
    <?php include_once("../includes/generalStyles.php") ;?>
    <?php include_once("../includes/menu.php"); ?>
</head>
<body>
    <div class="app-content main">
       <div class="scroll ">
            <?php include('../controleurs/get_appartement.php');?>
            <p>
                <l1>MAISONS EN LOCATION</l1>
                <table>
                    <tr>
                        <td>
                            <div style="display: flex; flex-wrap: wrap;"> <!-- Commencez un conteneur avec un affichage en ligne flexible -->
                                <?php
                                    $i = 0;
                                    $appartement=get_appartements();
                                    foreach ($appartement as $appartement) 
                                { 
                                    echo $appartement->get_id_location()
                                ?>
                                <a href="info_appart.php?id_location=<?php echo $appartement->get_id_location(); ?>"><button>
                                <!-- <li class="nav-links flex"> -->
                                        <div class="house-picture">
                                            <?php echo "<img src='../img/" .$appartement->get_photo()."'>";?>
                                        </div>
                                    
                                    <div class="house-informations">
                                                <div class="proprio"><?php echo $appartement->get_dimension()." m2 ";?>  </div>
                                                <div class="location"><i class="bi bi-geo-alt"><?php echo $appartement->get_pays().", "
                                                .$appartement->get_quartier().",<br> "
                                                .$appartement->get_avenue().", num ".$appartement->get_num()." ";?></i></div>
                                            
                                                <div class="price"><?php echo $appartement->get_prix()." $ ";?></div>
                                               
                                    </div>
                                    </button></a>
                                     <br>
                                     <?php }
                                     $i++; if ($i % 4 == 0 || $i == count($appartement)){ ?>
                                        <div style="flex-basis: 100%;"></div> <!-- Div vide pour forcer le saut de ligne après chaque 4 éléments -->
                                        </button></a><?php  
                            }  
                            ?>
                                
                        </td> 
                    </tr>
                </table>
                
            </p>
           
        </div>
    </div> <?php include_once("../includes/scripts.php")?>
</body>
</html>