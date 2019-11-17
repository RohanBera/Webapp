<?php
    include_once("conn.php");

    // inserting values
    // not doing validation as its done in client side

    $admin = mysqli_real_escape_string($conn, $_POST['unames']);
    
    $query = 'UPDATE register SET ADMIN = "true" WHERE EMAIL = "'.$admin.'" ';

    if (!mysqli_query($conn, $query))
    {
        echo "Could not update.";
    }
    else
    {
        mysqli_close($conn);
        // header("location: series.php");
        echo "<script>window.location.href='addedadmin.php';</script>";
    }
?>