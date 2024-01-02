<?php 

 // On appelle le modèle pour accéder aux données de l'appartement
 include_once('../models/appartement.php');
 include('../configuration/config.php');

function info_appartement() 
 {
     $id_location=$_GET['id_location'];
     return appartement :: get_info_appart($id_location); 
 }
?>
