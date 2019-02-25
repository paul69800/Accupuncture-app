<!-- barre de connection à un compte. 
Si l'utilisateur est connecté, affiche "bienvenue $prenom" et propose de se déconnecter.
sinon, propose de se connecter ou de s'inscrire.

auteur:Thibaud Jacquelin
09.02.2019
-->

<?php
echo "<div class=userbar>";
if(isset($_SESSION['prenom']))
{
	echo 'vous etes connecté sur le profil de ';	
	echo $_SESSION['prenom'];
	?>
	<input type=button onclick=window.location.href='index.php?action=profilpage';  value="Mon compte" />
	<input type=button onclick=window.location.href='index.php?action=deconnection';  value="Se déconnecter" />
	<?php
}else{
	?>
	<form method=post action="index.php?action=connection">
	<fieldset>

	  <label for="email">identifiant:</label>
	  <input type="email" name="email" id="email" placeholder="email" autocomplete="email"/>

	  <label for="password">mdp:</label>
	  <input type="password" name="password" id="password" placeholder="mot de passe"/>

	  <input type="submit" name="connexion" value="connexion"/>
	  <a href="index.php?action=inscriptionpage" title="inscrivez vous ici !">inscription</a>
	</fieldset>
	</form>
<?php
}
echo "</div>";

