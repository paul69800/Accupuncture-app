<!-- affichage commun de toutes les pages du site (header, barre de connection, chat...
auteur:Thibaud Jacquelin
09.02.2019
-->

<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Wikipuncture</title>
  <link rel="stylesheet" href="CSS/style.css">
</head>
    <?php include("header.php"); ?>
    <body>
	<div class=side>
	<?php include("compte/connectionbar.php"); ?>
	<?php include("menu.php"); ?>
	<?php include("chat/chatbar.php"); ?>
	</div>
    </body>
</html>
