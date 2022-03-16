<?php

    session_start();

    

    foreach ($_POST as $key => $value) {
        if (empty($value)){
            $_SESSION['error']="Wypełnij wszystkie pola np: $key";
            echo "<script>history.back();</script>";
            exit();

        }
    }

    require_once("../register/connect.php");

    $sql="SELECT * FROM `user` WHERE email=?";
    $stmt = $connect->prepare($sql);
    $stmt->bind_param("s", $_POST['login']);
    $stmt->execute();

    $result = $stmt->get_result();
    $dane = $result->fetch_assoc();

    if(!empty($dane['email'])){

    if($_POST['login']==$dane['email']){

        if(password_verify($_POST['haslo'],$dane['password'])){
            echo "Udało się nam";
        }
    
        else{

            echo "hasło niepoprawne";

        }

    }

    else{

        echo "email niepoprawny";

    }

}

else{

    echo "Email nie istnieje";

}
    
    

?>