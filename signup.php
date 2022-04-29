<?php
    include("security.php");
?>
<html>
    <head>
        <title> Lab 9 </title>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <h1> Sign Up </h1>
        <?php  
            if(security_loggedIn()) { 
                echo("You are unable to sign up as you are already logged in.");  
                echo("<a href='index.php'>Return Home</a><br>"); 
        ?>
        <?php
           } else {
        ?>
            <form method="POST">
                <input type="username" name="username" placeholder="Enter a Username"/>
                <input type="password" name="password" placeholder="Enter a Password"/>
                <input type="submit" name="submit" value="submit"/>
            </form>
        <?php
            if(isset($_POST['submit'])) {
                security_addNewUser();
                echo ("Signed Up");
                // adding this in to redirect user back to login page, thought it would help with navigation
                echo("<a href='index.php'>Return Home</a><br>"); 
            }
        }
        ?>
    </body>
</html>
