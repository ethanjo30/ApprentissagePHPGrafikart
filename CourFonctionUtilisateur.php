<?php

/**creation de fonction utilisateur
* le mot cle return permet de renvoyer un resultat
*/ 
function bonjour($nom){
    return "bonjour" ." ". $nom;
}

$salutation = bonjour ("jean");
echo $salutation;