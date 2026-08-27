# PARCOURS DE 50 EXERCICES PHP PROGRESSIFS

## Objectif

Ce parcours a pour objectif de me faire progresser de débutant en PHP jusqu'à un niveau permettant de concevoir, développer, sécuriser et maintenir une application backend réelle.

Les exercices ne sont pas une simple collection de problèmes indépendants. Chaque exercice prépare les notions nécessaires au suivant.

> **Règle pédagogique : je dois essayer avant de recevoir la solution.**

Pour chaque exercice, le formateur doit :

1. présenter le problème ;
2. expliquer l'objectif ;
3. préciser les entrées et sorties ;
4. donner les contraintes ;
5. indiquer les notions autorisées ;
6. me laisser coder ;
7. analyser mon code ;
8. identifier précisément mes erreurs ;
9. donner des indices progressifs ;
10. me laisser corriger ;
11. proposer la solution complète uniquement si nécessaire ;
12. expliquer les bonnes pratiques et les risques de sécurité.

---

# Progression générale

```text
Fondamentaux
    ↓
Conditions et logique
    ↓
Boucles et algorithmique
    ↓
Tableaux
    ↓
Fonctions
    ↓
Chaînes et données
    ↓
Fichiers / JSON / CSV
    ↓
PHP moderne
    ↓
POO
    ↓
Architecture
    ↓
SQL / MySQL / PDO
    ↓
HTTP / formulaires
    ↓
Sessions / authentification
    ↓
Sécurité web
    ↓
API REST
    ↓
Tests
    ↓
Projet backend final
```

---

# NIVEAU 1 — FONDAMENTAUX PHP

## EXERCICE 1/50 — Profil utilisateur

**Niveau :** Débutant  
**Difficulté :** 1/10

### Objectif

Créer un programme qui stocke et affiche les informations d'un utilisateur :

- nom ;
- prénom ;
- âge ;
- ville ;
- profession.

### Notions

- balises PHP ;
- variables ;
- chaînes ;
- entiers ;
- affichage avec `echo` ;
- interpolation ;
- `PHP_EOL`.

### Sécurité

Comprendre que les données provenant d'un utilisateur ne doivent jamais être considérées comme fiables.

---

## EXERCICE 2/50 — Calculateur

**Niveau :** Débutant  
**Difficulté :** 1/10

### Objectif

Demander deux nombres et calculer :

- addition ;
- soustraction ;
- multiplication ;
- division ;
- modulo.

### Contraintes

Gérer explicitement la division par zéro.

### Notions

- opérateurs arithmétiques ;
- types numériques ;
- conditions ;
- comparaison stricte.

---

## EXERCICE 3/50 — Classification selon l'âge

**Niveau :** Débutant  
**Difficulté :** 2/10

### Objectif

Demander un âge et déterminer la catégorie de la personne :

- enfant ;
- adolescent ;
- adulte ;
- senior.

### Contraintes

Refuser les âges négatifs et les saisies qui ne représentent pas un entier valide.

### Notions

- `readline()` ;
- validation ;
- conversion ;
- `if / elseif / else` ;
- logique conditionnelle.

---

## EXERCICE 4/50 — Calculateur de réduction

**Niveau :** Débutant  
**Difficulté :** 2/10

### Objectif

Demander le prix d'un produit et appliquer une réduction selon des tranches de prix.

Afficher :

- prix initial ;
- taux ;
- montant de la réduction ;
- prix final.

### Notions

- pourcentage ;
- conditions ;
- `float` ;
- validation métier ;
- calculs intermédiaires.

---

## EXERCICE 5/50 — Comparateur de nombres

**Niveau :** Débutant  
**Difficulté :** 2/10

### Objectif

Demander deux entiers et déterminer :

- le plus grand ;
- le plus petit ;
- ou l'égalité.

### Notions

- `>`, `<`, `===` ;
- conditions ;
- validation des entrées.

---

## EXERCICE 6/50 — Pair ou impair

**Niveau :** Débutant  
**Difficulté :** 2/10

### Objectif

Demander un entier et déterminer s'il est :

- nul ;
- positif ou négatif ;
- pair ou impair.

### Notions

- modulo `%` ;
- conditions ;
- opérateurs logiques.

---

## EXERCICE 7/50 — Moyenne de trois notes

**Niveau :** Débutant  
**Difficulté :** 3/10

### Objectif

Demander trois notes, calculer leur moyenne et afficher une appréciation :

- `< 10` : Échec ;
- `10 à < 12` : Passable ;
- `12 à < 14` : Assez bien ;
- `14 à < 16` : Bien ;
- `>= 16` : Très bien.

### Contraintes

