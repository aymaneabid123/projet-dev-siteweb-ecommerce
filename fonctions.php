<?php
//fonction pour la connexion au serveur et la base
function connexion(){
	try
	{
		global $bdd;
		$bdd = new PDO('mysql:host=localhost;dbname=back;charset=utf8', 'root', '');
		return $bdd;
	}
	catch (Exception $e)
	{
			die('Erreur : ' . $e->getMessage());
	}
}
?>