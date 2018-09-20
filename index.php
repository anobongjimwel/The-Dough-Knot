<?php
    session_start();
    if (isset($_SESSION['username'])) {
        header("location: pastries.php");
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>The Dough Knot - Home</title>
        <link rel="stylesheet" href="semantic/semantic.css" />
        <script src="jquery/jquery.js"></script>
        <script src="semantic/semantic.js"></script>
        <style>
            * {
                box-sizing: border-box;
                -moz-box-sizing: border-box;
                -webkit-box-sizing: border-box;
                font-family: Helvetica;

            }

            body {
                margin: 0;
            }

            #headerImg {
                background-image: url("images/homebg.jpg");
                width: 100%;
                height: 100vh;
                background-repeat: no-repeat;
                background-size: cover;
                color: red;
                text-align: center;
                text-shadow: 0 0 10px darkgray;
        </style>
    </head>
    <body>
        <div class="ui top attached menu">
            <div class="ui dropdown icon item">
                <i class="wrench icon"></i>
                <div class="menu">
                    <div class="item">
                        <i class="dropdown icon"></i>
                        <span class="text">New</span>
                        <div class="menu">
                            <div class="item">Document</div>
                            <div class="item">Image</div>
                        </div>
                    </div>
                    <div class="item">
                        Open...
                    </div>
                    <div class="item">
                        Save...
                    </div>
                    <div class="item">Edit Permissions</div>
                    <div class="divider"></div>
                    <div class="header">
                        Export
                    </div>
                    <div class="item">
                        Share...
                    </div>
                </div>
            </div>
            <div class="right menu">
                <div class="ui right aligned category search item">
                    <div class="ui transparent icon input">
                        <input class="prompt" type="text" placeholder="Username">
                        <i class="user icon"></i>
                    </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <div class="ui transparent icon input">
                        <input class="prompt" type="password" placeholder="Password">
                        <i class="key icon"></i>
                    </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <button class="ui button green" onclick="location.href='login.php';"><i class="icon search"></i></button>
                </div>
            </div>
        </div>
        <div class="container fluid">
            <div class="container fluid" id="headerImg">
                <br /><br /><br /><br /><br /><br /><br /><br /><br />
                <h2></h2><br />
                <font style="font-size: 30px;">IT'S NOT DOUGHNUT, IT'S</font><br /><br />
                <font style="font-size: 70px;">THE DOUGH KNOT</font>
            </div>
            <div class="container fluid" style="padding: 20px;">
                © 2018 Jimwel and Precyl
            </div>
        </div>

        <script>
            $('.ui.dropdown')
                .dropdown();
        </script>
    </body>
</html>