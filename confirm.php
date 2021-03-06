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
            <li class="active"><a class="nav-hover" href="listings.php">Listings</a></li>
            <li style="float:right"><a class="nav-hover" href="logout.php">Log Out</a></li>
            <li style="float:right"><a class="nav-hover" href="profile.php">Profile</a></li>
        </ul>
        <div class="box">
            <?php  
                if(security_loggedIn()) { 
            ?>
                <a class='back' href='home.php'><h3>⬅︎</h3></a>
                <h2> Confirm Booking </h2>
                <form method="POST" action="ticket.php">
                    <input type="text" name="username" placeholder="Username"/>
                    <br>
                    <input type="text" name="firstName" placeholder="First Name"/> 
                    <br>
                    <input type="text" name="lastName" placeholder="Last Name"/>
                    <br>
                    <input type="text" name="destination" placeholder="Destination" value=
                        <?php 
                            $destinations = $_POST['destinations'];
                            echo $destinations;
                            $username = $_GET['username'];
                            $firstName = $_GET['firstName'];
                            $lastName = $_GET['lastName'];
                            $password = $_GET['password'];
                        ?>
                    />
                    <br>
                    <input type="password" name="password" placeholder="Password"/>
                    <br>
                    <input class="button" type="submit" name="submit" value="Log In"/>
                </form>
            <?php
            } else {
                echo("You are unable to view this page until you sign in.");  
                echo("<a class='a-par' href='index.php'>Return Home</a><br>"); 
            }
            ?>
        </div>
    </body>
</html>