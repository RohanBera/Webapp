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

    // inserting values
    // not doing validation as its done in client side

    $fname = mysqli_real_escape_string($conn, $_POST['fname']);
    $lname = mysqli_real_escape_string($conn, $_POST['lname']);
    $email = mysqli_real_escape_string($conn, $_POST['mail']);
    $plan  = mysqli_real_escape_string($conn, $_POST['plan']);
    $passwd= mysqli_real_escape_string($conn, $_POST['pwd']);
    
    $query = 'INSERT INTO register (FNAME, LNAME, EMAIL, PASSWORD, PLAN) VALUES ("'.$fname.'", "'.$lname.'", "'.$email.'", "'.md5($passwd).'", "'.$plan.'")';

    if (!mysqli_query($conn, $query))
    {
        echo ("Email id already exists. Try another email id, or Sign In <a href=\"signin.html\">here</a>");
    }
    else
    {
        echo ("registration succesful. Sign In <a href=\"signin.html\">here</a>");
    }

    mysqli_close($conn);
?>