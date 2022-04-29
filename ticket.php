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
            <li><a class="nav-hover" href="listings.php">Listings</a></li>
            <li style="float:right"><a class="nav-hover" href="logout.php">Log Out</a></li>
            <li style="float:right"><a class="nav-hover" href="profile.php">Profile</a></li>
        </ul>
        <div class="box">
            <h2> Ticket Information </h2>
            <?php
                // if($connection != null) {
                //     // Get the results of a query using the connection
                //     // TODO: Write SQL SELECT statement to read first name, last name, city, and state.
                //     $query = "SELECT `first_name`, `last_name`, `city`, `state` FROM `customers`;";
                //     $results = mysqli_query($connection, $query);
        
                    
                //     // Start the HTML table.
                //     echo("<table><tbody>");
        
                //     // For every row, generate a new HTML row.
                //     while($row = mysqli_fetch_assoc($results)) {
                //         // Start the row.
                //         echo("<tr>");
        
                //         // TODO: for each key, add a column entry in HTML using echo().
                //         echo("<td>".$row["first_name"]."</td>");
                //         echo("<td>".$row["last_name"]."</td>");
                //         echo("<td>".$row["city"]."</td>");
                //         echo("<td>".$row["state"]."</td>");
                        
                //         // Reminder: HTML tables use <td> (https://developer.mozilla.org/en-US/docs/Web/HTML/Element/table#examples).
                        
                //         // End the row.
                //         echo("</tr>");
                //     }
        
                //     // End the HTML table.
                //     echo("</tbody></table>");
                // }
            ?>
        </div>
    </body>
</html>
