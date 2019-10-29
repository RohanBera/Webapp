<html>
    <head>
        <style>
            ul {
                list-style-type: none;
                margin: 0;
                padding: 0;
                overflow: hidden;
                background-color: #333;

                position: fixed;
                top: 0;
                width: 100%;
            }

            li {
                float: left;
                border-right: 1px solid white;
            }

            /* li:last-child {
                border-right: none;
            } */

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
            }

            .active {
                background-color: orange;
            }
        </style>
    </head>

    <body>
        <ul>
            <li><a class="active" href>Home</a></li>
            <li><a>Series</a></li>
            <li><a>Contact</a></li>
            <li style="float: right"><a href="signup_fe.php">Sign Up</a></li>
            <li style="float: right; border-left: 1px solid white"><a href="signin_fe.php">Sign In</a></li>
        </ul>
    </body>
</html>