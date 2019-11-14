<html>
    <head>
        <title>MyTube Add Admin</title>

        <!-- <link rel = "icon" href="./imgs/collage/icon.jpeg"  type = "image/x-icon">  -->

        <style>
            h1 {
                margin-top: 0px;
                margin-bottom: 10px;

                font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
                color: white;
            }

            .outbox {
                height: 600px;
                width: 450px;
                background-color: rgb(0, 0, 0, 0.85);
            }

            .inbox{
                height: 450px;
                width: 300px;
                background-color: transparent;
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

            .dropdown {
                width: 100%;
                height: 50px;
                color: black;

                font-size: 110%;
                background-color: lightgrey;
                border-radius: 10px;
            }

            .items {
                width: 100%;
                height: 50px;
                color: black;
                background-color: grey;

            }

            .signinbutton {
                width: 100%;
                height: 50px;
                background-color: darkorange;

                font-size: 110%;
                font-weight: bold;
                color: white;
                
                position: absolute;
                bottom: 10px;
                border: 0px; 
                border-radius: 10px;
            }

            .disabled {
                opacity: 0.4;
            }

            .text {
                font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
                color: orange;
                font-size: 100%;
            }

            .bg {
                height: 100%;

                background-position: center;
                background-repeat: no-repeat;
                background-size: cover; 
            }
        </style>

        <?php include_once("conn.php"); ?>
        <?php include_once("header.php");?>
    </head>

    <body class="bg" background="./imgs/collage/collage.png">
        <h1>Add admin </h1>
        <div class="outbox outpos">
            <div class="inbox inpos">
                <form method="POST" action="addadmin_be.php">
                    <b class="text">Choose username of New Admin :</b> <br>
                    <br>
                    <br>
                    <select class="dropdown" name="unames">
                    <?php
                        $query = "SELECT EMAIL FROM register WHERE ADMIN = 'false'";

                        $result = mysqli_query($conn, $query);

                        while ($row = mysqli_fetch_assoc($result))
                        {
                            echo ('<option class="items" value="'.$row["EMAIL"].'">'.$row["EMAIL"].'</option>');
                        }
                    ?>
                    </select>
                    <br>
                    <br>
                    <input class="signinbutton" type="submit" name="Add Admin"> 
                </form>
            </div>
        </div>
    </body>
</html>