
    <?php
    session_start();
        class visiteur 
        {
           private $nom;
           private $post_nom;
           private $prenom;
           private $mail;
           private $adresse;
           private $num_tel;
           private $pass;
           private $date_enregistrement;
           
           
          public function __construct($nom,$post_nom,$prenom,$mail,$adresse,$num_tel,$pass,$date_enregistrement)
          {
            $this->nom=$nom;
            $this->post_nom=$post_nom;
            $this->prenom=$prenom;
            $this->mail=$mail;
            $this->adresse=$adresse;
            $this->num_tel=$num_tel;
            $this->pass=$pass;
            $this->date_enregistrement=$date_enregistrement;
          }
          
          public function cree_visiteur()
          {
            global $bdd;
            $nom=$this->nom;
            $post_nom=$this->post_nom;
            $prenom=$this->prenom;
            $mail=$this->mail;
            $adresse=$this->adresse;
            $num_tel=$this->num_tel;
            $pass=$this->pass;
            $date_enregistrement=$this->date_enregistrement; 
            
            $req = $bdd->prepare('INSERT INTO visiteur (nom,post_nom,prenom,mail,adresse,num_tel,pass,date_enregistrement) VALUES(?, ?, ?, ?, ?,?, ?,?)');
            $exec=$req->execute(array($nom,$post_nom,$prenom,$mail,$adresse,$num_tel,$pass,$date_enregistrement)); 
            
                if ($exec) 
                {
                    return true;
                }
            
          }

          public function get_id_visiteur()
          {
            global $bdd;

            $req=$bdd->prepare('SELECT id_visiteur from visiteur where nom=:nom');
            $exec=$req->execute(array(':nom'=>$this->get_nom()));

            if ($exec) 
            {
                if ($id=$req->fetch()) 
                {
                   $id_visiteur=$id['id_visiteur'];
                   $_SESSION['id_visiteur']=$id_visiteur;
                   return $id_visiteur;
                }
                else return null;
            }
            if ($_SERVER['REQUEST_METHOD'] === 'POST') 
            {
                $remember= isset($_POST['remember']); // Vérifiez si la case à cocher est cochée
                // Vérifiez si les informations de connexion sont valides
                if ($remember) 
                {
                    // On écrit un cookie qui stoque le nom et pass du visiteur
                setcookie('nom', 'pass','id_visiteur', time() + 3650*24*3600, null, null,null,false, true); 
                }                
            }
        }
          public function get_nom()
            {
                return $this->nom;
            }
         public function getPost_nom()
            {
                return $this->post_nom;
            }
         public function getPrenom()
            {
                return $this->prenom;
            }
         public function getMail()
            {
                return $this->mail;
            }
         public function getAdresse()
            {
                return $this->adresse;
            } 
         public function getNum_tel()
            {
            return $this->num_tel;
            } 
        public function get_pass()
            {
            return $this->pass;
            } 
         public function getDate_enregistrement()
            {
                return $this->date_enregistrement;
            } 
        
    }
    ?>
