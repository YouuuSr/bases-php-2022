<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les conditions</title>
</head>
<body>
    <h1>Les conditions</h1>
    <h2>if (condition),</h2>
    <p>Plus basique que les boucles, les conditions sont cepedants la base de tous les languages informatique</p>
    <p>Le if vas vérifier que le ou les paramètres passée entre () valent true (boolean)</p>
    <pre><code>if (condition1){ // si la condition est vraie
        echo "true";
        } 
    </code></pre>
    <?php
    $nombre = mt_rand(0,20);
        // si $nombre est plus petit que 10 afficheez le
        if ($nombre <= 10){
            echo"$nombre est plus petit que 10 ";
        }

    ?>
    <p>Une conditions peut être complexe, et donc utilise les &&(et), ||(ou), !(contraire de) et XOR (^ ou strict) voir <a href="https://www.php.net/manual/fr/language.operators.logical.php" target="_blank" >opératreurs logique</a></p>
    <?php
// si la variable est initialisée (isset) (ici $nombre existe)
if (isset($nombre) && $nombre >5 && $nombre <15)
        echo "$nombre existe ET est plus grand que 5 ET est plus petit que 15";
    ?>
    <h2>else -sinon</h2>
    <p>C'est l'exécution de code si jamais le if qui précède est à false</p>
    <?php


$temp = mt_rand(-20,20);

echo "<h4>Il fait $temp ° dehors</h4>";

if($temp <=0){

    echo "Il gèle dehors !";

}else{
    echo "Il ne gèle pas pour le moment";

}
?>

<h2>elseif -else if -SINON SI</h2>
<p>C'est l'exécution d'une vérification supplémentaire si jamais le if ( ou autre elseif) qui précède est à false</p>

<?php
if($temp <= -10){

    echo "Il fait très froid dehors !";

}elseif($temp <= 0){

    echo "Il fait froid dehors";

}elseif($temp <= 12){

    echo "Il fait frisquet dehors";
}else{
    echo "Il fait agréable dehors";
}
?>

    
</body>
</html>