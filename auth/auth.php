<?php

require_once(__DIR__."/crypt.php");
require_once(__DIR__."/iauth.php");


class Auth implements IAuth
{
    private mysqli $connection;
    private const TABLE_NAME = "users";
    private Crypt $crypt;

    public function __construct(mysqli $conn)
    {
        $this -> connection = $conn;
        $this -> crypt = new Crypt();
    }

    public function check_user(string $Email, string $Password) : bool
    {
        $enc_password = $this -> crypt -> encrypt($Password);
        $sql = "SELECT * FROM ".self::TABLE_NAME." WHERE Email = '$Email' AND Password = '$enc_password'";
        $res = $this -> connection -> query($sql);
        
        if($res -> num_rows === 0)
        {
            return false;
        }
        return true;
    }


   
    public function logout() : void
    {
        session_start();
        setcookie("email", "", time() - 86400 * 10);
        unset($_COOKIE["email"]);
        
        setcookie("password", "", time() - 86400 * 10);
        unset($_COOKIE["password"]);

        setcookie("remember", "", time() - 86400 * 10);
        unset($_COOKIE["remember"]);

        unset($_SESSION["email"]);
        unset($_SESSION["heslo"]);

        header("Location: ../index.php");
        return;
    
    }


    

}


?>