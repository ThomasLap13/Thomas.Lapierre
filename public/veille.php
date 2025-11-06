<?php
include '../includes/header.php';
?>

<head>
    <title>Veille Technologique - Thomas Lapierre</title>
</head>

<main>
    <section class="container mt-5">
        <h3 class="mb-4">Veille automatisée personnalisée</h3>
        <div class="row">
            <?php
                $rss_url = "https://lecrabeinfo.net/feed";

                // Récupération du contenu avec cURL
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, $rss_url);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
                $content = curl_exec($ch);
                curl_close($ch);

                if ($content === false) {
                    echo "Erreur lors de la récupération du flux RSS.";
                } else {
                    // Chargement XML avec gestion des CDATA
                    $rss = simplexml_load_string($content, 'SimpleXMLElement', LIBXML_NOCDATA);
                    
                    if ($rss === false) {
                        echo "Erreur lors de l’analyse du flux RSS.";
                    } else {
                        // Enregistrer les namespaces disponibles
                        $namespaces = $rss->getNamespaces(true);
                        
                        $count = 0;
                        foreach ($rss->channel->item as $item) {
                            // Accéder au titre
                            $title = (string)$item->title;
                            
                            // Exemple de filtre sur le titre pour "cyberattaque"
                            if (stripos($title, 'cyberattaque') !== false) {
                                if ($count >= 4) break;
                                
                                // Accéder à la date
                                $pubDate = (string)$item->pubDate;
                                
                                // Accéder à la description
                                $description = (string)$item->description;
                                
                                // Accéder à un contenu enrichi dans content:encoded si besoin
                                $contentNamespace = $item->children($namespaces['content']);
                                $contentEncoded = isset($contentNamespace->encoded) ? (string)$contentNamespace->encoded : $description;
                                
                                echo '<div class="col-md-6"><div class="card custom-card mb-3">';
                                echo '<div class="card-body">';
                                echo '<h5 class="card-title">' . htmlspecialchars($title) . '</h5>';
                                echo '<h6 class="card-subtitle mb-2 text-muted">(' . date('d/m/Y', strtotime($pubDate)) . ')</h6>';
                                echo '<p class="card-text">' . $contentEncoded . '</p>';
                                echo '<a href="' . htmlspecialchars($item->link) . '" class="btn btn-primary mt-3" target="_blank" rel="noopener noreferrer">Lire l\'article</a>';
                                echo '</div></div></div>';
                                
                                $count++;
                            }
                        }
                    }
                }
            ?>
        </div>
    </section>

</main>

<?php
include '../includes/footer.php';
?>