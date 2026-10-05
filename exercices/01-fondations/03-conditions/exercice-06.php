<?php

/**
 * Exercice 6 — Calcul de réduction
 *
 * Ce programme demande le prix d'un produit, détermine le taux de
 * réduction correspondant à son prix, puis calcule le montant de
 * la réduction et le prix final.
 */

// Récupération de la saisie utilisateur sous forme de chaîne.
$prix_produit = readline("Entrer le prix du produit : ");

// Vérification que la saisie représente bien un nombre décimal valide.
if (filter_var($prix_produit, FILTER_VALIDATE_FLOAT) !== false) {

    // Conversion en nombre flottant après validation.
    $prix_produit = (float) $prix_produit;

    // Vérification de la cohérence métier : le prix ne peut pas être négatif.
    if ($prix_produit < 0) {
        echo "Impossible : prix inférieur à zéro (0)." . PHP_EOL;

    } else {

        // Détermination du taux de réduction selon le prix du produit.
        if ($prix_produit < 50) {
            $taux_reduction = 0;

        } elseif ($prix_produit <= 99) {
            $taux_reduction = 10;

        } elseif ($prix_produit <= 199) {
            $taux_reduction = 20;

        } else {
            $taux_reduction = 30;
        }

        // Calcul du montant de la réduction.
        $montant_reduction = $prix_produit * $taux_reduction / 100;

        // Calcul du prix final après réduction.
        $prix_final = $prix_produit - $montant_reduction;

        // Affichage du résultat.
        echo "Prix initial : $prix_produit €" . PHP_EOL;
        echo "Réduction : $taux_reduction %" . PHP_EOL;
        echo "Montant de la réduction : $montant_reduction €" . PHP_EOL;
        echo "Prix final : $prix_final €" . PHP_EOL;
    }

} else {
    // La saisie ne correspond pas à un nombre valide.
    echo "La saisie est invalide !" . PHP_EOL;
}
