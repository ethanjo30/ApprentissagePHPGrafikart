<?php
function repondre_oui_non($phrase) {
    while (true) {
        $reponse = readline($phrase);
        if ($reponse === "o"){
            return true;
        } elseif ($reponse === "n"){
            return false;
        }
    }
    
}
$resultat = repondre_oui_non("voulez vous continuer ?");
// si lutilisateur tape "o"=> true
// si l'utilisateur tape "n" => false

var_dump($resultat);