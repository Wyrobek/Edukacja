<!DOCTYPE html>
<html>
<body>

<?php

	//wersja PHP 7.1.1
    echo PHP_VERSION;
    
    echo "<br><br><br>";
    
    $pow = 2**10;
    echo $pow;
    
    echo "<br><br><br>";
    
    $x = 10;
    $y = 3;
    
    echo $x<=>$y;	// jeśli pierwsza liczba będzie większa to wyświetli 1, jeśli mniejsza -1, jeśli są równe 0;
    
    //porównanie oraz identycznośc
    
    echo "<br><br><br>";
    
    $x = 1;
    $y = 1.0;
    
    if($x==$y){
    
    echo "Równe";
    
    }
    
    else{
    echo "Nierówne";
    }
    
    echo "<br><br><br>";
    
    if($x===$y){
    
    echo "Równe";
    
    }
    
    else{
    echo "Różne";
    }
    

?>

</body>
</html>
