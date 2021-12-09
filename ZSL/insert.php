<?php

    if(!empty($_POST)){

        foreach ($_POST as $key => $value){

            //echo "$key: $value<br>";
            if(empty($value)){

                header('location: Wyrobek.php?error=Wypełnij wszystkie pola');
                exit();

            }

        }

        $connect = new mysqli("localhost", "root", "", "3pi1t wyrobek");
        $sql="INSERT INTO `worker` (`id`, `name`, `surname`, `birthday`, `create_date`, `cityid`) VALUES (NULL, '$_POST[name]', '$_POST[surname]', '$_POST[birthday]', CURRENT_TIMESTAMP, '$_POST[cityid]');";
        echo "ok";
        $result=$connect->query($sql);

        if($connect->afffected_rows == 1){

            header('location: Wyrobek.php?error=Prawidłowo dodano użytkownika');

        }

        else{

            header('location: Wyrobek.php?error="Nie dodano użytkownika');

        }


    }

    //header('location: Wyrobek.php');

?>