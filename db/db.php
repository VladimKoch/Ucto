<?php

$servername = "localhost";
$username = "Vlada89";
$password = "Tyr2017";
$database = "msucto";

$connection = new mysqli($servername,$username,$password,$database);
if(!$connection){
    die("Spojení s databázy selhalo: " . mysqli_connect_error());
}

else {
    
    echo " databaze propojena";
}

$tb_users = "CREATE TABLE IF NOT EXISTS Users(
     Id int PRIMARY KEY NOT NULL AUTO_INCREMENT,
  Username varchar(100) NOT NULL,
  Email varchar(255) NOT NULL,
  Password varchar(255) NOT NULL,
  CreatedOn datetime NOT NULL,
  isAdmin BIT NOT NULL
)";

$tb_responses = "CREATE TABLE IF NOT EXISTS Responses(
    id int PRIMARY KEY NOT NULL AUTO_INCREMENT,
  time_date datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  full_name varchar(255) NOT NULL,
  email varchar(255) NOT NULL,
  phone_number varchar(255) NOT NULL,
  annual_turnover decimal NOT NULL,
  property_cards int NOT NULL,
  employe int NOT NULL,
  documents int NOT NULL,
  legal_form varchar(255) NOT NULL,
  scope_of_business varchar(255) NOT NULL,
  interest varchar(255) NOT NULL,
  tax_pay varchar(255) NOT NULL,
  inf varchar(1000)
)";





if ($connection -> query($tb_users) && $connection -> query($tb_responses) === TRUE) {
    print("<br> Tabulky byly vytvořeny");
}

?>