Chaque note doit être comprise entre `0` et `20`.

### Notions

- `float` ;
- validation ;
- moyenne ;
- conditions en cascade.

---

# NIVEAU 2 — LOGIQUE, CONDITIONS ET BOUCLES

## EXERCICE 8/50 — Année bissextile

**Niveau :** Débutant+  
**Difficulté :** 3/10

### Objectif

Demander une année et déterminer si elle est bissextile.

### Règle

Une année est bissextile si :

```text
elle est divisible par 400
OU
elle est divisible par 4 ET elle n'est pas divisible par 100
```

### Tests obligatoires

```text
2000 → bissextile
2024 → bissextile
1900 → non bissextile
2023 → non bissextile
```

### Notions

- `%` ;
- `&&` ;
- `||` ;
- comparaison ;
- validation d'un entier ;
- logique booléenne.

### Sécurité / robustesse

Refuser les années nulles ou négatives et les saisies invalides.

> **Cet exercice reste volontairement en position 8 : il consolide la logique avant l'introduction intensive des boucles.**

---

## EXERCICE 9/50 — Compteur

**Niveau :** Débutant+  
**Difficulté :** 3/10

### Objectif

Demander une limite et afficher les nombres de `1` jusqu'à cette limite.

Ajouter ensuite :

- compteur croissant ;
- compteur décroissant ;
- pas configurable.

### Notions

- `for` ;
- initialisation ;
- condition ;
- incrémentation ;
- décrémentation.

---

## EXERCICE 10/50 — Somme d'un intervalle

**Niveau :** Débutant+  
**Difficulté :** 3/10

### Objectif

Demander deux nombres entiers et calculer :

- somme de tous les nombres compris entre eux ;
- somme des nombres pairs ;
- somme des nombres impairs.

### Notions

- `for` ;
- accumulateur ;
- modulo ;
- bornes d'un intervalle.

---

## EXERCICE 11/50 — Tables de multiplication

**Niveau :** Débutant+  
**Difficulté :** 4/10

### Objectif

Afficher la table de multiplication d'un nombre, puis les tables de `1` à `10`.

### Notions

- boucles ;
- boucles imbriquées ;
- formatage des sorties.

---

## EXERCICE 12/50 — FizzBuzz

**Niveau :** Débutant+  
**Difficulté :** 4/10

### Objectif

Implémenter FizzBuzz de `1` à une limite donnée.

Puis créer une version où les multiples et textes sont configurables.

### Notions

- boucles ;
- conditions ;
- modulo ;
- logique algorithmique.

---

## EXERCICE 13/50 — Nombre premier

**Niveau :** Intermédiaire  
**Difficulté :** 5/10

### Objectif

Déterminer si un nombre est premier.

Puis afficher tous les nombres premiers jusqu'à une limite.

### Notions

- boucles ;
- modulo ;
- booléens ;
- optimisation simple d'un algorithme.

---

## EXERCICE 14/50 — Jeu du nombre mystère

**Niveau :** Intermédiaire  
**Difficulté :** 5/10

### Objectif

Créer un jeu dans lequel le programme choisit un nombre aléatoire et l'utilisateur doit le deviner.

Afficher :

- trop petit ;
- trop grand ;
- gagné ;
- nombre de tentatives.

### Notions

- `while` ;
- `do...while` ;
- `random_int()` ;
- contrôle d'une boucle.

### Robustesse

Limiter le nombre de tentatives et valider les entrées.

---

# NIVEAU 3 — TABLEAUX

## EXERCICE 15/50 — Analyse d'une liste de nombres

Créer un tableau de nombres et calculer :

- somme ;
- moyenne ;
- minimum ;
- maximum ;
- nombre d'éléments.

### Notions

- tableaux indexés ;
- `foreach` ;
- accumulateurs ;
- fonctions natives de tableau.

---

## EXERCICE 16/50 — Gestion d'une liste de notes

Créer un tableau de notes et déterminer :

- moyenne ;
- meilleure note ;
- plus mauvaise note ;
- nombre de réussites ;
- nombre d'échecs ;
- notes supérieures à la moyenne.

---

## EXERCICE 17/50 — Recherche dans un tableau

Rechercher une valeur dans un tableau et retourner :

- si elle existe ;
- son ou ses positions ;
- le nombre d'occurrences.

### Notions

- parcours ;
- comparaison ;
- index ;
- fonctions de tableau.

---

## EXERCICE 18/50 — Utilisateurs sous forme de tableaux associatifs

Créer plusieurs utilisateurs avec :

- id ;
- nom ;
- email ;
- âge ;
- rôle.

Afficher et rechercher les utilisateurs.

