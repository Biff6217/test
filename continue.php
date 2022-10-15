<?php 
    session_start();
	 // ajout connexion bdd 
        try 
    {
        $bdd = new PDO("mysql:host=localhost;dbname=wishflix;charset=utf8", "root", "");
    }
    catch(PDOException $e)
    {
        die('Erreur : '.$e->getMessage());
    }

    // On récupere les données de l'utilisateur
    $req = $bdd->prepare('SELECT * FROM utilisateurs WHERE token = ?');
    $req->execute(array($_SESSION['user']));
    $data = $req->fetch();
    $date = $bdd->query('SELECT * FROM `continue_film` WHERE `user_id` = 8')


?>

<!doctype html>
<html lang="en">
  <head>
    <title>En cours</title>
    <meta charset="utf-8">
	<link rel="stylesheet" href="style4.css" />
	<meta name="viewport" content="width=device-width">
  </head>
  <body>
    <!-- nav -->
    <div id="nav" class="nav">
    	<a id="nav__logo" href="https://wishflix.github.io/WishFlix/">
      	<img class="nav__logo" src="https://i.ibb.co/m4tsGT7/D07-A4-F76-225-E-4182-885-B-D8064-C0-EABFB.png"/> 
     	<a id="nav" href="https://bit.ly/wishflixsearch">
      	<img class="nav__avatar" src="https://i.ibb.co/ZYkJZXW/loupe-1.png" alt="" />
      	</a>
    </div>

    <br><br><br><br><br><br><br><br>
    <div class="container">
    	<h1 class="titre">Continuer a regarder</h1>
	<div class="box">

<?php
	while ($donnees = $date->fetch())

	{
		echo $donnees['image_film'];
		// echo $donnees['nom_film'];

?>
	</div>
    </div>


<?php
	}  
?>
			

				
				
  </body>
</html>
