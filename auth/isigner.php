<?php

interface ISigner
{   


   


    public function add_user(string $username ,string $email, string $password, string $confirmPassword) : void;
    public function send_responses(string $full_name, string $email, string $phone_number,int $annual_turnover,int $property_cards,int $employe,int $documents,string $legal_form,string $scope_of_business, string $interest,string $tax_pay, string $inf) : void;
    public function send_comments(string $Comments) : void;
    public function update_user(string $username, string $newPassword, string $confirmNewPassword) : void;
    public function delete_user(string $Email) : void;
    public function test(string $text, string $text2) : void;
}




?>