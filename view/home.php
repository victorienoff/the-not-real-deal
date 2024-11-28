<?php
$apiKey = '047183c7559548c0aba6c4fbbecd6db8';
$apiUrl = 'https://api.football-data.org/v4/competitions/CL/matches';

// Configuration de la requête cURL
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $apiUrl);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('X-Auth-Token: ' . $apiKey));

// Exécuter la requête cURL
$response = curl_exec($ch);

// Vérifier les erreurs
if ($response === false) {
    echo "Erreur cURL : " . curl_error($ch);
    exit;
}

// Fermer la session cURL
curl_close($ch);

// Décoder la réponse JSON
$matches = json_decode($response, true);

// Vérifier si des matchs sont retournés
if (isset($matches['matches'])) {

    // Créer des catégories de matchs filtrés
    $statusCategories = [
        'a_venir' => array_filter($matches['matches'], fn($match) => $match['status'] == 'TIMED'),
        'direct' => array_filter($matches['matches'], fn($match) => $match['status'] == 'IN_PLAY'),
        'termines' => array_filter($matches['matches'], fn($match) => $match['status'] == 'FINISHED'),
    ];

    // Sélectionner la catégorie à afficher en fonction du filtre dans l'URL
    $filter = $_GET['filter'] ?? 'a_venir'; // Par défaut, afficher les matchs à venir
    $filteredMatches = $statusCategories[$filter] ?? $statusCategories['a_venir'];

    // Afficher les matchs filtrés
    echo '<h2>Matchs de la Ligue des champions</h2>';
    echo '<div class="filters">';
    echo '<button id="a_venir" class="filter-btn" onclick="window.location.href=\'?filter=a_venir\'">À venir</button>';
    echo '<button id="direct" class="filter-btn" onclick="window.location.href=\'?filter=direct\'">DIRECT</button>';
    echo '<button id="termines" class="filter-btn" onclick="window.location.href=\'?filter=termines\'">Terminés</button>';
    echo '</div>';

    // Envelopper la liste des matchs dans une div avec la classe "match-list"
    echo '<div class="match-list">';
    echo '<ul>';
    foreach ($filteredMatches as $match) {
        $homeTeam = $match['homeTeam']['name'] ?? 'Nom indisponible';
        $awayTeam = $match['awayTeam']['name'] ?? 'Nom indisponible';
        $status = $match['status'];
        $score = $match['score']['fullTime'] ?? null;

        // Formater la date
        $date = date('d/m/Y H:i', strtotime($match['utcDate']));

        // Affichage des informations des matchs
        echo '<li class="match">';
        echo '<div class="date">' . $date . '</div>';
        echo '<div class="teams">';

        // Si le match est en statut TIMED (À venir)
        if ($status == 'TIMED') {
            echo '<div class="team home">' . $homeTeam . '</div>';
            echo '<div class="team away">' . $awayTeam . '</div>';
            echo '<div class="status">À venir</div>';
        }

        // Si le match est en direct (IN_PLAY)
        if ($status == 'IN_PLAY') {
            $homeScore = $match['score']['fullTime']['home'] ?? '0';
            $awayScore = $match['score']['fullTime']['away'] ?? '0';
            echo '<div class="team home">' . $homeTeam . ' (' . $homeScore . ')</div>';
            echo '<div class="team away">' . $awayTeam . ' (' . $awayScore . ')</div>';
            echo '<div class="status">En direct</div>';
        }

        // Si le match est terminé (FINISHED)
        if ($status == 'FINISHED') {
            $homeScore = $match['score']['fullTime']['home'] ?? '0';
            $awayScore = $match['score']['fullTime']['away'] ?? '0';
            echo '<div class="team home">' . $homeTeam . ' (' . $homeScore . ')</div>';
            echo '<div class="team away">' . $awayTeam . ' (' . $awayScore . ')</div>';
            echo '<div class="status">Terminé</div>';
        }

        echo '</div>';
        echo '</li>';
    }
    echo '</ul>';
    echo '</div>'; // Fermeture de la div "match-list"
} else {
    echo 'Aucun match trouvé.';
}
?>
