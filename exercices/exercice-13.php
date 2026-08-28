<?php

/**
 * Exercice 13 — Nombres pairs
 *
 * Demander un nombre entier positif à l'utilisateur,
 * puis afficher tous les nombres pairs compris entre 1 et ce nombre.
 */

$nombre = readline("Entrer un nombre entier positif : ");

// Vérifie que la saisie correspond bien à un entier valide.
if (filter_var($nombre, FILTER_VALIDATE_INT) !== false) {

    // Convertit explicitement la saisie en entier.
    $nombre = (int) $nombre;

    // Vérifie que le nombre est strictement positif.
    if ($nombre <= 0) {

        echo "Erreur : Entrer un nombre entier positif et supérieur à zéro (0)." . PHP_EOL;

    } else {

        echo "Nombres pairs :" . PHP_EOL;

        // Parcourt tous les nombres de 1 jusqu'au nombre saisi.
        for ($i = 1; $i <= $nombre; $i++) {

            // Un nombre est pair lorsque le reste de sa division par 2 vaut zéro.
            if ($i % 2 === 0) {

                echo "- $i" . PHP_EOL;

            }
        }
    }

} else {

    // La saisie n'est pas un entier valide.
    echo "Saisie invalide !" . PHP_EOL;

}
