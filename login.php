<?php
    include("security.php");
    session_start();
    // first name
    $firstName = $_POST['firstName'];
    $_SESSION['firstName'] = $firstName;

    //last name
    $lastName = $_POST['lastName'];
    $_SESSION['lastName'] = $lastName;
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
            <li style="float:right"><a class="nav-hover" href="signup.php">Sign Up</a></li>
            <li class="active" style="float:right"><a class="nav-hover" href="login.php">Log In</a></li>
        </ul>
        <div class="box">
            <?php  
                if(security_loggedIn()) { 
                    echo("
                    <a class='a-par' href='listings.php'><button class='button'> Go to Site </button></a>
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
                <h2> Log In </h2>
                <form method="POST">
                    <input type="text" name="username" placeholder="Username"/>
                    <br>
                    <input type="text" name="firstName" placeholder="First Name"/> 
                    <br>
                    <input type="text" name="lastName" placeholder="Last Name"/>
                    <br>
                    <input type="password" name="password" placeholder="Password"/>
                    <br>
                    <input class="button" type="submit" name="submit" value="Log In"/>
                </form>
            <?php
                                security_login();
                                security_loggedIn();
                if(isset($_POST['submit'])) {
                    echo("<a class='a-par' href='listings.php'><button class='button'> Go to Site </button></a>");
                    
                    // ticketName();
                }
            }
            ?>
        </div>
    </body>
</html>
