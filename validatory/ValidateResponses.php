<?php

$username = "";
$email = "";
$phone = "";
$obrat = "";
$karts = "";
$employes = "";
$doklady = "";
$forma = "";
$podnikani = "";
$zajem = "";
$DPH = "";

if($_SERVER["REQUEST_METHOD"] === "POST"){

    $username = validateUsername($username);
    $email = validateEmail($email);
    $phone = validatePhone($phone);
    $obrat = validateObrat($obrat);
    $karts = validateKarty($karts);
    $employes = validateZamestnanci($employes);
    $doklady = validateDoklady($doklady);
    $forma = validateForma($forma);
    $podnikani = validatePodnikani($podnikani);
    $zajem = validateZajem($zajem);
    $DPH = validateDPH($DPH);

}


function validateUsername($data){
    $data = validateInput($data);
}


function validateEmail($data){
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