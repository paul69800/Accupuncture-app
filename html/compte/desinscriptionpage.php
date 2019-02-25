<!-- page d'inscription,l'utilisateur y rentre ses données presonnelles
auteur:Thibaud Jacquelin
09.02.2019
-->


<div class=content><h2>Formulaire de désinscription</h2>

<form method=post action="index.php?action=desinscription" id="desinscription">
    <fieldset>
      <ul>
	
	<li><label for="email">Email:*</label>
	<input type="email" name="email" id="email" placeholder="email" autocomplete="email" required/></li>
	<li><label for="mdp">Mot de passe:*</label>
      <input type="password" name="password" id="password" placeholder="mot de passe" minlength="8" maxlength="16" required/></li>
      </ul>
    </fieldset>
    <input type="submit" name="envoyer" value="se désinscrire"/>
</form>
</div>
