<?php 
 include('../models/appartement.php');
 include('../configuration/config.php');
 include('../models/postule_appart.php');
 function get_appartements()
 {
     return appartement :: get_appartement();
 }
 function afficher_appartements_utilisateur() 
 {
     // Appeler le modèle pour obtenir les appartements de l'utilisateur
     return appartement :: get_compte_appartement();  
 }
 function accueil_appartement()
 {
    return appartement :: get_accueil_appartement();
 }
 function get_postule_appart()
 {
    return postule_appartement :: get_postulant_appartement();
 }
 function get_mes_appart()
{
     return postule_appartement :: get_mes_appart();
}

?>