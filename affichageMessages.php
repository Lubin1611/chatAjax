<?php
/**
 * Created by PhpStorm.
 * User: Lubin
 * Date: 25/01/2019
 * Time: 16:06
 *
 *
 */



include "connection.php";

$selectMessages = "SELECT * FROM `chat` ORDER BY id DESC ";
 
 



$result = $conn->query($selectMessages);

$dataMessages = $result ->fetch_assoc();

echo json_encode($dataMessages);