---

## EXERCICE 19/50 — Filtrage et tri

Filtrer et trier les utilisateurs selon :

- âge ;
- rôle ;
- nom ;
- statut.

### Notions

- `array_filter()` ;
- `array_map()` ;
- `usort()` ;
- callbacks ;
- closures.

---

# NIVEAU 4 — FONCTIONS ET RÉUTILISABILITÉ

## EXERCICE 20/50 — Bibliothèque de fonctions mathématiques

Créer des fonctions :

```php
addition()
soustraction()
multiplication()
division()
modulo()
```

### Objectif

Comprendre paramètres, valeurs de retour et responsabilité d'une fonction.

---

## EXERCICE 21/50 — Fonctions de validation

Créer des fonctions de validation :

```php
isValidAge()
isValidEmail()
isValidNumber()
isValidNote()
```

### Objectif

Séparer validation et logique métier.

---

## EXERCICE 22/50 — Analyseur de texte

Créer des fonctions capables de calculer :

- nombre de caractères ;
- nombre de mots ;
- fréquence des mots ;
- recherche ;
- remplacement.

---

## EXERCICE 23/50 — Gestionnaire de tâches en mémoire

Créer un gestionnaire permettant :

- ajouter une tâche ;
- supprimer ;
- terminer ;
- rechercher ;
- afficher ;
- filtrer les tâches terminées.

### Objectif

Combiner tableaux, fonctions, boucles et validation.

---

# NIVEAU 5 — DONNÉES, FICHIERS ET PHP MODERNE

## EXERCICE 24/50 — Dates et heures

Travailler avec `DateTimeImmutable` pour :

- calculer un âge ;
- calculer une différence entre deux dates ;
- déterminer une échéance ;
- parcourir une période.

---

## EXERCICE 25/50 — Exceptions

Créer un système de calcul sécurisé utilisant :

- `try` ;
- `catch` ;
- `finally` ;
- `throw`.

Créer au moins une exception personnalisée.

---

## EXERCICE 26/50 — Carnet de contacts dans un fichier

Stocker des contacts dans un fichier et permettre :

- création ;
- lecture ;
- modification ;
- suppression ;
- recherche.

### Sécurité

Gérer les erreurs de lecture/écriture et ne pas faire confiance aux chemins fournis par l'utilisateur.

---

## EXERCICE 27/50 — Carnet de contacts JSON

Remplacer le stockage texte par JSON.

Utiliser :

```php
json_encode()
json_decode()
```

Gérer les erreurs de décodage et les données malformées.

---

## EXERCICE 28/50 — Importateur CSV

Lire un fichier CSV d'utilisateurs, valider chaque ligne et transformer les données en structures PHP.

### Sécurité

Refuser ou isoler les lignes invalides et éviter l'exécution de contenu provenant du fichier.

---

## EXERCICE 29/50 — Logger

Créer un système de journalisation enregistrant :

- date ;
- niveau ;
- message ;
- contexte.

Niveaux minimum :

```text
INFO
WARNING
ERROR
```

---

## EXERCICE 30/50 — Gestionnaire de fichiers sécurisé

Créer un système de gestion d'upload.

Vérifier :

- taille ;
- MIME réel ;
- extension ;
- nom généré ;
- emplacement de stockage.

### Sécurité obligatoire

Étudier les risques liés à :

- upload de fichiers exécutables ;
- double extension ;
- fichiers malveillants ;
- path traversal ;
- noms de fichiers contrôlés par l'utilisateur.

---

# NIVEAU 6 — PROGRAMMATION ORIENTÉE OBJET

## EXERCICE 31/50 — Classe User

Créer une classe `User` avec :

- propriétés ;
- constructeur ;
- méthodes ;
- types ;
- visibilité.

---

## EXERCICE 32/50 — Encapsulation

Refactoriser une classe mal conçue.

Travailler :

- `private` ;
- `protected` ;
- `public` ;
- invariants ;
- méthodes d'accès.

---

## EXERCICE 33/50 — Héritage

Créer une hiérarchie :

```text
User
├── Admin
└── Editor
```

Comprendre ce que l'héritage apporte et ses limites.

---

## EXERCICE 34/50 — Polymorphisme

Créer plusieurs classes ayant un comportement commun et utiliser ces objets sans dépendre de leur classe concrète.

---

## EXERCICE 35/50 — Interfaces

Créer par exemple :

```text
PaymentInterface
├── CardPayment
├── MobileMoneyPayment
└── BankPayment
```

### Objectif

Comprendre contrat, abstraction, polymorphisme et découplage.

---

# NIVEAU 7 — POO AVANCÉE ET ARCHITECTURE

