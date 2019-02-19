<?php
/**
 * Created by PhpStorm.
 * User: Lubin
 * Date: 25/01/2019
 * Time: 11:48
 */

include "connection.php";
session_start();


//if(isset($_POST['submit'])){ // si on a envoyé des données avec le formulaire

   // if(!empty($_POST['pseudo']) AND !empty($_POST['message'])) { // si les variables ne sont pas vides

        $pseudo = $_SESSION['login'];
        $message = htmlentities($_POST['message']); // on sécurise nos données


        $ajoutEl = "INSERT INTO `chat` (`pseudo`, `message`) VALUES (?, ?)";

        $connection = $conn->prepare($ajoutEl);

        $connection->bind_param('ss', $pseudo, $message);

        $connection->execute();

        $connection->close();

  //  }

  //  else  {

      //  echo "Un des champs n'est pas rempli";
  //  }

//}




