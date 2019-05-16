<?php
/**
 * Fonction de génération de la lettre aléatoire
 * @return string Lettre aléatoire générée
 */
function genereLettre(){
    $chiffre = rand(0,26);
    $lettres = ['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z'];
    return $lettres[$chiffre];
}
?>

