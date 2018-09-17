<?php
    $host = 'localhost';
    $user = 'root';
    $password = '1234';
    $dbname = 'time_tuner';

    $dsn = 'mysql:host='.$host .';dbname='.$dbname;
    $pdo = new PDO($dsn,$user, $password);
    ?>
