<?php
    include("security.php");
?>
<html>
    <head>
        <title> Portfolio 2 </title>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <ul>
            <li><a href="index.php">MCO e-Ticket Booking ✈</a></li>
            <li><a href="home.php">Home</a></li>
            <li><a href="listings.php">Listings</a></li>

            <!-- <li class="active" style="float:right"><a href="signup.php">Sign Up</a></li> -->
            <li style="float:right"><a href="logout.php">Log Out</a></li>
            <li style="float:right"><a href="profile.php">Profile</a></li>
        </ul>
        <div class="box">
            <?php  
                if(security_loggedIn()) { 
            ?>
                <h2> Flight Listings </h2>
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
            } else {
                echo("You are unable to view this page until you sign in.");  
                echo("<a href='index.php'>Return Home</a><br>"); 
            }
            ?>
        </div>
    </body>
</html>
