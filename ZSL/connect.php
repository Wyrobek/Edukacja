<!DOCTYPE html>
<html lang="pl" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Użytkownicy</title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>

    <h4>Użytkownicy</h4>
    <?php
    $connect = new mysqli("localhost", "root", "", "3pi1t rejnhard");
    $sql = "SELECT * FROM `tabela` ";
    $result=$connect->query($sql);
    // $user=$result->fetch_assoc();
    // print_r($user);

echo <<< TABLE

<table>

    <tr>

        <th>ID</th>
        <th>Imię</th>
        <th>Nazwisko</th>
        <th>Data urodzenia</th>
        <th>Dodanie konta</th>
        <th>Miasto</th>

    </tr>
   


TABLE;
    
    while ($user=$result->fetch_assoc()){

        echo <<< USER
        
        <tr>

            <td>$user[id]</td>
            <td>$user[name]</td>
            <td>$user[surname]</td>
            <td>$user[birthday]</td>
            <td>$user[create_date]</td>
           

        </tr>

USER;
        
 
    }
    
    echo "</table>"

    ?>


</body>
</html>