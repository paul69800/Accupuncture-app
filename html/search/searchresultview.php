<!-- affiche les resultats de la recherche. variable= $resultat $pathologieasked $meridiensasked $caracteristiqueasked.
auteur:Thibaud Jacquelin
09.02.2019
-->

<?php

echo '<div class=content>';
	

	echo '<h2>Resultat de recherche pour ';
	echo $recherche;
	echo '</h2>';

	if($pathologiesasked!=[])
	{
		echo '<strong>pathologies:</strong><ul>';
		foreach ($pathologiesasked as &$pathologie)
		{
			echo '<li>'.$pathologie.'</li>';
		}
		echo '</ul>';
	}


	if($meridiensasked!=[])
	{
		echo '<strong>méridiens:</strong><ul>';
		foreach ($meridiensasked as &$meridien)
		{
			echo '<li>'.$meridien.'</li>';
		}
		echo '</ul>';
	}

	if($caracteristiquesasked!=[])
	{
		echo '<strong>caracteristiques</strong><ul>';
		foreach ($caracteristiquesasked as &$caracteristique)
		{
			echo '<li>'.$caracteristique.'</li>';
		}
		echo '</ul>';
	}



	if ($resultat!=FALSE)
	{
		$list_resultat= array();
		$i=0;
		while($donnees = $resultat->fetch()){
			$list_resultat[$i]['idP'] = $donnees['idP'];
			$list_resultat[$i]['type'] = $donnees['type'];
			$list_resultat[$i]['description'] = $donnees['description'];
			$i++;

		}

		$tpl = new Smarty();

		$tpl->assign('list_resultat', $list_resultat);

		$tpl->display("templates/searchresult.tpl");
	}else
	{
		?>
		<p>
		<img src="images/noresult.png" alt="smiley triste" title="aucun résultat trouvé">
		</p>
		<strong>Aucun resultat trouvé!</strong>
		<?php
	}
echo '</div>';
