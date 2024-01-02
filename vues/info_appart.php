<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/accueil.css">
    <link rel="stylesheet" href="../css/info.css">
    <?php include_once("../includes/generalStyles.php") ;?>
    <?php include_once("../includes/menu.php"); ?>
    <?php include('../controleurs/info_appart.php');?>
    <div class="app-content main">
       <div class="scroll ">
     
        <div class="login-section grid">
        <div class="left-side flex">
            <!-- <div class="logo flex"> -->
                <?php $appartements=info_appartement();
    foreach ($appartements as $appartement) 
    { 
       echo "<img src='../img/" .$appartement->get_photo()."'>";?>
        
               <!-- <span class="medinfo flex"></span>  -->
            <!-- </div> -->
            </div>
        <div class="login flex">
                <fieldset>
                    <legend><h1>Description de l'appartement  </h1></legend>
            
   <?php
        
         echo "<p> prix de vente : ".$appartement->get_prix()."<br>
        Situé en ".$appartement->get_pays()." dans la province ".$appartement->get_province().", ville de ".$appartement->get_ville()." commune de ".$appartement->get_commune().
        " , precisement dans le quartier ".$appartement->get_quartier()." avenue ".$appartement->get_avenue()." numero ".$appartement->get_num().
        "<br>cete appartement en vente est proche d'un.e ".$appartement->get_proximite().".<br> elle messure ".$appartement->get_dimension()." m2 et est composé de ".$appartement->get_nb_des_pieces()." pieces <br>";
        if ($appartement->get_securite()==-40) 
        {
            echo "son assurence securite est mediocre, mais dieu reste le protecteur fidele!";
        }
        elseif ($appartement->get_securite()==-55) 
        {
            echo "son assurence securite est moyenne, mais dieu reste le protecteur fidele!";
        }
        else 
        {
            echo "son assurence securite est garentie ";
        }
        echo "<br>";
        if ($appartement->get_electricity()=='oui' && $appartement->get_eau()=='oui') 
        {
            echo "il y a presence d'energie electrique ainsi que de l'eau du robinet";
        }
        elseif ($appartement->get_electricity()=='oui' && $appartement->get_eau()=='non') 
        {
            echo "il y a presence d'energie electrique mais pas de l'eau du robinet";
        }
        elseif ($appartement->get_electricity()=='non' && $appartement->get_eau()=='oui') 
        {
            echo "il y a presence de l'eau du robinet mais pas d'energie electrique ";
        }
        else
        {
            echo "il faut contacter les agents du regi des eaux pour avoir accès à l'eau du robinet et ceux de la snel pour l'energie electrique ";
        }
        echo "<br>ce joli appartement n'attend que vous!";
    }
    if(!($_SESSION['id_visiteur']==$appartement->get_num_prop_appart()))
    {
        ?>
            <a href="postule_appart.php?id_visiteur=<?php echo $_SESSION['id_visiteur'];?>&amp;id_location=<?php echo $appartement->get_id_location(); ?>"><button>postulez maintenant sur cet appart</button></a>
        <?php 
    }
    else echo " <a href=\"evolution_appart.php?id_visiteur=".$_SESSION['id_visiteur']." &amp;id_location=".$appartement->get_id_location()."\" ><button>visualiser l'actuel de votre appartement</button></a>";
    ?>
     </div>
    </div>
    </div>
</div><?php include_once("../includes/scripts.php")?>
</body>
</html>