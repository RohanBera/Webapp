<html>  
    <head>
        <title>Movie added!</title>        
        
        <!-- <link rel = "icon" href="./imgs/collage/icon.jpeg"  type = "image/x-icon">  -->

        <style>
            a {
                color: orange;
            }

            .bg {
                height: 100%;

                background-position: center;
                background-repeat: no-repeat;
                background-size: cover; 
            }

            .outbox {
                height: 600px;
                width: 800px;
                background-color: rgb(0, 0, 0, 0.9);
                /* opacity: 0.4; makes everything tranparent */
            }

            .inbox{
                height: 450px;
                width: 650px;
                background-color: transparent;
                /* background: red; */
            }

            .outpos {
                position: absolute;
                top: 50%;
                left: 50%;
                margin-top: -300px;
                margin-left: -400px;
            }

            .inpos {
                position: absolute;
                top: 50%;
                left: 50%;
                margin-top: -225px;
                margin-left: -325px;
            }
/* 
            .inpos {
                position: relative;
                top: 25px;
                left: 
            } */

            .text {
                position: absolute;
                font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
                font-size: 200%;
                color: white;
                bottom: 0;
            }

            .pic {
                position: absolute;
                /* bottom: 0; */
                top: 0;
            }

        </style>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

        <script>
            $(document).ready(function() {
                $('li.active').removeClass('active');
            })
        </script>   

        <?php 
            include_once("header.php");
        ?>

    </head>

    <body class="bg" background="./imgs/collage/collage.png">
        <div class="outbox outpos">
            <div class="inbox inpos">
                <div class="pic">
                    <img src="./imgs/collage/logo.jpeg" width="650px">
                </div> <br>
                <div class="text">
                    Series added. <br>
                    Return to <a href="welcome.php">Home</a>
                </div>
            </div>
        </div>
    </body>

</html>