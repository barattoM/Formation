<?php
$nombre=readline("Donnez un nombre : ");
//vérification de saisie
while(!ctype_digit($nombre)){
    echo "Saisie incorrect \n";
    $nombre=readline("Donnez un nombre : ");
}

//echo "La factorielle de ".$nombre." est ".gmp_fact($nombre);

//Affichage détaillé du calcul
    // if($nombre==0 || $nombre==1){
    //     echo "La factorielle de ".$nombre." est 1";
    // }
    // else {
    //     $phrase="1";
    //     $fact=1;
    //     for($i=2;$i<=$nombre;$i++){
    //         $fact=$fact*$i;
    //         $phrase=$phrase." X ".$i;
    //         echo $phrase." = ".$fact."\n";
    //     }
    // }

//Affichage concis du calcul
if($nombre==0 || $nombre==1){
    echo "La factorielle de ".$nombre." est 1";
}
else {
    $fact=1;
    for($i=2;$i<=$nombre;$i++){
        echo $fact." X ".$i;
        $fact=$fact*$i;
        echo" = ".$fact."\n";
    }
}