<?php

require_once(__DIR__."/../db/db.php");
require_once(__DIR__."/signer.php");


if(isset($_POST["update_password"]))
{
    $Email = $_POST["email"];
    $Password = $_POST["password"];
    $ConfirmPassword = $_POST["confirmPassword"];
    if(isset($Email) && isset($Password) && isset($ConfirmPassword)
    && !empty($Email) && !empty($Password) && !empty($ConfirmPassword))
    {
        //Validace

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
            throw new Exception("Heslo neobsahuje alespon jedno velké písmeno.k");
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
        $signer -> update_user($EmailSanitize,$PasswordSanitize,$ConfirmPasswordSanitize);
        header("Location: ../login.php");
        

             
    }

      

}

else
{
    header("Location: UpdatePassword.php");
}

function sanitizeData($Data)
{
    $Data = trim($Data);
    $Data = stripslashes($Data);
    $Data = htmlspecialchars($Data);

    return $Data;
}


?>
