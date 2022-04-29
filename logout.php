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
        <h2> Logout </h2>
        <?php
            if(security_loggedIn(true)) {
            security_logout();
            echo("Logged Out"); 
            } else {
            echo("
                <p>You are already logged out.</p>
                <br>
                <a href='home.php'>Return Home</a>
            ");  
            }
        ?>
      </div>
    </body>
</html>