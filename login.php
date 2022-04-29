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

            <li class="active" style="float:right"><a href="signup.php">Sign Up</a></li>
            <li style="float:right"><a href="login.php">Log In</a></li>
            <!-- <li style="float:right"><a href="logout.php">Log Out</a></li> -->
        </ul>
        <div class="box">
            <?php  
                if(security_loggedIn()) { 
                    echo("
                    <a href='listings.php'><button class='button'> Go to Site </button></a>
                    <br>
                    <a href='home.php'>Return Home</a>
                    <br>
                    <a href='logout.php'>Log Out</a>
                    "); 
            ?>
            <?php
            } else {
            ?>
                <a class='back' href='home.php'><h3>⬅︎</h3></a>
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
