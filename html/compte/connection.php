<!-- tentative de connection à un compte
auteur:Thibaud Jacquelin
09.02.2019
-->

<?php
echo "<div class=content>";
require('private/openaccountbdd.php');
$email=$_POST['email'];
$password=$_POST['password'];

$req = $bdd->prepare('SELECT email,password FROM compte WHERE email=:email');
$req->execute(array('email' => $email));
if($donnees = $req->fetch())
{
	if(password_verify($password, $donnees['password']))
	{
		$req2 = $bdd->prepare('SELECT email,prenom,password FROM compte WHERE email=:email');
		$req2->execute(array('email' => $email));
		$profil=$req2->fetch();
		$_SESSION['prenom']=$profil['prenom'];
		$_SESSION['email']=$profil['email'];
		$_SESSION['password']=$profil['password'];
		echo "<script type='text/javascript'>document.location.replace('index.php');</script>";
	}else{
		echo "echec de connexion, email ou mot de passe incorrect.";
	}
}else
{
	echo "echec de connexion, email ou mot de passe incorrect.";
}

$req->closeCursor(); // Termine le traitement de la requête
echo "</div>";
