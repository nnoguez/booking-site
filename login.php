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
                    echo("You are already logged in.");  
                    echo("<a href='index.php'>Return Home</a><br>"); 
            ?>
            <?php
            } else {
            ?>
                <a class='back' href='index.php'><h3>⬅︎</h3></a>
                <h2> Log In </h2>
                <form method="POST">
                    <input type="username" name="username" placeholder="Username"/>
                    <!-- <br> -->
                    <!-- <input type="firstName" name="firstName" placeholder="First Name"/> -->
                    <br>
                    <input type="password" name="password" placeholder="Password"/>
                    <br>
                    <input class="button" type="submit" name="submit" value="Log in"/>
                </form>
            <?php
                    if(isset($_POST['submit'])) {
                        security_login();
                        security_loggedIn();
                        echo ("Logged In");
                    }
                }
            ?>
        </div>
    </body>
</html>
