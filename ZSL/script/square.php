<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Kwadrat</title>
</head>
<body>

<h3>Kwadrat</h3>
<form method="get">

    <input type="text" name="sideA" placeholder="Podaj długość boku a"><br><br>
    <input type="submit" value="Oblicz" name="button">

</form>

<?php

if(isset($_GET['button'])){

if(!empty($_GET['sideA']) && $_GET['sideA']>=0){

        $liczba = str_replace(',' , '.' , $_GET['sideA']);

        $Pole = $liczba**2;
        $Obwod = $liczba*4;

        echo <<< RESULT

        <hr>
        Pole kwadratu wynosi: $Pole [j]<sup>2</sup><br>
        Obwód kwadratu wynosi: $Obwod <br>

RESULT;

        
        
              

    }

    else{

        echo "<br>Liczba nie została podana, lub jest ona ujemna";

    }
}
?>
    
</body>
</html>