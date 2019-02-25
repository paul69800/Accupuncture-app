<!-- permet d'afficher les messages du chat contenue dans $reponse.
Si $reponse=FALSE; demande à l'utilisateur de se connecter avant.
auteur:Thibaud Jacquelin
09.02.2019
-->



<div class=chat>
<h2>Chat</h2>
<?php
		// Affichage de chaque message
	if($reponse==FALSE)
	{
		echo 'Vous devez être connecté pour avoir accès au chat';
	}else{	
	echo "<ul>";
	while ($donnees = $reponse->fetch())
		{
			echo '<li>'.htmlspecialchars($donnees['date']).': <strong>' . htmlspecialchars($donnees['prenom']) . '</strong> : ' . htmlspecialchars($donnees['message']) . '</li>';
		}
		echo '</ul>';
		$reponse->closeCursor();
		?>


		<form action="index.php?action=chat" method="post">
		<p>
		<label for="message">Message</label> :  <input type="text" name="message" id="message" />
		<input type="submit" value="Envoyer" />
		</p>
	    </form>

<?php
}
echo ' </div>';
