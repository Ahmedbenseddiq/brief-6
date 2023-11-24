<?php

$serverName = "localhost";
$userName = "root";
$password = "";
$db = "electronaser";

$conn = mysqli_connect($serverName, $userName, $password, $db);

if(!$conn){
    echo "connection error";
}