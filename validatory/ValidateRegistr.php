<?php



   //validator
   $EmailSanitize = sanitizeData($Email);
   $PasswordSanitize = sanitizeData($Password);


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
       throw new Exception ("Heslo by mělo obsahovat 6 míst a více.");
   }
   if(!preg_match('/[A-Z]/',$PasswordSanitize))
   {
       throw new Exception("Heslo neobsahuje alespon jedno velké písmeno.");
   }

   if(!preg_match('/[0-9]/',$PasswordSanitize))
   {
       throw new Exception("Heslo neobsahuje alespon jedno číslo");
   }   

   if(!preg_match('/[^\w\s]/',$PasswordSanitize))
   {
   throw new Exception("Heslo neobsahuje alespon jeden speciální znak");
   }


function validateInput($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}




?>