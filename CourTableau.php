<?php

/* tableau commence a 0 */
$Notes = [ 10, 20, 'eleve'];
echo $Notes[2];

/** deux dimention */
$eleve = ['marck', 'doe',[10,20,15]];
echo $eleve[2][1];


/**les cles */
$eleve2 = [
    'Nom' => 'doe',
    'Prenom' => 'Marck',
    'Notes'=> [10,20,15]
];

/**modification */
$eleve2['Prenom'] = 'Claude';

/**ajoute a l'index 3 
 * Si aprés notes les crochet sont vide, par defaut ajout a la fin
 * ATTENTION que pour les index NUMERIQUE
*/
$eleve2['Notes'][3] = 16;
echo $eleve2 ['Nom'].' '.$eleve2 ['Prenom'];

/** print_r pour afficher la liste des notes */
print_r($eleve2['Notes']);

/**tableau de tableau */
$classe = [
    [
        'nom'=> 'doe',
        'prenom' => 'jean',
        'note' => [16,16,16]
    ],
    [
        'nom'=>'doe',
        'prenom'=>'gulivert',
        'note'=>[12,17,15]
    ]
];
echo $classe[1]['note'][1];