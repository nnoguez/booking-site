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
            <li><a class="nav-hover" href="home.php">Home</a></li>
            <li><a class="nav-hover" href="listings.php">Listings</a></li>
            <li style="float:right"><a class="nav-hover" href="logout.php">Log Out</a></li>
            <li class="active" style="float:right"><a class="nav-hover" href="profile.php">Profile</a></li>
        </ul>
        <div class="box">
            <a class='back' href='profile.php'><h3>⬅︎</h3></a>
            <h2> Delete Account </h2>
            <?php  
                if(security_loggedIn()) { ?>
                    <form method="POST">
                        <input type="text" name="username" placeholder="Username"/>
                        <br>
                        <input type="text" name="firstName" placeholder="First Name"/> 
                        <br>
                        <input type="text" name="lastName" placeholder="Last Name"/>
                        <br>
                        <input type="password" name="password" placeholder="Password"/>
                        <br>
                        <input class="button" type="submit" name="submit" value="Delete"/>
                    </form>
            <?php
                    if(isset($_POST['submit'])) {
                        security_deleteUser();
                        echo ("User deleted.");
                    }
                } else { 
                    echo("You currently don't have an account in our database.<br>");  
                    echo("<a class='a-par' href='signup.php'>Sign Up</a>"); 
                }
            ?>
        </div>
    </body>
</html>

