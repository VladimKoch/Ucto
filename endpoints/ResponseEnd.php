<?php


require_once("./auth/signer.php");
require_once("./index.php");



//---------Check if is set Submit----------\\
if(isset($_POST["submit"]))

{   //Use Signer Class
    $responseRepo = new Signer($connection);
        //---------Check if is set POSTs----------\\
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
                            //-------Take Posts and sanitazing data------\\
                            $full_name = sanitizeData($_POST["Username_post"]);
                            $email = sanitizeData($_POST["Email"]);
                            $phone_number = sanitizeData($_POST["Phone"]);
                            $annual_turnover = sanitizeData($_POST["Annual_turnover"]);
                            $property_cards = sanitizeData($_POST["Property_cards"]);
                            $employe = sanitizeData($_POST["Employe"]);
                            $documents = sanitizeData($_POST["Documents"]);
                            $legal_form = sanitizeData($_POST["Legal_form"]);
                            $scope_of_business = sanitizeData($_POST["Business"]);
                            $interest = sanitizeData($_POST["Interest"]);
                            $tax_pay = sanitizeData($_POST["TaxPay"]);
                            $info = sanitizeData($_POST["Info"]);

            //-------------Insert into the database---------------\\
                $insert = $responseRepo -> send_responses($full_name,
                                                $email,
                                                $phone_number,
                                                $annual_turnover,
                                                $property_cards,$employe,
                                                $documents,$legal_form,
                                                $scope_of_business,
                                                $interest,$tax_pay,
                                                $info);

            // if(!$insert){
            //     throw new Exception('Odpovědi nebyly vloženy do databáze');
            // }
                                              
    
        
        }
    
    }


/**
 * Sanitaze input Function
 */
function sanitizeData($Data)
{
    $Data = trim($Data);
    $Data = stripslashes($Data);
    $Data = htmlspecialchars($Data);

    return $Data;
}



?>