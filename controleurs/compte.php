<?php 
 include('../models/parcelle.php');
 include('../configuration/config.php');
 

     function afficher_parcelles_utilisateur() 
    {
        // Appeler le modèle pour obtenir les parcelles de l'utilisateur
        return parcelle :: get_compte_parcelle();  
    }
?>
