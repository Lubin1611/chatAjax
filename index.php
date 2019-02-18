<?php
/**
 * Created by PhpStorm.
 * User: Lubin
 * Date: 18/02/2019
 * Time: 13:54
 */
include "connection.php";


$login = (isset($_POST['pseudoConn']) ? $_POST['pseudoConn'] : NULL);
$password = (isset($_POST['mdpConn']) ? $_POST['mdpConn'] : NULL);

$password = sha1($password);


$select = "SELECT * FROM `user_chat` WHERE '$login' = pseudo and '$password' = mdp";
$sql = $conn->query($select);
$row = $sql->fetch_assoc();

$login = $row['pseudo'];
$password = $row['mdp'];


if (isset($_POST['pseudoConn']) and isset($_POST['mdpConn'])) {
    if ($login == $_POST['pseudoConn'] && $password == sha1($_POST['mdpConn'])) {

        session_start();

        $_SESSION['login'] = $row['pseudo'];
        header('Location:formulaire.php');

    }
    if ($_POST['pseudoConn'] != $login and $_POST['mdpConn'] != $password) {
        echo "Pas capable d'ecrire son login !";
    }
}
?>

<h1>Connectez vous pour pouvoir participer au tchat</h1>


<form action="" method="post">
    <label>Votre pseudo : </label><input type="text" name="pseudoConn" id="pseudo">
    <label>Votre mot de passe :</label>
    <input type="password" name="mdpConn" id="mdp">
    <input type="submit" value="envoyez">
</form>

<p>Pas encore inscrit ? <a href="index.php">Cliquez ici pour vous inscrire</a></p>
