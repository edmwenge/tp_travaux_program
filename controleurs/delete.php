<?php
          include '../controleurs/visiteur.php';

      if (isset($_GET['delete'])) 
    {
        global $bdd;
        $delete=$_GET['delete'];
        $id=$_SESSION['id_visiteur'];

        if ($delete) 
        {
            $req=$bdd->prepare('DELETE FROM parcelle WHERE num_prop_parcelle=?');
            $exec=$req->execute(array($delete));
            header('location:../vues/affiche_parcelle.php');
        }else echo 'delete pas';
    }
    if (isset($_GET['delete'])) 
    {
        global $bdd;
        $delete=$_GET['delete'];
        $id=$_SESSION['id_visiteur'];

    if ($id) 
    {
        $req=$bdd->prepare('DELETE FROM appartement WHERE num_prop_appart=?');
        $exe=$req->execute(array($delete));
    
        header('location:../vues/affiche_appart.php');
    }else echo 'delete pas';
    }
?>