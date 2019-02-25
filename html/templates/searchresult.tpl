<!-- template d'affichage des résultat de la recherche. variable= $liste_resultat
auteur:Thibaud Jacquelin
24.02.2019
-->

{foreach from=$list_resultat item=resultat}

	<article>
		<ul>
			<li><strong>N°{$resultat.idP}</strong></li>
			<li><strong>Type: {$resultat.type}</strong></li>
			<li><strong>description: {$resultat.description}</strong></li>
		</ul>
	</article>
{/foreach}
