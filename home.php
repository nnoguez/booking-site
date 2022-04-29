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
            <li><a href="#update.php">Update</a></li>
            <li><a href="#remove.php">Remove</a></li>
            <li><a href="#ticket.php">Ticket</a></li>

            <li class="active" style="float:right"><a href="#signup.php">Sign Up</a></li>
            <li style="float:right"><a href="#login.php">Log In</a></li>
            <li style="float:right"><a href="#logout.php">Log Out</a></li>
        </ul>
        <div class="box">
            <?php
                if(security_loggedIn()) { 
                    echo("
                        <div>
                            <h2> It seems as if you're logged in. Would you like to: </h2>
                            <br>
                            <div class='box-item'>
                                <a href='ticket.php'><button class='button'>Ticket Information</button></a>
                                <br>
                                <a href='update.php'><button class='button'>Update Password</button></a>
                                <br>
                                <a href='remove.php'><button class='button'>Delete Account</button></a>
                                <br>
                                <a href='logout.php'><button class='button'>Log Out</button></a>
                            </div>
                        </div>
                    ");

                } else {
                    echo("
                        <div>
                            <h2>It seems as if you're not logged in. Would you like to:</h2>
                            <br>
                            <div class='box-item'>
                                <a href='signup.php'><button class='button'>Sign Up</button></a>
                                <br>
                                <a href='login.php'><button class='button'>Login</button></a>
                            </div>
                        </div>
                    ");  
                }
            ?>
        </div>
    </body>
</html>
