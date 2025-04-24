<?php
header('Content-Type: application/json');

$db = new SQLite3('db.sqlite');
$result = $db->query("SELECT nom FROM etudiants");

$noms = [];
while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
    $noms[] = $row['nom'];
}

echo json_encode($noms);
