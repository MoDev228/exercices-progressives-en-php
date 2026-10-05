<?php

/**
 * Exercice 12 — Somme des nombres
 *
 * Demander un nombre entier positif à l'utilisateur,
 * puis calculer la somme de tous les nombres de 1 jusqu'à ce nombre.
 */

echo "*** Somme des nombres. ***" . PHP_EOL;

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

        // Initialise l'accumulateur à zéro.
        $somme = 0;

        // Parcourt les nombres de 1 jusqu'au nombre saisi.
        for ($i = 1; $i <= $nombre; $i++) {

            // Ajoute le nombre courant à la somme précédente.
            $somme += $i;

        }

        echo "Somme : $somme" . PHP_EOL;
    }

} else {

    // La saisie n'est pas un entier valide.
    echo "Saisie invalide !" . PHP_EOL;

}
