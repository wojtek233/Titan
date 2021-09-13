<?php
// Connexion à la base de données
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=titan_database;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

// Requête préparée
$req = $bdd->prepare('INSERT INTO candidat (prenom, nom, email, accept) VALUES(?, ?, ?, ?)');
$req->execute(array($_POST['prenom'], $_POST['nom'],$_POST['email'],$_POST['accept']? 1 : 0));

echo 'Bonjour '. $_POST['prenom'] . ', ton inscription a été enregistrée. A bientôt !';

?>

<p> <a href="titan.php">retour</a> au formulaire</p>
