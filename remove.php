<?php
    include("security.php");
?>
<html>
    <head>
        <title> Lab 10 </title>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
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

