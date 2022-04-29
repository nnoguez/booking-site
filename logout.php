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
        </ul>
      <div class="box">
        <h1> Logout </h1>
        <?php
            if(security_loggedIn(true)) {
            security_logout();
            echo("Logged Out"); 
            } else {
            echo("
                You are already logged out.
                <br>
                <a href='home.php'>Return Home</a>
            ");  
            }
        ?>
      </div>
    </body>
</html>