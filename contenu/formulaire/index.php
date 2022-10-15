<?php
	require "../../.layouts/navbar.php";
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<link rel="stylesheet" href="../../.css/style_inscription.css" />
		<meta name="viewport" content="width=device-width">
	</head>
	<body>
	<div class="table">
        <table>
			<td class="connexion">
        <!-- Formulaire connexion -->
             <?php 
                if(isset($_GET['login_err']))
                {
                    $err = htmlspecialchars($_GET['login_err']);

                    switch($err)
                    {
                        case 'password':
                        ?>
							<script type="text/javascript">
								alert('Erreur, mot de passe incorrect');
							</script>
                        <?php
                        break;

                        case 'email':
                        ?>
							<script type="text/javascript">
								alert('Erreur, email incorrect');
							</script>
                        <?php
                        break;

                        case 'already':
                        ?>
							<script type="text/javascript">
								alert('Erreur, compte non existant');
							</script>
                        <?php
                        break;
                    }
                }
                ?> 
            
            <form action="connexion.php" method="post">
                <h1>Connexion</h1><br>      
                <input type="email" name="email" class="login" placeholder="Email" required="required" autocomplete="off"><br>
                <input type="password" name="password" class="password" placeholder="Mot de passe" required="required" autocomplete="off"><br>
                <button type="submit">Connexion</button>
            </form>
        </div>
		</td>
		
		<!-- Formulaire Inscription -->
		<td class="inscription">
		<div class="inscription">
            <?php 
                if(isset($_GET['reg_err']))
                {
                    $err = htmlspecialchars($_GET['reg_err']);

                    switch($err)
                    {
                        case 'success':
                        ?>
                            <div class="alert">
                                <strong>Succès</strong> inscription réussie !
                            </div>
                        <?php
                        break;

                        case 'password':
                        ?>
                            <div class="alert">
                                <strong>Erreur</strong> mot de passe différent
                            </div>
                        <?php
                        break;

                        case 'email':
                        ?>
                            <div class="alert">
                                <strong>Erreur</strong> email non valide
                            </div>
                        <?php
                        break;

                        case 'email_length':
                        ?>
                            <div class="alert">
                                <strong>Erreur</strong> email trop long
                            </div>
                        <?php 
                        break;

                        case 'pseudo_length':
                        ?>
                            <div class="alert">
                                <strong>Erreur</strong> pseudo trop long
                            </div>
                        <?php 
                        case 'already':
                        ?>
                            <div class="alert">
                                <strong>Erreur</strong> compte deja existant
                            </div>
                        <?php 

                    }
                }
                ?>
            
            <form action="inscription_traitement.php" method="post">
                <h1>Inscription</h1><br>
                    <input type="text" name="pseudo" class="login" placeholder="Pseudo" required="required" autocomplete="off"><br>
                    <input type="email" name="email" class="login" placeholder="Email" required="required" autocomplete="off"><br>
                    <input type="password" name="password" class="password" placeholder="Mot de passe" required="required" autocomplete="off"><br>
                    <input type="password" name="password_retype" class="password" placeholder="Re-tapez le mot de passe" required="required" autocomplete="off"><br>
                    <button type="submit" class="btn btn-primary btn-block">Inscription</button>
            </form>
        </div>
		</div>
		</td>
		</table>
	</div>
    </body>
</html>