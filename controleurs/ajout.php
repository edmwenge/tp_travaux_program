<?php

          if (isset($_POST['afficher'])) 
          {
            $id = $photo;
            // Parcourir les données pour trouver la ligne à afficher
            
                if ($parcelles['id'] == $id) 
                {
                    
                    // Rediriger vers une autre page avec les informations de la ligne
                    header("Location:../administration/parcelle.php?photo={$parcelle['photo']}&dimension=
                        {$parcelle['dimension']}&pays={$parcelle['pays']}&quartier={$parcelle['quartier']}&
                        avenue={$parcelle['avenue']}&num={$parcelle['num']}&prix={$parcelle['prix']}
                        &date_enregistrement={$parcelle['date_enregistrement']}");
                    exit;
                }
           
        }
        // global $bdd;
        // $ajout=$_GET['ajout'];
        // $id=$_SESSION['id_visiteur'];

        // $req=$bdd->prepare('SELECT * FROM parcelle WHERE num_prop_parcelle=?');
        // $exec=$req->execute(array($ajout));
        // if ($exec) 
        // {
        //     header('location:../vues/affiche_parcelle.php');
        // }else echo 'ajout pas';
   
                          
?>