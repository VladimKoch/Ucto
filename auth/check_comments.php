<?php

require_once(__DIR__."/signer.php");
require_once(__DIR__."/../db/db.php");
require_once(__DIR__."/auth.php");


if(isset($_POST["submit"]))

{
    $Comment = $_POST["komenty"];
   
    if(isset($Comment) && !empty($Comment))
    {
        $signer = new Signer($connection);
        $signer -> send_comments($Comment);
        header ("Location: ../index.php"); 
    }
}


?>