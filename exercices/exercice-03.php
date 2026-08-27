<?php

/**
 * Exercice 3 — Vérificateur d'âge
 *
 * Ce programme demande l'âge d'une personne, valide la saisie,
 * puis détermine sa catégorie d'âge.
 */

// Récupération de la saisie utilisateur sous forme de chaîne.
$age = readline("Entrer votre âge : ");

// Vérification que la saisie représente bien un entier valide.
if (filter_var($age, FILTER_VALIDATE_INT) !== false) {

    // Conversion de la saisie en entier après validation.
    $age = (int) $age;

    // Vérification de la cohérence métier : un âge ne peut pas être négatif.
    if ($age < 0) {
        echo "Âge invalide." . PHP_EOL;

    } elseif ($age <= 12) {
        echo "Tu es un Enfant." . PHP_EOL;

    } elseif ($age <= 17) {
        echo "Tu es un Adolescent." . PHP_EOL;

    } elseif ($age <= 59) {
        echo "Vous êtes un Adulte." . PHP_EOL;

    } else {
        echo "Vous êtes un Senior." . PHP_EOL;
    }

} else {
    // La saisie ne correspond pas à un entier valide.
    echo "Saisie invalide !" . PHP_EOL;
}
