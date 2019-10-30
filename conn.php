<?php
// create connection
    $host  = "localhost";
    $uname = "root";
    $pwd   = "password";
    $db    = "dbms_miniproj";

    $conn = mysqli_connect($host, $uname, $pwd, $db);
    if (mysqli_connect_error())
    {
        die("Connection error (". mysqli_connect_errno().")". mysqli_connect_error());
    }
?>