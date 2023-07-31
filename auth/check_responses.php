<?php

require_once(__DIR__."/signer.php");
require_once(__DIR__."/../db/db.php");
require_once(__DIR__."/auth.php");




if(isset($_POST["submit"]))

{
    $Username = $_POST["Username_post"];
    $Email = $_POST["Email"];
    $Phone = $_POST["Phone"];
    $Turnover = $_POST["Annual_turnover"];
    $Property = $_POST["Property_cards"];
    $Employe = $_POST["Employe"];
    $Documents = $_POST["Documents"];
    $LegalForm = $_POST["Legal_form"];
    $Business = $_POST["Business"];
    $Interest = $_POST["Interest"];
    $TaxPay = $_POST["TaxPay"];
    $Info = $_POST["Info"];
    if(isset($Username) && isset($Email) && isset($Phone) && isset($Turnover)&& isset($Property)&& isset($Employe)&& isset($Documents)&& isset($LegalForm)&& isset($Business)&& isset($Interest)&& isset($TaxPay)&& isset($Info)
    && !empty($Username) && !empty($Email) && !empty($Phone) && !empty($Turnover) && !empty($Property) && !empty($Employe) && !empty($Documents) && !empty($LegalForm) && !empty($Business) && !empty($Interest)&& !empty($TaxPay)&& !empty($Info))
    {
       
        $UsernameSanitize = sanitizeData($Username);
        $EmailSanitize = sanitizeData($Email);
        $PhoneSanitize = sanitizeData($Phone);
        $TurnoverSanitize = sanitizeData($Turnover);
        $PropertySanitize = sanitizeData($Property);
        $EmploySanitize = sanitizeData($Employe);
        $DocumentsSanitize = sanitizeData($Documents);
        $LegalFormSanitize = sanitizeData($LegalForm);
        $BussinesSanitize = sanitizeData($Business);
        $InterestSanitize = sanitizeData($Interest);
        $TaxPaytSanitize = sanitizeData($DPH);
        $InfoSanitize = sanitizeData($Info);

        echo $UsernameSanitize;


        if(!$EmailSanitize)
        {
            throw new Exception("Email je prázdný");
            
        }


    
        if(!preg_match('/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/',$EmailSanitize))
        {
            throw new Exception("Email je neplatný");
        }

        {
            $signer = new Signer($connection);
            $signer -> send_responses($UsernameSanitize,$EmailSanitize,$PhoneSanitize,$TurnoverSanitize,
            $PropertySanitize,$EmploySanitize,$DocumentsSanitize,$TurnoverSanitize,$LegalFormSanitize,$BussinesSanitize,$InterestSanitize,$TaxPaytSanitize,$InfoSanitize);

            // if(!$connection)
            // {
            //     throw new Exception("Nepodařilo se zaslat data do databáze.");
            //     return false;
            //     header("Location: ../index.php");

            // }
 
        } 
        
    }
}






    header("Location: ../login.php");






function sanitizeData($Data)
{
    $Data = trim($Data);
    $Data = stripslashes($Data);
    $Data = htmlspecialchars($Data);

    return $Data;
}



?>