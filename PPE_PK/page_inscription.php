<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Mon menu web">
    <link rel="icon" sizes="32x32" href="asset/logo_sport.png">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/page_inscription.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/loader.css">

    <title>Sport+</title>
</head>

<body>
    <div class="loader" id="loader" role="region" aria-label="chargement">
        <img src="asset/spinner-icon-gif-29.gif" alt="spinner">
    </div>
    <header>
        <img class="image_header" src="./asset/logo_sport.png" alt="sport+">
        <h1>Maison des ligues tous les sports</h1>
        <span class="image_header2 image_sunny"></span>
    </header>
    <main>
    <?php 
                if(isset($_GET['reg_err']))
                {
                    $err = htmlspecialchars($_GET['reg_err']);

                    switch($err)
                    {
                        case 'success':
                        ?>
                            <p class="alert alert-success">
                                <strong>Succès</strong> inscription réussie !
                        </p>
                        <?php
                        break;

                        case 'password':
                        ?>
                            <p class="alert alert-danger">
                                <strong>Erreur</strong> mot de passe différent
                        </p>
                        <?php
                        break;

                        case 'email':
                        ?>
                            <p class="alert alert-danger">
                                <strong>Erreur</strong> email non valide
                        </p>
                        <?php
                        break;

                        case 'email_length':
                        ?>
                            <p class="alert alert-danger">
                                <strong>Erreur</strong> email trop long
                        </p>
                        <?php 
                        break;

                        case 'pseudo_length':
                        ?>
                            <p class="alert alert-danger">
                                <strong>Erreur</strong> pseudo trop long
                        </p>
                        <?php 
                        case 'already':
                        ?>
                            <p class="alert alert-danger">
                                <strong>Erreur</strong> compte deja existant
                        </p>
                        <?php 

                    }
                }
                ?>
           
           <form action="inscription_traitement.php" method="post">
               
               <fieldset>
               <h2 >Inscription</h2>
               
               <label for="pseudo">Votre pseudo</label><input type="pseudo" name="pseudo" placeholder="Votre pseudo" id="pseudo" required><br>
               <label for="mail">Votre e-mail</label><input type="email" name="email" placeholder="Votre mail" id="mail" required><br>
               <label for="password">Votre mot de passe </label><input type="password" name="password" placeholder="Votre mot de passe" id="password" required><br>
               <label for="password_retype">Votre mot de passe </label><input type="password" name="password_retype" placeholder="Re-tapez Votre mot de passe" id="password" required><br>
                <input id="submit" type="submit" aria-label="Valider" value="Inscription">
                <p ><a href="page_login.php">Retour</a></p>
                </fieldset>
                
           </form>
           
 


    </main>



    <footer id="contact">

        <section class="footer">
            <img src="./asset/logo_sport.png" alt="logo redbull">
            <div role="region" aria-labelledby="contact" class="Sport">
                <h2>Sport</h2>
                <ul>
                    <li> <a href="">Tennis </a></li>
                    <li> <a href=""> Hockey sur glace</a></li>
                    <li> <a href=""> Football </a></li>
                    <li> <a href=""> Moto GP </a></li>
                    <li> <a href=""> Athlétisme </a></li>
                </ul>
            </div>
            <div role="region" aria-labelledby="menu" class="Menu">
                <h2> Menu</h2>
                <ul>
                    <li><a href="#accueil" class="footer-links">Accueil</a></li>
                    <li><a href="#a_propos" class="footer-links">A propos</a></li>
                    <li><a href="#contact" class="footer-links">Contact</a></li>
                </ul>
            </div>

        </section>
        <p>&copy;- Sport+ -2022</p>
    </footer>


    <script src="https://kit.fontawesome.com/c62d0ae7da.js" crossorigin="anonymous"></script>
    <script src="./js/themesombre.js"></script>
    <script src="./js/loader.js"></script>

</body>

</html>