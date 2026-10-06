<?php

/**
 * Exercice 24 — Fonction avec plusieurs conditions
 *
 * Énoncé :
 * Crée une fonction appelée obtenirMention().
 *
 * Cette fonction doit :
 * 1. recevoir une note en paramètre ;
 * 2. déterminer la mention correspondant à la note :
 *    - note supérieure ou égale à 16 → "Très bien"
 *    - note supérieure ou égale à 14 → "Bien"
 *    - note supérieure ou égale à 12 → "Assez bien"
 *    - note supérieure ou égale à 10 → "Passable"
 *    - note inférieure à 10 → "Échec"
 * 3. retourner la mention correspondante.
 *
 * Ensuite, appelle la fonction avec plusieurs notes différentes et affiche
 * les résultats.
 *
 * Objectif pédagogique :
 * - utiliser plusieurs conditions avec if / elseif / else ;
 * - travailler avec un paramètre numérique ;
 * - retourner une chaîne avec return ;
 * - réutiliser une fonction.
 */

function obtenirMention($note) {
    if ($note >= 16) {
        return "Très bien";
    } elseif ($note >= 14) {
        return "Bien";
    } elseif ($note >= 12) {
        return "Assez bien";
    } elseif ($note >= 10) {
        return "Passable";
    } else {
        return "Échec";
    }
}

echo obtenirMention(17) . PHP_EOL;
echo obtenirMention(15) . PHP_EOL;
echo obtenirMention(12) . PHP_EOL;
echo obtenirMention(11) . PHP_EOL;
echo obtenirMention(9) . PHP_EOL;
