<?php

/**
 * Exercice 20 — Calculer la moyenne de plusieurs nombres
 *
 * Demander 10 nombres entiers, calculer leur somme et leur moyenne.
 */

echo "**** Calculer la moyenne de plusieurs nombres ****" . PHP_EOL;

$somme = 0;
$saisie_valide = true;

for ($i = 1; $i <= 10; $i++) {

    $nombre = readline("Entrer le nombre $i : ");

    if (filter_var($nombre, FILTER_VALIDATE_INT) !== false) {

        $nombre = (int) $nombre;
        $somme += $nombre;

    } else {

        echo "Saisie invalide !" . PHP_EOL;
        $saisie_valide = false;
        break;

    }
}

if ($saisie_valide === true) {

    $moyenne = $somme / 10;

    echo "La somme : $somme." . PHP_EOL;
    echo "La moyenne : $moyenne." . PHP_EOL;

}
