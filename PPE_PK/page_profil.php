<?php 
    session_start();
    require_once './setup/connect.php'; // ajout connexion bdd 
   // si la session existe pas soit si l'on est pas connecté on redirige
   if(!isset($_SESSION['user'])){
    header('Location:page_nm.php');
    die();
}

    // On récupere les données de l'utilisateur
    $req = $bdd->prepare('SELECT * FROM utilisateurs WHERE id = ?');
    $req->execute(array($_SESSION['user']));
    $data = $req->fetch();
   
?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Mon menu web">
    <link rel="icon" sizes="32x32" href="asset/logo_sport.png">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/page1.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/loader.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.css">

    <title>Sport+</title>
</head>

<body>

     <!-- <div role="region" aria-label="chargement" class="loader" id="loader">
        <img src="asset/spinner-icon-gif-29.gif" alt="">
    </div> -->
    <?php include_once './header_footer/header_page_m.php'; ?>
    <main>    
    <?php 

try {
    $sqlQuery = 'SELECT * FROM utilisateurs';
    $recipesStatement = $bdd->prepare($sqlQuery);
    $recipesStatement->execute();
    $users = $recipesStatement->fetchAll();
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}



foreach ($users as $user) {

    if ($user['id'] === $_SESSION['user']) {
        $_SESSION['pseudo'] = $user['pseudo'];
        $_SESSION['email'] = $user['email'];
        $_SESSION['id'] = $user['id'];
        echo
        '<ul class="info">' .
            '<li>' . '<span class="champ">' ."Nom : " . '</span>' .'<span class="nom">'. $user['pseudo'] .'</span>'. '</li>' . 
            '<li>' . '<span class="champ">' ."Email : " .'</span>'. $user['email'] . '</li>' .
            '<li>' . '<span class="champ">'."ID : " .'</span>'. $user['id'] . '</li>' .
            '</ul>';
    }
   
}

 include_once "./setup/listevent_inc.php";
     ?>
                     <a href="./page_edit.php">Changer le profil</a>



    </main>

    <?php include_once './header_footer/footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.js"></script>
    <script src="https://kit.fontawesome.com/c62d0ae7da.js" crossorigin="anonymous"></script>
    <script src="./js/notyf/notyf_nm.js"></script>
    <script src="./js/page1.js"></script>
    <script src="./js/themesombre.js"></script>
    <script src="./js/loader.js"></script>

</body>

</html>