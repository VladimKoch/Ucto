<?php

require_once(__DIR__."/../dal/ResponseRepository.php");


if(isset($_POST["operation_type"]))
{
    $responseRepo = new ResponseRepository($connection);
    if($_POST["operation_type"] == "create")
    {
        if(isset($_POST["Username_post"]) &&
            isset($_POST["Email"]) &&
            isset($_POST["Phone"]) &&
            isset($_POST["Annual_turnover"]) &&
            isset($_POST["Property_cards"]) &&
            isset($_POST["Employe"]) &&
            isset($_POST["Documents"]) &&
            isset($_POST["Legal_form"]) &&
            isset($_POST["Business"]) &&
            isset($_POST["Interest"]) &&
            isset($_POST["TaxPay"]) &&
            isset($_POST["Info"]))
        {
            $input = array(
                            "Username_post" => $_POST["Username_post"],
                            "Email" => $_POST["Email"],
                            "Phone" => $_POST["Phone"],
                            "Annual_turnover" => $_POST["Annual_turnover"],
                            "Property_cards" => $_POST["Property_cards"],
                            "Employe" => $_POST["Employe"],
                            "Documents" => $_POST["Documents"],
                            "Legal_form" => $_POST["Legal_form"],
                            "Business" => $_POST["Business"],
                            "Interest" => $_POST["Interest"],
                            "TaxPay" => $_POST["TaxPay"],
                            "Informace" => $_POST["Info"]);
            echo $responseRepo -> create($input);

        
        }
    
        }
    }

?>