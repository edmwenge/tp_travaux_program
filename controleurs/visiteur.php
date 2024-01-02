
<?php
    include '../configuration/config.php';
    include '../models/visiteur.php';    


    if (isset($_POST['pass']) && isset($_POST['confirm_pass'])) 
    {
        $nom =$_POST['nom']; 
        $post_nom =$_POST['post_nom']; 
        $prenom =$_POST['prenom']; 
        $mail =$_POST['mail'];
        $adresse =$_POST['adresse'];
        $num_tel =$_POST['num_tel'];
        $pass = $_POST['pass'];
        $confirm_pass = $_POST['confirm_pass'];
        $date_enregistrement =date('y-m-d');

            // Vérifier que les mots de passe correspondent
            if ($pass === $confirm_pass) 
            {
                $pass_hache = sha1($pass);
                $visiteur=new visiteur($nom,$post_nom,$prenom,$mail,$adresse,$num_tel,$pass_hache,$date_enregistrement);

                // Rediriger l'utilisateur vers une page de confirmation d'enregistrement
                if ($visiteur->cree_visiteur())
                {
                    global $bdd;

                    $req=$bdd->prepare('SELECT id_visiteur from visiteur where pass=:pass');
                    $exec=$req->execute(array(':pass'=>$visiteur->get_pass()));

            if ($exec) 
            {
                if ($id=$req->fetch()) 
                {
                   $id_visiteur=$id['id_visiteur'];
                   $_SESSION['id_visiteur']=$id_visiteur;
                   // $_SESSION['id_visiteur']=$visiteur->get_id_visiteur();
                   $_SESSION['nom']=$_POST['nom'];
                   $_SESSION['mail']=$_POST['mail'];
                   $_SESSION['pass']=$_POST['pass'];  
                  
                  if (isset($_POST['pass']) AND $_POST['pass'] =="ed") // Si le mot de passe est bon
                        {
                            echo $_SESSION['nom']."vous etez admin";?><br><a href="../administration/accueil_admin.php">cliquez pour gerer</a><?php
                        }
                        else
                        {
                            header('location:../vues/accueil.php');
                        } 

                  
                }
           
               }
            } else 
            {
                // Les mots de passe ne correspondent pas, afficher une erreur
                echo $_SESSION['error'] = "Les mots de passe ne correspondent pas";
            }
  }

}
?>