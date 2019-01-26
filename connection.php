<?php
/**
 * Created by PhpStorm.
 * User: Lubin
 * Date: 25/01/2019
 * Time: 11:39
 */
$servername = "localhost";
$username = "id7331055_lubin";
$password = "exobase";
$dbname = "id7331055_nibul";

$conn = new mysqli($servername, $username, $password);


if ($conn->connect_error) {

    die("Connection failed: " . $conn->connect_error);

} else {

    $conn->select_db($dbname);



}