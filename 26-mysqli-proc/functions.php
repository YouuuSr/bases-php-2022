<?php
/* 
Reçoit un INT avec le nombre d'habitants 
renvoie un string avec la conversion en millions (avec 2 chiffres après la virgule) 

en Inde : perMillion(1210193422) => "1210.19 Millions"
a Andorre : perMillion(85959) => "0.08 Million"

A partir de 2millions on rajoute s à "Million"
*/

function perMillion(int $number): string {
    $nombre = round($number / 1000000,2);
    if($nombre >= 2){
        return $nombre ." Millions";
    }
    return $nombre ." Million";
    
};
