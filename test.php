<?php
    include("security.php");

    if(security_loggedIn()) {
        echo ("Logged In");
    } else {
        echo ("Not Logged In");
    }


?>