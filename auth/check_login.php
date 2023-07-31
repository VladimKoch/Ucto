<?php

require_once(__DIR__."/../db/db.php");
require_once(__DIR__."/auth.php");
require_once(__DIR__."/../validatory/ValidateLogin.php");



$auth = new Auth($connection);

if(isset($_POST["login"]))
{
    $Email = $_POST["email"];
    $Password = $_POST["password"];

    if(isset($Email) && isset($Password) && !empty($Email) && !empty($Password))
    
    {

        //validator
      $validator = new LoginValidator();
      if(!$validator -> validateCredentials($Email,$Password))
      {
        header("Location: ../login.php");
      }
    
    

        //cookie

        
        if(!empty($_POST["remember"]))
        {
            if(!isset($_COOKIE["remember"]))
            {
                setcookie("remember", 1, time() + 86400 * 10);
            }
            if(!isset($_COOKIE["email"]))
            {
                setcookie("email", $Email, time() + 86400 * 10);
            }
            if(!isset($_COOKIE["password"]))
            {
                setcookie("password", $Password, time() + 86400 * 10);
            }
        }
        
        if($auth -> check_user($Email, $Password))
        {
            session_start();
            $_SESSION["email"] = $Email;
            $_SESSION["password"] = $Password;
            header("Location: ../index.php");
            
        }

        else
        {
          header("Location: ../login.php");  
          
        }



    
    }     
   else
   {
    header("Location: ../login.php");
   }
    

}
else
{
 header("Location:  ../login.php");

}



// function sanitizeData($Data)
// {
//     $Data = trim($Data);
//     $Data = stripslashes($Data);
//     $Data = htmlspecialchars($Data);

//     return $Data;
// }





?>