<?php
include '../includes/header.php';
?>

<head>
    <title>Accueil - Thomas Portefolio</title>
</head>

<main>
    <div class="welcome-screen" id="welcomeScreen"> <!-- Acceuil -->
        <div>
            <h1 class="display-4">Bienvenue sur mon site web !</h1>
            <p class="lead">Thomas Lapierre, étudiant alternant IT.</p>
            <button class="btn-custom mt-3" onclick="hideWelcome()">Voir Plus</button>
        </div>
    </div>

    <div class="container mt-5 hidden" id="hidden">
        <div style="min-height: 200px;"></div>
    </div>

    <div class="container mt-5 hidden" id="a-propos"> <!-- A Propos -->
        <h2 class="text-center section-title">À propos de moi</h2><hr>
        <p class="text-center">
        Bonjour, je m'appelle Thomas Lapierre, j'ai 18 ans et je vis à Besançon.
        Actuellement, je suis étudiant en BTS Services Informatiques aux Organisations (SIO) au Lycée Saint-Bénigne à Dijon (21).<br>
        Ce programme me permet d'acquérir des compétences essentielles dans le domaine de l'informatique, notamment en développement de logiciels, gestion de réseaux, et support aux utilisateurs.
        Passionné par les technologies de l'information depuis mon plus jeune âge, j'ai choisi cette voie pour approfondir mes connaissances et me préparer à une carrière dans ce secteur dynamique.<br>
        En dehors de mes études, j'aime explorer les dernières innovations technologiques et participer à des projets pratiques pour appliquer ce que j'apprends en classe.
        </p>

        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel"> <!-- Etablissements -->
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="../assets/images/formations/saint-benigne.jpg" class="d-block w-100" alt="Image 1">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>BTS SIO</h5>
                        <p>Lycée Saint-Bénigne.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="../assets/images/formations/saint-joseph.jpg" class="d-block w-100" alt="Image 2">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>BAC PRO SN</h5>
                        <p>Lycée Saint-Joseph.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="../assets/images/formations/victor-hugo.jpg" class="d-block w-100" alt="Image 3">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>COLLEGE</h5>
                        <p>Victor-Hugo.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Précédent</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Suivant</span>
            </button>
        </div>
    </div>

    <div style="min-height: 100px;"></div>

    <div class="container mt-5 hidden" id="offres"> <!-- Sommaire -->
        <h2 class="text-center section-title">Au sommaire :</h2>
        <hr>
        <div class="row text-center">
            <div class="col-md-3 hidden">
                <div class="card">
                    <img src="../assets/images/da/projets.jpg" class="card-img-top" alt="Projets">
                    <div class="card-body">
                        <h5 class="card-title">Projets</h5>
                        <p class="card-text">Visionnez mes derniers projets pro, perso et en cours.</p>
                        <a href="../public/projets-perso.php" class="btn btn-custom">Perso
                        <a href="../public/projets-scolaires.php" class="btn btn-custom">Scolaires</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 hidden">
                <div class="card">
                    <img src="../assets/images/da/evenements.jpg" class="card-img-top" alt="evenements">
                    <div class="card-body">
                        <h5 class="card-title">Événements</h5>
                        <p class="card-text">Listes des derniers événements visités.</p><br>
                        <a href="../public/evenements.php" class="btn btn-custom">Découvrir</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 hidden">
                <div class="card">
                    <img src="../assets/images/da/veilles.jpg" class="card-img-top" alt="veilles">
                    <div class="card-body">
                        <h5 class="card-title">Veille Technologique</h5>
                        <p class="card-text">Visitez les articles que j'ai regardé lors de ma veille.</p>
                        <a href="../public/veille.php" class="btn btn-custom">Découvrir</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 hidden">
                <div class="card">
                    <img src="../assets/images/da/contact.jpg" class="card-img-top" alt="contact">
                    <div class="card-body">
                        <h5 class="card-title">Contact</h5>
                        <p class="card-text">Contactez moi via Linkedin, GitHub pour toute demande.</p>
                        <a href="../public/contact.php" class="btn btn-custom">Découvrir</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div style="min-height: 100px;"></div>

    <div class="container mt-5"> <!-- Passions -->
        <h2 class="text-center section-title">Mes Passions</h2><hr>
        <div class="row">
            <div class="col-md-12">
                <h5>Création de PC fixes sur mesure</h5>
                <p>J'aime aider à créer des PC sur mesure avec le meilleur rapport qualité/prix. Je l'ai d'ailleurs fait récemment dans mon entreprise.<br>La maintenance des systèmes m'intéresse aussi beaucoup.</p>
            </div>
            <div class="col-md-12">
                <h5>Montages vidéos</h5>
                <p>J'utilise DaVinci Resolve, un logiciel que j'emploie tant pour mes projets professionnels que personnels.<br>Dans un cadre professionnel, ce logiciel me permet de créer des vidéos de haute qualité, essentielles pour nos projets cinématographiques.<br>Cela me permet aussi de faire de la communication à petite échelle.<br>En parallèle, je m'en sers pour monter mes sessions de jeux, ajoutant des effets et des transitions pour rendre mes vidéos plus dynamiques.</p>
            </div>
            <div class="col-md-12">
                <h5>Jeux vidéo</h5>
                <p>Je joue aussi à plusieurs jeux de type FPS, et j'adore les jeux peu connus.</p>
            </div>
        </div>
    </div>

    <div style="min-height: 100px;"></div>

    <div class="container mt-5"> <!-- Expériences -->
        <h2 class="text-center section-title">Mes Expériences Professionnelles</h2><hr>
        <div class="row">
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="../assets/images/stage-alternance/mm.jpg" class="card-img-top" alt="Micro-Mega">
                    <div class="card-body">
                        <h5 class="card-title">Alternance</h5>
                        <p class="card-text">Depuis ma première au Lycée Saint-Joseph, je suis en apprentissage chez Micro-Mega. Micro-Mega c'est une société, dont l'activité d'origine remonte à 1905, mondialement reconnue pour la conception, la fabrication, et la commercialisation de dispositifs médicaux destinés à la chirurgie dentaire.</p>
                        <p class="card-text">J'occupe le poste d'administrateur réseau, un rôle clé dans la gestion et l’optimisation des infrastructures informatiques de l’entreprise.</p>
                        <p class="card-text">Mes principales missions sont les suivantes :</p>
                        <ul class="list-unstyled">
                            <li>- Installation et configuration du matériel</li>
                            <li>- Maintenance préventive et corrective</li>
                            <li>- Gestion des utilisateurs</li>
                            <li>- Sécurisation des réseaux</li>
                            <li>- Projets d’optimisation</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="../assets/images/stage-alternance/adeo.jpg" class="card-img-top" alt="Adeo">
                    <div class="card-body">
                        <h5 class="card-title">Stage de seconde</h5>
                        <p class="card-text">Durant ma première année au Lycée Saint-Joseph, j'ai pu faire un stage de six semaines chez Adeo Informatique. Adeo Informatique c'est une entreprise spécialisée dans les solutions informatiques pour les petites et moyennes entreprises (PME).</p>
                        <p class="card-text">Mes principales missions étaient les suivantes :</p>
                        <ul class="list-unstyled">
                            <li>- Masterisation de postes</li>
                            <li>- Intervention dans des entreprises</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="../assets/images/stage-alternance/safran.jpg" class="card-img-top" alt="Safran">
                    <div class="card-body">
                        <h5 class="card-title">Stage de troisième</h5>
                        <p class="card-text">Durant ma troisième, j'ai pu faire un stage chez Safran Electronics & Defense. Safran Electronics & Defense est une entreprise leader dans le domaine de l'électronique et de la défense, spécialisée dans la conception de solutions technologiques avancées pour les secteurs aéronautique, spatial, et de défense.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<script src="../assets/js/scroll.js"></script>

<?php
include '../includes/footer.php';
?>