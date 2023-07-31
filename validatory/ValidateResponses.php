<?php

$username = "";
$email = "";
$phone = "";
$obrat = "";
$karty = "";
$zamestnanci = "";
$doklady = "";
$forma = "";
$podnikani = "";
$zajem = "";
$DPH = "";

if($_SERVER["REEQUEST_METHOD"] === "POST"){

    $username = validateUsername();
    $email = validateEmail();
    $phone = validatePhone();
    $obrat = validateObrat();
    $karty = validateKarty();
    $zamestnanci = validateZamestnanci();
    $doklady = validateDoklady();
    $forma = validateForma();
    $podnikani = validatePodnikani();
    $zajem = validateZajem();
    $DPH = validateDPH();

}


function validateUsername($data){
    $data = validateInput($data);
}


function vvalidateEmail($data){
    $data = validateInput($data);
}


function validatePhone($data){
    $data = validateInput($data);
}



function validateObrat($data){
    $data = validateInput($data);
}



function validateKarty($data){
    $data = validateInput($data);
}



function validateZamestnanci($data){
    $data = validateInput($data);
}



function validateDoklady($data){
    $data = validateInput($data);
}


function validateForma($data){
    $data = validateInput($data);
}


function validatePodnikani($data){
    $data = validateInput($data);
}


function validateZajem($data){
    $data = validateInput($data);
}


function validateDPH($data){
    $data = validateInput($data);
}



function validateInput($data)

{
 $data = trim($data);
 $data = stripslashes($data);
 $data = htmlspecialchars($data);
 return $data;
}






?>