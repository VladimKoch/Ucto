<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css//registr.css">
   
    <title>Smazání Účtu</title>
</head>
<?php
include "./common/nav.php"
?>
<body>


<div class="building">
    <div class="coloro">
    <h1>Registrace</h1>
        <div class="formular"> 
            <form action="./auth/check_signup.php" class="loginForm" method="POST">

                <label for="UserName">Jméno a příjmení</label>
                <input type="text" name="Username" class="loginItem" id="UserName" required><br>

                <label for="EmailLogin">Email</label>
                <input type="text" name="Email" class="loginItem" id="EmailLogin" required ><br>

                <label for="PasswordLogin">Heslo</label>
                <input type="password" name="Password" class="loginItem" id="PasswordLogin" required ><br>
        

                <label for="RepeatPasswordLogin">Heslo znovu</label>
                <input type="password" name="ConfirmPassword" class="loginItem" id="RepeatPasswordLogin" required><br>
       


                <button onclick="validateForm(this.parentNode)" class="inputSubmit" id="submitLogin" name="submit">Registruj</button><br>
            </form>
        </div>
    </div>
</div>




</body>


<script type="text/javascript" src="./validatory/ValidateRegistr.js"></script>

</html>