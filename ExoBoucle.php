<?php
/** demander a l'utilisateur de rentrer une note ou de taper fin
 * chaque note est sauvegardée dans un tableau $notes 
 * à la fin on affiche le tableau de note sous forme de liste
 */

 /**mon essaie exo **/
$note = null;
$notes = [];
while ($note !== 'fin'){
    $note = readline("Entrez une note et entrez \'fin\' pour terminer.");
    $notes [] = $note;
}

foreach ($notes as $list){
    echo "- $list \n";
}

/**pseudo code grafikart */
/**TANT QUE l'utilisateur ne tape pas fin 
 *      ajout de la note tapper au note
 * POUR chaque notes dans $notes 
 *      on affiche -$notes**/


$notes = [];
$action = null;
while($action != 'fin'){
    $action = readline("entrez une nouvelle note ou \'fin\' pour terminer la saisi : ");
    if ($action !== 'fin'){
        $notes [] = (int)$action;
    }
}

foreach($notes as $note){
    echo "- $note \n";
}



