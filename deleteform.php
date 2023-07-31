<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/delete.css">
   
    <title>Smazání Účtu</title>
</head>
<?php
include "./common/nav.php"
?>
<body>


    <div class="building">
        <div class="coloro">
        <h1>Smazání Účtu</h1>
            <div class="formular">
                <form action="./auth/deleteAccount.php" class="loginForm" method="POST">
                    <label for="emailLogin">Zadejte email:</label>
                    <input type="text"name="Email" id="emailLogin" class="loginItem"><br><br>
                    <label for="passwordLogin">Zadejte heslo:</label>
                    <input type="password" name="loginItem" id="passwordLogin" class="loginItem"><br><br>
                    <input type="submit" value="smazat" name="delete_account" class="inputSubmit">
                </form>
            </div>
        </div>
    </div>
</body>
</html>