<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css//login.css">

    <title>Document</title>
</head>
<?php
include "./common/nav.php"
?>
<body>


<div class="building">
    <div class="coloro">
    <h1>Login</h1> 
      <div class="formular"> 
        <form action="./auth/check_login.php" class="loginForm" method="POST">

            <label for="emailLogin">Email</label>
            <input type="text" name="email" class="loginItem" id="emailLogin" required ><br>

            <label for="passwordLogin">Heslo</label>
            <input type="password" name="password" class="loginItem" id="passwordLogin" required ><br>
            <P id="errorMessage" hidden ></P>
            

            <button  class="inputSubmit" name="login" id="submitLogin">Login</button><br>
            <label for="zapamatuj"class="zapamatujsime">Zapamatuj si mě</label>
            <input type="checkbox" class="checkbox"value="Zapamatuje si mě" id="zapamatuj" name="remember">
            <a href="UpdatePassword.php" class="ForgotPassword">Zapomenuté heslo?</a>
            
        </form>
      </div>
    </div>
</div>


</body>
</html>