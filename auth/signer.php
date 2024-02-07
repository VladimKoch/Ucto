<?php


require_once(__DIR__."/isigner.php");
require_once(__DIR__."/crypt.php");




class Signer implements ISigner
{
    private mysqli $connection;
    private Crypt $crypt;
    private const TABLE_NAME = "users";
    private const TABLE_NAME_RESPONSES = "responses";
    private const TABLE_NAME_COMMENTS = "comments";
    private const TABLE_NAME_TEST = "test";

    public function __construct(mysqli $conn)
    {
        $this -> connection = $conn;
        $this -> crypt = new Crypt();
    }
    public function add_user(string $username ,string $email, string $password, string $confirmNewPassword) : void
    {
        if($password === $confirmNewPassword)
        {
            $enc_password = $this -> crypt -> encrypt($password);
            $sql = "INSERT INTO ".self::TABLE_NAME."(Username, Email, Password)VALUES('$username', '$email', '$enc_password')";
            if(!$this -> connection -> query($sql))
            {
                throw new Exception("Pridani nového uzivatele selhalo");
            }
        }
        return;
    }




    public function send_responses(string $full_name, string $email, string $phone_number,int $annual_turnover,int $property_cards,int $employe,int $documents,string $legal_form,string $scope_of_business, string $interest,string $tax_pay, string $inf) : void
    {
        $sql = "INSERT INTO ".self::TABLE_NAME_RESPONSES."(full_name,email,phone_number,annual_turnover,property_cards,employe,documents,legal_form,scope_of_business,interest,tax_pay,inf) VALUES ('$full_name','$email','$phone_number',$annual_turnover,$property_cards,$employe,$documents,'$legal_form','$scope_of_business','$interest','$tax_pay','$inf')";
        $execute = $this -> connection -> query($sql);

        // if(!$execute)
        // {
        //     throw new Exception("poslání odpovědí selhalo");
        // }
    
    }

    public function send_comments(string $Comments): void
    {
        $sql = "INSERT INTO ".self::TABLE_NAME_COMMENTS."(comment_text) VALUES ('$Comments')";
        if(!$this -> connection -> query($sql))
        {
            throw new Exception("Pridaní nového komentu se nezdařilo");
        }
        return;
    }

    public function update_user(string $Email, string $NewPassword, string $ConfirmNewPassword) : void
    {
        if($NewPassword === $ConfirmNewPassword)
        {
            $enc_password = $this -> crypt -> encrypt($NewPassword);
            $sql = "UPDATE ".self::TABLE_NAME. " SET Password = '$enc_password' WHERE Email = '$Email'";
            if(!$this -> connection -> query($sql))
            {
                throw new Exception("Aktualizace hesla selhala");
            }
        
        return;
        
        }
    }
    public function delete_user(string $Email) : void
    {
        $sql = "DELETE FROM ".self::TABLE_NAME." WHERE Email = '$Email'";
        if(!$this -> connection -> query($sql))
        {
            throw new Exception("Mazání uzivatele selhalo");
        }
        
        return;
        
    
    }

public function __destruct()
{
    $this -> connection -> close();
}

public function test(string $text1, string $text2) : void
{
$sql = "INSERT INTO " .self::TABLE_NAME_TEST."(text1 , text2)VALUES('$text1','$text2')";
$this -> connection -> query($sql);
}


}






?>