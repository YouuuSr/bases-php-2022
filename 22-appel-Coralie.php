<?php
include "22-functions.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test de nos fonctions</title>
</head>
<body>
    <h1>Test de nos fonctions</h1>
    <h2>Calculatrice</h2>
    <p>Exercice - enregistrez ce fichier sous 22-appel-{prenom}.php mettez ici un formulaire à 2 entrées et un select avec + - * /</p>
    <p>Lorsqu'on clique sur envoyer, le formulaire est envoyé par POST, et le résultat s'affiche en dessous</p>
    <p>Bonus, changez la fonction pour afficher par exemple :<br> 25/5 = 5</p>
    
    <form action="22-appel-Coralie.php" name="calcul" method="POST">
        <input type="text" name="premier" />
        <select name="choix">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="/">/</option>
            <option value="*">*</option>
        </select>
        <input type="text" name="second" />
        <input type="submit" value="Calculer"/>
    </form>
<?php
    if(isset($_POST['premier'],$_POST['second'],)){
        echo calculBasic($_POST['premier'],$_POST['second'],$_POST['choix']);
      
    }
 var_dump($_POST);
?>
</body>
</html>