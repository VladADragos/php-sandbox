<?php 

function queryMultiple($db,$qc,$q,$pdoo){
    //$pdo = new PDO("mysql:host=localhost;dbname=time_tuner","root","1234");
    $sql = "SELECT * FROM $db WHERE $qc = ?";
    $stmt = $pdoo->prepare($sql);
    $stmt->execute([$q]);
    $returnValue = $stmt->fetchAll();
    return $returnValue;
}

function queryOne($db,$qc,$q,$pdoo){
    //$pdo = new PDO("mysql:host=localhost;dbname=time_tuner","root","1234");
    $sql = "SELECT * FROM $db WHERE $qc = ?";
    $stmt = $pdoo->prepare($sql);
    $stmt->execute([$q]);
    $returnValue = $stmt->fetch();
    return $returnValue;
}