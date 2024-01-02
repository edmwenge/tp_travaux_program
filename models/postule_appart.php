
<?php
class postule_appartement
{
    private $client;
    private $appartement;
    private $montant;
    private $dates;
    private $garenti;
    private $carte;
    private $date_enregistrement;
    public function __construct($client,$appartement,$montant,$dates,$garenti,$carte,$date_enregistrement)
    {
        $this->client=$client;
        $this->appartement=$appartement;
        $this->montant=$montant;
        $this->dates=$dates;
        $this->garenti=$garenti;
        $this->carte=$carte;
        $this->date_enregistrement; 
    }

    public function cree_demande()
    {
       
        global $bdd;
        $client=$this->client;
        $appartement=$this->appartement;
        $montant=$this->montant;
        $dates=$this->dates;
        $garenti=$this->garenti;
        $carte=$this->carte;
        $date_enregistrement=$this->date_enregistrement; 
        
        $req = $bdd->prepare('INSERT INTO postule_appartement (client,appartement,montant,dates,garenti,carte,date_enregistrement) VALUES(?, ?, ?, ?, ?, ?, now())');
        $exec=$req->execute(array($client,$appartement,$montant,$dates,$garenti,$carte)); 
        
            if ($exec) 
            {
                return true;
            }if ($req->errorCode() !== '00000') 
            {
            $error = $req->errorInfo();
            echo "Erreur lors de l'exécution de la requête : {$error[2]}";
            die();
            }
    }
    static function get_postulant_appartement()
    {
        global $bdd;
        $appartement=$_GET['id_location'];
        $req=$bdd->prepare("SELECT *FROM postule_appartement where appartement='$appartement'");
        $exec=$req->execute(array());
        $postules=[];
        if($exec){
            while ($donne=$req->fetch()) 
            {
                $postule= new postule_appartement($donne['client'],$donne['appartement'],$donne['montant'],$donne['dates'],$donne['garenti'],$donne['carte'],$donne['date_enregistrement']);
                     array_push($postules,$postule);
            }  return $postules;
        }else return [];
    }

    static function get_mes_appart()
    {
        global $bdd;
        $client=$_SESSION['id_visiteur'];
        $req=$bdd->prepare("SELECT *FROM postule_appartement where client='$client'");
        $exec=$req->execute(array());
        $postules=[];
        if($exec){
            while ($donne=$req->fetch()) 
            {
                $postule= new postule_appartement($donne['client'],$donne['appartement'],$donne['montant'],$donne['dates'],$donne['garenti'],$donne['carte'],$donne['date_enregistrement']);
                     array_push($postules,$postule);
            }  return $postules;
        }else return [];
    }
    public function get_client()
    {
        return $this->client;
    }
    public function get_appartement()
    {
        return $this->appartement;
    }
    public function get_montant()
        {
            return $this->montant;
        }
    public function get_dates()
        {
            return $this->dates;
        }
     public function get_garenti()
        {
            return $this->garenti;
        }
     public function get_carte()
        {
            return $this->carte;
        }
     public function get_date_enregistrement()
        {
            return $this->date_enregistrement;
        } 
    
}
?>
