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
                <form>
                    <h2>Please select a destination:</h2>
                    <input type="radio" id="paris" name="destinations" value="paris">
                      <label for="paris">Paris, France</label><br>
                        <?php print $paris_status; ?>

                    <input type="radio" id="santiago" name="destinations" value="santiago">
                      <label for="santiago">Santiago, Chile</label><br>
                        <?php print $santiago_status; ?>

                    <input type="radio" id="seoul" name="destinations" value="seoul">
                      <label for="seoul">Seoul, South Korea</label><br>
                        <?php print $seoul_status; ?>

                    <input type="radio" id="tokyo" name="destinations" value="tokyo">
                      <label for="tokyo">Tokyo, Japan</label><br>
                        <?php print $tokyo_status; ?>

                    <input type="radio" id="sydney" name="destinations" value="sydney">
                      <label for="sydney">Sydney, Australia</label><br>
                        <?php print $sydney_status; ?>

                    <input type="radio" id="toronto" name="destinations" value="toronto">
                      <label for="toronto">Toronto, Canada</label><br>
                        <?php print $paris_status; ?>

                    <input class="button" type="submit" name="submit" value="Book Flight"/>
                </form>
            
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
