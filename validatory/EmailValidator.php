<?php


class EmailValidator
{

    public function validate(string $email) : bool
    {
        // $EmailSanitize = sanitizeData($email);

        if(filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            return true;
        }
        return false;
    }




}

// function sanitizeData($data){
//     $data = trim($data);
//     $data = stripslashes($data);
//     $data = htmlspecialchars($data);
//     return $data;
// }




?>