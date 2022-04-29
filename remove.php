<?php
    include("security.php");
?>
<html>
    <head>
        <title> Lab 10 </title>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <ul>
            <li><a href="index.php">MCO e-Ticket Booking ✈</a></li>
            <li><a href="home.php">Home</a></li>
            <li><a href="listings.php">Listings</a></li>

            <!-- <li class="active" style="float:right"><a href="signup.php">Sign Up</a></li> -->
            <li style="float:right"><a href="logout.php">Log Out</a></li>
            <li style="float:right"><a href="profile.php">Profile</a></li>
        </ul>
        <div class="box">
            <h2> Delete User </h2>
            <?php  
                if(security_loggedIn()) { ?>
                    <form method="POST">
                    <input type="username" name="username" placeholder="Enter a Username"/>
                    <br>
                    <input type="password" name="password" placeholder="Enter a Password"/>
                    <br>
                    <input type="submit" name="submit" value="submit"/>
                    </form>
            <?php
                    if(isset($_POST['submit'])) {
                        security_deleteUser();
                        echo ("User deleted.");
                    }
                } else { 
                    echo("You currently don't have an account in our database.<br>");  
                    echo("<a href='signup.php'>Sign Up</a>"); 
                }
            ?>
        </div>
    </body>
</html>

