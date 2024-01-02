
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appartement</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/accueil.css">
    <link rel="stylesheet" href="../css/general.css">
    <?php include_once("../includes/generalStyles.php") ;?>
</head>
<body>
    <?php include_once("../includes/menu_admin.php"); ?>
    <div class="app-content main">
       <div class="scroll ">
                <?php include('../controleurs/get_appartement.php') ?>
                
                <section class="sectionAffichag">
                    <h1>NOS LOGEMENT EN LOCATION</h1>
                    <table>

                        <thead>
                            <tr>

                                <th>num_prop_appartement</th>
                                <th>dimension</th> 
                                <th>pays</th>
                                <th>province</th>
                                <th>ville</th>
                                <th>commune</th>
                                <th>quartier</th>
                                <th>avenue</th>
                                <th>num</th>
                                <th>photo</th>
                                <th>securite</th>
                                <th>electricity</th>
                                <th>eau</th>
                                <th>proximite</th>
                                <th>prix</th>
                                <th>abonnement</th>
                                <th>date_enregistrement</th>
                                <th>Ajouter</th> 
                                <th>supprimer</th>
                            </tr>
                        </thead>
                        <?php
                            $appartement=get_appartements();

                            for ($i=0; $i <count($appartement) ; $i++) 
                            { 
                                echo "<tr>";
                            
                                // echo "<td>".$appartement[$i]->get_id()."</td>";
                                echo "<th>".$appartement[$i]->get_num_prop_appart()."</th>";
                                echo "<th>".$appartement[$i]->get_dimension()."</th>";
                                echo "<th>".$appartement[$i]->get_nb_des_pieces()."</th>"; 
                                echo "<th>".$appartement[$i]->get_pays()."</th>";
                                echo "<th>".$appartement[$i]->get_province()."</th>";
                                echo "<th>".$appartement[$i]->get_ville()."</th>";
                                echo "<th>".$appartement[$i]->get_commune()."</th>";
                                echo "<th>".$appartement[$i]->get_quartier()."</th>";
                                echo "<th>".$appartement[$i]->get_avenue()."</th>";
                                echo "<th>".$appartement[$i]->get_num()."</th>";
                                echo "<th> <div class=\"house-picture\"><img src='../img/".$appartement[$i]->get_photo()."'></div></th>";
                                echo "<th>".$appartement[$i]->get_securite()."</th>";
                                echo "<th>".$appartement[$i]->get_electricity()."</th>";
                                echo "<th>".$appartement[$i]->get_eau()."</th>";        
                                echo "<th>".$appartement[$i]->get_proximite()."</th>";
                                echo "<th>".$appartement[$i]->get_prix()."</th>";
                                echo "<th>".$appartement[$i]->get_date_enregistrement()."</th>";
                                echo "<th>".'<a href='.'../controleurs/ajout.php?ajout='.$_SESSION['id_visiteur'].'><button>Ajouter </button></a>'."</th>";
                                echo "<th>".'<a href='.'../controleurs/delete.php?delete='.$_SESSION['id_visiteur'].'><button>Suprimer </button></a>'."</th>";
                                echo "</tr>";
                                
                            }
                        ?>

                    </table>
                </section>
            
        </div>
    </div>
    <?php include_once("../includes/scripts.php")?>
</body>
</html>