<?php include_once("connect.php");

try {
    $sqlQuery = 'SELECT DISTINCT evenement.nom, evenement.desc, date_consultation, id_utilisateur FROM historique_client
                INNER JOIN evenement ON historique_client.id_evenement = evenement.id
                WHERE historique_client.id_utilisateur = :id_utilisateur
                GROUP BY historique_client.id_evenement, historique_client.date_consultation, evenement.nom, evenement.desc
                ORDER BY historique_client.date_consultation DESC LIMIT 10';

$recipesStatement = $bdd->prepare($sqlQuery);
$recipesStatement->execute(array(
    'id_utilisateur' => $data['id'],
));

    $users = $recipesStatement->fetchAll();
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}







print '<table class="monTableau">' . '<th>' . "Nom de l'événement" . '</th>' . '<th>' . "Description de l'événement" . '</th>' . '<th>' . "Date de l'événement" . '</th>'. '<th>' . "Date de la consultation" . '</th>';
foreach ($users as $user) {
    if ($user['id_utilisateur'] === $_SESSION['user']) {
        echo
        '</tr>' .
            '<tr>' . '<td>' . $user['nom'] . '</td>' . '<td>' 
            . $user['desc'] . '</td>' . '<td>'
            . $user['date_consultation'] . '</td>' . '<td>' 
            . $user['date_consultation'] . '</td>' ;
            

}
}
print '</tr> ' . ' </table>';
?>