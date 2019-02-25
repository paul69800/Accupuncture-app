<!-- barre de recherche.
auteur:Thibaud Jacquelin
09.02.2019
-->

<?php echo "<div class=content><h2>Bienvenue ";
if(isset($_SESSION['prenom']))
{
	echo $_SESSION['prenom'].' ';
}
echo "! Que voulez vous rechercher aujourd'hui?</h2>"; 
?>


  <div class="recherche">

    <form method=post action="index.php?action=searchresult" id="recherche">
    <div class=searchmainbar>
      <label for="recherche">recherche:</label>
      <input type="search" name="recherche" id="recherche" placeholder="pathologie..." autofocus/>
	<input type="submit" name="rechercher" value="rechercher"/>      
	</div>
	<fieldset>
	<label>filtrer par pathologies:</label>
	<details>
	<ul>
	  <li><input type="checkbox" name="meridien"><label for="meridien"> méridien</label></li>
	  <li><input type="checkbox" name="organe-viscere"><label for="organe-viscere">organe-viscere</label></li>
	  <li><input type="checkbox" name="tendino-musculaire"><label for="tendino-musculaire">tendino-musculaire</label></li>
	  <li><input type="checkbox" name="branches"><label for="branches">branches</label></li>
	  <li><input type="checkbox" name="merveilleux vaisseaux""><label for="merveilleux vaisseaux">merveilleux vaisseaux</label></li>
	</ul>
	</details>
      </fieldset>
      <fieldset>
	<label>filtrer par meridiens:</label>
	<details>
	<ul>
	  <li><input type="checkbox" name="-QM"><label for="-QM">Yin Qiao Mai</label></li>
	  <li><input type="checkbox" name="-WM"><label for="-WM">Yin Wei Mai</label></li>
	  <li><input type="checkbox" name="+QM"><label for="+QM">Yang Qiao Mai</label></li>
	  <li><input type="checkbox" name="+WM"><label for="+WM">Yang Wei Mai</label></li>
	  <li><input type="checkbox" name="C"><label for="C">Coeur</label></li>
	  <li><input type="checkbox" name="ChM"><label for="ChM">Chong Mai</label></li>
	  <li><input type="checkbox" name="DaiM"><label for="DaiM">Dai Mai</label></li>
	  <li><input type="checkbox" name="DM"><label for="DM">Du Mai</label></li>
	  <li><input type="checkbox" name="E"><label for="E">Estomac</label></li>
	  <li><input type="checkbox" name="F"><label for="F">Foie</label></li>
	  <li><input type="checkbox" name="GI"><label for="GI">Gros intestin</label></li>
	  <li><input type="checkbox" name="IG"><label for="IG">Intestin Grêle</label></li>
	  <li><input type="checkbox" name="MC"><label for="MC">Protecteur du coeur</label></li>
	  <li><input type="checkbox" name="P"><label for="P">Poumon</label></li>
	  <li><input type="checkbox" name="R"><label for="R">Rein</label></li>
	  <li><input type="checkbox" name="RM"><label for="RM">Ren Mai</label></li>
	  <li><input type="checkbox" name="Rte"><label for="Rte">Rate Pancréas</label></li>
	  <li><input type="checkbox" name="TR"><label for="TR">Triple réchauffeur</label></li>
	  <li><input type="checkbox" name="V"><label for="V">Vessie</label></li>
	  <li><input type="checkbox" name="VB"><label for="VB">Vésicule Biliaire</label></li>
	</ul>
	</details>
      </fieldset>
      <fieldset>
	<label>filtrer par caracteristiques:</label>
	<details>
	<ul>
	  <ul>
	    <li><input type="checkbox" name="plein"><label for="plein">plein</label></li>
	    <li><input type="checkbox" name="vide"><label for="vide">vide</label></li>
	  </ul>
	  <ul>
	    <li><input type="checkbox" name="chaud"><label for="chaud">chaud</label></li>
	    <li><input type="checkbox" name="froid"><label for="froid">froid</label></li>
	  </ul>
	  <ul>
	    <li><input type="checkbox" name="interne"><label for="interne">interne</label></li>
	    <li><input type="checkbox" name="externe"><label for="externe">externe</label></li>
	  </ul>
	</ul>
	</details>
      </fieldset>
    </fieldset>
    </form>
  </div>
</div>
