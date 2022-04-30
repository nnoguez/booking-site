<?php
    include("security.php");
?>
<html>
    <head>
        <title> Portfolio 2 </title>
        <link rel="stylesheet" href="styles.css">
        <style>
  * {
      box-sizing: border-box;
    }

    p {
      color: black !important;
    }

    .column {
      float: left;
      /* padding: 5px; */
    }

    .left {
      width: 20%;
      background-color: white;
      text-align: left;
    }

	.middle {
      width: 40%;
      border-left: 2px solid rgb(190, 190, 190);
      background-color: white;
      text-align: left;
    }
    
    .right {
      width: 40%;
      text-align: left;
      border-left: 2px solid rgb(190, 190, 190);
      background-color: white;
    }
    
    .left-head {
      width: 60%;
      text-align: left;
      background-color: #D22B2B;
      color: white;
      padding-left: 20px;

    }

    .right-head {
      width: 40%;
      text-align: left;
      background-color: #D22B2B;
      color: white;
    }

    .row:after {
      content: "";
      display: table;
      clear: both;
    }
  
  .ticket {
  	background-color: #D22B2B;
    margin: 20px;
  }
  
  .ticket-inner {
  	background-color: white;
    border: 20px solid #D22B2B;
    margin: 0px;
    padding-bottom: 320px;
  }

</style>
    </head>
    <body>
        <ul>
            <li><a href="index.php">MCO e-Ticket Booking ✈</a></li>
            <li><a class="nav-hover" href="home.php">Home</a></li>
            <li><a class="nav-hover" href="listings.php">Listings</a></li>
            <li style="float:right"><a class="nav-hover" href="logout.php">Log Out</a></li>
            <li style="float:right"><a class="nav-hover" href="profile.php">Profile</a></li>
        </ul>
          <div class="box2">
          <a class='back' href='profile.php'><h3>⬅︎</h3></a>
            <h2> Ticket Inforcmation </h2>
            <div class="ticket">
                    <div class="column left-head">
                        <h1> Admin Airlines</h1>
                    </div>
                    
                    <div class="column right-head">
                        <h1>Boarding Pass</h1>
                    </div>

                    <div class="ticket-inner">
                      <div class="column left">
                          <h4>║▌║█║▌│║▌║▌█</h4>
                          <h4>║▌║█║▌│║▌║▌█</h4>
                          <h4>║▌║█║▌│║▌║▌█</h4>
                          <h4>║▌║█║▌│║▌║▌█</h4>
                      </div>


                      <div class="column middle">
                          <b><p>Name:</p></b>
                              <!-- <p>{$firstName, $lastName}</p> -->
                              <?php ticketName() ?>
                          <b><p>From:</p></b>
                              <p>MCO</p>
                          <b><p>To:</p></b>
                              <p>{$destination}</p>
                      </div>
          
                      <div class="column right">
                          <b><p>Name:</b> {$firstName, $lastName}</p>
                          <b><p>From:</b> MCO</p>
                          <b><p>To:</b> {$destination}</p>
                          <b><p>Date:</b> 30APR <b>Time:</b> 10:45 </p>
                          <b><p>Flight:</b> A23 <b>Gate:</b> 17 <b>Seat:</b> 23D</p>
                      </div>  
                    </div>
                               
              </div> 
          </div>
    </body>
</html>
