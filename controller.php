<!-- défini les fonctions utilisé dans index.php pour la redirection des pages
auteur:Thibaud Jacquelin
09.02.2019
-->
<?php
require('model.php');

function connection()
{

    require('compte/connection.php');
}

function connectionpage()
{

    require('compte/connectionpage.php');
}

function searchresult()
{
    require('search/searchbar.php');
    require('search/searchresult.php');
}

function accueilpage()
{

    require('accueilpage.php');
}

function inscriptionpage()
{

    require('compte/inscriptionpage.php');
}

function inscription()
{

    require('compte/inscription.php');
}

function chat()
{

    require('chat/chat.php');
}

function deconnection()
{

    require('compte/deconnection.php');
}

function desinscriptionpage()
{

    require('compte/desinscriptionpage.php');
}

function desinscription()
{

    require('compte/desinscription.php');
}

function profilpage()
{

    require('compte/profilpage.php');
}

function profilupdate()
{

    require('compte/profilupdate.php');
}

function pagenotfound()
{

    require('pagenotfound.php');
}

function contactpage()
{

    require('contact/contactpage.php');
}

function information()
{
	require('information.php');
}

