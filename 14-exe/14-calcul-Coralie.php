    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculatrice</title>
</head>
<body>
    <h1>Calculatrice</h1>
    <h2>Exercice calculatrice</h2>
    <p>Créez une branche et un nouveau fichier dans 14-exe/14-calcul-{prénom}.php<br>
Envoyez-moi le git pull request sur notre dépôt de la classe</p>
    <p>$reponse doit contenir la réponse au calcul, ou l'erreur de calcul ou de fonctionnement</p>
    <form action="" name="calcul" method="POST">
        <input type="text" name="first" />
        <select name="choix">
            <option value="addition">+</option>
            <option value="soustraction">-</option>
            <option value="multiplication">*</option>
            <option value="division">/</option>
        </select>
        <input type="text" name="second" />
        <input type="submit" value="Calculer"/>
     </form>
    <br>
    <?php
if(isset($_POST['first'],$_POST['choix'],$_POST['second'],)){
    
   
    $nb1 =($_POST['first']); 
    $choix = ($_POST['choix']);
    $nb2 = ($_POST['second']);
    if($nb1 != NULL && $nb2 != NULL) 
    {
        if($choix == 'division' && $nb2 == 0) 
        {
            $reponse = 'On peut pas diviser par 0 !';
            echo 'On peut pas diviser par 0 !<br>';
            
        }
        elseif($choix == 'addition')
        {
        $reponse = $nb1 + $nb2;
        echo 'Le résultat de cette addition est '.$reponse ;
        }

        elseif($choix == 'soustraction')
        {
        $reponse = $nb1 - $nb2;
        echo 'Le résultat de cette soustraction est '.$reponse;
        }

        elseif($choix == 'multiplication')
        {
        $reponse = $nb1 * $nb2;
        echo 'Le résultat est '.$reponse;
        }

        elseif($choix == 'division')
        {
        $reponse = $nb1 / $nb2;
        echo 'Le résultat de cette division est '.$reponse;
        }
        else{
            echo"Veuillez rentrez une valeur pour commencer le calcul";
        }
    }
}
?>
    <hr>

    <?php    
    if(isset($reponse)):
        echo $reponse;
    endif;
    ?>
    
    <hr>
    <?php
    var_dump($_POST);
    ?>
    
</body>
</html>