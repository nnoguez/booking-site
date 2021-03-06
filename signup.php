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
            <li><a class="nav-hover" href="home.php">Home</a></li>
            <li class="active" style="float:right"><a class="nav-hover" href="signup.php">Sign Up</a></li>
            <li style="float:right"><a class="nav-hover" href="login.php">Log In</a></li>
            <!-- <li style="float:right"><a href="logout.php">Log Out</a></li> -->
        </ul>
        <div class="box">
            <?php  
                if(security_loggedIn()) { 
                    echo("
                    You are unable to sign up as you are already logged in.
                    <br>
                    <a class='a-par' href='home.php'>Return Home</a>
                    <br>
                    <a class='a-par' href='logout.php'>Log Out</a>

                    "); 
            ?>
            <?php
                } else {
                ?>
                    <a class='back' href='home.php'><h3>⬅︎</h3></a>
                    <h2> Sign Up </h2>
                    <form method="POST">
                        <input type="text" name="username" placeholder="Username"/>
                        <br>
                        <input type="text" name="firstName" placeholder="First Name"/> 
                        <br>
                        <input type="text" name="lastName" placeholder="Last Name"/>
                        <br>
                        <input type="password" name="password" placeholder="Password"/>
                        <br>
                        <input class="button" type="submit" name="submit" value="Sign up"/>
                    </form>
                <?php
                    if(isset($_POST['submit'])) {
                        session_start();
                            $_SESSION['firstName'] = $firstName;
                        security_addNewUser();
                        echo("
                        Signed Up
                        <br>
                        <a class='a-par' href='home.php'>Return Home</a>
                        <br>
                        <a class='a-par' href='login.php'>Log In</a>
                        "); 
                    }
                }
            ?>
        </div>
    </body>
</html>
