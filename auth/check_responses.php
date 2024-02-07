<?php

// require_once(__DIR__."/signer.php");
// require_once(__DIR__."/../db/db.php");
// require_once(__DIR__."/auth.php");




// if(isset($_POST["submit"])){
//     if(isset($Username) && isset($Email) && isset($Phone) && isset($Turnover)&& isset($Property)&& isset($Employe)&& isset($Documents)&& isset($LegalForm)&& isset($Business)&& isset($Interest)&& isset($TaxPay)&& isset($Info)
//     && !empty($Username) && !empty($Email) && !empty($Phone) && !empty($Turnover) && !empty($Property) && !empty($Employe) && !empty($Documents) && !empty($LegalForm) && !empty($Business) && !empty($Interest)&& !empty($TaxPay)&& !empty($Info))
//     {

//         $Username = sanitizeData($_POST["Username_post"]);
//         $Email = sanitizeData($_POST["Email"]);
//         $Phone = sanitizeData($_POST["Phone"]);
//         $Turnover = sanitizeData($_POST["Annual_turnover"]);
//         $Property = sanitizeData($_POST["Property_cards"]);
//         $Employe = sanitizeData($_POST["Employe"]);
//         $Documents = sanitizeData($_POST["Documents"]);
//         $LegalForm = sanitizeData($_POST["Legal_form"]);
//         $Business = sanitizeData($_POST["Business"]);
//         $Interest = sanitizeData($_POST["Interest"]);
//         $TaxPay = sanitizeData($_POST["TaxPay"]);
//         $Info = sanitizeData($_POST["Info"]);


//         if(!$Email)
//         {
//             throw new Exception("Email je prázdný");
            
//         }

//         if(!preg_match('/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/',$Email))
//         {
//             throw new Exception("Email je neplatný");
//         }

//         $signer = new Signer($connection);
//         $signer -> send_responses($Username,$Email,$Phone,$Turnover,
//         $Property,$Employ,$Documents,$Turnover,$LegalForm,$Bussines,$Interest,$TaxPayt,$Info);
    
//         if(!$connection)
//         {
//             echo "Nepodařilo se zaslat data do databáze";
//             return false;
//             header("Location: ../index.php");
    
//         }
//     }   
// }


//     header("Location: ../index.php");






// function sanitizeData($Data)
// {
//     $Data = trim($Data);
//     $Data = stripslashes($Data);
//     $Data = htmlspecialchars($Data);

//     return $Data;
// }



?>