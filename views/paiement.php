<?php require __DIR__ . '/partials/header.php'; ?>

<div class="paiement-section">
    <?php if (empty($inscription)): ?>
        <div class="paiement-card">
            <h1>💳 Paiement</h1>
            <p style="color:#888;">Inscription introuvable. <a href="index.php" style="color:#3498db;">Retour à l'accueil</a></p>
        </div>
    <?php else: ?>
        <div class="paiement-card">
            <h1>💳 Confirmation de paiement</h1>

            <?php if (!empty($erreur_paiement)): ?>
                <div class="erreur-paiement">❌ Paiement refusé — veuillez réessayer.</div>
            <?php endif; ?>

            <div class="paiement-info">
                <p>👤 <strong><?= htmlspecialchars($inscription['prenom']) ?> <?= htmlspecialchars($inscription['nom']) ?></strong></p>
                <p>📧 <?= htmlspecialchars($inscription['email']) ?></p>
                <p>📚 Formation : <strong><?= htmlspecialchars($inscription['formation_titre'] ?? $inscription['titre']) ?></strong></p>
                <p>🎯 Niveau : <?= htmlspecialchars($inscription['niveau']) ?></p>
                <p>📅 Durée : <?= htmlspecialchars($inscription['duree']) ?></p>
                <p class="prix-total">💰 Total : <?= number_format($inscription['prix'], 2, ',', ' ') ?> DT</p>
            </div>

            <form method="POST" action="index.php?page=paiement&id=<?= $inscription['id'] ?>" class="paiement-actions">
                <button type="submit" name="mode" value="ok" class="btn-payer">✅ Payer maintenant (simulation réussie)</button>
                <button type="submit" name="mode" value="fail" class="btn-echec">Simuler un échec de paiement</button>
            </form>
        </div>

        <a href="index.php?page=formations" class="btn-retour">← Retour aux formations</a>
    <?php endif; ?>
</div>

<?php require __DIR__ . '/partials/footer.php'; ?>
