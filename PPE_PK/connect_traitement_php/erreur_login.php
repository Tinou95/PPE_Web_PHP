<?php 
                if(isset($_GET['login_err']))
                {
                    $err = htmlspecialchars($_GET['login_err']);

                    switch($err)
                    {
                        case 'password':
                        ?>
                            <p class="alert alert-danger">
                                <strong>Erreur</strong> mot de passe incorrect
                        </p>
                        <?php
                        break;

                        case 'email':
                        ?>
                            <p class="alert alert-danger">
                                <strong>Erreur</strong> email incorrect
                        </p>
                        <?php
                        break;

                        case 'already':
                        ?>
                            <p class="alert alert-danger">
                                <strong>Erreur</strong> compte non existant
                        </p>
                        <?php
                        break;
                    }
                }
                ?> 