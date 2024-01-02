<?php session_start()?>
<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <p>
     </p>
    <p> Pour une bonne navigation, remplissez ces champs svp
        <form action="../controleurs/visiteur.php" method="post">
            <label for="nom">Votre nom:</label><br>
            <input type="text" id="nom" name="nom" required><br>
            <label for="post_nom">Votre nom de famille:</label><br>
            <input type="text" id="post_nom" name="post_nom" required><br>
            <label for="prenom">Votre prenom:</label><br>
            <input type="text" id="prenom" name="prenom"><br>
            <label for="mail">Votre Adresse Mail:</label><br>
            <input type="email" id="mail" name="mail" required><br>
            <label for="adresse">Votre residence:</label><br>
            <input type="text" id="adresse" name="adresse" required><br>
            <label for="num_tel">Votre numero de telephone:</label><br>
            <input type="tel" id="num_tel"name="num_tel" required><br>
            <label for="pass">Votre mot de pass:</label><br>
            <input type="password" name="pass" id="pass" required><br>
            <label for="confirm_pass">Entrez a nouveau le mot de pass:</label><br>
            <input type="password" name="confirm_pass" id="confirm_pass" required><br><br>
            <input type="submit" value="Envoyer">
        </form>
    </p>
</body>
</html>