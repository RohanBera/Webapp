<?php

    if (isset($_POST['uname']))
    {    
        include_once("conn.php");

        // session_start();

        $email = mysqli_real_escape_string($conn, $_POST['uname']);
        $psswd = mysqli_real_escape_string($conn, $_POST['pwd']);
        $psswd = md5($psswd);
        $error_msg = "";

        $query = "SELECT * FROM register WHERE EMAIL=\"$email\" AND PASSWORD=\"$psswd\"";

        $result = mysqli_query($conn, $query);

        // max we'll get 1, as repetations handled in signup.php
        $rows = mysqli_num_rows($result);

        if ($rows == 1) 
        {
            $row = mysqli_fetch_assoc($result); // this one cuts the results into array with clmn names as key
            $fname = $row['FNAME'];
            $privi = $row['ADMIN'];

            $_SESSION['active_user'] = $fname;
            $_SESSION['admin'] = $privi;    

            mysqli_free_result($result);
            mysqli_close($conn);
            
            echo "<script>window.location.href='welcome.php';</script>";
            // header("location:welcome.php");
        } 
        else
        {
            $error_msg = "Incorrect Email or Password!!!";
        }  

        mysqli_free_result($result);
        mysqli_close($conn);
    }

?>