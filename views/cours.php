<?php include __DIR__ . '/partials/header.php'; ?>

<div class="page-formation">

    <?php if (!$formation): ?>
        <div class="alert alert-error">
            <p>Aucune formation trouvée pour votre session. <a href="index.php">Retour à l'accueil</a></p>
        </div>
    <?php else: ?>

    <div class="fil-ariane">
        <a href="index.php">Accueil</a> ›
        <a href="index.php?page=formations">Formations</a> ›
        <span><?= htmlspecialchars($formation['titre']) ?></span>
    </div>

    <div class="cours-welcome">
        <div class="cours-welcome-icon">🎓</div>
        <div>
            <h1>Bienvenue, <?= htmlspecialchars($_SESSION['etudiant_prenom'] ?? 'Apprenant') ?> !</h1>
            <p>Vous avez accès à la formation <strong><?= htmlspecialchars($formation['titre']) ?></strong>. Bonne continuation dans votre parcours d'apprentissage.</p>
        </div>
    </div>

    <div class="formation-header">
        <div class="icon-big">📖</div>
        <div>
            <h1><?= htmlspecialchars($formation['titre']) ?></h1>
            <p><?= htmlspecialchars($formation['description']) ?></p>
            <div class="badges">
                <span class="badge">📅 <?= htmlspecialchars($formation['duree']) ?></span>
                <span class="badge">🎯 Niveau <?= htmlspecialchars($formation['niveau']) ?></span>
                <span class="badge gold">🏅 Certifiant</span>
            </div>
        </div>
    </div>

    <div class="programme">
        <h2>📋 Programme de la formation</h2>

        <div class="module">
            <div class="module-titre">
                <div class="module-num">1</div>
                <h3>Introduction &amp; Fondamentaux</h3>
                <span class="module-duree">Semaine 1–2</span>
            </div>
            <div class="module-contenu">
                <ul>
                    <li>Présentation du domaine et des objectifs</li>
                    <li>Installation de l'environnement de travail</li>
                    <li>Premiers exercices pratiques</li>
                    <li>Quiz de validation des acquis</li>
                </ul>
            </div>
        </div>

        <div class="module">
            <div class="module-titre">
                <div class="module-num">2</div>
                <h3>Concepts clés &amp; Outils</h3>
                <span class="module-duree">Semaine 3–4</span>
            </div>
            <div class="module-contenu">
                <ul>
                    <li>Maîtrise des outils professionnels du domaine</li>
                    <li>Mise en pratique sur des cas réels</li>
                    <li>Correction et retours du formateur</li>
                    <li>Mini-projet individuel</li>
                </ul>
            </div>
        </div>

        <div class="module">
            <div class="module-titre">
                <div class="module-num">3</div>
                <h3>Approfondissement &amp; Pratique avancée</h3>
                <span class="module-duree">Semaine 5–6</span>
            </div>
            <div class="module-contenu">
                <ul>
                    <li>Étude de cas approfondis</li>
                    <li>Techniques avancées et optimisation</li>
                    <li>Travaux en groupe &amp; collaboration</li>
                    <li>Présentation des projets</li>
                </ul>
            </div>
        </div>

        <div class="module">
            <div class="module-titre">
                <div class="module-num">4</div>
                <h3>Projet final &amp; Certification</h3>
                <span class="module-duree">Semaine 7–8</span>
            </div>
            <div class="module-contenu">
                <ul>
                    <li>Réalisation du projet de fin de formation</li>
                    <li>Soutenance devant le jury</li>
                    <li>Remise du certificat officiel FormaPro</li>
                    <li>Accès au réseau alumni</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="cours-ressources">
        <h2>📂 Ressources disponibles</h2>
        <div class="ressources-grid">
            <div class="ressource-item">
                <span class="ressource-icon">📄</span>
                <div>
                    <p class="ressource-titre">Support de cours (PDF)</p>
                    <p class="ressource-desc">Toutes les slides et fiches mémo de la formation</p>
                </div>
                <span class="ressource-badge">Disponible</span>
            </div>
            <div class="ressource-item">
                <span class="ressource-icon">🎬</span>
                <div>
                    <p class="ressource-titre">Vidéos de cours</p>
                    <p class="ressource-desc">Enregistrements des sessions en ligne</p>
                </div>
                <span class="ressource-badge">Disponible</span>
            </div>
            <div class="ressource-item">
                <span class="ressource-icon">💻</span>
                <div>
                    <p class="ressource-titre">Exercices pratiques</p>
                    <p class="ressource-desc">Travaux pratiques corrigés et projets guidés</p>
                </div>
                <span class="ressource-badge">Disponible</span>
            </div>
            <div class="ressource-item">
                <span class="ressource-icon">🏅</span>
                <div>
                    <p class="ressource-titre">Certificat de réussite</p>
                    <p class="ressource-desc">Délivré après validation du projet final</p>
                </div>
                <span class="ressource-badge ressource-badge-pending">À débloquer</span>
            </div>
        </div>
    </div>

    <div style="text-align:center; margin-top: 30px;">
        <a href="index.php" class="btn-retour">← Retour à l'accueil</a>
    </div>

    <?php endif; ?>
</div>

<?php include __DIR__ . '/partials/footer.php'; ?>
