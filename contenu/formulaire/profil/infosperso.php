<?php
	require "../../.layouts/base.php";
	require "../../.layouts/navbar.php";
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Espace membre</title>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" href="../../../.css/style_profil.css" />
	<link rel="stylesheet" href="../../../.css/style_boutton.css" />
	<script src="https://kit.fontawesome.com/b7b49290a6.js" crossorigin="anonymous"></script> <!-- Icone voir mdp -->
  </head>
  <body>

		<br><br><br><br><br>
        <div class="container">
            <div class="col-md-12">
                <?php 
                        if(isset($_GET['err'])){
                            $err = htmlspecialchars($_GET['err']);
                            switch($err){
                                case 'current_password':
                                    echo "<script>alert('Le mot de passe actuel est incorrect');</script>";
                                break;

                                case 'success_password':
                                    echo "<script>alert('Le mot de passe a bien été modifié !');</script>";
                                break; 
                            }
                        }
                    ?>
					<div class="text-center">
                        <h1 class="p-5">Bonjour <?php echo $data['pseudo']; ?> !</h1>
						<div class="info_perso">
							<h2>Mes informations personnelles</h2>
							<p class="aaa">Pseudo :</p>
							<div class="login">
								<input class="info" type="text" value="<?php echo $data["pseudo"]?>" maxlength="16">
							</div>
							
							<p>Email :</p>
							<div class="email">
								<input class="info" type="text" value="<?php echo $data["email"]?>" maxlength="16">
							</div>

							<p>Password :</p>
							<div class="password">
								<form method="post">
									<input class="password" type="password" name="modifier_password" value="<?php echo $data["password_retype"]?>" maxlength="16" id="mdp-inp">
								</form>
							<!-- Button voir mdp -->
							<button id="reveal-mdp" class="voirmdp" onclick="revealPassword()"><i class="fa-solid fa-eye"></i></button>
							<!-- Button trigger modal / Boutton changer mdp -->
							<button type="button" class="changer_mdp" data-toggle="modal" data-target="#change_password"><img src="https://i.ibb.co/XCrw672/change-password.png"/></button>
							</div>
						</div>
					</div>
            </div>
        </div>    
		<br>
		<div class="deconnexion">
			<a class="deconnexion" href="deconnexion.php">Se déconnecter</a>
		</div>
		
		
							<!--Afficher mot de passe-->
							 <script>
							var isRevealCheck = 1;

							function revealPassword() {

							toShow = document.getElementById('mdp-inp');
							icon = document.getElementById('icon');
							console.log(isRevealCheck);

							if (toShow.type == 'password') {
								toShow.type = 'text';
								icon.classList.remove("fa-eye");
								icon.classList.add("fa-eye-slash");
							} else {
								toShow.type = 'password';
								icon.classList.add("fa-eye");
								icon.classList.remove("fa-eye-slash");
							}
							}
							</script>

        <!-- Modal -->
        <div class="modal fade" id="change_password" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Changer mon mot de passe</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                         </div>
                            <div class="modal-body">
                                <form action="change_password.php" method="POST">
                                    <label for='current_password'>Mot de passe actuel</label>
                                    <input type="password" id="current_password" name="current_password" class="form-control" required/>
                                    <br />
                                    <label for='new_password'>Nouveau mot de passe</label>
                                    <input type="password" id="new_password" name="new_password" class="form-control" required/>
                                    <br />
                                    <label for='new_password_retype'>Re tapez le nouveau mot de passe</label>
                                    <input type="password" id="new_password_retype" name="new_password_retype" class="form-control" required/>
                                    <br />
                                    <button type="submit" class="btn-success">Sauvegarder</button>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
                            </div>
                        </div>
                    </div>
                </div>
				

				
				
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
