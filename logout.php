<?php
    include("security.php");
?>
<html>
    <head>
        <title> Lab 9 </title>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
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