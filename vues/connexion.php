<?php session_start()?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include_once("../includes/login.php"); ?>
    <div class="login-section grid">
        <div class="left-side flex">
            <div class="logo flex"> 
               <!-- <div class="logo-img"><img src="./img/lo" alt=""></div> -->
               <span class="medinfo flex"><h1><br>HOUSE FINDER APP</h1></span> 
            </div>
            <div class="text-side ">
                <span class="title-login"> Deja membre ?</span> <br>
                Retrouvez votre compte en remplissant ces champs et profitez de nos services
            </div>
            
        </div>
        <div class="login flex">
        <form action="../controleurs/connexion.php" method="post">
                <fieldset>
                    <legend>connectez vous</legend>
                    
                    <p> Retrouvez votre compte<br><br>
                    <label for="nom">votre nom:</label><br>
                    <input type="text" name="nom" id="nom"placeholder="ed" required><br>
                    <label for="pass">votre mot de passe:</label><br>
                    <input type="password" name="pass" id="pass" placeholder="mnf87#2" required><br>            
                    </p>

                    <div class="remember-info">
                        <div class="remember-box flex">
                            <div class="remeber-check">
                                <input type="checkbox" name="remember" id="remember">
                                <label for="rember">Remember me</label>
                            </div>
                            <a href="">mot de pass oublié? ?</a>
                        </div>
                    </div>
                    <div class="login-button"><button type="submit">Connectez vous</button> </div>
                    <div class="sign-up"><span>Vous n'avez pas de compte ?</span><a href="index.php">  Inscrivez vous</a> </div>
                </fieldset>                
           </form>
        </div>
    </div>
</body>
</html>