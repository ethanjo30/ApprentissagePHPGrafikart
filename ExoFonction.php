<?php
/**filtre a insulte detecter des insulte dans une phrase utilisateur*/

$insultes = ["merde","con"];
$phrase = readline("entrez une phrase : ");

/*foreach ($insultes as $insulte){
    $repete = str_repeat("*",strlen($insulte));
    $phrase = str_replace($insulte, $repete , $phrase);
}

/*ecriture sans passer par le foreach
$phrase = str_replace($insultes, ["*****", "***"], $phrase);
echo $phrase;*/

/* afficher "Message insultant rejeté" sil insulte detecter*/


foreach ($insultes as $insulte) {
    if (strpos($phrase, $insulte) !== false) {
        $insulte_trouvee = true;
        break; 
    }
}

if ($insulte_trouvee == true) {
    echo "Message insultant rejeté";
} else {
    echo "Message correct : $phrase";
}