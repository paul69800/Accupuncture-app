<!-- fichier appelé en premier par apache. Permet de gerer le routage a la pages voulu.
auteur:Thibaud Jacquelin
09.02.2019
modification:
Thibaud Jacquelin, 24-02-2018, rajout du plugin smarty
-->
<?php
session_start();
require('private/security/anti_SQL_injection.php');
require('private/security/checkvariabletype.php');
require('private/security/checksession.php');

//initialisation de smarty
require("tpl/Smarty.class.php");

require('controller.php');

echo '<div class=body>';
if (isset($_GET['action'])) 
{
    if ($_GET['action'] == 'accueil') {

        accueilpage();

    }

	elseif ($_GET['action'] == 'connectionpage') {

        connectionpage();

    }
	elseif ($_GET['action'] == 'connection') {

	connection();

    }
	elseif ($_GET['action'] == 'searchresult') {

	searchresult();

    }
	elseif ($_GET['action'] == 'inscriptionpage') {

        inscriptionpage();

    }
	elseif ($_GET['action'] == 'inscription') {

        inscription();

    }
	elseif ($_GET['action'] == 'deconnection') {

        deconnection();

    }
	elseif ($_GET['action'] == 'chat') {

        chat();

    }
	elseif ($_GET['action'] == 'desinscriptionpage') {

        desinscriptionpage();

    }
	elseif ($_GET['action'] == 'profilpage') {

        profilpage();

    }
	elseif ($_GET['action'] == 'desinscription') {

        desinscription();

    }
	elseif ($_GET['action'] == 'profilupdate') {

        profilupdate();
 }
	elseif ($_GET['action'] == 'contactpage') {

        contactpage();
 }
	elseif ($_GET['action'] == 'information') {

       information();


    }
	else{

        pagenotfound();

    }
}else
{

    accueilpage();

}
echo '</div>';

include("footer.php");

