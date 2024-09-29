<?php
/** nomFonction(parametre1 , parametre2)
 * afficher directement le resulta avec echo devant 
 * stocké avec $nomVariable = devant 
 * 
 * deja vu 
 *readline() : ajoute une instruction a l'utilisateur
 *print_r : affiche se que l'utilisateur a entrer et affiche la liste d'un tableau
 *  (print_r($variable, true) le true renvoi l'info pour la stocké dans une variable")
 * 
 * Nouveau
 * var_dump : affiche le type de caractere rentrer par l'utilisateur, la quantité et le contenue
 * strrev : inverse le mot rentrer par l'utilisateur
 * strtolower : met tout en minuscule
 * array_sum : fonctione qui fait la somme d'un tablea
 * count : fonction compte la taille d'un tableau
 * round : arondi des valeur (around (valeur a rondire, nombre aprés la virgule))
 * array_push : ajoute des element au tableau (array_push($note,16,17))
 * array_reverse : inversse les element d'un tableau
 * sort : classe du plus petit a la plus grande 
 * exit : permet d'afficher un message et de sorti d'un programme
 * str_replace : remplace une chaine de caractere 
 *      (str_replace(se qu'il doit cherché, par quoi ont le remplace, la chaine qu'on doit utiliser))
 * strlent : taille de la chaine de caractere
 * str_repeat : repete une chaine  
 *      str_repeat(caratere a repété, nombre de fois)
 * strpos : recherche un mot dans une phrase
 *      strpos(ou on doit chercher, se quon doit chercher)
 * 
 * si il y a un & alors la variable sera modifier
*/

/*
$mot = readline("entrer un mot : ");
$chaineNettoyee = strtolower($mot);
$chaineInversee = strrev($chaineNettoyee);
if ($chaineNettoyee === $chaineInversee){
    echo "le mot $mot est un palindrome ";
} else {
    echo "le mot $mot n'est pas un palindrome ";
} */

$note = [10,20,13];
$somme = array_sum($note);
$moyenne = $somme/count($note);
$arondi = round($moyenne,2);
echo $arondi;

sort($note);
print_r ($note);