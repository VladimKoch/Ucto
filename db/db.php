<?php

$servername = "localhost";
$username = "root";
$password = "Tyr2017";
$database = "msucto";

$connection = new mysqli($servername,$username,$password,$database);
if(!$connection){
    die("Spojení s databázy selhalo: " . mysqli_connect_error());
}

// echo " databaze propojena"


?>