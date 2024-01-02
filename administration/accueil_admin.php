<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil admin</title>
    <link rel="stylesheet" href="../css/accueil.css">
    <?php include_once("../includes/generalStyles.php") ;?>
</head>
<body>
    <?php include_once("../includes/menu_admin.php"); ?>
    <div class="app-content main">
       <div class="scroll ">
            
                <P>
                    <?php echo $_SESSION['nom'];?> bienvenue dans <strong>my house finder app pour admin</strong>.
                </P>
                <p>Recents</p>
                <table>
                    <tr>
                        <?php ?>
                        <td>
                            <div class="house-picture">
                                <img src="../img/img1.png" alt="">
                            </div>
                            <div class="house-informations">
                                <div class="proprio">Gloire</div>
                                <div class="price">3000$</div>
                                <div class="location"><i class="bi bi-geo-alt"></i> Ndosho, Av 5 cha</div>
                            </div>
                        </td>
                        <td>
                            <div class="house-picture">
                                <img src="../img/img1.png" alt="">
                            </div>
                            <div class="house-informations">
                                <div class="proprio">Gloire</div>
                                <div class="price">3000$</div>
                                <div class="location"><i class="bi bi-geo-alt"></i> Ndosho, Av 5 cha</div>
                            </div>
                        </td>
                        <td>
                            <div class="house-picture">
                                <img src="../img/img1.png" alt="">
                            </div>
                            <div class="house-informations">
                                <div class="proprio">Gloire</div>
                                <div class="price">3000$</div>
                                <div class="location"><i class="bi bi-geo-alt"></i> Ndosho, Av 5 cha</div>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>

            <!-- <div class="categories">
                <p>Categories</p>
                <div class="category">
                    <div class="cat-icon"></div>
                    <div class="cat-name">Parcelles</div>
                </div>
                <div class="category">
                    <div class="cat-icon"></div>
                    <div class="cat-name">Appartements</div>
                </div>
            </div> -->

            <div class="recommended">
                <p>recommended For you </p>
                <table>
                    <tr>
                        <?php ?>
                        <td>
                            <div class="house-picture">
                                <img src="../img/loginImg.jpg" alt="">
                            </div>
                            <div class="house-informations">
                                <div class="proprio">Gloire</div>
                                <div class="price">3000$</div>
                                <div class="location"><i class="bi bi-geo-alt"></i> Ndosho, Av 5 cha</div>
                            </div>
                        </td>
                        <td>
                            <div class="house-picture">
                                <img src="../img/loginImg.jpg" alt="">
                            </div>
                            <div class="house-informations">
                                <div class="proprio">Gloire</div>
                                <div class="price">3000$</div>
                                <div class="location"><i class="bi bi-geo-alt"></i> Ndosho, Av 5 cha</div>
                            </div>
                        </td>
                        <td>
                            <div class="house-picture">
                                <img src="../img/loginImg.jpg" alt="">
                            </div>
                            <div class="house-informations">
                                <div class="proprio">Gloire</div>
                                <div class="price">3000$</div>
                                <div class="location"><i class="bi bi-geo-alt"></i> Ndosho, Av 5 cha</div>
                            </div>
                        </td>
                    </tr>
                </table>
            

       </div>
    </div>

    <?php include_once("../includes/scripts.php")?>
    
</body>
</html>