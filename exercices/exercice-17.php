<?php

/**
 * Exercice 17 — Recherche du plus grand nombre
 *
 * Demander 5 nombres entiers à l'utilisateur,
 * puis déterminer et afficher le plus grand.
 */

echo "*** Recherche du plus grand nombre ***" . PHP_EOL;

// Demande et valide le premier nombre.
$nombre = readline("Entrer le nombre 1 : ");

if (filter_var($nombre, FILTER_VALIDATE_INT) !== false) {

    $nombre = (int) $nombre;

    // Le premier nombre sert de valeur initiale pour le maximum.
    $maximum = $nombre;
    $saisie_valide = true;

    // Demande les quatre nombres restants.
    for ($i = 2; $i <= 5; $i++) {

        $nombre = readline("Entrer le nombre $i : ");

        // Vérifie que la nouvelle saisie est bien un entier.
        if (filter_var($nombre, FILTER_VALIDATE_INT) !== false) {

            $nombre = (int) $nombre;

            // Met à jour le maximum si le nouveau nombre est supérieur.
            if ($maximum <= $nombre) {

                $maximum = $nombre;

            }

        } else {

            echo "Saisie invalide !" . PHP_EOL;
            $saisie_valide = false;
            break;

        }
    }

    // Affiche le résultat uniquement si les 5 saisies sont valides.
    if ($saisie_valide === true) {

        echo "Le maximum est $maximum" . PHP_EOL;

    }

} else {

    echo "Saisie invalide !" . PHP_EOL;

}
