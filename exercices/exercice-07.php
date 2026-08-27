<?php

/**
 * Exercice 7 — Calcul de moyenne
 *
 * Ce programme demande trois notes à un étudiant, valide les saisies,
 * vérifie qu'elles sont comprises entre 0 et 20, calcule la moyenne
 * et affiche l'appréciation correspondante.
 */

// Récupération des trois notes saisies par l'utilisateur.
$note1 = readline("Entrer la première note : ");
$note2 = readline("Entrer la deuxième note : ");
$note3 = readline("Entrer la troisième note : ");

// Vérification que les trois saisies représentent des nombres valides.
if (
    filter_var($note1, FILTER_VALIDATE_FLOAT) !== false
    && filter_var($note2, FILTER_VALIDATE_FLOAT) !== false
    && filter_var($note3, FILTER_VALIDATE_FLOAT) !== false
) {

    // Conversion des saisies en nombres flottants après validation.
    $note1 = (float) $note1;
    $note2 = (float) $note2;
    $note3 = (float) $note3;

    // Vérification métier : chaque note doit être comprise entre 0 et 20.
    if (
        $note1 < 0 || $note1 > 20
        || $note2 < 0 || $note2 > 20
        || $note3 < 0 || $note3 > 20
    ) {
        echo "Erreur : les notes doivent être comprises entre 0 et 20." . PHP_EOL;

    } else {

        // Calcul de la somme puis de la moyenne des trois notes.
        $somme = $note1 + $note2 + $note3;
        $moyenne = $somme / 3;

        echo "Moyenne : $moyenne" . PHP_EOL;

        // Détermination de l'appréciation selon la moyenne obtenue.
        if ($moyenne < 10) {
            echo "Appréciation : Échec" . PHP_EOL;

        } elseif ($moyenne < 12) {
            echo "Appréciation : Passable" . PHP_EOL;

        } elseif ($moyenne < 14) {
            echo "Appréciation : Assez bien" . PHP_EOL;

        } elseif ($moyenne < 16) {
            echo "Appréciation : Bien" . PHP_EOL;

        } else {
            echo "Appréciation : Très bien" . PHP_EOL;
        }
    }

} else {
    // Au moins une des saisies ne représente pas un nombre valide.
    echo "Saisie invalide !" . PHP_EOL;
}
