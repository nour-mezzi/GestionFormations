<?php require __DIR__ . '/partials/header.php'; ?>

<div class="succes-section">
    <div class="succes-card">
        <?php if (!empty($_SESSION['paiement_ok']) && $_SESSION['paiement_ok'] === true): ?>
            <span class="succes-icon">🎉</span>
            <h1>Paiement confirmé !</h1>
            <p>Merci <strong><?= htmlspecialchars($_SESSION['etudiant_prenom'] ?? '') ?></strong>, votre inscription a bien été enregistrée.</p>
            <p>Vous êtes désormais inscrit(e) à la formation :</p>
            <p><strong style="color:#667eea; font-size:1.1rem;"><?= htmlspecialchars($_SESSION['formation_titre'] ?? '') ?></strong></p>
            <p style="margin-top:12px; color:#888; font-size:0.9rem;">Un email de confirmation vous sera envoyé prochainement.</p>
            <a href="index.php?page=cours" class="btn-cours">🚀 Accéder aux cours</a>
        <?php else: ?>
            <span class="succes-icon">⚠️</span>
            <h1>Page introuvable</h1>
            <p>Aucune confirmation de paiement trouvée pour cette session.</p>
            <a href="index.php" class="btn-cours">Retour à l'accueil</a>
        <?php endif; ?>
    </div>
</div>

<?php require __DIR__ . '/partials/footer.php'; ?>
