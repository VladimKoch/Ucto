<?php

interface ISigner
{   


   


    public function add_user(string $username ,string $email, string $password, string $confirmPassword) : void;
    public function send_responses(string $Username, string $Email, string $Phone,string $Turnover,string $Property,string $Employe,string $Documents,string $LegalForm,string $Business, string $Interest, string $TaxPay, string $Info) : void;
    public function send_comments(string $Comments) : void;
    public function update_user(string $username, string $newPassword, string $confirmNewPassword) : void;
    public function delete_user(string $Email) : void;
}




?>