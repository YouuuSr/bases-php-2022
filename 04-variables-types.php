<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les types de variables</title>
</head>
<body>
    <h1>Les types de variables</h1>
    <h2>Les stings (text)</h2>
    <p>Les chaînes de caractères sont mises dans les variables de type string ou str, ce sont les variables les plus utilisées pour l'affichage de texte dans les sites web</p>
    <p>On peut les utiliser et les mettre une à la suite de... Cela s'apelle la concaténation.</p>

    <?php


    //création de la variable(ici en camelCase), avec le = qui donne la valeur. En procédural, le typage strict n'est pas obligatoire
    $monTitre = "Bientôt la fin de ce cours interminable !";


    echo $monTitre."Yes! <br>";
    //affichage du contenu de la variable avec une chaîne concaténée (utilisation du . ou de la , ) gettype est une fonction permettant de récupérer le typage d'une variable (en PHP 8 on utilisera pluôt get_debug_type())

    echo"Le type de la variable est " .gettype($monTitre)."!"

    ?>
    <p>Il existe des centaines de fonctions pour gérer du texte, par exemple</p>

    <?php

    echo 'mettre tout en majuscule : mb_strtoupper($monTitre)' .mb_strtoupper($monTitre);


 ?>
    <p><a href="https://www.php.net/manual/fr/book.strings.php" target="_blank">string</a></p>

    <h2>Les numériques</h2>

    <p>Les numériques sont les variables les plus utilisées pour les calculs, il existe plusieurs sous-type de ceux-ci</p>
    <h3>Les entiers(integer, int)</h3>

    <p>Sont des enttiers les nombres sans virgules, positifs comme négatifs</p>

    <pre>$myFirstInt = 22;
$mySecondInt = -7;</pre>

    <p>Les calculs de base se font avec les signes + - * /</p>

    <?php
        $myFirstInt = 22;
        $mySecondInt = -7;
        echo $myFirstInt;
        echo "<br>";

        // addition
        $add = $myFirstInt + $mySecondInt;
        echo $add;
        echo "<br>";


        // soustravtion
        $sous = $myFirstInt - $mySecondInt;
        echo $sous;
        echo "<br>";

        // multiplication
            
        $multi = $myFirstInt * $mySecondInt;
        echo $multi;
        echo "<br>";


        // division
        $div = $myFirstInt / $mySecondInt;
        echo $div;
        echo "<br>";
        echo "Ce dernier, résultat de la division, devient un float<br>";

    ?>

            <h3>Les chiffres à virgule (float, double, nombres réels)</h3>
            <p>Ils ont le type float , attention en cas de calcul en base 10, on peut avoir des erreurs du au fait que les ordinateurs travaillent sur les calculs en base 16!<br>On utilise le . et pas la , comme sépateur !
        <a href=https://floating-point-gui.de/ target="_blank">ici une explication</a></p>


        <?php

        $firstFloat = 8.27;
        $secondFloat = -79.78943518575468;
        

        ?>

        <h2>Les booléens (bool, boolean)</h2>
        <p>Variable représentant sur un seul bit les 2 possibilitées du binaire: true ou false</p>
        <?php
        
        ?>


        <hr>
        <?php
        //outil de débogage le plus commun
        var_dump($myFirstInt,$mySecondInt,$monTitre,$add,$sous,$multi,$div,$firstFloat,$secondFloat);
        

        //outil de débogage plus 



    ?>
</body>
</html>