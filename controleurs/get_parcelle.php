<?php 
include_once('../models/parcelle.php');
 include('../configuration/config.php');
 include ('../models/postule_parcelle.php');
 function get_parcelles()
 {
     return parcelle :: get_parcelle();
 }
 function afficher_parcelles_utilisateur() 
{
    // Appeler le modèle pour obtenir les parcelles de l'utilisateur
    return parcelle :: get_compte_parcelle();  
}
function accueil_parcelle()
{
     return parcelle :: get_accueil_parcelle();
}
function get_postule_parcelle()
{
     return postule_parcelle :: get_postulant_parcelle();
}
function get_mes_parcelles()
{
     return postule_parcelle :: get_mes_parcelle();
}

?>
