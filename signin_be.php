<?php
    include_once("conn.php");

    session_start();
    echo session_id();

    $email = mysqli_real_escape_string($conn, $_POST['uname']);
    $psswd = mysqli_real_escape_string($conn, $_POST['pwd']);
    $psswd = md5($psswd);

    $query = "SELECT * FROM register 
            WHERE EMAIL=\"$email\" AND PASSWORD=\"$psswd\"";

    $result = mysqli_query($conn, $query);

    // max we'll get 1, as repetations handled in signup.php
    $rows = mysqli_num_rows($result);

    if ($rows == 1) 
    {
        $row = mysqli_fetch_assoc($result); // this one cuts the results into array with clmn names as key
        $fname = $row['FNAME'];
        $_SESSION['active_user'] = $fname;
		// echo "login successful";
		header("location:series.php");
    } 
    else
    {
		$error_msg = "Incorrect Email or Password!!!";
    }
    
    mysqli_free_result($result);
    mysqli_close($conn);
?>