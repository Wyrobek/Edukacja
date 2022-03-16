<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Logowanie</title>
</head>
<body>

    <?php

    if(isset($_SESSION['error'])){
        echo $_SESSION['error'];
        unset($_SESSION['error']);
    }

    ?>
    <h3>Logowanie użytkownika</h3>
    <form action="login.php" method="post">
        <input type="text" name="login" placeholder="Podaj login"><br><br>
        <input type="text" name="haslo" placeholder="Podaj hasło"><br><br>
        <input type="submit" value="Zaloguj się"><br><br>
    </form>
    <a href="../register/index.php">Zarejestruj się</a>
</body>
</html>