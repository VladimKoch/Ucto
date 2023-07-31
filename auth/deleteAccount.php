<?php

require_once(__DIR__."/signer.php");
require_once(__DIR__."/auth.php");
require_once(__DIR__."/../db/db.php");


if(isset($_POST["delete_account"]))
{
   
    session_start();
    $signer = new Signer($connection);
    $signer -> delete_user($_SESSION["Email"]);
    $auth = new Auth($connection);
    $auth -> logout();
    // header("Location ../index.php");

}




?>