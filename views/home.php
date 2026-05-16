<?php include __DIR__ . '/partials/header.php'; ?>

<header class="hero">
    <h1>Bienvenue sur <span>FormaPro</span> ✨</h1>
    <p>
        La plateforme de gestion des formations en ligne.<br>
        Choisissez votre parcours et développez vos compétences numériques.
    </p>
    <a href="index.php?page=formations" class="btn-hero">🚀 Découvrir les formations</a>
</header>

<section id="formations">
    <div class="section-wrapper">
        <h2>📚 Nos formations</h2>
        <p class="section-subtitle">
            Choisissez parmi nos programmes certifiants, conçus par des experts du domaine.
        </p>

        <div class="formations-grid">
            <?php if (!empty($formations)): ?>
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
            <?php else: ?>
                <p>Aucune formation disponible pour le moment.</p>
            <?php endif; ?>
        </div>
    </div>
</section>

<section id="avis" class="avis-section">
    <div class="section-wrapper">
        <h2>⭐ Avis des utilisateurs</h2>
        <p class="section-subtitle">
            Découvrez ce que nos apprenants pensent de leurs formations FormaPro.
        </p>
        <div class="avis-grid">
            <div class="avis-card">
                <div class="avis-top">
                    <div class="avatar av-purple">SS</div>
                    <div>
                        <p class="avis-name">Shahd S.</p>
                        <p class="avis-role">Formation IA</p>
                    </div>
                </div>
                <div class="stars">★★★★★</div>
                <p class="avis-text">Une formation complète et très bien structurée. Les projets pratiques m'ont permis de décrocher mon premier poste en ML !</p>
                <span class="avis-badge badge-purple">Intelligence Artificielle</span>
            </div>

            <div class="avis-card">
                <div class="avis-top">
                    <div class="avatar av-teal">NM</div>
                    <div>
                        <p class="avis-name">Nour M.</p>
                        <p class="avis-role">Formation Data Science</p>
                    </div>
                </div>
                <div class="stars">★★★★☆</div>
                <p class="avis-text">Les formateurs sont de vrais experts. J'ai adoré le module Power BI, très concret et applicable immédiatement.</p>
                <span class="avis-badge badge-teal">Data Science</span>
            </div>

            <div class="avis-card">
                <div class="avis-top">
                    <div class="avatar av-coral">AS</div>
                    <div>
                        <p class="avis-name">Ala S.</p>
                        <p class="avis-role">Formation Cybersécurité</p>
                    </div>
                </div>
                <div class="stars">★★★★★</div>
                <p class="avis-text">Le pentesting était top ! Enfin une formation qui enseigne la théorie ET la pratique avec des labs réels.</p>
                <span class="avis-badge badge-coral">Cybersécurité</span>
            </div>

            <div class="avis-card">
                <div class="avis-top">
                    <div class="avatar av-blue">MM</div>
                    <div>
                        <p class="avis-name">Marwen M.</p>
                        <p class="avis-role">Formation Dev Web</p>
                    </div>
                </div>
                <div class="stars">★★★★☆</div>
                <p class="avis-text">Parfait pour débuter ! Je suis passé de zéro à la création d'un site complet en 4 mois. Le suivi est excellent.</p>
                <span class="avis-badge badge-blue">Développement Web</span>
            </div>

            <div class="avis-card">
                <div class="avis-top">
                    <div class="avatar av-amber">RD</div>
                    <div>
                        <p class="avis-name">Ranime D.</p>
                        <p class="avis-role">Formation Cloud</p>
                    </div>
                </div>
                <div class="stars">★★★★★</div>
                <p class="avis-text">AWS, Docker, Kubernetes... tout est couvert avec des exercices pratiques. La certification m'a ouvert beaucoup de portes.</p>
                <span class="avis-badge badge-amber">Cloud Computing</span>
            </div>
        </div>
    </div>
</section>

<div class="avantages-section" id="pourquoi">
    <div class="avantages-inner">
        <h2>🏅 Pourquoi choisir FormaPro ?</h2>
        <p class="section-subtitle">Une expérience d'apprentissage conçue pour votre réussite professionnelle.</p>
        <div class="avantages-grid">
            <div class="avantage-item">
                <span class="icone">🎓</span>
                <h3>Formateurs experts</h3>
                <p>Des professionnels actifs avec une pédagogie orientée pratique.</p>
            </div>
            <div class="avantage-item">
                <span class="icone">🏅</span>
                <h3>Certifications reconnues</h3>
                <p>Des diplômes valorisés par les recruteurs nationaux et internationaux.</p>
            </div>
            <div class="avantage-item">
                <span class="icone">💡</span>
                <h3>Projets concrets</h3>
                <p>Chaque formation inclut des projets réels pour alimenter votre portfolio.</p>
            </div>
            <div class="avantage-item">
                <span class="icone">🤝</span>
                <h3>Réseau professionnel</h3>
                <p>Rejoignez une communauté d'alumni et accédez à des offres d'emploi.</p>
            </div>
        </div>
    </div>
</div>

<?php include __DIR__ . '/partials/footer.php'; ?>
