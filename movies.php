<html>
    <head>
        <title>MyTube Movies</title>

        <!-- <link rel = "icon" href="./imgs/collage/icon.jpeg" type = "image/x-icon">  -->

        <style>
            h1 {
                font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
                padding-top: 60px; 
                padding-bottom: 20px;
                padding-left: 10px;
                color: white;
            }

            .block {
                height: 300px;
                width: 100%;
                background-color: #333;
                padding: 10px;
            }

            .vid {
                height: 100%;
                width: 30%;
                padding-left: 10px;
                padding-right: 10px;
                /* background-color: rgb(0, 127, 0, 0.5); */
                float: left;
            }

            .info {
                height: 100%;
                width: 66%;
                padding-left: 10px;
                padding-right: 10px;
                /* background-color: rgb(255, 0, 0, 0.5); */
                float: left; 
            }

            .title {
                font-size: 200%;
                text-decoration: none;
                color: orange;
                font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
                top: 50px;
            }

            /* genre also same */
            .rating {
                font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
                color: white;
            }

            /* hover effect */
            img:hover {  
                border:2px solid orange;  
                box-shadow: 0 0 10px lightgrey;  
                -webkit-box-shadow: 0 0 10px lightgrey;  
                -moz-box-shadow: 0 0 10px lightgrey;  
                -o-box-shadow: 0 0 10px lightgrey;  
                -ms-box-shadow: 0 0 10px lightgrey;
            }

            /* disable link if not logged in */
            /* .disable {
                pointer-events: none;
                opacity: 0.5;
                cursor: not-allowed;
            } */

            .isDisabled {
                cursor: not-allowed;
                opacity: 0.5;
            }
                
            .isDisabled > a {
                cursor: not-allowed;
                color: currentColor;
                pointer-events: none;
                text-decoration: none;
            }


        </style>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

        <script>
            $(document).ready(function() {
                $('li.active').removeClass('active');
                $("#movies").addClass('active');
            })
        </script>   

        <?php
            include_once("header.php");

            if (!isset($_SESSION['active_user']))
            { ?>
                <script>
                        $(document).ready(function() {
                        $('span[name="links"]').addClass('isDisabled');
                    })
                </script>
            <?php }

            if (isset($_SESSION['admin']) && $_SESSION['admin'] === "true")
            {
                include_once("admin.php");
            }
        ?> 
    </head>

    <body style="background-color: #333">
        <h1>Which Movie you watching today?</h1>

        <!-- absolute or relative path  -->
        <!-- <a href="http://localhost/webapp/imgs/vids/sharingan.mp4"><img width="320" src="./imgs/thumbnails/sharingan.png"></a> -->

        <?php 
            include_once('conn.php');

            $query = "SELECT TITLE, PATH, THUMBNAIL, RATING, GENRE
                    FROM videos";

            $result = mysqli_query($conn, $query);
        
            while ($row = mysqli_fetch_assoc($result))
            {
                echo ('<div class="block">');

                echo ('<div class="vid">');
                echo ('<span name="links"><a href="'.$row["PATH"].' "><img class="middle" width="90%" src="'.$row["THUMBNAIL"].'"></a></span>');
                echo ('</div>');

                echo ('<div class="info">');
                echo ('<span name="links"><a class="title" href="'.$row["PATH"].'">'.$row["TITLE"].'</a></span>');
                echo ('<p class="rating"> Rating : '.$row["RATING"].'</p>');
                echo ('<p class="rating"> Genre : '.$row["GENRE"].'</p>');
                echo ('</div>');

                echo ('</div>');
            }
        ?>
    </body>
</html>