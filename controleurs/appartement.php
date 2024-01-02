<?php
include '../configuration/config.php';
include '../models/appartement.php';
include '../controleurs/visiteur.php';
if (isset($_SESSION['id_visiteur'])) 
{
    $id=$_SESSION['id_visiteur'];
    $num_prop_appart=intval($id);
    $dimension=$_POST['dimension'];
    $nb_des_pieces=$_POST['nb_des_pieces']; 
    $pays=$_POST['pays'];
    $province=$_POST['province'];
    $ville=$_POST['ville'];
    $commune=$_POST['commune'];
    $quartier=$_POST['quartier'];
    $avenue=$_POST['avenue'];
    $num=$_POST['num'];
    $securite=$_POST['securite'];
    $electricity=$_POST['electricity'];
    $eau=$_POST['eau'];        
    $proximite=$_POST['proximite'];
    $prix=$_POST['prix'];
    $date_enregistrement=date('y-m-d');
    
    $photo=$_FILES["photo"];
    
    // we verify the size of the picture
    if($photo['size']<=7000000) 
    {
        $allowdExtentions = array('jpg', 'png', 'jpeg', 'JPG', 'PNG', 'JPEG');
        $fileInfo = pathinfo($photo['name']);
        $extension = $fileInfo;

        // we verify if the extension is allowed
        if(in_array($extension["extension"], $allowdExtentions)) 
    {
        $tempFolder = $photo['tmp_name'];
        $fileName = basename($photo['name']);
        $destinationFolder = '../img/'.$fileName;
        
        // we verify if the picture is moved in the destination file
        if(move_uploaded_file($tempFolder, $destinationFolder)) 
        {
            // var_dump($fileName) ;
            // die;
                $appartement= new appartement($num_prop_appart,$dimension,$nb_des_pieces,$pays,$province,$ville,$commune,$quartier,$avenue,$num,
                            $fileName,$securite,$electricity,$eau,$proximite,$prix,$date_enregistrement);

                if ($appartement->cree_appartement())
                {
                     header('location:../vues/validation.php');  
                }else echo 'non non';
                
            }else echo 'not in';
        
            function get_appartement()
            {
                return appartement :: get_appartement();
            }
            
            
        } else echo "l'image n'est pas téléchargée";

    } else echo 'le type de l\'image n\'est pas prise en charge';

} else echo "le fichier est trop large";



?>

