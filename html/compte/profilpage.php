<!-- page d'inscription,l'utilisateur y rentre ses données presonnelles
auteur:Thibaud Jacquelin
09.02.2019
modification:
Thibaud Jacquelin, 24-02-2019, rajout de l'affichage des informations et modification du formulaire de modification
Victor Vilin,, 25-02-2019, correction de l'affichage au cas où aucun compte n'est connecté
-->
<div class=content>
<h2>information du profil</h2>

<?php

require('private/openaccountbdd.php');
if(isset($_SESSION['email']))
{
    $email=$_SESSION['email'];

    $req = $bdd->prepare('SELECT email,password,prenom,nom,genre,acupuncteur FROM compte WHERE email=:email');
    $req->execute(array('email' => $email));
    if($profil = $req->fetch())
    {
        $prenom=$profil['prenom'];
        $nom=$profil['nom'];
        $email=$profil['email'];
        $genre=$profil['genre'];
        $acupuncteur=$profil['acupuncteur'];
        $req->closeCursor(); // Termine le traitement de la requête
        echo '<ul>';
            echo '<li><strong>Email: </strong>'.$email.'</li>';
            echo '<li><strong>Prenom: </strong>'.$prenom.'</li>';
            echo '<li><strong>Nom: </strong>'.$nom.'</li>';
            echo '<li><strong>genre: </strong>'.$genre.'</li>';
            echo '<li><strong>acupuncteur: </strong>'.$acupuncteur.'</li>';
        echo '</ul>';
    }
}
else 
    echo "<p>Vous devez être connecté pour accéder à votre compte.</p>";
?>

</div>


<?php
    if(isset($_SESSION['email']))
    {
    ?>
        <div class=content>
        <h2>Modifier son profil</h2>
        <form method=post action="index.php?action=profilupdate" id="profilupdate">
            <fieldset>
            <ul>
            <li><label for="Prenom">changer prénom:</label>
            <input type="text" name="prenom" id="Prenom" placeholder="Prénom" autocomplete="given-name"/></li>
            <li><label for="Nom">changer Nom:</label>
            <input type="text" name="nom" id="Nom" placeholder="Nom" autocomplete="name"/></li>
            </ul>
            </fieldset>

            <fieldset>
            <p>Informations personnelles <i>(facultatif)</i></p>
            <fieldset>
            <label>Genre:</label>

            <ul>
            <li><label>Homme:</label>
            <input type="radio" name="Genre" value="H"/></li>
            <li><label>Femme:</label>
            <input type="radio" name="Genre" value="F"/></li>
            </ul>
            </fieldset>
            <fieldset>
            <label for="Situation">Etes-vous:</label>
            
            <ul>
            <li><label>Acupunctureur:</label>
            <input type="radio" name="situation" value="1"/></li>
            <li><label>Particulier:</label>
            <input type="radio" name="situation" value="0"/></li>
            </fieldset>
            </fieldset>

            <fieldset>
            <ul>
            <li><label for="mdp">Ancien mot de passe:</label>
            <input type="password" name="password" id="oldpassword" placeholder="Ancien mot de passe" minlength="8" maxlength="16"/></li>
            <li><label for="mdp">Nouveau mot de passe:</label>
            <input type="password" name="password" id="password" placeholder="nouveau mot de passe" minlength="8" maxlength="16"/></li>

            <li><label for="confirm_mdp">Confirmer nouveau mot de passe:</label>
            <input type="password" name="passwordbis" id="passwordbis" placeholder="confirmer le mot de passe" minlength="8" maxlength="16"/></li>
            </fieldset>
            <input type="submit" name="envoyer" value="Appliquer"/>
        </form>
        <a href="index.php?action=desinscriptionpage" title="Formulaire de désinscription">Se désinscrire</a>
        </div>
        <?php
    }
