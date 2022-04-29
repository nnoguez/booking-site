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
            <li><a href="update.php">Update</a></li>
            <li><a href="remove.php">Remove</a></li>
            <li><a href="ticket.php">Ticket</a></li>

            <li class="active" style="float:right"><a href="#signup.php">Sign Up</a></li>
            <li style="float:right"><a href="login.php">Log In</a></li>
            <li style="float:right"><a href="logout.php">Log Out</a></li>
        </ul>
        <h1> Delete User </h1>
        <?php  
            if(security_loggedIn()) { ?>
                <form method="POST">
                <input type="username" name="username" placeholder="Enter a Username"/>
                <input type="password" name="password" placeholder="Enter a Password"/>
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
    </body>
</html>

