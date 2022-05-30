<?php 
    session_start();
    require_once './setup/connect.php'; // ajout connexion bdd 
   // si la session existe pas soit si l'on est pas connecté on redirige
   if(!isset($_SESSION['user'])){
    header('Location:page_nm2.php');
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
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/page2.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/loader.css">

    <title>Sport+</title>
</head>

<body>
    <div class="loader" id="loader" role="region" aria-label="chargement">
        <img src="asset/spinner-icon-gif-29.gif" alt="spinner">
    </div>
    <?php include_once './header_footer/header_page_m.php'; ?>
    <main>
    
        <section>
            <h2>Bonjour <span class="pseudo"><?php echo $data['pseudo']; ?> </span> !</h2>
            <h2 class="first_hache">Sport à la une</h2>

            <ul>
                <li><img src="./asset/affiche/affiche_10.jpg" alt="skate"></li>
                <li><img src="./asset/affiche/affiche_11.webp" alt="f1"></li>
                <li><img src="./asset/affiche/affiche_12.webp" alt="motogp"></li>
                <li><img src="./asset/affiche/affiche_13.jpg" alt="ski"></li>

            </ul>
        </section>
>
        <section>
        <a href="./setup/deconnexion.php"><h2>Deconnexion</h2></a>
         </section>
    </main>



    <?php include_once './header_footer/footer.php'; ?>


    <script src="https://kit.fontawesome.com/c62d0ae7da.js" crossorigin="anonymous"></script>
    <script src="./js/page2.js"></script>
    <script src="./js/themesombre.js"></script>
    <script src="./js/loader.js"></script>

</body>

</html>