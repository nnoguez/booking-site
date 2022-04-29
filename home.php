<?php
    include("security.php");
?>
<html>
    <head>
        <title> Portfolio 2 </title>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
    <ul>
            <li><a href="index.php">MCO e-Ticket Booking ✈</a></li>
        </ul>
        <div class="box">
            <?php
                    echo("
                        <div>
                            <h2>Welcome to MCO e-Ticket Booking</h2>
                            <h3> Please select one of the following options:</h3>
                            <br>
                            <div class='box-item'>
                                <a href='signup.php'><button class='button'>Sign Up</button></a>
                                <br>
                                <a href='login.php'><button class='button'>Login</button></a>
                            </div>
                        </div>
                    ");  
            ?>
        </div>
    </body>
</html>
