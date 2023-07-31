<?php

require_once(__DIR__."/../db/db.php");
require_once(__DIR__."/signer.php");



if(isset($_POST["submit"]))

{
    $Username = $_POST["Username"];
    $Email = $_POST["Email"];
    $Password = $_POST["Password"];
    $ConfirmPassword = $_POST["ConfirmPassword"];
    if(isset($Username) && isset($Email) && isset($Password) && isset($ConfirmPassword)
    && !empty($Username) && !empty($Email) && !empty($Password) && !empty($ConfirmPassword))
    {
       
        $UsernameSanitize = sanitizeData($Username);
        $EmailSanitize = sanitizeData($Email);
        $PasswordSanitize = sanitizeData($Password);
        $ConfirmPasswordSanitize = sanitizeData($ConfirmPassword);

        if(!$EmailSanitize)
        {
            throw new Exception("Email je prázdný");
        }

    
        if(!preg_match('/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/',$EmailSanitize))
        {
            throw new Exception("Email je neplatný");
        }

        if(strlen($PasswordSanitize) < 6)
        {
            throw new Exception ("Prosím heslo by mělo obsahovat 6 míst a více");
        }
        if(!preg_match('/[A-Z]/',$PasswordSanitize))
        {
            throw new Exception("Heslo neobsahuje alespoň jedno velké písmeno.");
        }

        if(!preg_match('/[0-9]/',$PasswordSanitize))
        {
            throw new Exception("Heslo neobsahuje alespon jedno číslo");
        }   

        if(!preg_match('/[^\w\s]/',$PasswordSanitize))
        {
        throw new Exception("Heslo neobsahuje alespon jeden speciální znak");
        }
    
        if(!($PasswordSanitize === $ConfirmPasswordSanitize))
        {
            throw new Exception("Hesla se neshodují");
        }

            $signer = new Signer($connection);
            $createdOn = time();
            $signer -> add_user($UsernameSanitize,$EmailSanitize,$PasswordSanitize,$ConfirmPasswordSanitize);
        
 
        
   
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