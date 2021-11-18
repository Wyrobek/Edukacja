<?php

if(!empty($_GET['id'])){
    require_once './connect_delete.php';
    $sql="DELETE FROM 'tabela' WHERE 'tabela'.'id' = $_GET[id]";
    $connect->query($sql);

}
/*

if(connect->affected_rows){

    header('location: connect_delete.php?error=Prawidłowo usunięto użytkownika');

}
else{

    header('location: connect_delete.php?error=Nie usunięto użytkownika');

}

*/

?>