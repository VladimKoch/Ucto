<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/UpdatePassword.css">
    
    <title>Document</title>
</head>
<?php
include "./common/nav.php"
?>
<body>

<div class="building">

    <div class="coloro"> 
    <h1>Nové Heslo</h1>
        <div class="formular"> 
           
                <form action="UpdatePassword.php"method="POST">

                    <label for="emailLogin">Email</label>
                    <input type="email" name="email" id="emailLogin" class="loginItem"><br>

                    <label for="">Nové heslo</label>
                    <input type="password" name="password" id="NewPassword" class="loginItem"><br>

                    <label for="">Potvrzení hesla</label>
                    <input type="password" name="confirmPassword" id="ConfirmNewPassword" class="loginItem"><br>

                    <input type="submit" value="Obnovit heslo" name="update_password" class="inputSubmit">
                </form>
        </div>
    </div>
</div>

</body>
</html>