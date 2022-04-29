<?php
    include("security.php");
?>
<html>
    <head>
        <title> Portfolio 2 </title>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <div class="header">
            <h1> MCO e-Ticket Booking ✈ </h1>
        </div>
        <div class="box">
            <?php
                if(security_loggedIn()) { 
                    echo("Enter <br>"); 
                    // echo("<a href='logout.php'>Log Out</a>");  
                } else {
                    echo("
                        <div>
                            <h2>It seems as if you're not logged in. Would you like to:</h2>
                            <br>
                            <div class='box-item'>
                                <a href='signup.php'><button class='button'>Sign Up</button></a>
                                <br>
                                <a href='login.php'><button class='button'>Login</button></a>
                            </div>
                        </div>
                    ");  
                }
            ?>
        </div>
    </body>
</html>
