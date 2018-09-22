<?php


if(isset($_POST['deleteButton'])){
    
    $id = $_POST['id'];
   
    

    $query = "DELETE FROM monday WHERE id=$id";
    $delete = new PDO($dsn,$user, $password);
    $delete->exec($query);
    
    
    
}


?>