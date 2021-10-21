<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Dane z formularza</title>
</head>
<body>

<h3>Dane z formularza</h3>

<?php

    require_once '../funkcje/funkcje.php';
    show();

    if(!empty($_POST['name'])){
        echo "Przed modyfikacją: ".$_POST['name'];
        echo "<br>";
        echo "Długość: ".strlen($_POST['name'])."<br><br>";

        echo "Po modyfikacji: ".stringValidate($_POST['name']);
        echo "<br>";
        echo "Długość: ".strlen(stringValidate($_POST['name']));
        
    }

   

?>

</body>
</html>