<?php
	require "../../.layouts/base.php";
	require "../../.layouts/navbar.php";


	// importer bdd continue_film
	$film_id = 5;
	$user_id = $data["id"];
	$nom_film = 'Uncharted';
	$image_film = '<a href="" ><img src="https://i.ibb.co/F5gpMPV/46406441-4-C9-D-474-D-9274-7-D7-DD40-B527-B.jpg"/></a>';
	$token = $data["token"];
	$bdd->query ("INSERT INTO continue_film (id, user_id, film_id, nom_film, image_film, token) VALUES (null, '$user_id', '$film_id', '$nom_film', '$image_film', '$token')");
	
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width">
    <link rel="shortcut icon" href="https://i.ibb.co/W5JLzsg/C690119-D-5-DA1-476-A-9-FB3-9805-AE38321-A.png" />
    <script defer src="https://use.fontawesome.com/releases/v5.1.0/js/all.js" integrity="sha384-3LK/3kTpDE/Pkp8gTNp2gR/2gOiwQ6QaO7Td0zV76UFJVhqLl4Vl3KL1We6q6wR9" crossorigin="anonymous"></script>
    <title>Uncharted en streaming gratuit : WishFlix</title>
    <link rel="stylesheet" href="../../../../../.css/stylefilms.css" />
  </head>
  <body>
  
        <style>
      h1 {
        color:white;
      }

      a {
        color:white;
        text-decoration:none;
        text-align:center;
        font-weight : normal
      }

      h4 {
        color:white;
        text-align:left;
      }

    </style>


    <!-- Originals -->
    <section class="main-container" >
      <h1 id="home"></br></br>Uncharted<br>ㅤ</h1>
      <h2>Tous publics 2022 ‧ Aventure/Action ‧ 1h 56m<br>ㅤ</h2>
      <h3>
      <div class="box">
        <div>
			<iframe allowfullscreen="" frameborder="0"  src="https://uqload.org/embed-ejbylyyv7hom.html"  sandbox = "allow-forms allow-pointer-lock allow-same-Origin allow-scripts allow-top-navigation"></iframe>
        </div>
      </div>


      <h1 id="home"></br></br>Autres films Action, Adventure, Drame<br>ㅤ</h1>
      <h3>
        <div class="box">

        <a href="../afterearth.html"><img src="https://i.ibb.co/mhqGV2d/140044-E8-840-D-4-D58-A00-E-B4-C19159-A588.jpg">After Earth</a>

        <a href="../avatar.html"><img src="https://i.ibb.co/XSq1MZM/691BA.jpg">Avatar</a>

        <a href="../creed.html"><img src="https://i.ibb.co/71gS0pt/2-B50-ED7-E-D23-B-476-E-AA4-C-78346991-EDB4.jpg">Creed</a>

        <a href="../darkshadows.html"><img src="https://i.ibb.co/n7XtJYV/69-D9-EAFD-60-D8-4-E04-BA95-E19-C473-C16-BC.jpg">Dark Shadows</a>

        <a href="../deepwater.html"><img src="https://i.ibb.co/crnrVZd/FB0-C37-E2-277-D-4-B34-8864-524-AA363-E6-F4.jpg">Deepwater</a>
    
        <a href="../divergente.html"><img src="https://zupimages.net/up/22/16/cvh1.jpeg">Divergente</a>

        <a href="../uncharted.html"><img src="https://i.ibb.co/F5gpMPV/46406441-4-C9-D-474-D-9274-7-D7-DD40-B527-B.jpg">Uncharted</a>
    
        <a href="../dune.html"><img src="https://i.ibb.co/bmj3t2d/FFBE9E8.jpg">Dune</a>

        <a href="../fastandfurious.html"><img src="https://www.zupimages.net/up/22/16/dmmh.jpeg">Fast and Furious</a>

        <a href="../fendes.html"><img src="https://i.ibb.co/mHfPrxh/31374-C0-C-5-A66-4-C58-B653-334-F043-BA3-E1.jpg">Fendes</a>
    
        <a href="../gladiator.html"><img src="https://i.ibb.co/BL3NTjh/89-CACA61-B5-B3-4354-9-A5-C-3927-C4812185.jpg">Gladiator</a>

        <a href="../insaisissable.html"><img src="https://i.ibb.co/vXnBJ2V/93-DFB953-A21-C-4516-BA6-E-29-DC561-E0482.jpg">Insaisissable</a>
    


       </div>





       </section class="main-container">

                  <script>
      const nav = document.getElementById('nav');
      window.addEventListener('scroll', () => {
        if (window.scrollY >= 100) {
          nav.classList.add('nav__black');
        } else {
          nav.classList.remove('nav__black');
        }
      });
    </script>


     
    <!-- FIN MAIN CONTAINER -->

 

    <!-- FOOTER -->
    <footer>
      <p>&copy 2022 WishFlix</p>
      <p>WishFlix n'héberge en aucun cas les films et séries proposé<br> et se délaisse de toute responsabilité par rapport a ces programmes.</p>
    </footer>
  </div>
</body>
</html>
