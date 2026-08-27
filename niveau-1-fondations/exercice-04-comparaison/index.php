<?php

$mot_de_passe = 'admin123';
$age = 18;
$estEtudiant = true;
$nom = "Mohamed";

if ($mot_de_passe === "admin123") {
    echo "Accès autorisé !";
}

if ($nom === "Mohamed" && $mot_de_passe !== "admin123") {
    echo "Accès refusé !";
}

if ($age >= 18 || $estEtudiant) {
    echo 
}
