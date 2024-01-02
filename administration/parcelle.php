
<?php include_once("../includes/menu_admin.php")?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>parcelle</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/accueil.css">
    <?php include_once("../includes/generalStyles.php") ;?>
    <?php include_once("../includes/menu_admin.php"); ?>
    <?php include_once("../controleurs/get_parcelle.php"); ?>
</head>
<body>
    
    <div class="app-content main">
       <div class="scroll ">
            <p>
                <l1>NOS PARCELLES EN VENTE</l1>
                <table>
                    <tr>
                        <td>
                            <?php
                                $parcelle=get_parcelles();

                                for ($i=0; $i <count($parcelle) ; $i++) 
                                { 
                                    ?>
                                
                                    <!-- // echo "<td>".$parcelle[$i]->get_id()."</td>"; -->
                                    
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
                                    <?php
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