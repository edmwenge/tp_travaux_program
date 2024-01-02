
<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/accueil.css">
    <link rel="stylesheet" href="../in.css">
    
    <?php  include_once("../includes/generalStyles.php") ;?>
    <?php include_once("../includes/menu.php"); ?></head><body>
    <div class="app-content main">
       <div class='scroll' >
            
            <?php include('../controleurs/get_parcelle.php');
                  include('../controleurs/get_appartement.php');
            ?>
            
            <p style="text-align: center; top:20px;">
                    <?php echo $_SESSION['nom'];?> bienvenue dans <strong>my house finder app</strong>.
            </p>
                <p>NOS PARCELLES EN VENTE</p>
                
                <table>
                    <tr>
                        <td>
                        <?php
                                $parcelles=accueil_parcelle();

                                foreach($parcelles as $parcelle) 
                                {
                                    
                                    ?>
                                
                                    <!-- // echo "<td>".$parcelles->get_id()."</td>"; -->
                                    <a href="info_parcelle.php?id_parcelle=<?php echo $parcelle->get_id_parcelle(); ?>">
                                    <button>
                                        <div class="house-picture">
                                           <?php echo "<img src='../img/" .$parcelle->get_photo(). "' alt=' enregistrée le ".$parcelle->get_date_enregistrement()."'>";?>
                                        </div>
                                        <div class="house-informations">
                                            <div class="proprio"><?php echo $parcelle->get_dimension()." m2 "?>;  </div>
                                            <div class="location"><i class="bi bi-geo-alt"><?php echo $parcelle->get_pays().", "
                                            .$parcelle->get_quartier().",<br> "
                                            .$parcelle->get_avenue().", num ".$parcelle->get_num()." ";?></i></div>
                                        
                                            <div class="price"><?php echo $parcelle->get_prix()." $ ";?></div>
                                            
                                            
                                            <!-- <a href="../info_parcelle.php?id_parcelle=<?php 
                                            // echo $_GET['id_parcelle'];?>"><button>info </button></a> -->
                                        </div>
                                        </button></a>
                                    <?php
                                }
                            ?>
                        </td> 
                    </tr>
                </table>
               <p><a href="affiche_parcelle.php"> voir toutes les parcelles</a></p>

            </p>
            
            <p>
                <l1>NOS APPARTEMENTS EN LOCATION</l1>
                <table>
                    <tr>
                        <td><?php
                                $appartements=accueil_appartement();
                               
                                foreach ($appartements as $appartement) 
                                { 
                                    echo $appartement->get_id_location()
                                ?>
                                <a href="info_appart.php?id_location=<?php echo $appartement->get_id_location(); ?>"><button>
                                <!-- <li class="nav-links flex"> -->
                                        <div class="house-picture">
                                            <?php echo "<img src='../img/" .$appartement->get_photo()."' alt=' enregistrée le ".$parcelle->get_date_enregistrement()."'>";?>
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
                                <!-- </li>  -->
                                <?php 
                                }
                            ?>
                        </td> 
                    </tr>
                </table>
                <p><a href="affiche_appart.php"> voir tous les appartements</a></p>

            </p>
           
        </div>
    </div> <?php include_once("../includes/scripts.php")?>
</body>
</html>