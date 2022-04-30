<?php
    include("security.php");
    // include("database.php");

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
                <form method="POST">
                    <h2>Please select a destination:</h2>
                    <input type="radio" id="paris" name="destinations" value="Paris, France">
                      <label for="paris">Paris, France</label><br>
                    <input type="radio" id="santiago" name="destinations" value="Santiago, Chile">
                      <label for="santiago">Santiago, Chile</label><br>
                    <input type="radio" id="seoul" name="destinations" value="Seoul, South Korea">
                      <label for="seoul">Seoul, South Korea</label><br>
                    <input type="radio" id="tokyo" name="destinations" value="Tokyo, Japan">
                      <label for="tokyo">Tokyo, Japan</label><br>
                    <input type="radio" id="sydney" name="destinations" value="Sydney, Australia">
                      <label for="sydney">Sydney, Australia</label><br>
                    <input type="radio" id="toronto" name="destinations" value="Toronto, Canada">
                      <label for="toronto">Toronto, Canada</label><br>
                    <input class="button" type="submit" name="submit" value="Book Flight"/>
                </form>
                <?php 
                    if (isset($_POST['submit'])) {
                        // $destinationSelected = $_POST['destinations'];
                        $query = "UPDATE users SET destination = hi WHERE username = $username;";
                        echo $query;
                    }
                ?>
            <?php
            } else {
                // echo $errors['contact'];
                echo("You are unable to view this page until you sign in.");  
                echo("<a class='a-par' href='index.php'>Return Home</a><br>"); 
            }
            ?>
        </div>
    </body>
</html>