## EXERCICE 36/50 — Classe abstraite et traits

Créer une classe abstraite et utiliser un trait lorsque le comportement est réellement transversal.

### Notions

- `abstract` ;
- méthodes abstraites ;
- `trait` ;
- réutilisation contrôlée.

---

## EXERCICE 37/50 — Composition

Refactoriser un système utilisant inutilement l'héritage afin d'utiliser la composition.

### Objectif

Comprendre la différence entre relation « est un » et relation « possède un / utilise un ».

---

## EXERCICE 38/50 — Injection de dépendances

Créer un service dépendant d'une autre classe, puis remplacer la création interne des dépendances par leur injection.

### Notions

- dépendances ;
- couplage ;
- injection par constructeur ;
- testabilité.

---

## EXERCICE 39/50 — Namespaces et Composer

Organiser le code avec :

```text
src/
    Models/
    Services/
    Repositories/
```

Configurer Composer et l'autoloading PSR-4.

---

## EXERCICE 40/50 — Mini architecture MVC

Construire une petite application avec :

```text
public/
src/
    Controllers/
    Models/
    Services/
    Repositories/
views/
```

Introduire progressivement :

- router ;
- contrôleurs ;
- services ;
- vues ;
- séparation des responsabilités.

---

# NIVEAU 8 — SQL, MYSQL/MARIADB ET PDO

## EXERCICE 41/50 — Modélisation et première base de données

Concevoir une petite base de données pour l'application.

Étudier :

- tables ;
- clés primaires ;
- clés étrangères ;
- contraintes ;
- index ;
- relations.

Produire le schéma SQL.

---

## EXERCICE 42/50 — CRUD avec PDO

Créer un CRUD complet avec PDO :

- Create ;
- Read ;
- Update ;
- Delete.

### Sécurité

Utiliser des requêtes préparées et ne jamais concaténer directement des données utilisateur dans les requêtes SQL.

---

## EXERCICE 43/50 — Relations SQL et transactions

Travailler avec plusieurs tables et :

- `JOIN` ;
- relations ;
- agrégations ;
- transactions ;
- `beginTransaction()` ;
- `commit()` ;
- `rollBack()`.

### Objectif

Comprendre l'intégrité des données et l'atomicité.

---

# NIVEAU 9 — HTTP, AUTHENTIFICATION ET SÉCURITÉ

## EXERCICE 44/50 — HTTP et formulaires PHP

Construire un formulaire connecté à PHP.

Comprendre :

- requête HTTP ;
- GET ;
- POST ;
- paramètres ;
- headers ;
- codes HTTP ;
- validation côté serveur ;
- réponse HTTP.

### Sécurité

Ne jamais considérer les données du navigateur comme fiables.

---

## EXERCICE 45/50 — Inscription et mots de passe

Créer un système d'inscription avec :

- validation ;
- email unique ;
- hashage avec `password_hash()` ;
- stockage sécurisé en base.

### Sécurité

Ne jamais stocker de mot de passe en clair ni utiliser un hash manuel inadapté.

---

## EXERCICE 46/50 — Connexion, sessions et déconnexion

Créer :

- connexion ;
- vérification du mot de passe ;
- session ;
- déconnexion ;
- protection des pages privées.

Utiliser `password_verify()`.

### Sécurité

Étudier notamment :

- fixation de session ;
- régénération d'identifiant de session ;
- cookies de session ;
- durée de session ;
- fuite d'informations.

---

## EXERCICE 47/50 — Autorisation et protection CSRF/XSS

Créer plusieurs rôles :

```text
USER
EDITOR
ADMIN
```

Puis protéger les actions sensibles.

Étudier :

- authentification vs autorisation ;
- contrôle d'accès ;
- CSRF ;
- XSS ;
- escaping ;
- validation ;
- tokens CSRF.

---

# NIVEAU 10 — API, TESTS ET PROJET FINAL

## EXERCICE 48/50 — API REST PHP

Construire une API permettant par exemple :

```text
GET    /users
GET    /users/{id}
POST   /users
PUT    /users/{id}
DELETE /users/{id}
```

### Notions

- HTTP ;
- JSON ;
- routing ;
- status codes ;
- validation ;
- gestion des erreurs ;
- authentification API.

### Sécurité

Étudier :

- validation des entrées ;
- autorisation ;
- fuite de données ;
- limitation des informations retournées ;
- erreurs contrôlées.

---

## EXERCICE 49/50 — Tests et audit de sécurité

Construire des tests pour les fonctionnalités principales puis auditer l'application.

Tester notamment :

