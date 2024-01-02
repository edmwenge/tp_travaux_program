<?php 

 // On appelle le modèle pour accéder aux données de l'appartement
 include_once('../models/parcelle.php');
 include('../configuration/config.php');
 
 function info_parcelle() 
 {
     $id_parcelle=$_GET['id_parcelle'];
     return parcelle :: get_info_parcelle($id_parcelle);
}
?>
