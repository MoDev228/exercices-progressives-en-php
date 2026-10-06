<?php

/**
 * Exercice 25 — Fonction avec valeur par défaut
 *
 * Énoncé :
 * Crée une fonction appelée saluer().
 *
 * Cette fonction doit :
 * 1. recevoir un nom en paramètre ;
 * 2. donner à ce paramètre une valeur par défaut ;
 * 3. retourner un message de salutation contenant le nom ;
 * 4. appeler la fonction une première fois avec un nom et une deuxième fois
 *    sans fournir de nom.
 *
 * Objectif pédagogique :
 * - comprendre les paramètres par défaut ;
 * - savoir quand une valeur par défaut est utilisée ;
 * - continuer à utiliser return ;
 * - réutiliser une fonction dans plusieurs situations.
 */

function saluer($nom = "Mohamed") {
    return "As salam Alaykoum " . $nom . "!";
}

echo saluer() . PHP_EOL;
echo saluer("Ali") . PHP_EOL;
echo saluer("Fatima") . PHP_EOL;
