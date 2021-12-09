<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BAZA</title>
</head>
<body>
    
    <h3>BAZA</h3>

    <?php

        $connect= new mysqli("localhost", "root", "", "3pi1t wyrobek");
        $sql="SELECT * FROM `worker`";
        $sql2="SELECT * FROM `worker` INNER JOIN `cities` ON worker.cityid = cities.cityid";
        $result=$connect->query($sql);

        if(!isset($_GET['error'])){

            echo "Komunikat";

        }

        echo <<< TABLE
            <table>
                <tr>
                    <th>ID</th>
                    <th>NAME</th>
                    <th>SURNAME</th>
                    <th>BIRTHDAY</th>
                    <th>CREATE_DATE</th>
                    <th>CITYID</th>
                </tr>
TABLE;

    while($baza=$result->fetch_assoc()){

        echo <<< DANE
            <tr>
                <td>$baza[id]</td>
                <td>$baza[name]</td>
                <td>$baza[surname]</td>
                <td>$baza[birthday]</td>
                <td>$baza[create_date]</td>
                <td>$baza[cityid]</td>
            </td>
DANE;

    }

    echo "</table>";


    if(isset($_GET['addUser'])){

        echo <<< FORMADDUSER

            <h4>Dodawanie użytkownika</h4>
            <form action="insert.php" method="get">

            <input type="text" name="name" placeholder="Podaj imię"><br><br>
            <input type="text" name="surname" placeholder="Podaj nazwisko"><br><br>
            <input type="date" name="birthday">Data urodzenia<br><br>
            <input type="text" name="city" placeholder="Podaj ID miasta"><br><br>
            <input type="submit" value="Dodaj użytkownika">

        </form>

FORMADDUSER;

    }

    else{

        echo '<br><a href=" insert.php?addUser=">Dodaj użytkownika</a>';

    }

    $connect->close();

?>





<style>

    th, td{

        border: 3px solid black;
        border-collapse: collapse;
        padding: 10px;
        text-align: center;
        

    }

    th{

        background-color: orange;

    }

</style>

</body>
</html>