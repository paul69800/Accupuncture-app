<!-- page d'inscription,l'utilisateur y rentre ses données presonnelles
auteur:Thibaud Jacquelin
09.02.2019
-->
<div class=content>
<form method=post action="index.php?action=inscription" id="inscription">
    <fieldset>
      <ul>
	<li><label for="Prenom">Prénom:*</label>
	<input type="text" name="prenom" id="Prenom" placeholder="Prénom" autocomplete="given-name" required/></li>
	<li><label for="Nom">Nom:*</label>
	<input type="text" name="nom" id="Nom" placeholder="Nom" autocomplete="name" required/></li>
	<li><label for="email">Email:*</label>
	<input type="email" name="email" id="email" placeholder="email" autocomplete="email" required/></li>
      </ul>
    </fieldset>

    <fieldset>
      <p>Informations personnelles <i>(facultatif)</i></p>
      <fieldset>
	<label>Genre:</label>

	<ul>
	  <li><label>Homme:</label>
	  <input type="radio" name="genre" value="H"/></li>
	  <li><label>Femme:</label>
	  <input type="radio" name="genre" value="F"/></li>
	</ul>
      </fieldset>
      <fieldset>
	<label for="Situation">Etes-vous:</label>
	
	<ul>
	<li><label>Acupunctureur:</label>
	<input type="radio" name="acupuncteur" value="Oui"/></li>
	<li><label>Particulier:</label>
	<input type="radio" name="acupuncteur" value="Non"/></li>
      </fieldset>
    </fieldset>

    <fieldset>
    <ul>
      <li><label for="mdp">Mot de passe:*</label>
      <input type="password" name="password" id="password" placeholder="mot de passe" minlength="8" maxlength="16" required/></li>

      <li><label for="confirm_mdp">Confirmer mot de passe:*</label>
      <input type="password" name="passwordbis" id="passwordbis" placeholder="confirmer le mot de passe" minlength="8" maxlength="16" required/></li>
    </fieldset>
    <label for="cgu">accepter les conditions d'utilisation:*</label>
    <input type="checkbox" name="cgu" value="1"/>
    <p><i>*:champs requis</i></p>
    <input type="submit" name="envoyer" value="envoyer"/>
</form>
</div>
