<?php
    
    try {
        if (isset($_POST['nom']) && isset($_POST['email'])) {

            if (!isset($_POST['nom']) && !isset($_POST['email'])) {

                print "<p class=\"warning\">Veuillez saisir des lettre</p>";

            } 
            else {
                $pseudo = $_POST['nom'];
                $email = $_POST['email'];
                $id = $_SESSION['id'];
            
                try {
                    $req = $bdd->prepare("UPDATE utilisateurs SET pseudo = :pseudo, email = :email WHERE id = :id");
                    $req->execute(array(
                    'pseudo' => $pseudo,
                    'email' => $email,
                    'id' => $id,
                    
                    ));
                    print "<p class=\"success\">Votre changement de profil a bien été prise en compte</p>";
                    header('Location: page_profil.php');
                    
                }
                catch (Exception $e) {
                    die('Erreur : ' . $e->getMessage());
                }

                

                
            }
        }
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }

?>