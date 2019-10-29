<html>
    <head>
        <title></title>

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
                background-color: rgb(0, 0, 0, 0.4);
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
        </style>
    </head>

    <body style="background-color: white">
        <?php include_once("header.php"); ?>

        <div class="outbox outpos">
            <div class="inbox inpos">
                <h1 >Sign In</h1>

                <form action="POST" action="signin.html">
                    <input class="inputfields" type="text" name="uname" placeholder="Username (Email)" >
                    <input class="inputfields" type="password" name="pwd" placeholder="Password">
                    <br />
                    <input class="signinbutton" type="submit" value="Sign In">

                </form>
            </div>
        </div>
    </body>
</html>