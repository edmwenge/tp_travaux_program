
<?php
    include '../controleurs/visiteur.php';
    include '../configuration/config.php';
    include '../models/postule_appart.php';    
    
    $id=$_SESSION['id_visiteur'];
    $client=intval($id);
    $appart=$_GET['id_location'];
    $montant =$_POST['montant']; 
    $dates =$_POST['dates']; 
    $garenti =$_POST['garenti']; 
    $carte =$_FILES["carte"]; 
    $date_enregistrement=date('y-m-d');

    // we verify the size of the picture
    if($carte['size']<=7000000) 
    {
        $allowdExtentions = array('jpg', 'png', 'jpeg', 'JPG', 'PNG', 'JPEG');
        $fileInfo = pathinfo($carte['name']);
        $extension = $fileInfo;
        // var_dump($extension["extension"], $allowdExtentions) ;
        // die;
        
        // we verify if the extension is allowed
        if(in_array($extension["extension"], $allowdExtentions)) 
        {
            $tempFolder = $carte['tmp_name'];
            $fileName = basename($carte['name']);
            $destinationFolder = '../img/'.$fileName;
            
            // we verify if the picture is moved in the destination file
            if(move_uploaded_file($tempFolder, $destinationFolder)) 
            {
                // var_dump($fileName) ;
                // die;
                
                $postule=new postule_appartement($client,$appart,$montant,$dates,$garenti,$fileName,$date_enregistrement);

                if ($postule->cree_demande())
                {
                    header('location:../vues/acount.php');  
                }else echo 'non non';

            } else echo "l'image n'est pas téléchargée";

        } else echo 'le type de l\'image n\'est pas prise en charge';

    } else echo "le fichier est trop large";
   
?>