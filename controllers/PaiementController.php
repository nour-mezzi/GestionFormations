<?php
// controllers/PaiementController.php
require_once __DIR__ . '/../models/Inscription.php';

$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
if ($id <= 0) {
    header('Location: index.php');
    exit();
}

$inscription = Inscription::getById($id);
$erreur_paiement = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $mode = $_POST['mode'] ?? '';
    if ($mode === 'ok') {
        Inscription::marquerPaye($id);
        // stocker en session
        $_SESSION['paiement_ok']     = true;
        $_SESSION['inscription_id']  = $id;
        $_SESSION['formation_titre'] = $inscription['formation_titre'] ?? $inscription['titre'] ?? '';
        $_SESSION['etudiant_prenom'] = $inscription['prenom'] ?? '';
        header('Location: index.php?page=succes&id=' . $id);
        exit();
    } else {
        $erreur_paiement = true;
    }
}

require __DIR__ . '/../views/paiement.php';

?>
