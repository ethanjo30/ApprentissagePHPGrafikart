<?php
$prenom = 'Marck';
$nom = 'Doe';
$note1 = 10;
$note2 = 20;
$moyenne = ($note1+$note2)/2;

echo 'Bonjour ' ."$nom $prenom " .'vous avez eu '. (($note1+$note2)/2) .' de moyenne.';
/*simplifier*/
echo "Bonjour $nom $prenom vous avez eu $moyenne de moyenne."
?>
