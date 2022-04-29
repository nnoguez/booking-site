<?php
    include("security.php");
?>
<html>
    <head>
        <title> Lab 11 </title>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <h1> Welcome! </h1>
            <div class="box">
            <?php
                if(security_loggedIn()) { 
                    echo("It seems as if you're logged in. Would you like to: <br>");
                    echo("<a href='update.php'>Update Password</a><br>"); 
                    echo("<a href='remove.php'>Delete Account</a><br>");  
                     // adding this in to redirect user back to login page, thought it would help with navigation
                    echo("<a href='logout.php'>Log Out</a>");  
                } else {
                    echo("It seems as if you're not logged in. Would you like to: <br>");
                    echo("<a href='signup.php'>Sign Up</a><br>");  
                    echo("<a href='login.php'>Login</a>");  
                }
            ?>
        </div>
    </body>
</html>
