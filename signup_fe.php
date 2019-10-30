<html>
    <head>
        <style>
            h1 {
                margin-top: 0px;
                margin-bottom: 10px;

                font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
                color: white;
            }

            .outbox {
                height: 800px;
                width: 600px;
                background-color: rgb(0, 0, 0, 0.4);
                /* opacity: 0.4; makes everything tranparent */
            }

            .inbox{
                height: 650px;
                width: 450px;
                background-color: transparent;
                /* background: red; */
            }

            .outpos {
                position: absolute;
                top: 50%;
                left: 50%;
                margin-top: -400px;
                margin-left: -300px;
            }

            .inpos {
                position: absolute;
                top: 50%;
                left: 50%;
                margin-top: -325px;
                margin-left: -225px;
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

            .uname {
                width: 48%;
                float: left;
                margin-right: 2%;
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

            .disabled {
                opacity: 0.4;
            }

            .text {
                font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
                color: orange;
                font-size: 100%;
            }

            .white {
                color: white;
            }

            /* radio button */
            .form-radio
            {
                -webkit-appearance: none;
                -moz-appearance: none;
                appearance: none;
                display: inline-block;
                position: relative;
                background-color: white;
                color: white; /* tick color*/
                top: 10px;
                height: 30px;
                width: 30px;
                border: 0;
                border-radius: 50px;
                cursor: pointer;     
                margin-right: 7px;
                outline: none;
            }
            .form-radio:checked::before
            {
                position: absolute;
                font: 13px/1 'Open Sans', sans-serif;
                font-size: 150%;
                left: 10px;
                top: 3px;
                content: '\02143';
                /* this is a reverse "L" character, is u rotate it, looks like tick */
                transform: rotate(40deg); 
            }
            .form-radio:hover
            {
                background-color: lightgoldenrodyellow;
            }
            .form-radio:checked
            {
                background-color: orange;
            }
            label
            {
                font: 15px/1.7 'Open Sans', sans-serif;
                color: #333;
                -webkit-font-smoothing: antialiased;
                -moz-osx-font-smoothing: grayscale;
                cursor: pointer;
            } 
        </style>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

        <script>
            $(document).ready(function(){
                $('#pwd, #confpwd').on('keyup', function(){
                    if ($('#pwd').val() == $('#confpwd').val())
                    {
                        $('#message').html('Passwords match').css('color', 'green');
                        $('#subbut').prop('disabled', false);
                        $('#subbut').removeClass('disabled');
                    }
                    else 
                    {
                        $('#message').html('Passwords do not match').css('color', 'red');
                        $('#subbut').prop('disabled', true);
                        $('#subbut').addClass('disabled');
                    }
                });
            });
        </script>
    </head>

    <body style="background-color: white;">
        <?php include_once("header.php"); ?>

        <div class="outbox outpos">
            <div class="inbox inpos">
                <h1>Sign Up</h1>

                <form method="POST" action="signup_be.php">
                    <b class="text" >Username :</b> <br />
                    <input class="inputfields uname" type="text" name="fname" placeholder="First Name" required>
                    <input class="inputfields uname" type="text" name="lname" placeholder="Last Name" required> <br />

                    <b class="text" >Choose your plan :</b> <br />

                    <input class="form-radio" type="radio" name="plan" value="Silver" required> <b class="text white"> Silver </b> 
                    <input class="form-radio" type="radio" name="plan" value="Gold" required> <b class="text white"> Gold </b> 
                    <input class="form-radio" type="radio" name="plan" value="Platinum" required> <b class="text white"> Platinum </b> <br />
                    <br /> 
                    <b class="text">A few credentials :</b> <br />

                    <input class="inputfields" type="email" name="mail" placeholder="Email Address" required> <br />
                    
                    <input class="inputfields" type="password" name="pwd" id="pwd" placeholder="Set Password" required> <br />
                    <input class="inputfields" type="password" name=""    id="confpwd" placeholder="Verify Password" required> <br />

                    <span class="text" id="message" ></span>
                    <input class="signinbutton" type="submit" name="subbut" id="subbut" value="Sign up">
                </form>
            </div>
        </div>
    </body>
</html>