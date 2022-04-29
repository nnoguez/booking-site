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
            <h1> Update Password </h1>
            <?php  
                if(security_loggedIn()) { ?>
                    <form method="POST">
                    <input type="username" name="username" placeholder="Enter a Username"/>
                    <input type="password" name="password" placeholder="Enter Old Password"/>
                    <input type="password" name="newPassword" placeholder="Enter New Password"/>
                    <input type="submit" name="submit" value="submit"/>
                    </form>
                <?php  
                    if(isset($_POST['submit'])) {
                        security_updatePassword();
                            echo ("Password updated!");
                            // adding this in to redirect user back to login page, thought it would help with navigation
                            echo("<a href='index.php'>Return Home</a><br>"); 
                    }
    
                } else { 
                    echo("You currently don't have an account in our database.<br>");  
                    echo("<a href='signup.php'>Sign Up</a>"); 
                }
            ?>
        </div>
    </body>
</html>
