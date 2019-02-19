<?php
/**
 * Created by PhpStorm.
 * User: Lubin
 * Date: 18/02/2019
 * Time: 13:42
 */
include "RequetesPhp/connection.php";


if (!empty($_POST['pseudo']) AND !empty($_POST['mdp'])) {

    $pseudo = $_POST['pseudo'];
    $password = sha1($_POST['mdp']);
    $connect = '0';

    $inscription = "INSERT INTO `user_chat` (`pseudo`, `mdp`, `connected`) VALUES (?, ?, ?)";

    $envoiIn = $conn->prepare($inscription);

    $envoiIn->bind_param('ssi', $pseudo, $password, $connect);

    $envoiIn->execute();

    $envoiIn->close();

    header("Location:index.php");

} else {

    echo "Veuillez remplir les champs demandés";

}
?>


<h1>Inscrivez-vous pour pouvoir participer au tchat</h1>


<form action="" method="post">
    <label>Indiquez un pseudo : </label><input type ="text" name="pseudo" id="pseudo">
    <label>Indiquez un mot de passe : </label><input type="password" name="mdp" id ="mdp">
    <input type="submit" value="envoyez">
</form>

<p>Déja inscrit ? <a href="index.php">Cliquez ici pour vous connecter</a></p>