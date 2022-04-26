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
                <a href='index.php'>⬅︎</a>
                <h2> Log In </h2>
                <form method="POST">
                    <input type="username" name="username" placeholder="Email"/>
                    <br>
                    <input type="password" name="password" placeholder="Enter a Password"/>
                    <br>
                    <input class="button" type="submit" name="submit" value="submit"/>
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
