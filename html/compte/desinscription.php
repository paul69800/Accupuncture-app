<!-- inscription de l'utilisateur.
si l'adresse email est deja lié, affiche "erreur... etc".
sinon, enregistre l'utilisateur et le redirige vers la page d'accueil.
auteur:Thibaud Jacquelin
09.02.2019
-->

<?php
echo '<div class=content>';
require('private/openaccountbdd.php');
	
$email=$_POST['email'];
$password=$_POST['password'];

$req = $bdd->prepare('SELECT email,password FROM compte WHERE email=:email');
$req->execute(array('email' => $email));
if(!($donnees = $req->fetch()))
{
	echo "erreur, aucun compte lié à cette adresse email.";
}else{
	if(password_verify($password, $donnees['password']))
	{
	$req = $bdd->prepare('DELETE FROM compte WHERE email=:email');
	$req->execute(array('email' => $email));
	echo "désinscription terminé! L'intégralité de vos données personnelles ont été effacé!";
	}else{
		echo "erreur, mot de passe incorrect";
	}

}
$req->closeCursor(); // Termine le traitement de la requête
echo '</div>';
