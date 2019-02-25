<!-- charge les résultat de la barre de recherche
auteur:Thibaud Jacquelin
09.02.2019
-->

<?php
require('private/opensearchbdd.php');
$recherche=$_POST['recherche'];
$requete='%'.$recherche.'%';

$meridiens=['-QM','-WM','+QM','+WM','C','ChM','DaiM','DM','E','F','GI','IG','MC','P','R','RM','Rte','TR','V','VB'];
$meridiensasked=[];
foreach ($meridiens as &$meridien)
{
	$meridiensasked = (isset($_POST[$meridien])) ? $meridiensasked=array_merge($meridiensasked, [$meridien]) : $meridiensasked;
}

$pathologies=['meridien', 'organe-viscere', 'tendino-musculaire', 'branches', 'merveilleux vaisseau'];
$pathologiesasked=[];
foreach ($pathologies as &$pathologie)
{
	$pathologiesasked = (isset($_POST[$pathologie])) ? $pathologiesasked=array_merge($pathologiesasked, [$pathologie]) : $pathologiesasked;
}

$caracteristiques=['plein', 'vide', 'chaud', 'froid', 'interne', 'externe'];
$caracteristiquesasked=[];
foreach ($caracteristiques as &$caracteristique)
{
	$caracteristiquesasked = (isset($_POST[$caracteristique])) ? $caracteristiquesasked=array_merge($caracteristiquesasked, [$caracteristique]) : $caracteristiquesasked;
}


$resultat = $bdd->prepare('SELECT * FROM patho WHERE description LIKE :recherche');
$resultat->execute(array('recherche'=>$requete));
$resultatcopy=$resultat;
if(!$resultatcopy=$resultat->fetch())
{
	$resultat=FALSE;
}

