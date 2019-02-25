<!-- Si l'utilisateur est connecté, vérifier les informations de session.
auteur:Thibaud Jacquelin
09.02.2019
-->

<?php
if(isset($_SESSION['email']))
{
	require('private/openaccountbdd.php');
	$email=$_SESSION['email'];

	$req = $bdd->prepare('SELECT email,password,prenom FROM compte WHERE email=:email');
	$req->execute(array('email' => $email));
	if($profil = $req->fetch())
	{
		if($_SESSION['prenom']!=$profil['prenom'] or $_SESSION['email']!=$profil['email'] or $_SESSION['password']!=$profil['password'])
		{		
			echo $_SESSION['prenom'];			
			session_destroy();
			
		}
	}else
	{
		session_destroy();
		echo "<script type='text/javascript'>document.location.replace('index.php');</script>";
	}

	$req->closeCursor(); // Termine le traitement de la requête
}

