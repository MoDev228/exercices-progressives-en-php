<?php

/**
 * Exercice 11 — Table de multiplication
 *
 * Demander un nombre entier positif à l'utilisateur,
 * puis afficher sa table de multiplication de 1 à 10.
 */

echo "*** TABLE DE MULTIPLICATION ***" . PHP_EOL;

// Demande à l'utilisateur de saisir un nombre entier positif.
$nombre = readline("Entrer un nombre entier positif : ");

// Vérifie que la saisie correspond bien à un entier valide.
if (filter_var($nombre, FILTER_VALIDATE_INT) !== false) {

    // Convertit explicitement la saisie en entier.
    $nombre = (int) $nombre;

    // Vérifie que le nombre est strictement positif.
    if ($nombre <= 0) {

        echo "Erreur : Entrer un nombre entier positif et supérieur à zéro (0)." . PHP_EOL;

    } else {

        echo "Table de multiplication de $nombre." . PHP_EOL;

        // Parcourt les multiplicateurs de 1 à 10.
        for ($i = 1; $i <= 10; $i++) {

            echo "$nombre x $i = " . ($nombre * $i) . PHP_EOL;

        }
    }

} else {

    // La saisie n'est pas un entier valide.
    echo "Saisie invalide !" . PHP_EOL;

}
