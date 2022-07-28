<?php

    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db= 'php1';

    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    $con = new mysqli($host, $user, $pass, $db);
    if(!$con){
        echo $con->error;
    }