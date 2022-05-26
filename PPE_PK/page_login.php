<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Mon menu web">
    <link rel="icon" sizes="32x32" href="asset/logo_sport.png">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/page_login.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/loader.css">

    <title>Sport+</title>
</head>

<body>
    <div class="loader" id="loader" role="region" aria-label="chargement">
        <img src="asset/spinner-icon-gif-29.gif" alt="spinner">
    </div>
    <?php require_once './header_footer/header_page_nm.php'; ?>
    <main>


    <?php require_once './error_alert/log_error.php'; ?>

           
           <form action="connexion.php" method="post">
               <fieldset>
               <h2 >Connexion</h2>     
               <label for="mail">Votre e-mail</label><input type="email" name="email" placeholder="Votre mail" id="mail" required><br>
               <label for="password">Votre mot de passe </label><input type="password" name="password" placeholder="Votre mot de passe" id="password" required><br>
                <input id="submit" type="submit" aria-label="Valider" value="Valider">


                <p ><a href="page_inscription.php">Inscription</a></p>
                </fieldset>
           </form>
           
 


    </main>



    <?php require_once './header_footer/footer.php'; ?>


    <script src="https://kit.fontawesome.com/c62d0ae7da.js" crossorigin="anonymous"></script>
    <script src="./js/themesombre.js"></script>
    <script src="./js/loader.js"></script>

</body>

</html>