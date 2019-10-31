<html>
    <head>
        <style>
            h2 {
                font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
                padding-top: 60px; 
                padding-bottom: 20px;
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
                background-color: rgb(0, 127, 0, 0.5);
                float: left;
            }

            .info {
                height: 100%;
                width: 66%;
                padding-left: 10px;
                padding-right: 10px;
                background-color: rgb(255, 0, 0, 0.5);
                float: left; 
            }
        </style>
    </head>

    <body style="background-color: black">
        <?php include_once('header.php'); ?>

        <h2>What are you watching today?</h2>

        <!--absolute or relative path  -->
        <!-- <a href="http://localhost/webapp/imgs/vids/sharingan.mp4"><img width="320" src="./imgs/thumbnails/sharingan.png"></a> -->

        <?php 
            include_once('conn.php');

            $query = "SELECT TITLE, PATH, THUMBNAIL, RATING 
                    FROM videos";

            $result = mysqli_query($conn, $query);
        
            while ($row = mysqli_fetch_assoc($result))
            {
                echo ('<a href="'.$row["PATH"].'"><img width="320" src="'.$row["THUMBNAIL"].'"></a>');
            }
        ?>


        <div id="admin">

        </div>

        <!-- for adding new vids -->
    </body>
</html>