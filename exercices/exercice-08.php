<?php

/**
 * Exercice 8 — Année bissextile
 *
 * Demander une année à l'utilisateur et déterminer si elle est
 * bissextile ou non.
 */

// Demande à l'utilisateur de saisir une année.
$annee = readline("Entrer une année : ");

// Vérifie que la saisie correspond bien à un entier valide.
if (filter_var($annee, FILTER_VALIDATE_INT) !== false) {

    // Convertit explicitement la saisie en entier.
    $annee = (int) $annee;

    // Une année nulle ou négative n'est pas acceptée.
    if ($annee <= 0) {

        echo "Année doit être supérieure à zéro (0)." . PHP_EOL;

    } else {

        // Vérifications intermédiaires pour observer les résultats du modulo.
        echo "Vérification : $annee % 400 = " . ($annee % 400) . PHP_EOL;
        echo "Vérification : $annee % 4 = " . ($annee % 4) . PHP_EOL;
        echo "Vérification : $annee % 100 = " . ($annee % 100) . PHP_EOL;

        // Une année est bissextile si elle est divisible par 400,
        // ou si elle est divisible par 4 sans être divisible par 100.
        if ($annee % 400 === 0 || $annee % 4 === 0 && $annee % 100 !== 0) {

            echo "L’année $annee est bissextile." . PHP_EOL;

        } else {

            echo "L’année $annee est non bissextile." . PHP_EOL;

        }
    }

} else {

    // La saisie n'est pas un entier valide.
    echo "Saisie invalide !" . PHP_EOL;

}
