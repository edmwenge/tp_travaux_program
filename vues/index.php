<?php session_start()?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include_once("../includes/login.php") ?>
    <div class="login-section grid">
        <div class="left-side flex">
            <div class="logo flex"> 
               <!-- <div class="logo-img"><img src="./img/lo" alt=""></div> -->
               <span class="medinfo flex"><h1><br>HOUSE FINDER APP</h1></span> 
            </div>
            <div class="text-side ">
                <span class="title-login">Parcelle ou Maison ?</span> <br><br>
                Trouvez votre future "CHEZ MOI" repondant à vos préférences facilement et rapidement<br><br>
                Confiez nous votre immobilier et ensemble trouvons le prenneur de votre choix
                 
            </div>
            
        </div>
        <div class="login flex">
        <form action="../controleurs/visiteur.php" method="post">
                <fieldset>
                    <br>
                    <legend>Incrivez vous</legend>

                    <p> Pour une bonne navigation, remplissez ces champs svp <br><br>
                    <div class="divInputs">
                        <div class="divInputsI">
                            <label for="nom">Nom:</label><br>
                            <input type="text" id="nom" name="nom" placeholder="edwige " required><br>
                            <label for="post_nom">Post-nom:</label><br>
                            <input type="text" id="post_nom" name="post_nom" placeholder=" kays"required><br><br>
                            <label for="prenom">Prenom:</label><br>
                            <input type="text" id="prenom" name="prenom" placeholder="mwenge"><br>
                            <label for="mail">Adresse Mail:</label><br>
                            <input type="email" id="mail" name="mail" placeholder=" edkays@gmail.com"required><br>

                        </div>

                        <div class="divInputsII">
                            <label for="adresse">Votre residence:</label><br>
                            <input type="text" id="adresse" name="adresse" placeholder="rdc/nord-kivu/goma/goma/kyeshero/30juin/25"><br>
                            <label for="num_tel">Telephone:</label><br>
                            <input type="tel" id="num_tel" name="num_tel" placeholder="+256 998844551 "required><br>
                            <label for="pass">Votre mot de pass:</label><br>
                            <input type="password" name="pass" id="pass" placeholder="bla7@%glk "required><br>
                            <label for="confirm_pass">Entrez a nouveau le mot de pass:</label><br>
                            <input type="password" name="confirm_pass" id="confirm_pass" placeholder=" bla7@%glk"required><br><br>
                            
                        </div>
                    </div>
                    </p>

                    <div class="remember-info">
                        <div class="remember-box flex">
                            <div class="remeber-check">
                                <input type="checkbox" name="remember" id="remember">
                                <label for="remeber">Remember me</label>
                            </div>
                        </div>
                    </div>
                    <div class="login-button"><button type="submit">Inscrivez vous</button> </div>
                    <div class="sign-up"><span>Avez vous deja un compte ?</span><a href="connexion.php">  Connectez vous</a> </div>
                </fieldset>                
           </form>
        </div>
    </div>
</body>
</html>