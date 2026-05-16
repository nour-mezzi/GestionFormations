<?php include __DIR__ . '/partials/header.php'; ?>

<section class="section-wrapper">
    <h2>📚 Toutes les formations</h2>
    <p class="section-subtitle">
        Filtrez par niveau et trouvez la formation qui correspond à votre profil.
    </p>

    <div class="filtres">
        <a href="index.php?page=formations" class="filtre-btn <?= empty($_GET['niveau']) ? 'filtre-active' : '' ?>">Toutes</a>
        <a href="index.php?page=formations&niveau=Débutant" class="filtre-btn <?= ($_GET['niveau'] ?? '') === 'Débutant' ? 'filtre-active' : '' ?>">Débutant</a>
        <a href="index.php?page=formations&niveau=Intermédiaire" class="filtre-btn <?= ($_GET['niveau'] ?? '') === 'Intermédiaire' ? 'filtre-active' : '' ?>">Intermédiaire</a>
        <a href="index.php?page=formations&niveau=Avancé" class="filtre-btn <?= ($_GET['niveau'] ?? '') === 'Avancé' ? 'filtre-active' : '' ?>">Avancé</a>
    </div>

    <?php if (empty($formations)): ?>
        <p style="color:#888; margin-top:30px;">Aucune formation disponible pour ce niveau.</p>
    <?php else: ?>
        <div class="formations-grid">
            <?php foreach ($formations as $f): ?>
                <article class="card">
                    <div class="card-top">
                        <div class="card-icon">📖</div>
                        <div>
                            <h3><?= htmlspecialchars($f['titre']) ?></h3>
                            <p class="niveau">Niveau <?= htmlspecialchars($f['niveau']) ?></p>
                        </div>
                    </div>
                    <div class="card-body">
                        <p><?= htmlspecialchars($f['description']) ?></p>
                        <div class="card-meta">
                            <span>📅 <?= htmlspecialchars($f['duree']) ?></span>
                            <span>💰 <?= number_format($f['prix'], 2, ',', ' ') ?> DT</span>
                            <span>🏅 Certifiant</span>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="index.php?page=inscription&formation_id=<?= $f['id'] ?>" class="btn-programme">Voir le programme</a>
                        <a href="index.php?page=inscription&formation_id=<?= $f['id'] ?>" class="btn-inscrire">✍️ S'inscrire</a>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
</section>

<?php include __DIR__ . '/partials/footer.php'; ?>
