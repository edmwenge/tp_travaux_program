
<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="in.css">
    <link rel="stylesheet" href="../css/accueil.css">
    <?php include_once("../includes/generalStyles.php") ;?>
    <?php include_once("../includes/menu.php"); ?>
    <div class="app-content main">
       <div class="scroll">
            
            <?php include('../controleurs/get_parcelle.php');
                  include('../controleurs/get_appartement.php');
            ?>
                <?php if(afficher_parcelles_utilisateur() || afficher_appartements_utilisateur() || get_mes_parcelles() || get_mes_appart())
                { 
                    $i=0;
                    if(afficher_parcelles_utilisateur())
                {?>
                <p>
                <l1>VOS PARCELLES EN VENTE</l1>
                <table>
                    <tr>
                        <td>
                            <div style="display: flex; flex-wrap: wrap;"> <!-- Commencez un conteneur avec un affichage en ligne flexible -->

                            <?php
                              
                               $parcelle=afficher_parcelles_utilisateur();
                               for ($i=0; $i <count($parcelle) ; $i++) 
                                { 
                            ?>
                         <div style="width: 30%; padding: 10px;"> <!-- Div externe pour chaque élément avec une largeur de 25% et un espace de 5px -->
                            <a href="info_parcelle.php?id_parcelle=<?php echo $parcelle[$i]->get_id_parcelle(); ?>">
                            <button>
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
                             <?php}
                                  if ($i % 4 == 0 || $i == count($parcelle)){ ?>
                                    <div style="flex-basis: 100%;"></div> <!-- Div vide pour forcer le saut de ligne après chaque 4 éléments -->
                                    </button></a><?php }   
                            ?>
                            </div> <!-- Fermez le conteneur avec affichage en ligne flexible -->
                        </td> 
                    </tr>
                </table>   
            </p>
              <?php }
             if (afficher_appartements_utilisateur()) {?>
                    <p>
                    <l1>VOS APPARTEMENTS EN LOCATION</l1>
                    <table>
                        <tr>
                            <td><div style="display: flex; flex-wrap: wrap;"> <!-- Commencez un conteneur avec un affichage en ligne flexible -->
                                 <?php
                                $appartement=afficher_appartements_utilisateur();
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
                
            </p>
               <?php }
              if (get_mes_parcelles())
              {?>
              <p>
                <l1>VOS DEMANDES D'ACHATS</l1>
                <table>
                    <tr>
                        <td>
                            <div style="display: flex; flex-wrap: wrap;"> <!-- Commencez un conteneur avec un affichage en ligne flexible -->
                             <?php
                               
                               $postule=get_mes_parcelles();
                               for ($i=0; $i <count($postule) ; $i++) 
                                { 
                            ?>
                            <div style="width:30%;padding:10px;"> <!-- Div externe pour chaque élément avec une largeur de 25% et un espace de 5px -->
                                <a href="info_parcelle.php?id_parcelle=<?php echo $postule[$i]->get_parcelle(); ?>"><button>
                                <div class="house-picture">
                                    <?php echo "<img src='../img/" .$postule[$i]->get_carte()."'>";?>
                                </div>
                                <div class="house-informations">
                                    <div class="price"><?php echo $postule[$i]->get_montant()." $ ";?></div>

                                </div>
                            </div>
                            <?php 
                            }  if ($i % 4 == 0 || $i == count($postule)){ ?>
                                <div style="flex-basis: 100%;"></div> <!-- Div vide pour forcer le saut de ligne après chaque 4 éléments -->
                                </button></a><?php } 
                            ?>
                            </div> <!-- Fermez le conteneur avec affichage en ligne flexible -->

                        </td> 
                    </tr>
                </table>
            </p><?php  }

            if (get_mes_appart())
            {?>
            <p>
            <l1>VOS DEMANDE DE LOCATION</l1>
            <table>
                <tr>
                    <td>
                        <div style="display: flex; flex-wrap: wrap;"> <!-- Commencez un conteneur avec un affichage en ligne flexible -->

                        <?php
                            $postule=get_mes_appart();
                            for ($i=0; $i <count($postule) ; $i++) 
                            { 
                        ?>
                            <div style="width: 30%; padding: 10px;"> <!-- Div externe pour chaque élément avec une largeur de 25% et un espace de 5px -->

                        <a href="info_appart.php?id_appart=<?php echo $postule[$i]->get_appart(); ?>"><button>

                            <div class="house-picture">
                                <?php echo "<img src='../img/" .$postule[$i]->get_carte(). "'>";?>
                            </div>
                            <div class="house-informations">
                                <div class="proprio"><?php echo $postule[$i]->get_client()." m2 ";?>  </div>
                                <div class="location"><i class="bi bi-geo-alt"><?php echo $postule[$i]->get_appart();?></div>
                            </div></div><br>
                            <?php} if ($i % 4 == 0|| $i == count($postule)){ ?>
                                        <div style="flex-basis: 100%;"></div> <!-- Div vide pour forcer le saut de ligne après chaque 4 éléments -->
                                        
                                        </button></a> 
                                        </div> <!-- Fermez le conteneur avec affichage en ligne flexible -->
                                        
                  <?php }?></td> 
                                    </tr>
                                </table>
                                </p><?php }  }
            else 
            {
                echo '<p>rien de nouveau pour le moment. <br> 
                confiez nous vos immobilier pour jouir de nos services!</p>';
            }
            ?>      
        </div>
    </div> <?php include_once("../includes/scripts.php")?>
</body>
</html>