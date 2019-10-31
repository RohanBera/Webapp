<?php
    session_start();
    if(session_destroy()) // Destroying All Sessions
    {
        header("Location: signin_fe.php"); // Redirecting To Home Page
    }
?>