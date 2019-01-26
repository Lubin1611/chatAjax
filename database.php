<?php
/**
 * Created by PhpStorm.
 * User: Lubin
 * Date: 25/01/2019
 * Time: 11:48
 */

include "connection.php";


    $pseudo = (isset($_GET["pseudo"])) ? $_GET["pseudo"] : NULL;
    $message = (isset($_GET["message"])) ? $_GET["message"] : NULL;

    $traitPseudo = htmlentities($pseudo);
    $traitMessage = htmlentities($message);


$ajoutEl = "INSERT INTO `chat` (`pseudo`, `message`) VALUES (?, ?)";

$connection = $conn->prepare($ajoutEl);

$connection->bind_param('ss', $traitPseudo, $traitMessage);

$connection->execute();

$connection->close();





