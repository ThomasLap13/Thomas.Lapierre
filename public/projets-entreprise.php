<?php
include '../includes/header.php';
?>
<head>
    <title>Projets Entreprise - Thomas Portfolio</title>
</head>
<main>
    <!-- Tri du NAS et projet de sauvegarde -->
    <div class="container mt-5" id="tri-nas">
        <h2 class="text-center mb-4">Optimisation du NAS et Mise en Place d'une Solution de Sauvegarde</h2><hr>
        <p class="text-center">
            Dans le cadre de l'optimisation des infrastructures de stockage de Micro-Méga, j'ai mené un projet de <strong>nettoyage et réorganisation du NAS</strong> (Network Attached Storage) de l'entreprise. Ce projet avait pour objectif de libérer de l'espace et d'améliorer les performances globales du système.
        </p>
        <p class="text-center">
            <strong>Résultats obtenus :</strong> J'ai réussi à libérer plus de 2 To d'espace en supprimant les fichiers obsolètes et en réorganisant les données selon une arborescence logique. Cette optimisation a permis de réduire les temps d'accès aux fichiers et d'améliorer la productivité des équipes.
        </p>
        <p class="text-center">
            <strong>Projet en cours :</strong> Mise en place d'une solution de sauvegarde automatisée avec <strong>Veeam</strong> pour sécuriser les données critiques de l'entreprise. Cette solution permettra de :
        </p>
        <ul class="text-start mx-auto" style="max-width: 600px;">
            <li>Automatiser les sauvegardes incrémentielles des postes de travail.</li>
            <li>Assurer une reprise rapide en cas de perte de données.</li>
            <li>Centraliser les sauvegardes sur un serveur dédié, avec une rétention de 30 jours.</li>
        </ul>
        <p class="text-center">
            Ce projet s'inscrit dans une démarche globale d'amélioration de la <strong>résilience des infrastructures</strong> et de la <strong>sécurité des données</strong>, en conformité avec les exigences du groupe Coltene.
        </p>
    </div>

    <!-- Gestion et correction de l'Active Directory -->
    <div class="container mt-5" id="gestion-ad">
        <h2 class="text-center mb-4">Mise à Jour et Correction de l'Active Directory</h2><hr>
        <p class="text-center">
            J'ai été chargé de <strong>mettre à jour les informations des 110 comptes utilisateurs</strong> de l'entreprise dans l'Active Directory. Cette tâche incluait la complétion des champs manquants tels que :
        </p>
        <ul class="text-start mx-auto" style="max-width: 600px;">
            <li>Numéros de téléphone et extensions internes.</li>
            <li>Postes de travail et services d'appartenance.</li>
            <li>Emplacements physiques (bureaux, sites).</li>
            <li>Informations de contact et hiérarchiques.</li>
        </ul>
        <p class="text-center">
            <strong>Défis relevés :</strong> Ce projet a nécessité une coordination étroite avec les responsables de chaque service pour valider les informations. Malgré la complexité liée au volume de données, j'ai accompli cette mission en une seule après-midi, en utilisant des scripts PowerShell pour automatiser une partie des mises à jour.
        </p>
        <p class="text-center">
            <strong>Impact :</strong> Cette mise à jour a permis d'améliorer la gestion des accès et la sécurité du système, tout en facilitant l'administration quotidienne de l'AD.
        </p>
    </div>

    <!-- Montage d'un poste de DAO -->
    <div class="container mt-5" id="montage-dao">
        <h2 class="text-center mb-4">Conception et Montage d'un Poste de Travail Hautes Performances pour la DAO</h2><hr>
        <p class="text-center">
            Dans le cadre des besoins du service R&D, j'ai été responsable de la <strong>conception et du montage d'un poste de travail dédié à la DAO</strong> (Conception Assistée par Ordinateur). Ce projet a inclus :
        </p>
        <ul class="text-start mx-auto" style="max-width: 600px;">
            <li>L'analyse des besoins techniques avec les utilisateurs finaux.</li>
            <li>La rédaction d'un <strong>devis détaillé</strong> pour validation par la direction.</li>
            <li>Le montage physique et la configuration logicielle du poste.</li>
        </ul>
        <p class="text-center">
            <strong>Configuration du poste :</strong>
        </p>
        <ul class="text-start mx-auto" style="max-width: 600px;">
            <li><strong>Processeur :</strong> Intel Core i7-13700K (13ème génération).</li>
            <li><strong>Carte graphique :</strong> NVIDIA GeForce RTX 4060 Ti (pour les logiciels de modélisation 3D).</li>
            <li><strong>Stockage :</strong> SSD NVMe 500 Go (les données de projet étant stockées sur le NAS).</li>
            <li><strong>Mémoire :</strong> 32 Go DDR5 6000 MHz (pour gérer les logiciels gourmands en ressources).</li>
            <li><strong>Refroidissement :</strong> Solution liquide pour assurer une stabilité optimale.</li>
        </ul>
        <p class="text-center">
            Ce poste est désormais utilisé pour des tâches exigeantes comme la modélisation 3D et les simulations, contribuant à l'innovation des produits Micro-Méga.
        </p>
    </div>
    <div id="carouselPC" class="carousel slide mt-4" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselPC" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselPC" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselPC" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="../assets/images/projets/entreprise/mm-composants.png" class="d-block w-75 mx-auto img-fluid" alt="Composants du PC DAO">
            </div>
            <div class="carousel-item">
                <img src="../assets/images/projets/entreprise/mm-config.png" class="d-block w-75 mx-auto img-fluid" alt="Configuration logicielle du PC">
            </div>
            <div class="carousel-item">
                <img src="../assets/images/projets/entreprise/mm-cable.png" class="d-block w-75 mx-auto img-fluid" alt="Gestion des câbles du PC">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselPC" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Précédent</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselPC" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Suivant</span>
        </button>
    </div>

    <!-- Gestion des tickets et support utilisateur -->
    <div class="container mt-5" id="gestion-tickets">
        <h2 class="text-center mb-4">Gestion des Tickets et Support Utilisateur via ServiceNow</h2><hr>
        <p class="text-center">
            Au quotidien, j'ai assuré la <strong>gestion des tickets</strong> via la plateforme ServiceNow, en traitant une moyenne de 20 demandes par semaine. Mes responsabilités incluaient :
        </p>
        <ul class="text-start mx-auto" style="max-width: 600px;">
            <li>Le diagnostic et la résolution des incidents (problèmes de connexion, pannes matérielles, erreurs logicielles).</li>
            <li>L'escalade des problèmes complexes vers les membres seniors de l'équipe.</li>
            <li>La création de documentation pour les solutions récurrentes.</li>
        </ul>
        <p class="text-center">
            <strong>Exemple de réalisation :</strong> J'ai réduit le temps moyen de résolution des tickets de 30 % en automatisant certaines tâches avec des scripts PowerShell et en améliorant les procédures de diagnostic.
        </p>
    </div>

    <!-- Migration vers Entra ID et Azure AD -->
    <div class="container mt-5" id="migration-entra">
        <h2 class="text-center mb-4">Migration et Synchronisation entre Active Directory et Entra ID (Azure AD)</h2><hr>
        <p class="text-center">
            J'ai participé activement à la <strong>migration des comptes utilisateurs vers Entra ID</strong>, dans le cadre de la modernisation des infrastructures de Micro-Méga. Ce projet a inclus :
        </p>
        <ul class="text-start mx-auto" style="max-width: 600px;">
            <li>La synchronisation des comptes entre l'AD local et Azure AD.</li>
            <li>La configuration de l'authentification multifacteur (MFA) pour renforcer la sécurité.</li>
            <li>La résolution des problèmes de certificats et de conformité des postes.</li>
        </ul>
        <p class="text-center">
            <strong>Résultats :</strong> Plus de 90 % des postes ont été migrés avec succès, permettant une gestion centralisée et sécurisée des identités.
        </p>
    </div>

    <!-- Projet d'automatisation et IA -->
    <div class="container mt-5" id="automatisation-ia">
        <h2 class="text-center mb-4">Projet d'Automatisation et Intégration de l'IA</h2><hr>
        <p class="text-center">
            Depuis début 2025, je travaille sur un projet visant à <strong>intégrer des solutions d'intelligence artificielle</strong> pour automatiser des tâches répétitives au sein du service IT. Ce projet inclut :
        </p>
        <ul class="text-start mx-auto" style="max-width: 600px;">
            <li>L'évaluation d'outils comme Microsoft Copilot pour assister les utilisateurs.</li>
            <li>Le développement de scripts pour automatiser la gestion des tickets et des inventaires.</li>
            <li>La formation des collaborateurs aux nouvelles fonctionnalités.</li>
        </ul>
        <p class="text-center">
            <strong>Impact attendu :</strong> Une réduction de 20 % du temps passé sur les tâches administratives, permettant à l'équipe de se concentrer sur des projets à plus forte valeur ajoutée.
        </p>
    </div>
</main>
<?php
include '../includes/footer.php';
?>
