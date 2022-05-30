
<?php
require_once 'connect.php';
            if(isset($_SESSION["user"]) && isset($_GET['id_evenement'])){
                $_date = new DateTime();
                $_date = $_date->format('Y-m-d H:i:s'); 
                print "L'id event : " . $_GET["id_evenement"] . " | l'id de la session : " . $_SESSION["user"] . " | la date : " . $_date;
                try {
                $_date = new DateTime();
                $_date = $_date->format('Y-m-d H:i:s');
                $_req = $bdd->prepare('INSERT INTO historique_client(id_utilisateur, id_evenement, date_consultation) VALUES (:id_utilisateur, :id_evenement, :date_consultation)');
                $_req->execute(array(
                    'id_utilisateur' => $_SESSION['user'],
                    'id_evenement' => $_GET['id_evenement'],
                    'date_consultation' => $_date,
                ));
                print $_SESSION['user'] . $_GET['id_evenement'] . $_date;
            } catch (Exception $e) {
                die('Erreur : ' . $e->getMessage());
            }
        }
        ?>   