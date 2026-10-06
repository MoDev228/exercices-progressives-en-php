<?php

/**
 * Exercice 26 — Fonction avec plusieurs paramètres et valeur par défaut
 *
 * Énoncé :
 * Crée une fonction appelée presenter().
 *
 * Cette fonction doit :
 * 1. recevoir un prénom en paramètre ;
 * 2. recevoir un âge en paramètre avec une valeur par défaut de 18 ;
 * 3. retourner une phrase contenant le prénom et l'âge ;
 * 4. appeler la fonction avec le prénom et l'âge, puis avec uniquement le prénom.
 *
 * Objectif pédagogique :
 * - utiliser plusieurs paramètres ;
 * - utiliser un paramètre avec une valeur par défaut ;
 * - comprendre l'ordre des paramètres ;
 * - retourner une chaîne avec return.
 */

function presenter($nom, $age = 18) {
    return "Je m’appelle " . $nom . ", j’ai " . $age . " ans.";
}

echo presenter("Mohamed", 27) . PHP_EOL;
echo presenter("Ali") . PHP_EOL;
echo presenter("Fatima", 23) . PHP_EOL;
