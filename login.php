<?php
    include("security.php");
?>
<html>
    <head>
        <title> Portfolio 2 </title>
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
                    <input type="text" name="username" placeholder="Username"/>
                    <!-- <br>
                    <input type="text" name="firstName" placeholder="First Name"/> 
                    <br>
                    <input type="lastName" name="lastName" placeholder="Last Name"/> -->
                    <br>
                    <input type="password" name="password" placeholder="Password"/>
                    <br>
                    <input class="button" type="submit" name="submit" value="Log In"/>
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
