<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rowery</title>
</head>
<body>
    
    <h3>Rowery</h3>

    <?php

        $connect= new mysqli("localhost", "root", "", "bike");
        $sql="SELECT * FROM `bike`";
        $result=$connect->query($sql);


        echo <<< TABLE

            <table>
                <tr>
                    <th>ID</th>
                    <th>BRAND</th>
                    <th>MODEL</th>
                    <th>CREATE_DATE</th>
                </tr>

TABLE;

    while($baza=$result->fetch_assoc()){

        echo <<< BIKE

            <tr>
                <td>$baza[id]</td>
                <td>$baza[brand]</td>
                <td>$baza[model]</td>
                <td>$baza[create_date]</td>
            </td>

BIKE;

    }

    echo "</table>";


        if(isset($_GET['przycisk'])){

        $liczba=$_GET['liczba'];

        $dana="SELECT * FROM `bike` WHERE id=$liczba";
        $wynik=$connect->query($dana);

        while($info=$wynik->fetch_assoc()){

            echo <<< DANE

            BIKE ID: $info[id]
            <br>
            BIKE BRAND: $info[brand]
            <br>
            BIKE MODEL: $info[model]
            <br>
            BIKE CREATE DATE: $info[create_date]
        

DANE;

        }

    }


    

?>


<form method="get">

    <input type="number" name="liczba" placeholder="Wybierz id rowera">
    <br>
    <input type="submit" value="SPRAWDŹ" name="przycisk">

</form>

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