<?php
    include("security.php");
?>
<html>
    <head>
        <title> Portfolio 2 </title>
        <link rel="stylesheet" href="styles.css">
        <style>
            body {
                background-image: url('img/bg.jpg');
                width: 100%;
                height: 100%;
                background-repeat: no-repeat;
                background-size: cover;
                margin: 0px;
            }

            #header-img {
                margin-left: 45%;
                margin-right: 45%;
                margin-top: 20%;
            }

            .buttonTrans {
                background-color: transparent;
                color: white;
                padding: 15px 30px 15px 30px;
                border-radius: 12px;
                font-size: 27px;
                border: 2px solid white;
            }
            
            .buttonTrans:hover {
                font-size: 28px;
                box-shadow: 1px 1px 1px black, 0 0 15px lightblue, 0 0 5px lightblue;
            }
        </style>
    </head>
    <body>
        <div class="header">
            <h1> MCO e-Ticket Booking ✈ </h1>
        </div>

        <div id="header-img">
            <a href='home.php'><button class='buttonTrans'>Enter</button></a>  
        </div>
    </body>
</html>
