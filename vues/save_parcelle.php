<?php session_start()?>
<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/accueil.css">
    <?php include_once("../includes/generalStyles.php") ;?>
    <?php include_once("../includes/menu.php"); ?>
    <div class="app-content main">
       <div class="scroll ">
            
   
                <p>
                    Entrez les informations liées à votre parcelle: <br>
                    <form action="../controleurs/parcelle.php" method="post" enctype="multipart/form-data">
                        <label for="dimension">Entrez les dimensions de votre parcelle:</label><br>
                        <input type="text" name="dimension" id="dimension" required><br>
                        <p>Adresse de la parcelle: <br>
                            <label for="pays">Pays:</label><br>
                            <input type="text" name="pays" id="pays" required><br>
                            <label for="province">Province:</label><br>
                            <input type="text" name="province" id="province" required><br>
                            <label for="ville">Ville:</label><br>
                            <input type="text" name="ville" id="ville" required><br>
                            <label for="commune">Commune:</label><br>
                            <input type="text" name="commune" id="commune" required><br>
                            <label for="quartier">Quartier:</label><br>
                            <input type="text" name="quartier" id="quartier" required><br>
                            <label for="avenue">avenue:</label><br>
                            <input type="text" name="avenue" id="avenue" required><br>
                            <label for="num">Numero de la parcelle:</label><br>
                            <input type="number" name="num" id="num" required><br>
                        </p>
                        <label for="photo">Inserez les photos liées à votre parcelle:</label><br>
                        <input type="file" name="photo" id="photo" required><br>
                        <label for="securite">Dans quel intervalle est l'assurence securité de votre parcelle:</label><br>
                        <select name="securite" id="securite" required><br>
                            <option value="-40">inferieure à 40%</option>
                            <option value="-55">entre 40% et 70%</option>
                            <option value="+70">Superieure à 70%</option>
                        </select><br>
                        <label for="electricity">Y il ya il d'electricité?</label><br>
                        <select name="electricity" id="electricity" required>
                            <option value="oui">oui</option>
                            <option value="non">non</option>
                        </select><br>
                        <label for="eau">Y il ya il de l'eau du robinet?</label><br>
                        <select name="eau" id="eau" required>
                            <option value="oui">oui</option>
                            <option value="non">non</option>
                        </select>
                        <p> <label for="proximite">Cochez les elements à proximité de votre parcelle:</label><br>
                            <input type="checkbox" name="proximite[]" value="stade"><label for="stade">Stade</label><br>
                            <input type="checkbox" name="proximite[]" value="ecole"><label for="ecole">ecole primaire ou secondaire</label><br>
                            <input type="checkbox" name="proximite[]" value="universite"><label for="universite">université</label><br>
                            <input type="checkbox" name="proximite[]" value="marché"><label for="marche">Marché</label><br>
                            <input type="checkbox" name="proximite[]" value="lac"><label for="lac"> Au bord du lac</label><br>
                            <input type="checkbox" name="proximite[]" value="grande route"><label for="routes">Proche d'une grande route</label><br>
                            <input type="checkbox" name="proximite[]" value="milieu"><label for="milieu">Au mileu d'un vaste quartier</label><br>
                            <input type="checkbox" name="proximite[]" value="hospital"><label for="hospital">Proche d'un hospital</label><br>
                            <input type="checkbox" name="proximite[]" value="eglise"><label for="eglise">Proche d'une eglise</label><br>
                            <input type="checkbox" name="proximite[]" value="salle de fete"><label for="fete">salle de fete (hotel)</label><br>
                        </p>
                        <label for="prix">Entrez le prix de vente en dollars:</label><br>
                        <input type="number" name="prix" id="prix" required><br>
                        <input type="submit" value="VALIDER">
                    </form>    
                </p>
            
        </div>
    </div>
    <?php include_once("../includes/scripts.php")?>
</body>
</html>