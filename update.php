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
            <li  class="active" style="float:right"><a class="nav-hover" href="profile.php">Profile</a></li>
        </ul>
        <div class="box">
            <a class='back' href='profile.php'><h3>⬅︎</h3></a>
            <h2> Update Password </h2>
            <?php  
                if(security_loggedIn()) { ?>
                    <form method="POST">
                    <input type="text" name="username" placeholder="Username"/>
                    <br>
                    <input type="text" name="firstName" placeholder="First Name"/> 
                    <br>
                    <input type="text" name="lastName" placeholder="Last Name"/>
                    <br>
                    <input type="password" name="password" placeholder="Old Password"/>
                    <br>
                    <input type="password" name="newPassword" placeholder="New Password"/>
                    <br>
                    <input class="button" type="submit" name="submit" value="Update"/>
                    </form>
                <?php  
                    if(isset($_POST['submit'])) {
                        security_updatePassword();
                            echo ("Password updated!");
                            // adding this in to redirect user back to login page, thought it would help with navigation
                            echo("<a class='a-par' href='index.php'>Return Home</a><br>"); 
                    }
    
                } else { 
                    echo("You currently don't have an account in our database.<br>");  
                    echo("<a class='a-par' href='signup.php'>Sign Up</a>"); 
                }
            ?>
        </div>
    </body>
</html>
