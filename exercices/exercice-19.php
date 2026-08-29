<?php

/**
 * Exercice 19 — Compter les positifs, négatifs et zéros
 *
 * Demander 10 nombres entiers à l'utilisateur,
 * puis compter les positifs, les négatifs et les zéros.
 */

echo "**** Compter les positifs et les négatifs ****" . PHP_EOL;

$compteur_negatifs = 0;
$compteur_positifs = 0;
$compteur_zeros = 0;
$saisie_valide = true;

// Demande et traite les 10 nombres.
for ($i = 1; $i <= 10; $i++) {

    $nombre = readline("Entrer le nombre $i : ");

    // Vérifie que la saisie est bien un entier.
    if (filter_var($nombre, FILTER_VALIDATE_INT) !== false) {

        $nombre = (int) $nombre;

        // Classe le nombre et incrémente le compteur correspondant.
        if ($nombre > 0) {

            $compteur_positifs++;

        } elseif ($nombre < 0) {

            $compteur_negatifs++;

        } else {

            $compteur_zeros++;

        }

    } else {

        echo "Saisie invalide !" . PHP_EOL;
        $saisie_valide = false;
        break;

    }
}

// Affiche les résultats uniquement si les 10 saisies sont valides.
if ($saisie_valide === true) {

    echo "Nombre de positifs : $compteur_positifs." . PHP_EOL;
    echo "Nombre de négatifs : $compteur_negatifs." . PHP_EOL;
    echo "Nombre de zéros : $compteur_zeros." . PHP_EOL;

}
