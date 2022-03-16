<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Rejestracja</title>
</head>
<body>

    <?php

    if(isset($_SESSION['error'])){

        echo $_SESSION['error'];

        unset($_SESSION['error']);

    }

?>
    
    <h3>Rejestracja użytkownika</h3>

    <form action="register.php" method="post">

        <input type="text" name="name" placeholder="Podaj imie"><br><br>
        <input type="text" name="surname" placeholder="Podaj nazwisko"><br><br>
        <input type="email" name="email1" placeholder="Podaj adres email"><br><br>
        <input type="email" name="email2" placeholder="Powtórz adres email"><br><br>
        <input type="password" name="pass1" placeholder="Podaj hasło"><br><br>
        <input type="password" name="pass2" placeholder="Powtórz hasło"><br><br>
        <input type="date" name="birthday"> Data urodzenia <br><br>
       
            <?php

        require_once("connect.php");

            $sql = "SELECT * FROM city";
            $result=$connect->query($sql);
            echo "<select name=cityid>";
            while($city=$result->fetch_assoc()) {
            echo "<option value=$city[id]>$city[city_name]</option>";
        }
            echo "</select>";

            ?>
        <br><br>

        <input type="submit" value="Zarejestruj sie"><br><br>


    </form>

    <a href="../login/index.php">Zaloguj się</a>

</body>
</html>