<html>
    <head>
        <title> MeTube Sign In </title>

        <style>
            h1 {
                margin-top: 0px;
                margin-bottom: 10px;

                font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif ; 
                color: white;
            }

            .inputfields {
                width: 100%;
                height: 50px;
                margin-top: 10px;
                margin-bottom: 10px;
                border: 0px;
                border-radius: 10px;
                padding: 12px;

                font-size: 110%;
            }

            .signinbutton {
                width: 100%;
                height: 50px;
                background-color: darkorange;

                font-size: 110%;
                font-weight: bold;
                color: white;
                
                margin-top: 40px;
                margin-bottom: 20px;
                border: 0px;
                border-radius: 10px;
            }

            .outbox {
                height: 600px;
                width: 450px;
                background-color: rgb(0, 0, 0, 0.85);
                /* opacity: 0.4; makes everything tranparent */
            }

            .inbox{
                height: 450px;
                width: 300px;
                background-color: transparent;
                /* background: red; */
            }

            .outpos {
                position: absolute;
                top: 50%;
                left: 50%;
                margin-top: -300px;
                margin-left: -225px;
            }

            .inpos {
                position: absolute;
                top: 50%;
                left: 50%;
                margin-top: -225px;
                margin-left: -150px;
            }


            .bottom-text {
                font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
                font-size: 110%;
                color: white;

                position: absolute;
                bottom: 0;
            }

            a {
                color: orange;
            }

            .bg {
                height: 100%;

                background-position: center;
                background-repeat: no-repeat;
                background-size: cover; 
            }

        </style>
                
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

        <script>
            $(document).ready(function() {
                $('li.active').removeClass('active');
                $("#signin").addClass('active');
            })
        </script>    

        <?php 
            if (isset($_SESSION['active_user']))
            {
                // echo '<alert>Already logged in! Log out to sign in through a different account </alert>'; 
                // do somthing abt the abv line 
                header("location: series.php");
            }
            else
            {
                include_once("header.php");
                include_once("signin_be.php");     
            }
        ?>

    </head>

    <body class="bg" background="./imgs/collage/collage.png">

        <div class="outbox outpos">
            <div class="inbox inpos">
                <h1 >Sign In</h1>

                <form method="POST" action="">
                    <input class="inputfields" type="text" name="uname" placeholder="Username (Email)" required>
                    <input class="inputfields" type="password" name="pwd" placeholder="Password" required>
                    <br />
                    <input class="signinbutton" type="submit" value="Sign In">
                </form>

                <!-- <span class="error"><?php if (isset($error_msg) && $error_msg != "") {echo $error_msg; } ?> </span> -->

                <div class="bottom-text">
                    New to MeTube ? &nbsp;&nbsp;&nbsp;&nbsp; <a style="float: right;" href="signup_fe.php">Sign up here.</a> 
                </div>
            </div>
        </div>       
    </body>
</html>

