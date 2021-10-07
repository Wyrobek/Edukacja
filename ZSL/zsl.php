<?php

if(!empty($_GET['imie']) && !empty($_GET['nazwisko'])){

    if(isset($_GET['guzik'])){

   if(!empty($_GET['imie']) && !empty($_GET['nazwisko'])){

    $imie = $_GET['imie'];
    $nazwisko=$_GET['nazwisko'];

    echo <<< RESULT

    <pre>
    Imie i nazwisko:
    $imie $nazwisko
    </pre>


RESULT;

    } 

    else{

          echo "<script> history.back()</script>";
    
        }
}


}


elseif(!empty($_GET['wzrost'])){

if(isset($_GET['przycisk'])){
if(!empty($_GET['wzrost'])){

    $wzrost=$_GET['wzrost'];

    if($wzrost >= 100 && $wzrost <= 250){

        echo "Twój wzrost to: ".$wzrost." cm<br>";

        }

    else{

        echo "Podano niewłaściwy wzrost";

        }


        if($wzrost>=200){

            echo "Jesteś olbrzymem";

        }

        elseif($wzrost >= 180 && $wzrost <=199){

            echo "Jesteś wysoki";

        }

        elseif($wzrost >=100 && $wzrost <= 179){

            echo "Jesteś średniego wzrostu";

        }

    }

}

}
?>