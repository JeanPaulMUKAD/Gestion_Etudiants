<?php
    // db_init.php (à exécuter une seule fois pour créer la table)
    $db = new SQLite3('/tmp/db.sqlite');
    $db->exec("CREATE TABLE IF NOT EXISTS etudiants (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        nom TEXT NOT NULL,
        promotion TEXT NOT NULL,
        email TEXT NOT NULL
    )");
    echo "Base de données initialisée.";
    $db->close();
    // Ne pas exécuter ce fichier à chaque fois, seulement lors de la première exécution.
    
?>