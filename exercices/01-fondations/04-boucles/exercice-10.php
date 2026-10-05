<?php

/**
 * Exercice 10 — Compteur à rebours
 *
 * Demander un nombre entier positif à l'utilisateur,
 * puis afficher tous les nombres de ce nombre jusqu'à 1.
 */

echo "*** Compteur à rebours ***" . PHP_EOL;

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

        // Parcourt les nombres du nombre saisi jusqu'à 1.
        for ($i = $nombre; $i >= 1; $i--) {

            echo "- " . $i . PHP_EOL;

        }
    }

} else {

    // La saisie n'est pas un entier valide.
    echo "Saisie invalide !" . PHP_EOL;

}
