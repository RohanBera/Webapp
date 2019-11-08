<?php session_start(); ?>
<html>
    <head>
        <style>
            ul {
                list-style-type: none;
                margin: 0;
                padding: 0;
                overflow: hidden;
                background-color: rgb(44, 44, 44);

                position: fixed;
                top: 0;
                width: 100%;
                border-bottom: 1px solid black;
            }

            li {
                float: left;
                border-right: 1px solid white;
            }

            li a {
                display: block;
                color: white;
                text-align: center;
                padding: 14px 40px;
                font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
                text-decoration: none;
            }

            li a:hover {
                background-color: black;
                align-self: baseline;
                padding-bottom: 12px; 
                box-shadow: 0 0 2px 2px orange;
            }

            .active {
                background-color: orange;
            }
        </style>
    </head>

    <body>
        <ul>
            <li id="home" ><a href="welcome.php">Home</a></li>
            <li id="movies" ><a href="movies.php">Movies</a></li>
            <li id="series" ><a href="series.php">Series</a></li>
            <li id="Contact" ><a>Contact</a></li>
            <?php
                if (isset($_SESSION['active_user']))
                {
                    echo '<li id="user" style="float: right; border-left: 1px solid white"><a id="userprof" href="logout.php">Logout '.$_SESSION["active_user"].'</a></li>';
                }
                else
                {
                    echo '<li id="user" style="float: right;"><a id="userprof">Profile</a></li>';
                    echo '<li id="signup" style="float: right;"><a href="signup_fe.php">Sign Up</a></li>';
                    echo '<li id="signin" style="float: right; border-left: 1px solid white"><a href="signin_fe.php">Sign In</a></li>';
                }
            ?>    
            
            <!-- <?php 
            if (isset($_SESSION['active_user']))
            {
                echo '<script>';
                echo 'var signin = document.getElementById("signin");';
                echo 'var signup = document.getElementById("signup");';
                echo 'signin.style.display = "none";';
                echo 'signup.style.display = "none";';
                echo '</script>';
            }
            ?> -->
        </ul>
    </body>
</html>