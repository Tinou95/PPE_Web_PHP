<?php include_once("connect.php");

try {
    $sqlQuery = 'SELECT * FROM utilisateurs';
    $recipesStatement = $bdd->prepare($sqlQuery);
    $recipesStatement->execute();
    $users = $recipesStatement->fetchAll();
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}



foreach ($users as $user) {

        $data['pseudo'] = $user['pseudo'];
        $data['email'] = $user['email'];
        echo
        '<ul>' .
            '<li>' . "Prénom : " . $user['pseudo'] . '</li>' .
            '<li>' . "Email : " . $user['email'] . '</li>' .
            '</ul>';
    }
