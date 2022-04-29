<?php
    include("security.php");
?>
<html>
    <head>
        <title> Lab 9 </title>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <h1> Log In </h1>
        <?php  
            if(security_loggedIn()) { 
                echo("You are already logged in.");  
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
    </body>
</html>
