<?php
    include("security.php");
?>
<html>
    <head>
        <title> Portfolio 2 </title>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <div class="header">
            <h1> MCO e-Ticket Booking ✈ </h1>
        </div>
        <div class="box">
            <?php  
                if(security_loggedIn()) { 
                    echo("You are unable to sign up as you are already logged in.");  
                    echo("<a href='index.php'>Return Home</a><br>"); 
            ?>
            <?php
            } else {
            ?>
                <a class='back' href='index.php'><h3>⬅︎</h3></a>
                
                <div class="column-left">
                    <h3>Tokyo, Japan</h3>
                </div>
                <div class="column-right">
                    <button>Book Flight</button>
                </div>
                <div class="column-left">
                    <h3>Sydney, Australia</h3>
                </div>
                <div class="column-right">
                    <button>Book Flight</button>
                </div>
                <div class="column-left">
                    <h3>Toronto, Canada</h3>
                </div>
                <div class="column-right">
                    <button>Book Flight</button>
                </div>
                <div class="column-left">
                    <h3>Paris, France</h3>
                </div>
                <div class="column-right">
                    <button>Book Flight</button>
                </div>
                <div class="column-left">
                    <h3>Santiago, Chile</h3>
                </div>
                <div class="column-right">
                    <button>Book Flight</button>
                </div>
                <div class="column-left">
                    <h3>Seoul, South Korea</h3>
                </div>
                <div class="column-right">
                    <button>Book Flight</button>
                </div>
                <div class="column-left">
                    <h3>Cape Town, South Africa</h3>
                </div>
                <div class="column-right">
                    <button>Book Flight</button>
                </div>
                <div class="column-left">
                    <h3>Dubai, United Arab Emirates</h3>
                </div>
                <div class="column-right">
                    <button>Book Flight</button>
                </div>
                <div class="column-left">
                    <h3>Cancun, Mexico</h3>
                </div>
                <div class="column-right">
                    <button>Book Flight</button>
                </div>
                    <div class="column-left">
                    <h3>Istanbul, Turkey</h3>
                </div>
                <div class="column-right">
                    <button>Book Flight</button>
                </div>
            <?php
                if(isset($_POST['submit'])) {
                    security_addNewUser();
                }
            }
            ?>
        </div>
    </body>
</html>
