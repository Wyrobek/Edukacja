<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Prostokąt</title>
</head>
<body>

<h3>Prostokąt</h3>
<form method="get">

    <input type="text" name="sideA" placeholder="Podaj długość boku a"><br><br>
    <input type="text" name="sideB" placeholder="Podaj długość boku b"><br><br>
    <input type="submit" value="Oblicz" name="button">

</form>

<?php

if(isset($_GET['button'])){

if(!empty($_GET['sideA']) && $_GET['sideA']>=0 && !empty($_GET['sideB']) && $_GET['sideB']>=0){

        $liczba = str_replace(',' , '.' , $_GET['sideA']);
        $liczba2 = str_replace(',' , '.' , $_GET['sideB']);

        $Pole = $liczba*$liczba2;
        $Obwod = 2*$liczba+2*$liczba2;

        echo <<< RESULT

        <hr>
        Pole prostokątu wynosi: $Pole [j]<sup>2</sup><br>
        Obwód prostokątu wynosi: $Obwod <br>

RESULT;

        
        
              

    }

    else{

        echo "<br>Liczba nie została podana, lub jest ona ujemna";

    }
}
?>
    
</body>
</html>