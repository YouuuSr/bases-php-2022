<?php
//débogage de la variable POST
var_dump($_POST);


//si il existe la variable $_POST nommée temperature (utilisation)
if(isset($_POST['temperature'])) {
    echo 'ok';
}
//on vas creer une varible temporaire locale changer le typage de notre variable en entier (int) pour integrer, si ça fonctionne ça nous donne le numérique 0.
$temp = (int) $_POST['temperature'];
var_dump($temp);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Température</title>
</head>
<body>
    <h1>Température</h1>
    <form method="POST" name="name1" action="">
    <p>Bonjour, quel est la température dehors?</p>
    <input type="number" min="-100" max="100" name="temperature" placeholder="Mettez la température"><br>
    <input type="submit" value="Envoyer">


    </form>
</body>
</html>