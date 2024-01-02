<?php
    class appartement
    {
        private $num_prop_appart;
        private $dimension;
        private $nb_des_pieces; 
        private $pays;
        private $province;
        private $ville;
        private $commune;
        private $quartier;
        private $avenue;
        private $num;
        private $photo;
        private $securite;
        private $electricity;
        private $eau;        
        private $proximite;
        private $prix;
        private $date_enregistrement;

        public function __construct($num_prop_appart,$dimension,$nb_des_pieces,$pays,$province,$ville,
        $commune,$quartier,$avenue,$num,$photo,$securite,$electricity,$eau,$proximite,$prix,
        $date_enregistrement)
        {
         
         $this->num_prop_appart=$num_prop_appart;
         $this->dimension=$dimension; 
         $this->nb_des_pieces=$nb_des_pieces;
         $this->pays=$pays;
         $this->province=$province;
         $this->ville=$ville;
         $this->commune=$commune;
         $this->quartier=$quartier;
         $this->avenue=$avenue;
         $this->num=$num;
         $this->photo=$photo;
         $this->securite=$securite;
         $this->electricity=$electricity;
         $this->eau=$eau;        
         $this->proximite=$proximite;
         $this->prix=$prix;
         $this->date_enregistrement=$date_enregistrement;
        }
        public function cree_appartement()
        {
         global $bdd;
         $num_prop_appart=$this->num_prop_appart;
         $dimension=$this->dimension; 
         $nb_des_pieces=$this->nb_des_pieces;
         $pays=$this->pays;
         $province=$this->province;
         $ville=$this->ville;
         $commune=$this->commune;
         $quartier=$this->quartier;
         $avenue=$this->avenue;
         $num=$this->num;
         $photo=$this->photo;
         $securite=$this->securite;
         $electricity=$this->electricity;
         $eau=$this->eau;        
         $proximite=$this->proximite;
         $prix=$this->prix;
         $date_enregistrement=$this->date_enregistrement;

         $req = $bdd->prepare('INSERT INTO appartements (num_prop_appart,dimension,nb_des_pieces,pays,
         province,ville,commune,quartier,avenue,num,photo,securite,electricity,eau,proximite,prix,date_enregistrement) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)');

         $exec=$req->execute(array($num_prop_appart,$dimension,$nb_des_pieces,$pays,$province,
                $ville,$commune, $quartier,$avenue,$num,$photo,$securite,$electricity,
                $eau,implode(',',$proximite),$prix,$date_enregistrement));
         
                 //Vérification des erreurs
            if ($req->errorCode() !== '00000') 
            {
            $error = $req->errorInfo();
            echo "Erreur lors de l'exécution de la requête : {$error[2]}";
            die();
            }

            // Affichage de l'ID de la nouvelle ligne insérée
            echo "Nouvelle commande insérée avec l'ID : {$bdd->lastInsertId()}";
                if ($exec) 
                {
                    return true;
                }
        }
         
        static function get_compte_appartement()
        {
            global $bdd;
            $id_visiteur = $_SESSION['id_visiteur'];
            $req=$bdd->prepare("SELECT * FROM appartements WHERE num_prop_appart = ' $id_visiteur 'order by DATE_FORMAT(date_enregistrement, '%d/%m/%Y à %Hh%imin%ss') desc ");
            $exec=$req->execute(array());
            $appartements=[];

            if ($exec) 
            {
               
                while ($donne=$req->fetch()) 
                {
                    $appartement= new appartement($donne['num_prop_appart'],$donne['dimension'],$donne['nb_des_pieces'],$donne['pays'],$donne['province'],
                                            $donne['ville'],$donne['commune'],$donne['quartier'],$donne['avenue'],
                                            $donne['num'],$donne['photo'],$donne['securite'],$donne['electricity'],$donne['eau'],
                                            $donne['proximite'],$donne['prix'],$donne['date_enregistrement']);
                         array_push($appartements,$appartement);
                }  return $appartements;
            } else return [];
        }
        static function get_appartement()
        {
            global $bdd;
            $num_prop_appart=1;
            $req=$bdd->prepare('SELECT *FROM appartements WHERE 1 order by DATE_FORMAT(date_enregistrement, \'%d/%m/%Y à %Hh%imin%ss\') desc ');
            $exec=$req->execute(array());
            $appartements=[];
            if ($exec) 
            {
               
                while ($donne=$req->fetch()) 
                {
                    $appartement= new appartement($donne['num_prop_appart'],$donne['dimension'],$donne['nb_des_pieces'],$donne['pays'],$donne['province'],
                                            $donne['ville'],$donne['commune'],$donne['quartier'],$donne['avenue'],
                                            $donne['num'],$donne['photo'],$donne['securite'],$donne['electricity'],$donne['eau'],
                                            $donne['proximite'],$donne['prix'],$donne['date_enregistrement']);
                         array_push($appartements,$appartement);
                }  return $appartements;
            } else return [];
        }
        static function get_accueil_appartement()
        {
            global $bdd;
            $num_prop_appart=1;
            $req=$bdd->prepare('SELECT *FROM appartements WHERE 1 order by prix desc limit 0,4');
            $exec=$req->execute(array());
            $appartements=[];
            if ($exec) 
            {
               
                while ($donne=$req->fetch()) 
                {
                    $appartement= new appartement($donne['num_prop_appart'],$donne['dimension'],$donne['nb_des_pieces'],$donne['pays'],$donne['province'],
                                            $donne['ville'],$donne['commune'],$donne['quartier'],$donne['avenue'],
                                            $donne['num'],$donne['photo'],$donne['securite'],$donne['electricity'],$donne['eau'],
                                            $donne['proximite'],$donne['prix'],$donne['date_enregistrement']);
                         array_push($appartements,$appartement);
                }  return $appartements;
            } else return [];
        }

        // function get_id_location($appartement) {
        //     // Accès à l'objet PDO global
        //     global $pdo;
        //     // Préparation de la requête SQL
        //     $stmt = $pdo->prepare('SELECT id_appart FROM appartement WHERE id_appart = ?');
        //     // Exécution de la requête SQL avec le paramètre $appartement
        //     $stmt->execute(array($appartement));
        //     // Récupération du résultat sous forme d'un tableau associatif
        //     $result = $stmt->fetch(PDO::FETCH_ASSOC);
        //     // Retour de l'id_appart si trouvé, sinon null
        //     return isset($result['id_appart']) ? $result['id_appart'] : null;
        // }
        public function get_id_location()
          {
            global $bdd;

            $req=$bdd->prepare('SELECT id_location from appartements where num_prop_appart=:num_prop_appart and dimension=:dimension and nb_des_pieces=:nb_des_pieces and 
                pays=:pays and province=:province and ville=:ville and commune=:commune and quartier=:quartier and avenue=:avenue and num=:num and photo=:photo and 
                securite=:securite and electricity=:electricity and eau=:eau and proximite=:proximite and prix=:prix and date_enregistrement=:date_enregistrement');
            
            $exec=$req->execute(array(':num_prop_appart'=>$this->get_num_prop_appart(),':dimension'=>$this->get_dimension(),':nb_des_pieces'=>$this->get_nb_des_pieces(), 
            ':pays'=>$this->get_pays(),':province'=>$this->get_province(),':ville'=>$this->get_ville(),':commune'=>$this->get_commune(),
            ':quartier'=>$this->get_quartier(),':avenue'=>$this->get_avenue(),':num'=>$this->get_num(),':photo'=>$this->get_photo(),
            ':securite'=>$this->get_securite(),':electricity'=>$this->get_electricity(),':eau'=>$this->get_eau(),
            ':proximite'=>$this->get_proximite(),':prix'=>$this->get_prix(),':date_enregistrement'=>$this->get_date_enregistrement()));

            if ($exec) 
            {
                if ($idi=$req->fetch()) 
                {
                   $id_location=$idi['id_location'];
                   return $id_location;
                }
                else return null;
            }else return null;
        }
        
        static function get_info_appart($id_location) 
        {
            global $bdd;
            $req=$bdd->prepare('SELECT *FROM appartements WHERE id_location=:id_location ');
            $exec=$req->execute(array(':id_location'=>$id_location));
            $appartements=[];
            if ($exec) 
            {
               
                while ($donne=$req->fetch()) 
                {
                    $appartement= new appartement($donne['num_prop_appart'],$donne['dimension'],$donne['nb_des_pieces'],$donne['pays'],$donne['province'],
                                            $donne['ville'],$donne['commune'],$donne['quartier'],$donne['avenue'],
                                            $donne['num'],$donne['photo'],$donne['securite'],$donne['electricity'],$donne['eau'],
                                            $donne['proximite'],$donne['prix'],$donne['date_enregistrement']);
                         array_push($appartements,$appartement);
                }  return $appartements;
            } else return [];
        }
          

        public function get_num_prop_appart()
        {
        return $this->num_prop_appart;
        }
        
        public function get_dimension()
        {
        return $this->dimension;
        }  
        
        public function get_nb_des_pieces()
        {
        return $this->nb_des_pieces;
        }  

        public function get_pays()
        {
        return $this->pays;
        }
        public function get_province()
        {
        return $this->province;
        }
        public function get_ville()
        {
        return $this->ville;
        }

        public function get_commune()
        {
        return $this->commune;
        }

        public function get_quartier()
        {
        return $this->quartier;
        }

        public function get_avenue()
        {
        return $this->avenue;
        }

        public function get_num()
        {
        return $this->num;
        }

        public function get_photo()
        {
        return $this->photo;
        }

        public function get_securite()
        {
        return $this->securite;
        }

        public function get_electricity()
        {
        return $this->electricity;
        }

        public function get_eau()
        {
        return $this->eau;
        }
  
        public function get_proximite()
        {
        return $this->proximite;
        }
        
        public function get_prix()
        {
        return $this->prix;
        }
        public function get_date_enregistrement()
        {
        return $this->date_enregistrement;
        }
        
    }
?>


