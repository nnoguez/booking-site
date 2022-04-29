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
            <li><a href="home.php">Home</a></li>
            <li><a href="listings.php">Listings</a></li>
            <li><a href="update.php">Update</a></li>
            <li><a href="remove.php">Remove</a></li>
            <li><a href="ticket.php">Ticket</a></li>

            <li class="active" style="float:right"><a href="signup.php">Sign Up</a></li>
            <li style="float:right"><a href="login.php">Log In</a></li>
            <li style="float:right"><a href="logout.php">Log Out</a></li>
        </ul>
      <h1> Logout </h1>
      <?php
        if(security_loggedIn(true)) {
          security_logout();
          echo("Logged Out"); 
        } else {
          echo("You are already logged out.");  
          echo("<a href='index.php'>Return Home</a><br>"); 
        }
      ?>
    </body>
</html>