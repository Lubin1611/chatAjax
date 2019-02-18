<?php
/**
 * Created by PhpStorm.
 * User: Lubin
 * Date: 17/02/2019
 * Time: 21:26
 */

try
{
    $bdd = new PDO('mysql:host=localhost;dbname=id7331055_nibul', 'id7331055_lubin', 'exobase');
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}

$id = (int) $_GET['id'];

$requete = $bdd->prepare('SELECT * FROM `chat` WHERE id > :id ORDER BY id DESC');
$requete->execute(array("id" => $id));

$messages = null;

// on inscrit tous les nouveaux messages dans une variable
while($donnees = $requete->fetch()){
    $messages .= "<p id=\"" . $donnees['id'] . "\">" . $donnees['pseudo'] . " dit : " . $donnees['message'] . "</p>";
}

echo $messages; // enfin, on retourne les messages à notre script JS
