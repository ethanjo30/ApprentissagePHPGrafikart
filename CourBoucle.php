<?php

/**tant que = while */
$chiffre = null;
while($chiffre !== 10){
    $chiffre = (int)readline('entrer un chiffre : ');
}
echo "bravo";

/**Pour for */
for($i = 0; $i < 10; $i ++){
    echo ("- $i \n");
}

/**pour chaque foreach */
$notes = [10, 15, 16];
foreach($notes as $note){
    echo "-$note \n";
}

$eleves = [
    'CM1' => 'Marck',
    'CM2' => 'Paul'
];
foreach ($eleves as $classe => $eleve){
    echo "l'eleve $eleve est dans la classe $classe. \n";
}
/** afficher la liste des eleve par classe  */
$eleves = [
    'CM1' => ['Paule', 'Arthur', 'Gregorie'],
    'CM2' => ['Janne', 'Clementine', 'Julie']
];

foreach ($eleves as $classe => $listeEleve){
    echo " La classe $classe \n";

    foreach ($listeEleve as $eleve){
        echo "- $eleve \n";
    }
    echo "\n";
}