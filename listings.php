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
                <form method="POST" action="ticket.php">
                    <h2>Please select a destination:</h2>
                    <input type="radio" id="france" name="destinations" value="France">
                      <label for="france">France</label><br>
                    <input type="radio" id="chile" name="destinations" value="Chile">
                      <label for="chile">Chile</label><br>
                    <input type="radio" id="china" name="destinations" value="China">
                      <label for="china">China</label><br>
                    <input type="radio" id="japan" name="destinations" value="Japan">
                      <label for="japan">Japan</label><br>
                    <input type="radio" id="australia" name="destinations" value="Australia">
                      <label for="australia">Australia</label><br>
                    <input type="radio" id="canada" name="destinations" value="Canada">
                      <label for="canada">Canada</label><br>
                    <input class="button" type="submit" name="submit" value="Book Flight"/>
                </form>
                <?php 
                    if (isset($_POST['submit'])) {
                        $destinations = $_GET['destinations'];
                        // security_updateDestination();



                        function updateDestination($username, $destination) {
                            $connection = mysqli_connect("localhost", "root", "");
                            $db = mysqli_select_db($connection, 'booking');
                          
                                if(isset($_POST['submit'])) 
                                {
                                    $destination = $_POST['destination'];
                                    $query = "UPDATE `users` SET destination = '$destination' WHERE username = '{$username}';";
                                    $query_run = mysqli_query($connection, $query);
                    
                                    if($query_run)
                                    {
                                        echo "destination processing";
                                    } else {
                                        echo "destination stuck";
                                    }
                                }
                            }
                        }
                        updateDestination();



















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
