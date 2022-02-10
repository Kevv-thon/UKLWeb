<?php

    $host = "localhost";
    $db = "db_laundry";
    $uname = "root";
    $pass = "";

    $connect = mysqli_connect($host, $uname, $pass, $db);

    if (!$connect) {
        echo "Could not connect to database: " . mysqli_connect_error();
    }

?>