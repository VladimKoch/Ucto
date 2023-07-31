<?php 

if(isset($_COOKIE["remember"]) && (!isset($_COOKIE["email"]) || !isset($_COOKIE["password"])))
{
    header("Location: ../login.php");
}



?>