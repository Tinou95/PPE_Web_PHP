<?php 
    session_start();
    require_once 'connect.php'; // ajout connexion bdd 
   // si la session existe pas soit si l'on est pas connecté on redirige
    if(!isset($_SESSION['user'])){
        header('Location:index.php');
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
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/page1.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/loader.css">

    <title>Sport+</title>
</head>

<body>

    <div role="region" aria-label="chargement" class="loader" id="loader">
        <img src="asset/spinner-icon-gif-29.gif" alt="">
    </div>
    <header>
        <img class="image_header" src="./asset/logo_sport.png" alt="sport_plus">
        <h1>Maison des ligues tous les sports  </h1>
        <a href="./page_login.php" class="redirection">Se connecter</a>
        <span class="image_header2 image_sunny"></span>
    </header>
    <main>



        <section>
            <h2>Bonjour <?php echo $data['pseudo']; ?> !</h2>

            <h2>Prêt à la compétition? Remplissez le formulaire proposé dans cette page</h2>

            <p>Tous les mois profitez de toutes les nouveautés et opportunités. A partir du mois
                prochain on vous propose tous les sports et toutes les compétitions.
            </p>

            <ul class="grid-picture-large">
                <li data-image="./asset/affiche/affiche_1.jpg" data-title="Football américain"
                    data-description="Le football américain est un sport collectif opposant deux équipes de onze joueurs qui alternent entre la défense et l'attaque."
                    data-dates="02/01/2020">
                    <figure>
                        <img src="./asset/affiche/affiche_1.jpg" alt="Football américain">
                        <figcaption>
                            <h2>
                                <i class="material-icons" aria-hidden="true">
                                    pages
                                </i>
                                Agrandir

                            </h2>
                        </figcaption>

                    </figure>
                </li>
                <li data-image="./asset/affiche/affiche_2.jpg" data-title="Football"
                    data-description="Le football est un sport collectif qui se joue avec un ballon sphérique entre deux équipes de onze joueurs"
                    data-dates="02/01/2020">
                    <figure>
                        <img src="./asset/affiche/affiche_2.jpg" alt="Football">
                        <figcaption>
                            <h2>
                                <i class="material-icons" aria-hidden="true">
                                    pages
                                </i>
                                Agrandir

                            </h2>
                        </figcaption>

                    </figure>
                </li>
                <li data-image="./asset/affiche/affiche_3.jpg" data-title="Hockey sur glace"
                    data-description="Le hockey sur glace, est un sport d’équipe se jouant sur une patinoire spécialement aménagée."
                    data-dates="02/01/2020">
                    <figure>
                        <img src="./asset/affiche/affiche_3.jpg" alt="Hockey sur glace">
                        <figcaption>
                            <h2>
                                <i class="material-icons" aria-hidden="true">
                                    pages
                                </i>
                                Agrandir

                            </h2>
                        </figcaption>

                    </figure>
                </li>
                <li data-image="./asset/affiche/affiche_4.jpg" data-title="Vélo tout-terrain"
                    data-description="Le vélo tout-terrain, est un vélo destiné à une utilisation sur terrain accidenté, hors des routes goudronnées."
                    data-dates="02/01/2020">
                    <figure>
                        <img src="./asset/affiche/affiche_4.jpg" alt="Vélo tout-terrain">
                        <figcaption>
                            <h2>
                                <i class="material-icons" aria-hidden="true">
                                    pages
                                </i>
                                Agrandir

                            </h2>
                        </figcaption>

                    </figure>
                </li>
                <li data-image="./asset/affiche/affiche_5.jpg" data-title="Le cyclisme"
                    data-description="Le cyclisme sur route est un sport, une des disciplines du cyclisme. Il est disputé au niveau amateur mais aussi professionnel dans de nombreux pays"
                    data-dates="02/01/2020">
                    <figure>
                        <img src="./asset/affiche/affiche_5.jpg" alt="Le cyclisme">
                        <figcaption>
                            <h2>
                                <i class="material-icons" aria-hidden="true">
                                    pages
                                </i>
                                Agrandir

                            </h2>
                        </figcaption>

                    </figure>
                </li>
                <li data-image="./asset/affiche/affiche_6.jpg" data-title="Le bobsleigh"
                    data-description="Le bobsleigh est un sport d'hiver dans lequel des équipes de deux ou quatre bobeurs, effectuent des courses chronométrées."
                    data-dates="02/01/2020">
                    <figure>
                        <img src="./asset/affiche/affiche_6.jpg" alt="Le bobsleigh">
                        <figcaption>
                            <h2>
                                <i class="material-icons" aria-hidden="true">
                                    pages
                                </i>
                                Agrandir

                            </h2>
                        </figcaption>

                    </figure>
                </li>
                <li data-image="./asset/affiche/affiche_7.jpg" data-title="Boxe"
                    data-description="La boxeest un sport de combat à un contre un, qui recourt à des frappes de percussion à l'aide de gants matelassés."
                    data-dates="02/01/2020">
                    <figure>
                        <img src="./asset/affiche/affiche_7.jpg" alt="Boxe">
                        <figcaption>
                            <h2>
                                <i class="material-icons" aria-hidden="true">
                                    pages
                                </i>
                                Agrandir

                            </h2>
                        </figcaption>

                    </figure>
                </li>
                <li data-image="./asset/affiche/affiche_8.jpg" data-title="Patinage de vitesse"
                    data-description="Le patinage de vitesse est un sport de glisse sur glace. Il naît aux Pays-Bas au XIIIᵉ siècle et devient olympique en 1924."
                    data-dates="02/01/2020">
                    <figure>
                        <img src="./asset/affiche/affiche_8.jpg" alt="Patinage de vitesse">
                        <figcaption>
                            <h2>
                                <i class="material-icons" aria-hidden="true">
                                    pages
                                </i>
                                Agrandir

                            </h2>
                        </figcaption>

                    </figure>
                </li>
                <li data-image="./asset/affiche/affiche_9.jpg" data-title="Surf"
                    data-description="Le surf est une pratique physique individuelle de glisse sur les vagues, au bord de l'océan."
                    data-dates="02/01/2020">
                    <figure>
                        <img src="./asset/affiche/affiche_9.jpg" alt="Surf">
                        <figcaption>
                            <h2>
                                <i class="material-icons" aria-hidden="true">
                                    pages
                                </i>
                                Agrandir

                            </h2>
                        </figcaption>

                    </figure>
                </li>
                <li data-image="./asset/affiche/affiche_10.jpg" data-title="Skate"
                    data-description="La pratique du street en skateboard consiste principalement à réaliser des sauts et des figures (tricks) sur des mobiliers et éléments urbains."
                    data-dates="02/01/2020">
                    <figure>
                        <img src="./asset/affiche/affiche_10.jpg" alt="Skate">
                        <figcaption>
                            <h2>
                                <i class="material-icons" aria-hidden="true">
                                    pages
                                </i>
                                Agrandir

                            </h2>
                        </figcaption>

                    </figure>
                </li>
                <li data-image="./asset/affiche/affiche_11.webp" data-title="Formule 1"
                    data-description="La Formule 1, communément abrégée en F1, est une discipline de sport automobile considérée comme la catégorie reine de ce sport."
                    data-dates="02/01/2020">
                    <figure>
                        <img src="./asset/affiche/affiche_11.webp" alt="Formule 1">
                        <figcaption>
                            <h2>
                                <i class="material-icons" aria-hidden="true">
                                    pages
                                </i>
                                Agrandir

                            </h2>
                        </figcaption>

                    </figure>
                </li>
                <li data-image="./asset/affiche/affiche_12.webp" data-title="Moto"
                    data-description="Les Championnats du monde de vitesse moto regroupent les courses de vitesse motocycliste sur circuit, sous l'égide de la Fédération de motocyclisme"
                    data-dates="02/01/2020">
                    <figure>
                        <img src="./asset/affiche/affiche_12.webp" alt="Moto">
                        <figcaption>
                            <h2>
                                <i class="material-icons" aria-hidden="true">
                                    pages
                                </i>
                                Agrandir

                            </h2>
                        </figcaption>

                    </figure>
                </li>
                <li data-image="./asset/affiche/affiche_13.jpg" data-title="Ski alpin"
                    data-description="Le ski alpin est un ensemble de disciplines du ski qui se pratiquent dans un contexte de loisirs ou de compétition."
                    data-dates="02/01/2020">
                    <figure>
                        <img src="./asset/affiche/affiche_13.jpg" alt="Ski alpin">
                        <figcaption>
                            <h2>
                                <i class="material-icons" aria-hidden="true">
                                    pages
                                </i>
                                Agrandir

                            </h2>
                        </figcaption>

                    </figure>
                </li>
                <li data-image="./asset/affiche/affiche_14.jpg" data-title="Athlétisme"
                    data-description="L’athlétisme est un ensemble d’épreuves sportives codifiées comprenant les courses, sauts, lancers, épreuves combinées et marche."
                    data-dates="02/01/2020">
                    <figure>
                        <img src="./asset/affiche/affiche_14.jpg" alt="Athlétisme">
                        <figcaption>
                            <h2>
                                <i class="material-icons" aria-hidden="true">
                                    pages
                                </i>
                                Agrandir

                            </h2>
                        </figcaption>

                    </figure>
                </li>
                <li data-image="./asset/affiche/affiche_15.jpg" data-title="Tennis"
                    data-description="Le tennis est un sport de raquette qui oppose soit deux joueurs soit quatre joueurs qui forment deux équipes de deux."
                    data-dates="02/01/2020">
                    <figure>
                        <img src="./asset/affiche/affiche_15.jpg" alt="affiche_film">
                        <figcaption>
                            <h2>
                                <i class="material-icons" aria-hidden="true">
                                    pages
                                </i>
                                Agrandir

                            </h2>
                        </figcaption>

                    </figure>
                </li>

            </ul>

            <a href="page2.php"><button class="redirect_page2">Cliquez ici pour commencer</button></a>

        </section>

        <section>
            <a href="deconnexion.php"><h2>Deconnexion</h2></a>
        </section>

        <!-- modale -->
        <div class="parent-modale" role="dialog" aria-label="true">
            <figure class="modale">
                <button aria-label="closed">
                    <span class="material-icons">clear</span>
                </button>
                <img src="https://via.placeholder.com/500" alt="picture" />
                <figcaption class="desc">
                    <h3>title</h3>
                    <p> </p>
                </figcaption>
            
            </figure>
            
        </div>




    </main>

    <footer id="contact">

        <section class="footer">
            <img src="./asset/logo_sport.png" alt="logo redbull">
            <div role="region" aria-labelledby="contact" class="Sport">
                <h2>Sport</h2>
                <ul>
                    <li> <a href="#">Tennis </a></li>
                    <li> <a href="#"> Hockey sur glace</a></li>
                    <li> <a href="#"> Football </a></li>
                    <li> <a href="#"> Moto GP </a></li>
                    <li> <a href="#"> Athlétisme </a></li>
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
    <script src="./js/page1.js"></script>
    <script src="./js/themesombre.js"></script>
    <script src="./js/loader.js"></script>

</body>

</html>