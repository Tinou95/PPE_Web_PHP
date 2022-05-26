<?php 
    session_start();
    require_once 'connect.php'; // ajout connexion bdd 
   // si la session existe pas soit si l'on est pas connecté on redirige
   if(!isset($_SESSION['user'])){
    header('Location:page_nm2.php');
    die();
}

    // On récupere les données de l'utilisateur
    $req = $bdd->prepare('SELECT * FROM utilisateurs WHERE token = ?');
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
    <?php require_once './header_footer/header_page_m.php'; ?>
    <main>
    
        <section>
            <h2>Bonjour <?php echo $data['pseudo']; ?></h2>
            <h2 class="first_hache">Sport à la une</h2>

            <ul>
                <li><img src="./asset/affiche/affiche_10.jpg" alt="skate"></li>
                <li><img src="./asset/affiche/affiche_11.webp" alt="f1"></li>
                <li><img src="./asset/affiche/affiche_12.webp" alt="motogp"></li>
                <li><img src="./asset/affiche/affiche_13.jpg" alt="ski"></li>

            </ul>
        </section>

        <form action="connect.php" method="post" >
            <fieldset>
                <p class="warning">Remplir le formulaire ci dessous</p>
                <label for="last_name">Nom</label><input type="text" name="last_name" placeholder="Last Name" id="last_name" autofocus required><br>
                <label for="first_name">Prenom</label><input type="text" name="first_name" placeholder="First Name" id="first_name" required><br>
                <label for="mail">Votre e-mail</label><input type="email" name="mail" placeholder="Votre mail" id="mail" required><br>
                <label for="age">Votre âge</label><input type="number" name="age" placeholder="Votre age" id="age" required><br>

                <label for="ville_select">Ville</label> <br>
                <select name="ville" id="ville_select">
                    <option value="">Ville</option>
                    <option value="Londres">Londres</option>
                    <option value="Rome">Rome</option>
                    <option value="Paris">Paris</option>
                    <option value="Madrid">Madrid</option>
                    <option value="Lisbonne">Lisbonne</option>
                    <option value="Berlin">Berlin</option>
                </select> <br>

                <input id="submit" type="submit" aria-label="Valider" value="Valider">
            </fieldset>
        </form>
        <section>
        <a href="deconnexion.php"><h2>Deconnexion</h2></a>
         </section>
    </main>



    <?php require_once './header_footer/footer.php'; ?>


    <script src="https://kit.fontawesome.com/c62d0ae7da.js" crossorigin="anonymous"></script>
    <script src="./js/page2.js"></script>
    <script src="./js/themesombre.js"></script>
    <script src="./js/loader.js"></script>

</body>

</html>