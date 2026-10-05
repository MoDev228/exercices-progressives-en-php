<?php

/**
 * Exercice 16 — Compter les nombres impairs
 *
 * Demander un nombre entier positif à l'utilisateur,
 * puis afficher et compter tous les nombres impairs compris entre 1 et ce nombre.
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

        // Initialise le compteur et l'accumulateur.
        $compteur = 0;
        $somme = 0;

        echo "Nombres impairs :" . PHP_EOL;

        // Parcourt tous les nombres de 1 jusqu'au nombre saisi.
        for ($i = 1; $i <= $nombre; $i++) {

            // Un nombre est impair lorsque le reste de sa division par 2 est différent de zéro.
            if ($i % 2 !== 0) {

                echo "- $i" . PHP_EOL;

                // Incrémente le compteur lorsqu'un nombre impair est trouvé.
                $compteur++;

                // Ajoute le nombre impair à la somme.
                $somme += $i;

            }
        }

        echo "Nombre de nombres impairs : $compteur" . PHP_EOL;
        echo "Somme des nombres impairs : $somme" . PHP_EOL;
    }

} else {

    // La saisie n'est pas un entier valide.
    echo "Saisie invalide !" . PHP_EOL;

}
