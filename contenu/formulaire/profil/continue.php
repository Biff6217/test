<?php
	require "../../.layouts/base.php";
	require "../../.layouts/navbar.php";
?>

<!doctype html>
<html lang="en">
  <head>
    <title>En cours</title>
    <meta charset="utf-8">
	<link rel="stylesheet" href="../../../.css/style_continue.css" />
	<meta name="viewport" content="width=device-width">
  </head>
  <body>


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
