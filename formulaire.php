<?php
/**
 * Created by PhpStorm.
 * User: Lubin
 * Date: 25/01/2019
 * Time: 11:29
 */
include "connection.php";


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <script src="lib/jquery.js"></script>
</head>
<body>

<h1>Bienvenue sur le chat, indiquez votre pseudo et votre message pour discuter.</h1>

<form action="" method="post">
    <label>Votre pseudo : </label><input id = 'pseudo' name="pseudo"><br>
    <label>Votre message : </label><textarea id = "message" name="message"></textarea>
    <input type="button" id = "envoyez" value="envoyez">
    <input type="button" id = "recevoir" value="recevoir">
</form>

<div id = 'tchat'>


</div>


<script src="appelAjax.js"></script>
</body>
</html>
