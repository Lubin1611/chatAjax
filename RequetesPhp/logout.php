<?php
/**
 * Created by PhpStorm.
 * User: Lubin
 * Date: 18/02/2019
 * Time: 15:06
 */
include "connection.php";

session_start();

$var2 = $_SESSION['id'];

$update = "UPDATE `user_chat` set `connected` = '0' WHERE `id_pseudo` = $var2";

$conn->query($update);

session_destroy();

header("Location:../index.php");