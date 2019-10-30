<?php
    include_once("conn.php");

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
        echo ("registration succesful.");
        header("location: signin_fe.php");
    }

    mysqli_close($conn);
?>