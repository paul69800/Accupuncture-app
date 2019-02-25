<!-- enregistrement d'un nouveau message dans le chat
auteur:Thibaud Jacquelin
09.02.2019
-->
<?php
$bdd = new PDO('mysql:host=localhost;dbname=wikipuncture-compte;charset=utf8', 'root', 'tp');
$prenom=$_SESSION['prenom'];
$message=$_POST['message'];
	$req = $bdd->prepare('INSERT INTO chat(prenom, message )VALUES(:prenom, :message)');
	$req->execute(array(
		'message' => $message,
		'prenom' => $prenom,
		));

$req->closeCursor(); // Termine le traitement de la requête
header('Location: index.php');
?>