- cas nominal ;
- cas limites ;
- entrées invalides ;
- erreurs ;
- authentification ;
- autorisation ;
- accès interdit ;
- validation.

Rechercher les vulnérabilités suivantes :

- SQL Injection ;
- XSS ;
- CSRF ;
- mauvaise gestion des sessions ;
- contrôle d'accès défaillant ;
- upload dangereux ;
- secrets exposés ;
- messages d'erreur trop détaillés.

### Objectif

Ne pas seulement corriger une vulnérabilité : expliquer sa cause, son impact et la protection mise en place.

---

## EXERCICE 50/50 — PROJET FINAL : APPLICATION BACKEND PHP

### Objectif

Construire une véritable application backend en réutilisant les connaissances acquises pendant les 49 exercices précédents.

Le projet devra comporter au minimum :

```text
PHP
Composer
PSR-4
POO
Architecture MVC ou architecture en couches
MySQL/MariaDB
PDO
CRUD
Validation
HTTP
Formulaires
Sessions
Authentification
Autorisation
Sécurité
API REST
JSON
Logs
Gestion des erreurs
Tests
```

### Architecture cible

```text
public/
    index.php

src/
    Controllers/
    Models/
    Services/
    Repositories/
    Middleware/
    Exceptions/
    Validators/

config/

storage/
    logs/
    uploads/

views/

tests/

composer.json
```

### Exigences

L'application devra :

1. avoir une base de données correctement modélisée ;
2. utiliser PDO et des requêtes préparées ;
3. séparer les responsabilités ;
4. gérer les erreurs et exceptions ;
5. valider les données côté serveur ;
6. protéger les comptes utilisateurs ;
7. gérer les rôles et permissions ;
8. protéger les formulaires contre CSRF ;
9. empêcher les XSS par une sortie correctement échappée ;
10. éviter les injections SQL ;
11. sécuriser les sessions ;
12. proposer une API REST ;
13. journaliser les événements importants ;
14. contenir des tests ;
15. être documentée ;
16. être capable d'être déployée.

---

# MÉTHODE DE VALIDATION DES EXERCICES

Un exercice n'est pas considéré comme terminé simplement parce que le programme fonctionne.

Il doit également respecter quatre critères :

### 1. Fonctionnement

Le programme produit le résultat attendu.

### 2. Compréhension

Je dois être capable d'expliquer le code et les notions utilisées.

### 3. Qualité

Le code doit être lisible, cohérent et correctement structuré pour le niveau de l'exercice.

### 4. Sécurité

Les entrées utilisateur doivent être traitées comme non fiables et les risques pertinents doivent être identifiés.

---

# RÈGLE DE PROGRESSION

Nous ne devons pas avancer uniquement parce que le numéro de l'exercice change.

Si une notion importante n'est pas comprise, elle doit être retravaillée avant de poursuivre.

Les exercices précédents peuvent être réutilisés comme base pour créer des variantes ou des mini-défis de consolidation, sans modifier leur historique Git.

---

# ÉTAT DU PARCOURS

```text
01 ✓ Profil utilisateur
02 ✓ Calculateur
03 ✓ Classification selon l'âge
04 ✓ Calculateur de réduction
05 ✓ Comparateur de nombres
06 ✓ Pair ou impair
07 ✓ Moyenne de trois notes
08 → Année bissextile
09 → Compteur
10 → Somme d'un intervalle
11 → Tables de multiplication
12 → FizzBuzz
13 → Nombre premier
14 → Jeu du nombre mystère
15 → Analyse d'une liste de nombres
16 → Gestion d'une liste de notes
17 → Recherche dans un tableau
18 → Utilisateurs sous forme de tableaux associatifs
19 → Filtrage et tri
20 → Bibliothèque de fonctions mathématiques
21 → Fonctions de validation
22 → Analyseur de texte
23 → Gestionnaire de tâches
24 → Dates et heures
25 → Exceptions
26 → Carnet de contacts fichier
27 → Carnet de contacts JSON
28 → Importateur CSV
29 → Logger
30 → Gestionnaire de fichiers sécurisé
31 → Classe User
32 → Encapsulation
33 → Héritage
34 → Polymorphisme
35 → Interfaces
36 → Classe abstraite et traits
37 → Composition
38 → Injection de dépendances
39 → Namespaces et Composer
40 → Mini architecture MVC
41 → SQL et base de données
42 → CRUD avec PDO
43 → Relations SQL et transactions
44 → HTTP et formulaires
45 → Inscription
46 → Connexion et sessions
47 → Autorisation + CSRF/XSS
48 → API REST
49 → Tests + audit de sécurité
50 → Projet backend final
```

**Progression actuelle : 7/50 exercices validés.**
