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
   
?>