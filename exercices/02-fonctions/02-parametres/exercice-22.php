<?php

/**
 * Exercice 22 — Fonction avec plusieurs paramètres
 *
 * Énoncé :
 * Crée une fonction appelée calculerSomme().
 *
 * Cette fonction doit :
 * 1. recevoir deux nombres en paramètres ;
 * 2. calculer leur somme ;
 * 3. retourner le résultat.
 *
 * Ensuite, appelle la fonction plusieurs fois avec des valeurs différentes
 * et affiche les résultats.
 *
 * Exemple :
 * calculerSomme(10, 5);
 *
 * Objectif pédagogique :
 * - créer une fonction avec plusieurs paramètres ;
 * - transmettre des valeurs à une fonction ;
 * - effectuer un calcul à l'intérieur d'une fonction ;
 * - retourner le résultat avec return ;
 * - réutiliser une même fonction avec différentes valeurs.
 */

function calculerSomme($nombre1, $nombre2) {
    return $nombre1 + $nombre2;
}

echo calculerSomme(10, 5) . PHP_EOL;
echo calculerSomme(32, 15) . PHP_EOL;
echo calculerSomme(12, 8) . PHP_EOL;
