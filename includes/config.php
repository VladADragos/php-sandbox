<?php
    $servername = "localhost";
    $username = "root";
    $password = "1234";
    $dbname = "time_tuner";
    
    $dsn = 'mysql:host='.$servername.';dbname='.$dbname;
    
    $pdo = new PDO($dsn,$username,$password);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
    ?>
