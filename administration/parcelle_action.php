
<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/accueil.css">
    <?php include_once("../includes/generalStyles.php") ;?>
    <?php include_once("../includes/menu_admin.php");?>
    <div class="app-content main">
       <div class="scroll ">
            <?php include('../controleurs/get_parcelle.php');?>
            <p>
                <h1>NOS PARCELLES EN VENTE</h1>

                <table >
                    <thead>
                        <tr>

                            <th>id</th>
                            <th>num_prop_parcelle</th>
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
                            <th>Supprimer</th> 
                        </tr>
                    </thead>
                    <?php
                        $parcelles=get_parcelles();

                        for ($i=0; $i <count($parcelles) ; $i++) 
                        { 
                            echo "<tr>";
                            // echo "<td>".$donne['id_parcelle']."</td>";
                            echo "<td>".$parcelles[$i]->get_num_prop_parcelle()."</td>";
                            echo "<td>".$parcelles[$i]->get_dimension()."</td>"; 
                            echo "<td>".$parcelles[$i]->get_pays()."</td>";
                            echo "<td>".$parcelles[$i]->get_province()."</td>";
                            echo "<td>".$parcelles[$i]->get_ville()."</td>";
                            echo "<td>".$parcelles[$i]->get_commune()."</td>";
                            echo "<td>".$parcelles[$i]->get_quartier()."</td>";
                            echo "<td>".$parcelles[$i]->get_avenue()."</td>";
                            echo "<td>".$parcelles[$i]->get_num()."</td>";
                            echo "<th> <div class=\"house-picture\"><img src='../img/".$parcelles[$i]->get_photo()."'></div></th>";
                            echo "<td>".$parcelles[$i]->get_securite()."</td>";
                            echo "<td>".$parcelles[$i]->get_electricity()."</td>";
                            echo "<td>".$parcelles[$i]->get_eau()."</td>";        
                            echo "<td>".$parcelles[$i]->get_proximite()."</td>";
                            echo "<td>".$parcelles[$i]->get_prix()."</td>";
                            echo "<td>".$parcelles[$i]->get_date_enregistrement()."</td>";
                            // echo "<td>".'<a href='.'../controleurs/delete.php?ajout='.$_SESSION['id_visiteur'].'><button>Ajouter </button></a>'."</td>";
                            // echo "<td>".'<a href='.'../controleurs/delete.php?delete='.$_SESSION['id_visiteur'].'><button>Suprimer </button></a>'."</td>";
                            echo"<td>
                                    <form method='post' action='../controleurs/ajout.php'>
                                        <input type='submit' name='afficher' value='Afficher'>
                                    </form>
                                </td>";
                            echo "</tr>";
                        }
                    ?>

                </table>
            </p>
        </div>
    </div> <?php include_once("../includes/scripts.php")?>
</body>
</html>