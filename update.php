<?php
    include("security.php");
?>
<html>
    <head>
        <title> Lab 10 </title>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
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
    </body>
</html>
