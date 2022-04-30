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
            <li><a class="nav-hover" href="home.php">Home</a></li>
            <li><a class="nav-hover" href="listings.php">Listings</a></li>
            <li style="float:right"><a class="nav-hover" href="logout.php">Log Out</a></li>
            <li class="active" style="float:right"><a class="nav-hover" href="profile.php">Profile</a></li>
        </ul>
        <div class="box">
            <?php
                if(security_loggedIn()) { 
            ?>
                    <h2> Profile </h2>
                    <br>
                    <a href='ticket.php'><button class='button'>Ticket Information</button></a>
                    <br>
                    <a href='update.php'><button class='button'>Update Password</button></a>
                    <br>
                    <a href='remove.php'><button class='button'>Delete Account</button></a>
                    <br> 
                    <a href='logout.php'><button class='button'>Log Out</button></a>

            <?php
                } else {
                    echo("
                        You currently do not have a profile.
                        <br>
                        <a class='a-par' href='home.php'>Return Home</a>
                    ");
                }
            ?>
        </div>
    </body>
</html>