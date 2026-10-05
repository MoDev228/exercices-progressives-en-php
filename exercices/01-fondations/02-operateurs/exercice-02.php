<?php

/**
 * Exercice 2 — Calculateur
 *
 * Ce programme prend deux nombres et effectue les opérations suivantes :
 * addition, soustraction, multiplication, division et modulo.
 */

$nombre1 = 20;
$nombre2 = 5;

// Calcul et affichage de l'addition
echo "Addition : " . ($nombre1 + $nombre2) . PHP_EOL;

// Calcul et affichage de la soustraction
echo "Soustraction : " . ($nombre1 - $nombre2) . PHP_EOL;

// Calcul et affichage de la multiplication
echo "Multiplication : " . ($nombre1 * $nombre2) . PHP_EOL;

// Vérification avant la division et le modulo pour éviter une division par zéro
if ($nombre2 === 0) {
    echo "Erreur ! Impossible de diviser par zéro (0)." . PHP_EOL;
} else {
    // Calcul et affichage de la division
    echo "Division : " . ($nombre1 / $nombre2) . PHP_EOL;

    // Calcul et affichage du modulo
    echo "Modulo : " . ($nombre1 % $nombre2) . PHP_EOL;
}
