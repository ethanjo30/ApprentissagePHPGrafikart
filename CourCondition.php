<?php
/**le if */

$note = 8;
if($note > 10){
    echo "ta note est de $note bon travail";
} else {
    echo "il faut encore travailler";
}

/**ATTENTION == different de === 
 * === compare strictement le type et la valeur
 * entrer le type avant readline pour une demande de saisi numerique 
*/

/**l'utilisateur entre sa note avec readline */
$note2 = (int)readline('entrez votre note: ');
if($note2 > 10){
    echo "ta note est de $note2 bon travail";
}
elseif($note2 === 10){
    echo "Tu as juste la moyenne";
}
else {
    echo "il faut encore travailler";
}

/**le switch */
$action = (int)readline("Votre action : (1:Ataque, 2:Defendre, 3:Passe mon tour)");

switch ($action) {
    case 1:
        echo "j\'attaque";
        break;
    case 2:
        echo "Je defend";
        break;
    case 3: 
        echo "passe tour";
        break;
    default:
        echo "commande inconnue";
}

/**le ET  s'écrit &&
 * le OU s'écrit ||
 */