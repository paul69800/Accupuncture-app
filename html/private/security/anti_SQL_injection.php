<!-- vérifie l'abscence de code SQL dans les variables venant du client.
auteur:Thibaud Jacquelin
10.02.2019
modification:
Thibaud JACQUELIN, 24-02-2019, rajout des echapatoires en SQL et de la protection des injections html
-->

<?php
foreach($_SESSION as $cle => $valeur)

{

	$_SESSION[$cle]=htmlspecialchars($valeur);

}

foreach($_POST as $cle => $valeur)

{

	$_POST[$cle]=htmlspecialchars($valeur);

}

foreach($_GET as $cle => $valeur)

{

	$_GET[$cle]=htmlspecialchars($valeur);

}

