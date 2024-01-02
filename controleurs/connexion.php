<?php
    
    include '../configuration/config.php';
    include '../models/connexion.php';

   
        $nom=$_POST['nom'];
        $pass=$_POST['pass'];
        $pass_hache = sha1($pass);
        $connexion=new connexion($nom,$pass_hache);
        
        $connexion->connex();

            // if($connexion->get_nom()==$con->get_nom() && $connexion->get_pass()==$con->get_pass() )
            // {
            //     // header('Location: ../vues/accueil.php');

            // }
          
        //   else header('location:../vues/connexion.php');
    


    // if (isset($_POST['pass'])) 
    // {
    //     // Récupérer les données du formulaire
    //     $nom = $_POST['nom'];
    //     $pass_hash = sha1($_POST['pass']);
    
    //     // Vérifier si l'utilisateur existe dans la base de données
    //     $user = getUserBynom($nom);
    
    //     if ($user && password_verify($pass_hash, $user['pass'])) {
    //         // L'utilisateur est authentifié
    //         // Effectuer les actions nécessaires, par exemple, enregistrer l'utilisateur dans la session
    
    //         // Rediriger vers une page appropriée
    //         header('Location: ../vues/accueil.php');
    //         exit();
    //     } else
    //     {
    //         // Mauvaises informations d'identification
    //         $errorMessage = "Identifiants invalides. Veuillez réessayer.";
    //         // Inclure la vue pour afficher le formulaire de connexion
    //         include '../vues/connexion.php';
    //     }
    // }
    
    
?>  