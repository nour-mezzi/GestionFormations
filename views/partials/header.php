<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FormaPro — Plateforme de Gestion des Formations</title>
    <link rel="stylesheet" href="/assets/style.css">
</head>
<body>
<?php $currentPage = $_GET['page'] ?? 'home'; ?>
<nav>
    <div class="logo">Forma<span>Pro</span></div>
    <ul>
        <li><a href="/index.php" <?= $currentPage === 'home' ? 'class="active"' : '' ?>>Accueil</a></li>
        <li><a href="/index.php?page=formations" <?= $currentPage === 'formations' ? 'class="active"' : '' ?>>Formations</a></li>
        <li><a href="/index.php#avis">Avis</a></li>
        <li><a href="/index.php#pourquoi">À propos</a></li>
        <li><a href="/index.php?page=inscription" class="btn-nav <?= $currentPage === 'inscription' ? 'active' : '' ?>">✍️ S'inscrire</a></li>
    </ul>
</nav>
<main>
