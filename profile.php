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
        </ul>
        <div class="box">
            <?php
                if(security_loggedIn()) { 
            ?>
                <div class="box">
                    <h2> Flight Listings </h2>
                    <br>
                    <a href='update.php'>Update Password</a>
                    <br>
                    <a href='remove.php'>Delete Account</a>
                    <br> 
                    <a href='logout.php'>Log Out</a>

                </div>
            <?php
                } else {
                    echo("
                        You currently do not have a profile.
                        <br>
                        <a href='home.php'>Return Home</a>
                    ");
                }
            ?>
        </div>
    </body>
</html>