
<?php
class postule_parcelle
{
    private $client;
    private $parcelle;
    private $carte;
    private $date_enregistrement;
    public function __construct($client,$parcelle,$montant,$carte,$date_enregistrement)
    {
        $this->client=$client;
        $this->parcelle=$parcelle;
        $this->montant=$montant;
        $this->carte=$carte;
        $this->date_enregistrement; 
    }

    public function cree_demande()
    {
       
        global $bdd;
        $client=$this->client;
        $parcelle=$this->parcelle;
        $montant=$this->montant;
        $carte=$this->carte;
        $date_enregistrement=$this->date_enregistrement; 
        
        $req = $bdd->prepare('INSERT INTO postule_parcelle (client,parcelle,montant,carte,date_enregistrement) VALUES(?, ?,?, ?, now())');
        $exec=$req->execute(array($client,$parcelle,$montant,$carte)); 
        
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
    static function get_postulant_parcelle()
    {
        global $bdd;
        $parcelle=$_GET['id_parcelle'];
        $req=$bdd->prepare("SELECT *FROM postule_parcelle where parcelle='$parcelle'");
        $exec=$req->execute(array());
        $postules=[];
        if($exec){
            while ($donne=$req->fetch()) 
            {
                $postule= new postule_parcelle($donne['client'],$donne['parcelle'],$donne['montant'],$donne['carte'],$donne['date_enregistrement']);
                     array_push($postules,$postule);
            }  return $postules;
        }else return [];
    }
    static function get_mes_parcelle()
    {
        global $bdd;
        $client=$_SESSION['id_visiteur'];
        $req=$bdd->prepare("SELECT *FROM parcelle where client='$client'");
        $exec=$req->execute(array());
        $postules=[];
        if($exec){
            while ($donne=$req->fetch()) 
            {
                $postule= new postule_parcelle($donne['client'],$donne['parcelle'],$donne['montant'],$donne['carte'],$donne['date_enregistrement']);
                     array_push($postules,$postule);
            }  return $postules;
        }else return [];
    }
    public function get_client()
    {
        return $this->client;
    }
    public function get_parcelle()
    {
        return $this->parcelle;
    }
    public function get_montant()
        {
            return $this->montant;
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
