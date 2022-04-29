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
                // if(security_loggedIn()) { 
                //     echo("You are unable to sign up as you are already logged in.");  
                //     echo("<a href='index.php'>Return Home</a><br>"); 
            ?>
            <?php
            // } else {
            ?>
                <a class='back' href='signup.php'><h3>⬅︎</h3></a>
                
                <div class="row">
                    <div class="column left">
                        <p>Tokyo, Japan</p>
                    </div>
                    <div class="column right">
                        <button>Book Flight</button>
                    </div>
                    <div class="column left">
                        <p>Sydney, Australia</p>
                    </div>
                    <div class="column right">
                        <button>Book Flight</button>
                    </div>
                    <div class="column left">
                        <p>Toronto, Canada</p>
                    </div>
                    <div class="column right">
                        <button>Book Flight</button>
                    </div>
                    <div class="column left">
                        <p>Paris, France</p>
                    </div>
                    <div class="column right">
                        <button>Book Flight</button>
                    </div>
                    <div class="column left">
                        <p>Santiago, Chile</p>
                    </div>
                    <div class="column right">
                        <button>Book Flight</button>
                    </div>
                    <div class="column left">
                        <p>Seoul, South Korea</p>
                    </div>
                    <div class="column right">
                        <button>Book Flight</button>
                    </div>
                </div>
            <?php
            //     if(isset($_POST['submit'])) {
            //         security_addNewUser();
            //     }
            // }
            ?>
        </div>
    </body>
</html>
