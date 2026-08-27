<?php

/**
 * Exercice 4 — Pair ou impair
 *
 * Ce programme demande un nombre entier à l'utilisateur,
 * vérifie la validité de la saisie, puis détermine si le nombre
 * est pair ou impair grâce à l'opérateur modulo (%).
 */

// Récupération de la saisie utilisateur sous forme de chaîne.
$nombre = readline("Entrer un nombre entier : ");

// Vérification que la saisie représente bien un entier valide.
if (filter_var($nombre, FILTER_VALIDATE_INT) !== false) {

    // Conversion en entier après validation.
    $nombre = (int) $nombre;

    // Un nombre est pair lorsque le reste de sa division par 2 est égal à 0.
    if ($nombre % 2 === 0) {
        echo "Ce nombre $nombre est pair." . PHP_EOL;

    } else {
        echo "Ce nombre $nombre est impair." . PHP_EOL;
    }

} else {
    // La saisie ne correspond pas à un entier valide.
    echo "Nombre invalide : la saisie doit être un entier." . PHP_EOL;
}
