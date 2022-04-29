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
                <input type="username" name="username" placeholder="Enter a Username"/>
                <input type="password" name="password" placeholder="Enter a Password"/>
                <input type="submit" name="submit" value="submit"/>
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
