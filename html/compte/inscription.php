<!-- inscription de l'utilisateur.
si l'adresse email est deja lié, affiche "erreur... etc".
sinon, enregistre l'utilisateur et le redirige vers la page d'accueil.
auteur:Thibaud Jacquelin
09.02.2019
-->

<?php
echo "<div class=content>";
require('private/openaccountbdd.php');
	
$email=$_POST['email'];
$prenom=$_POST['prenom'];
$nom=$_POST['nom'];
$password=$_POST['password'];
if(isset($_POST['genre']))
{
	$genre=$_POST['genre'];
}else
{
	$genre='?';
}
if(isset($_POST['acupuncteur']))
{
	$acupuncteur=$_POST['acupuncteur'];
}else
{
	$acupuncteur='Non';
}

$password_hashed = password_hash($password, PASSWORD_DEFAULT);

$req = $bdd->prepare('SELECT email FROM compte WHERE email=:email');
$req->execute(array('email' => $email));
if($donnees = $req->fetch())
{
	echo 'Erreur: cette adresse email est déjà liée à un compte';
}else
{
	$req = $bdd->prepare('INSERT INTO compte(email, password, prenom, nom, genre, acupuncteur)VALUES(:email, :password, :prenom, :nom, :genre, :acupuncteur)');
	$req->execute(array(
		'email' => $email,
		'password' => $password_hashed,
		'prenom' => $prenom,
		'nom' => $nom,
		'genre' => $genre,
		'acupuncteur' => $acupuncteur
		));
	$_SESSION['prenom']=$prenom;
	echo "inscription réussi!";
}

$req->closeCursor(); // Termine le traitement de la requête
echo "</div>";
