<?php
$editActivity = "";
$editFrom = "";
$editTo = "";
$editt = false;

if(isset($_POST['submit'])){
    
    $activity = $_POST['activity'];
    $from = $_POST['from'];
    $to = $_POST['to'];
    

    $query = "INSERT INTO `$days[$i]` (`id`, `activity`, `from`, `to`) VALUES (NULL, '$activity', '$from', '$to')";
    $send = new PDO($dsn,$user, $password);
    $send->exec($query);
}
if(isset($_POST['editButton'])){
    
    $id = $_POST['id'];
    

    $mysqli = new mysqli($host,$user, $password,$dbname);
    $result = $mysqli->query("SELECT * FROM $days[$i] WHERE id=$id");
    $row = $result->fetch_array();
    $editActivity = $row['activity'];
    $editFrom = $row['from'];
    $editTo = $row['to'];
    $editId = $row['id'];
    
    $editt = true;
}

if(isset($_POST['editSubmit'])){
    $id = $_POST['id'];
    $activity = $_POST['activity'];
    $from = $_POST['from'];
    $to = $_POST['to'];
    

    $query = "UPDATE `$days[$i]` SET `activity` = '$activity', `from` = '$from', `to` = '$to' WHERE `$days[$i]`.`id` = $id";
    
    $update = new PDO($dsn,$user, $password);
    $update->exec($query);
}


?>