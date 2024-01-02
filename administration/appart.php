
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appartement</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/accueil.css">
    <?php include_once("../includes/generalStyles.php") ;?>
    <?php include_once("../includes/menu_admin.php"); ?>
</head>
<body>
    
    <div class="app-content main">
       <div class="scroll ">
                <?php include('../controleurs/get_appartement.php') ?>
                <p>
            
                <l1>NOS LOGEMENT EN LOCATION</l1>
                <table>
                    <tr>
                        <td>
                        <p>
                            <?php
                                $appartement=get_appartements();
                               
                                for ($i=0; $i <count($appartement) ; $i++) 
                                { 
                                ?>
                                
                                <!-- <li class="nav-links flex"> -->
                                    <a href="info.php " >
                                        <div class="house-picture">
                                            <?php echo "<img src='../img/" .$appartement[$i]->get_photo(). "'>";?>
                                        </div>
                                    </a>
                                    <div class="house-informations">
                                                <div class="proprio"><?php echo $appartement[$i]->get_dimension()." m2 "?>;  </div>
                                                <div class="location"><i class="bi bi-geo-alt"><?php echo $appartement[$i]->get_pays().", "
                                                .$appartement[$i]->get_quartier().",<br> "
                                                .$appartement[$i]->get_avenue().", num ".$appartement[$i]->get_num()." ";?></i></div>
                                            
                                                <div class="price"><?php echo $appartement[$i]->get_prix()." $ ";?></div>
                                    </div>
                                     <br>
                                <!-- </li>  -->
                                <?php 
                                }
                            ?></p><br>
                        </td>
                    </tr>
                </nav>         
<!-- 
                        <td>
                            <div class="house-picture">
                                <img src="../img/img1.png" alt="">
                            </div>
                            <div class="house-informations">
                                <div class="proprio">Gloire</div>
                                <div class="price">3000$</div>
                                <div class="location"><i class="bi bi-geo-alt"></i> Ndosho, Av 5 cha</div>
                            </div>
                        </td>
                        <td>
                            <div class="house-picture">
                                <img src="../img/img1.png" alt="">
                            </div>
                            <div class="house-informations">
                                <div class="proprio">Gloire</div>
                                <div class="price">3000$</div>
                                <div class="location"><i class="bi bi-geo-alt"></i> Ndosho, Av 5 cha</div>
                            </div>
                        </td> -->
                    </tr>
                </table>
                    
                    
                </p>
            
        </div>
    </div>
    <?php include_once("../includes/scripts.php")?>
</body>
</html>