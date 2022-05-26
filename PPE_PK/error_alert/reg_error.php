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