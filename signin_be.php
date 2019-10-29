<?php
    include_once("conn.php");

    $email = mysqli_real_escape_string($conn, $_POST['uname']);
    $psswd = mysqli_real_escape_string($conn, $_POST['pwd']);

    $query = "SELECT * FROM register 
            WHERE EMAIL=\"$email\" AND PASSWORD=\"$psswd\"";


    $result = mysqli_query($conn, $query);
    // max we'll get 1, as repetations handled in signup.php

    

?>