<?php
require_once __DIR__ . '/../models/Formation.php';

// Récupérer optionnellement un filtre de niveau
$niveau = $_GET['niveau'] ?? '';
$formations = Formation::getAll($niveau);

require __DIR__ . '/../views/formations.php';

?>
