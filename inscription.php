<?php
/**
 * Created by PhpStorm.
 * User: Lubin
 * Date: 18/02/2019
 * Time: 13:42
 */
include "connection.php";


if (!empty($_POST['pseudo']) AND !empty($_POST['mdp'])) {

    $pseudo = $_POST['pseudo'];
    $password = $_POST['mdp'];

    $inscription = "INSERT INTO `user_chat` (`pseudo`, `mdp`) VALUES (?, ?)";

    $envoiIn = $conn->prepare($inscription);

    $envoiIn->bind_param('ss', $pseudo, $password);

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
    <labem>Indiquez un mot de passe : </labem><input type="password" name="mdp" id ="mdp">
    <input type="submit" value="envoyez">
</form>

<p>Déja inscrit ? <a href="index.php">Cliquez ici pour vous connecter</a></p>