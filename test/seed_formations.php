<?php
require_once __DIR__ . '/../models/Database.php';

$pdo = Database::connect();

// Delete existing formations
$pdo->query('DELETE FROM formations');

// Data to insert
$formations = [
    ['Intelligence Artificielle', 'Maîtrisez le machine learning, le deep learning et le NLP pour construire des solutions intelligentes.', '6 mois', 'Avancé', 250.00],
    ['Data Science', 'Analysez, visualisez et interprétez les données pour prendre de meilleures décisions stratégiques.', '5 mois', 'Intermédiaire', 200.00],
    ['Cybersécurité', 'Apprenez à sécuriser les systèmes, détecter les menaces et répondre aux incidents de sécurité.', '4 mois', 'Intermédiaire', 180.00],
    ['Développement Web', 'Du HTML au PHP en passant par JavaScript et MySQL, créez des applications web complètes de A à Z.', '4 mois', 'Débutant', 150.00],
    ['Cloud Computing', 'Maîtrisez AWS, Azure et GCP pour concevoir et déployer des architectures cloud scalables.', '5 mois', 'Avancé', 220.00]
];

$stmt = $pdo->prepare('INSERT INTO formations (titre, description, duree, niveau, prix) VALUES (?, ?, ?, ?, ?)');

foreach ($formations as $f) {
    $stmt->execute($f);
}

echo "✅ Formations inserted successfully with proper UTF-8 encoding\n";
echo "Inserted " . count($formations) . " formations.\n";

// Verify
$result = $pdo->query('SELECT id, titre, niveau FROM formations ORDER BY id');
echo "\nFormations in database:\n";
foreach ($result as $row) {
    echo "  ID {$row['id']}: {$row['titre']} ({$row['niveau']})\n";
}
?>
