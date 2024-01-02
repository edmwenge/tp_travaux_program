 <?php
class connexion
{
    private $nom;
    private $pass;

    public function __construct($nom,$pass)
    {
       $this->nom=$nom;
       $this->pass=$pass; 
    }

    public function connex()
    {
        global $bdd;
        
        // $req = $bdd->prepare('SELECT id_visiteur FROM visiteur WHERE nom =? AND pass = ?');
        // $req->execute(array($nom,$pass));
        // $resultat = $req->fetch();

        // if (!$resultat)
        // {
        //     echo 'Mauvais identifiant ou mot de passe !';
        // }
        // else
        // {
        //     session_start();
        //     $_SESSION['id_visiteur'] = $resultat['id_visiteur'];
        //     $_SESSION['nom'] = $nom;
        //     $connexion=new connexion($_SESSION['id_visiteur'],$_SESSION['nom']);
        //     return $connexion;
        // }
   

        // Si l'utilisateur soumet le formulaire de connexion
        if ($_SERVER['REQUEST_METHOD'] === 'POST') 
        {
            // Hachage du mot de passe
            $pass_hache = sha1($_POST['pass']);
            $nom=$_POST['nom'];
            
            $req = $bdd->prepare('SELECT id_visiteur FROM visiteur WHERE nom = :nom
            AND pass = :pass');
            $req->execute(array(
            'nom' => $nom,
            'pass' => $pass_hache));
            $resultat = $req->fetch();
            if (!$resultat)
            {
            echo 'Mauvais identifiant ou mot de passe !';
            header('location:../vues/connexion.php');
            
            }else
            {
            session_start();
            $_SESSION['id_visiteur'] = $resultat['id_visiteur'];
            $_SESSION['nom'] = $nom;
            echo 'Vous êtes connecté !';
            header('Location: ../vues/accueil.php');
            }
            if ($remember) 
            {// Vérification des identifiants
                $remember= isset($_POST['remember']); // Vérifiez si la case à cocher est cochée
            
                // On écrit un cookie qui stoque le nom et pass du visiteur
                setcookie('nom', 'pass', time() + 3650*24*3600, null, null,false, true); 
            }
            
                if (isset($_SESSION['id_visiteur']) AND isset($_SESSION['nom']))
                {
                echo 'Bonjour ' . $_SESSION['nom'];
                }
            
            

        // public function get_nom()
        // {
        //     return $this->nom;
        // }
        // public function get_pass()
        // {
        //     return $this->pass;
        // }
    }
    
}
} 
?>
 