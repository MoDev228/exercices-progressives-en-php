<?php

/**
 * Exercice 5 — Comparateur de deux nombres
 *
 * Ce programme demande deux nombres entiers à l'utilisateur,
 * valide les saisies, puis indique lequel est supérieur,
 * lequel est inférieur ou si les deux nombres sont égaux.
 */

echo "*** Comparaison de deux nombres entiers ***" . PHP_EOL;

// Récupération des deux saisies utilisateur.
$nombre1 = readline("Entrer le premier entier : ");
$nombre2 = readline("Entrer le deuxième entier : ");

// Vérification que les deux saisies représentent bien des entiers valides.
if (
    filter_var($nombre1, FILTER_VALIDATE_INT) !== false
    && filter_var($nombre2, FILTER_VALIDATE_INT) !== false
) {

    // Conversion des saisies en entiers après validation.
    $nombre1 = (int) $nombre1;
    $nombre2 = (int) $nombre2;

    // Comparaison des deux nombres.
    if ($nombre1 > $nombre2) {
        echo "Le nombre $nombre1 est supérieur à $nombre2." . PHP_EOL;
        echo "Le nombre $nombre2 est inférieur à $nombre1." . PHP_EOL;

    } elseif ($nombre1 < $nombre2) {
        echo "Le nombre $nombre2 est supérieur à $nombre1." . PHP_EOL;
        echo "Le nombre $nombre1 est inférieur à $nombre2." . PHP_EOL;

    } else {
        echo "Les deux nombres sont égaux." . PHP_EOL;
    }

} else {
    // Message affiché lorsqu'au moins une saisie n'est pas un entier valide.
    echo "Nombre invalide : les deux saisies doivent être des entiers." . PHP_EOL;
}
