<!-- se déconnecte du compte et redirige vers la page d'accueil.
auteur:Thibaud Jacquelin
09.02.2019
-->
	<?php
		session_destroy();
		echo "<script type='text/javascript'>document.location.replace('index.php');</script>";
	?>

