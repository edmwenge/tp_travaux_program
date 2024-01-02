<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/accueil.css">
    <link rel="stylesheet" href="../css/info.css">
    <?php include_once("../includes/generalStyles.php") ;?>
    <?php include_once("../includes/menu.php"); 
            include('../controleurs/info_parcelle.php'); ?>
    <div class="app-content main">
       <div class="scroll ">
        <div class="login-section grid">
        <div class="left-side flex">
        <?php 
        $parcelles=info_parcelle();
        foreach ($parcelles as $parcelle) 
        {
            echo "<img src='../img/" .$parcelle->get_photo()."'>";?>
            <!-- <span class="medinfo flex"></span> 
            </div> -->
            </div>
        <div class="login flex">
                <fieldset>
                    <legend><h1>Description de la parcelle  </h1></legend>
            <?php 
   
   
        echo "<p> prix de vente : ".$parcelle->get_prix()." $<br>
        Situé en ".$parcelle->get_pays()." dans la province de ".$parcelle->get_province().", ville de ".$parcelle->get_ville()." commune de ".$parcelle->get_commune().
        " , precisement dans le quartier ".$parcelle->get_quartier()." avenue ".$parcelle->get_avenue()." numero ".$parcelle->get_num().
        "<br>cete parcelle en vente est proche d'un.e ".$parcelle->get_proximite()."<br> et  messure ".$parcelle->get_dimension()." m2<br>";
        if ($parcelle->get_securite()==-40) 
        {
            echo "son assurence securite est mediocre, mais dieu reste le protecteur fidele!<br>";
        }
        elseif ($parcelle->get_securite()==-55) 
        {
            echo "son assurence securite est moyenne, mais dieu reste le protecteur fidele!<br>";
        }
        else 
        {
            echo "son assurence securite est garentie <br>";
        }
        echo "<br>";
        if ($parcelle->get_electricity()=='oui' && $parcelle->get_eau()=='oui') 
        {
            echo "il y a presence d'energie electrique ainsi que de l'eau du robinet<br>";
        }
        elseif ($parcelle->get_electricity()=='oui' && $parcelle->get_eau()=='non') 
        {
            echo "il y a presence d'energie electrique mais pas de l'eau du robinet<br>";
        }
        elseif ($parcelle->get_electricity()=='non' && $parcelle->get_eau()=='oui') 
        {
            echo "il y a presence de l'eau du robinet mais pas d'energie electrique <br>";
        }
        else
        {
            echo "il faut contacter les agents du regi des eaux pour avoir accès à l'eau du robinet et ceux de la snel pour l'energie electrique <br>";
        }
        echo "cette magnifique parcelle n'attend que vous!<br>";
    }
    if(!($_SESSION['id_visiteur']==$parcelle->get_num_prop_parcelle()))
    {
        ?>
        <a href="postule_parcelle.php?id_visiteur=<?php echo $_SESSION['id_visiteur']; ?>&amp;id_parcelle=<?php echo $parcelle->get_id_parcelle(); ?>"><button>postulez maintenant sur cette parcelle</button></a>
        <?php 
    }
    else echo " <a href=\"evolution_parcelle.php?id_visiteur=".$_SESSION['id_visiteur']." &amp;id_parcelle=".$parcelle->get_id_parcelle()."\" ><button>visualiser l'actuel de votre parcelle</button></a>";
    ?>
    </div>
    </div>
    </div>
</div><?php include_once("../includes/scripts.php")?>
</body>
</html>


