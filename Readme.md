# Service REST d'Ajout d'Étudiants

Ce projet a pour objectif de créer un petit système de gestion d'étudiants en PHP. 
Il permet d'ajouter des étudiants via un formulaire web, d'enregistrer les données dans une base de données locale SQLite, 
et d'exposer un service REST (API) pour récupérer uniquement les noms des étudiants enregistrés.

---

## Fonctionnalités
  Ce service intègre les fonctionnalités suivantes :

  Un formulaire stylisé avec Tailwind CSS pour faciliter la saisie des données.
  Trois champs sont demandés pour chaque étudiant :
  - Nom : le nom complet de l'étudiant: le nom complet de l'étudiant
  - Promotion :: par exemple "L1", "L2", "Maître 1", etc.
  - E-mail : adresse email de l'étudiant: adresse email de l'étudiant
  - Lors de la soumission du formulaire, les données sont :
  - Validées (côté PHP)
  - Enregistrées dans une base de données SQLite
  - Une API REST simple expose les noms de tous les étudiants au format JSON, accessible via api.php



---

## Technologies utilisées

Le projet repose sur les technologies suivantes :

PHP : pour le traitement backend du formulaire et la gestion de l'API: pour le traitement backend du formulaire et la gestion de l'API
SQLite : une base de données légère et intégrée , idéale pour les petits projets ou les tests: une base de données légère et intégrée, idéale pour les petits projets ou les tests
Tailwind CSS : un framework CSS moderne et rapide pour styliser facilement l'interface
API REST : l'exportation des données est faite via , ce qui permet d'utiliser ces données dans d'autres applications: l'exportation des données est faite via json_encode, ce qui permet d'utiliser ces données dans d'autres applications

---

## Paramètres régionaux d'installation

Pour exécuter ce projet sur votre machine locale, suivez les étapes suivantes :
1. Clonage du projet
  Commencez par cloner le projet avec Git :
  * git clone https://github.com/JeanPaulMUKAD/Gestion_Etudiants
  * cd etudiants-api

2. Initialisation de la base de données
  Avant de commencer à utiliser le formulaire, vous devez créer la base de données SQLite.
  Pour cela, exécutez le fichier db_init.php une seule fois , soit depuis votre navigateur :
  * http://localhost/etudiants-api/db_init.php
  Ou via la ligne de commande :
  php db_init.php
  Ce fichier crée automatiquement une base SQLite appelée db.sqliteet une table nommée etudiantscontenant les colonnes : id, nom, promotionet email.

3. Lancement du serveur
  Si vous n'avez pas Apache ou un serveur local comme XAMPP/WAMP, vous pouvez utiliser le serveur interne de PHP :
  * php -S localhost:8000
  Accédez ensuite à votre formulaire via :
  https://gestion-etudiants-9p6g.onrender.com

4. Ajout des étudiants
  Remplissez les champs du formulaire.
  Envoyez le formulaire.
  L'étudiant est ajouté dans la base de données.
  Tu peux répéter l'opération pour ajouter plusieurs étudiants.


### AUTEUR
KASOMBW MUKAD Jean-Paul