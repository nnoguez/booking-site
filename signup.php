<?php
    include("security.php");
?>
<html>
    <head>
        <title> Portfolio 2 </title>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <div class="header">
            <h1> MCO e-Ticket Booking ✈ </h1>
        </div>
        <div class="box">
            <?php  
                if(security_loggedIn()) { 
                    echo("You are unable to sign up as you are already logged in.");  
                    echo("<a href='index.php'>Return Home</a><br>"); 
            ?>
            <?php
            } else {
            ?>
                <a class='back' href='index.php'><h3>⬅︎</h3></a>
                <h2> Sign Up </h2>
                <form method="POST">
                    <input type="email" name="email" placeholder="Email Address"/>
                    <br>
                    <input type="password" name="password" placeholder="Password"/>
                    <br>
                    <input class="button" type="submit" name="submit" value="Sign up"/>
                </form>
            <?php
                if(isset($_POST['submit'])) {
                    security_addNewUser();
                    echo ("Signed Up");
                    // adding this in to redirect user back to login page, thought it would help with navigation
                    echo("<br><a href='index.php'>Return Home</a><br>"); 
                }
            }
            ?>
        </div>
    </body>
</html>
