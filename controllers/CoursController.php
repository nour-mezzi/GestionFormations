<?php
require_once __DIR__ . '/../models/Formation.php';
require_once __DIR__ . '/../models/Inscription.php';

$inscription_id = $_SESSION['inscription_id'] ?? 0;
$formation = null;
$inscription = null;

if ($inscription_id > 0) {
    $inscription = Inscription::getById($inscription_id);
    if ($inscription) {
        $formation = Formation::getById($inscription['formation_id']);
    }
}

require __DIR__ . '/../views/cours.php';
