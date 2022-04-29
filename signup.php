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
                    <input type="text" name="username" placeholder="Username"/>
                    <br>
                    <input type="text" name="firstName" placeholder="First Name"/> 
                    <br>
                    <input type="lastName" name="lastName" placeholder="Last Name"/>
                    <br>
                    <input type="password" name="password" placeholder="Password"/>
                    <br>
                    <input class="button" type="submit" name="submit" value="Sign up"/>
                </form>
            <?php
                if(isset($_POST['submit'])) {
                    security_addNewUser();
                    echo ("Signed Up");
                    echo("
                    Signed Up
                    <br>
                    <a href='index.php'>Return Home</a>
                    <br>
                    <a href='login.php'>Log In</a>
                    "); 
                }
            }
            ?>
        </div>
    </body>
</html>
