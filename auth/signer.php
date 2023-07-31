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




    public function send_responses(string $Username, string $Email, string $Phone,string $Turnover,string $Property,string $Employe,string $Documents,string $LegalForm,string $Business, string $Interest,string $TaxPay, string $Info) : void
    {
        $sql = "INSERT INTO ".self::TABLE_NAME_RESPONSES."(full_name,email,phone_number,annual_turnover,property_cards,employe,documents,legal_form,scope_of_business,interest,tax_pay,inf) VALUES ('$Username','$Email','$Phone','$Turnover','$Property','$Employe','$Documents','$LegalForm','$Business','$Interest','$TaxPay','$Info')";
        if(!$this -> connection -> query($sql))
        {
            throw new Exception("Pridani nového uživatele selhalo");
        }
    return;
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



}




?>