<html>
    <head>
        <title>MyTube Add Movie</title>

        <!-- <link rel = "icon" href="./imgs/collage/icon.jpeg" type = "image/x-icon">  -->

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
                
                margin-top: 20px;
                margin-bottom: 20px;
                border: 0px;
                border-radius: 10px;
            }

            .filebutton {
                width: 100%;
                height: 50px;
                background-color: darkgrey;

                font-size: 110%;
                font-weight: bold;
                color: black;
                
                margin-top: 10px;
                margin-bottom: 10px;
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

        <?php include_once("header.php");?>
    </head>

    <body class="bg" background="./imgs/collage/collage.png">
        <h1>Add movies </h1>
        <div class="outbox outpos">
            <div class="inbox inpos">
                <form method="POST" action="addseries1_be.php"> 
                    <h1>Step 1.</h1>
                    <b class="text">Series details :</b> <br>
                    <input class="inputfields" type="text" name="title" id="" placeholder="Title of series" required> <br> 
                    <input class="inputfields" type="text" name="genre" id="" placeholder="Genre" required> <br>
                    <input class="inputfields" type="float" name="seasons" id="" placeholder="Seasons" required> <br> 

                    <b class="text">Add a thumbnail :</b>
                    <input class="filebutton" type="file" name="pic" id="" accept="image/*" required> 

                    <input class="signinbutton" type="submit" name="Add Series"> 
                    <button class=""><a href="addseries2.php">Skip This Step</a></button>
                </form>
            </div>
        </div>
    </body>
</html>