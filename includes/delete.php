<?php


if(isset($_POST['deleteButton'])){
    
    $id = $_POST['id'];
   
    

    $query = "DELETE FROM $days[$i] WHERE id=$id";
    $delete = new PDO($dsn,$user, $password);
    $delete->exec($query);
    
    
    
}



?>