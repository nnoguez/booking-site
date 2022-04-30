<?php
    include("security.php");
?>
<html>
    <head>
        <title> Lab 9 </title>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <ul>
            <li><a href="index.php">MCO e-Ticket Booking ✈</a></li>
            <li><a class="nav-hover" href="home.php">Home</a></li>
            <li><a class="nav-hover" href="listings.php">Listings</a></li>
            <li class="active" style="float:right"><a class="nav-hover" href="logout.php">Log Out</a></li>
            <li style="float:right"><a class="nav-hover" href="profile.php">Profile</a></li>
        </ul>
      <div class="box">
        <a class='back' href='profile.php'><h3>⬅︎</h3></a>  
        <h2> Logout </h2>
        <?php
            if(security_loggedIn(true)) {
            security_logout();
            echo("Logged Out"); 
            } else {
            echo("
                <p>You are already logged out.</p>
                <br>
                <a class='a-par' href='home.php'>Return Home</a>
            ");  
            }
        ?>
      </div>
    </body>
</html>