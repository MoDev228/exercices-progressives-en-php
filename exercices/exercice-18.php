<?php

/**
 * Exercice 18 — Recherche du plus petit nombre
 *
 * Demander 5 nombres entiers à l'utilisateur,
 * puis déterminer et afficher le plus petit.
 */

echo "*** Recherche du plus petit nombre ***" . PHP_EOL;

// Demande et valide le premier nombre.
$nombre = readline("Entrer le nombre 1 : ");

if (filter_var($nombre, FILTER_VALIDATE_INT) !== false) {

    $nombre = (int) $nombre;

    // Le premier nombre sert de valeur initiale pour le minimum.
    $minimum = $nombre;
    $saisie_valide = true;

    // Demande les quatre nombres restants.
    for ($i = 2; $i <= 5; $i++) {

        $nombre = readline("Entrer le nombre $i : ");

        // Vérifie que la nouvelle saisie est bien un entier.
        if (filter_var($nombre, FILTER_VALIDATE_INT) !== false) {

            $nombre = (int) $nombre;

            // Met à jour le minimum si le nouveau nombre est plus petit.
            if ($minimum >= $nombre) {

                $minimum = $nombre;

            }

        } else {

            echo "Saisie invalide !" . PHP_EOL;
            $saisie_valide = false;
            break;

        }
    }

    // Affiche le résultat uniquement si les 5 saisies sont valides.
    if ($saisie_valide === true) {

        echo "Le minimum est $minimum" . PHP_EOL;

    }

} else {

    echo "Saisie invalide !" . PHP_EOL;

}
