<?php

/**
 * Exercice 23 — Fonction avec condition
 *
 * Énoncé :
 * Crée une fonction appelée estMajeur().
 *
 * Cette fonction doit :
 * 1. recevoir un âge en paramètre ;
 * 2. vérifier si la personne est majeure ;
 * 3. retourner true si l'âge est supérieur ou égal à 18 ;
 * 4. retourner false dans le cas contraire.
 *
 * Ensuite, appelle la fonction avec plusieurs âges différents et affiche
 * le résultat.
 *
 * Objectif pédagogique :
 * - combiner une fonction et une condition ;
 * - utiliser un paramètre ;
 * - utiliser if / else ;
 * - retourner un booléen avec return.
 */

function estMajeur($age) {

    if ($age >= 18) {
        return true;
    } else {
        return false;
    }

}

echo estMajeur(10);
echo estMajeur(18);
echo estMajeur(30);
