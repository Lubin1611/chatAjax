<?php
/**
 * Created by PhpStorm.
 * User: Lubin
 * Date: 25/01/2019
 * Time: 11:29
 */

include "RequetesPhp/connection.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<h1>Bienvenue sur le chat, indiquez votre pseudo et votre message pour discuter.</h1>


<div class ='global'>

<div class ='containerChat'>

<div id = 'tchat'>

<?php

$tout = "SELECT * from `chat` ORDER BY id DESC LIMIT 0,10";

$result = $conn->query($tout);

while ($row = $result->fetch_assoc()) {

    echo "<p id=\"" . $row['id'] . "\">" . $row['pseudo'] . " dit : " . $row['message'] . "</p>";

}
?>
</div>

<div id = 'membres'>
<p>Membres connectés</p>
<?php

$selectConn = "SELECT * FROM `user_chat` WHERE `connected` = '1'";

$result = $conn->query($selectConn);

while ($col = $result->fetch_assoc()) {

    echo "<p>". $col['pseudo'] ."</p>";
}

    ?>
</div>

</div>

<form action="" method="post">
    <label>Votre message : </label><textarea id = "message" name="message"></textarea>
    <div id = "inputsChat">
    <input type="submit" name="submit" id = "envoyez" value="envoyez">
         <a href="RequetesPhp/logout.php">Se déconnecter</a>;
    </div>
</form>

</div>

<script type="text/javascript" src="Ajax/charger.js"></script>
<script type="text/javascript" src="Ajax/appelAjax.js"></script>
</body>
</html>
