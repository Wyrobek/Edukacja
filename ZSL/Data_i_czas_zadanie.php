<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Kalkulator</title>
</head>
<body>
    
    <form method="get">

        <input type="number" name="dzien" placeholder="Podaj dzien">
        <input type="number" name="miesiac" placeholder="Podaj miesiac">
        <input type="number" name="rok" placeholder="Podaj rok">
        <input type="submit" value="Klik">

    </form>

    <?php

        $dzien=$_GET['dzien'];
        $miesiac=$_GET['miesiac'];
        $rok=$_GET['rok'];

        if(!empty($dzien) && !empty($miesiac) && !empty($rok)){

           $dzis=mktime(0, 0, 0, date('m'), date('d'), date('Y'));
           $wtedy=mktime(0, 0, 0, $dzien, $miesiac, $rok);
           

           
            echo $dzis."<br>";
            echo $wtedy."<br>";

           $dni=$dzis-$wtedy;
           echo round($dni/(60*60*24));

        }

    ?>

</body>
</html>