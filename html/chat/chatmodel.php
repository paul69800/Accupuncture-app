<!-- permet de récuperer les 10 derniers messages du chat et les place dans la variable $reponse.
Si l'utilisateur n'est pas connecté, renvoit $reponse=FALSE
auteur:Thibaud Jacquelin
09.02.2019
-->


<?php
    	if(isset($_SESSION['prenom']))
	{
		// Connexion à la base de données

		try
		{
			$bdd = new PDO('mysql:host=localhost;dbname=wikipuncture-compte;charset=utf8', 'root', 'tp');
		}
		catch(Exception $e)
		{
			die('Erreur : '.$e->getMessage());
		}


		// Récupération des 10 derniers messages
		$reponse = $bdd->query('SELECT date, prenom, message FROM chat ORDER BY idP DESC LIMIT 0, 10');
	}else{
		$reponse=FALSE;
	}
