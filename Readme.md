# Service REST d'Ajout d'Étudiants

Ce projet a pour objectif de créer un petit système de gestion d'étudiants en PHP.  
Il permet d'ajouter des étudiants via un formulaire web, d'enregistrer les données dans une base de données SQLite,  
et d'exposer un service REST (API) pour récupérer uniquement les noms des étudiants enregistrés.

---

## Fonctionnalités
Ce service intègre les fonctionnalités suivantes :

- Un formulaire stylisé avec Tailwind CSS pour faciliter la saisie des données.
- Trois champs sont demandés pour chaque étudiant :
  - **Nom** : le nom complet de l'étudiant.
  - **Promotion** : par exemple "L1", "L2", "Maître 1", etc.
  - **E-mail** : adresse email de l'étudiant.
- Lors de la soumission du formulaire, les données sont :
  - Validées (côté PHP).
  - Enregistrées dans une base de données SQLite.
- Une API REST simple expose les noms de tous les étudiants au format JSON, accessible via `api.php`.

---

## Technologies utilisées

Le projet repose sur les technologies suivantes :

- **PHP** : pour le traitement backend du formulaire et la gestion de l'API.
- **SQLite** : une base de données légère et intégrée, idéale pour les petits projets ou les tests.
- **Tailwind CSS** : un framework CSS moderne et rapide pour styliser facilement l'interface.
- **API REST** : l'exportation des données est faite via `json_encode`, ce qui permet d'utiliser ces données dans d'autres applications.

---

## Paramètres régionaux d'installation

Ce projet est hébergé gratuitement sur Render. Vous pouvez y accéder directement via l'URL suivante :  
[https://gestion-etudiants-9p6g.onrender.com]

### Étapes pour utiliser le projet :
1. **Accéder au formulaire**  
   Rendez-vous sur [https://gestion-etudiants-9p6g.onrender.com] pour accéder au formulaire d'ajout d'étudiants.

2. **Ajout des étudiants**  
   - Remplissez les champs du formulaire.
   - Envoyez le formulaire.
   - L'étudiant est ajouté dans la base de données.
   - Vous pouvez répéter l'opération pour ajouter plusieurs étudiants.

3. **Consulter l'API REST**  
   Les noms des étudiants enregistrés peuvent être récupérés au format JSON via l'endpoint suivant :  
   [https://gestion-etudiants-9p6g.onrender.com/api.php]

---

### AUTEUR
KASOMBW MUKAD Jean-Paul
