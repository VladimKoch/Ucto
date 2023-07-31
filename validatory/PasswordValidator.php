<?php

class PasswordValidator
{
    public function validate(string $password) : bool
    
    {

        // $PasswordSanitize = sanitizeData($password);
        if(strlen($password) < 6 || strlen($password) >= 100)
        {
            return false;
        }
        if (!preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $password))
        {
            return false;
        }
        if (!preg_match('~[0-9]+~', $password)) {
            return false;
        }
        if(!preg_match('/[A-Z]/', $password)){
            return false;
        }
        return true;
    }
}     


// function sanitizeData($data){
//     $data = trim($data);
//     $data = stripslashes($data);
//     $data = htmlspecialchars($data);
//     return $data;
// }





?>