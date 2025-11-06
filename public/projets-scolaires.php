<?php
include '../includes/header.php';
?>

<head>
    <title>Projets Scolaires - Thomas Lapierre</title>
</head>

<main>
    <div> <!-- Création de mon Portfolio -->
        <div class="container mt-5 hidden" id="portfolio">
            <h2 class="text-center">Création de mon Portfolio</h2><hr>
            <p class="text-center">Dans le cadre de la création de ce portfolio, j'ai choisi de mettre en place une pipeline CI/CD sur Microsoft Azure. L'intégralité du processus a été réalisé de manière autonome, depuis la configuration des ressources sur Azure jusqu'à l'intégration et le déploiement continu de mon site.</p>
        </div>

        <div id="carouselPortfolio" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselPortfolio" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselPortfolio" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselPortfolio" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner hidden">
                <div class="carousel-item active">
                    <img src="../assets/images/projets/scolaires/portfolio/dev.png" class="d-block w-75 mx-auto img-fluid" alt="Développement">
                </div>
                <div class="carousel-item">
                    <img src="../assets/images/projets/scolaires/portfolio/repos.png" class="d-block w-75 mx-auto img-fluid" alt="Repos">
                </div>
                <div class="carousel-item">
                    <img src="../assets/images/projets/scolaires/portfolio/azur.png" class="d-block w-75 mx-auto img-fluid" alt="Azure">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselPortfolio" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Précédent</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselPortfolio" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Suivant</span>
            </button>
        </div>
        <div style="min-height: 25px;"></div>
        <div class="d-flex justify-content-center">
            <a href="portfolio.php" class="btn btn-custom">Découvrir</a>
        </div>
    </div>

    <div style="min-height: 100px;"></div>

    <div class="container my-5 hidden text-center"> <!-- Création d'un site Quiz Moto -->
        <h2>Création d'un site Quiz Moto</h2><hr>
        <p>Un site web de quiz interactif dédié aux motos. Le site propose deux types de jeux :</p>
        <ul class="text-left">
            <li>Mode classique : Les images des motos apparaissent directement, et l’utilisateur doit deviner le modèle.</li>
            <li>Mode progressif : Les images commencent floutées et deviennent nettes au fur et à mesure. Plus l’utilisateur répond rapidement, plus il marque de points.</li>
        </ul>
        <img src="../assets/images/projets/scolaires/site moto/site-moto.jpg" class="img-fluid rounded shadow mb-3" alt="Site Quiz Moto">
        <div class="d-flex justify-content-center mt-3">
            <a href="https://thomas-bikedle-gzh3gnh9cugnfgha.francecentral-01.azurewebsites.net/Accueil.html" class="btn btn-custom" target="_blank">Découvrir</a>
        </div>
    </div>

    <div style="min-height: 100px;"></div>

    <div class="container my-5 hidden text-center"> <!-- Jeu des 7 erreurs -->
        <h2>Jeu des 7 erreurs</h2><hr>
        <p>Ce projet m'a permis d'approfondir mes compétences en développement web, notamment en matière de gestion des interactions utilisateur et de conception de l'interface.</p>
        <img src="../assets/images/projets/scolaires/7 erreurs/7erreurs.png" class="img-fluid rounded shadow mb-3" alt="Jeu des 7 erreurs">
        <div class="d-flex justify-content-center mt-3">
            <a href="https://thomasjeudes7erreurs-hch2cbgehcfudre3.francecentral-01.azurewebsites.net/" class="btn btn-custom" target="_blank">Découvrir</a>
        </div>
    </div>

    <div style="min-height: 100px;"></div>

    <div class="text-center my-4">
        <a href="https://groupesb.sharepoint.com/sites/BTSSIO2026/_layouts/15/Doc.aspx?sourcedoc={d19f7864-7ec3-4fc2-a84a-990667434dc3}&action=view&wd=target%28THOMAS%20LAPIERRE%2FB1.one%7C91607539-3a0d-4984-bd36-7cd4ce23aa8a%2F%29&wdorigin=717" class="btn btn-primary" target="_blank">OneNote</a>
    </div>
</main>

<?php
include '../includes/footer.php';
?>