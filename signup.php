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
                    <input type="text" name="username" placeholder="Username"/>
                    <br>
                    <input type="text" name="firstName" placeholder="First Name"/> 
                    <br>
                    <input type="lastName" name="lastName" placeholder="Last Name"/>
                    <br>
                    <input type="password" name="password" placeholder="Password"/>
                    <br>
                    <input class="button" type="submit" name="submit" value="Signup"/>
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
