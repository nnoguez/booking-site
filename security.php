<?php
    include("database.php");

    function security_validate() {
        // Set a default value
        $status = false;
        
        // Validate
        // username and password true, newPassword no
        if((isset($_POST["username"]) and isset($_POST["firstName"]) and isset($_POST["lastName"])and isset($_POST["password"])) and (!isset($_POST["newPassword"]))) {
            $status = true;
        }
        
        // username, password, and newPassword true
        if(isset($_POST["username"]) and isset($_POST["firstName"]) and isset($_POST["lastName"]) and isset($_POST["password"]) and isset($_POST["newPassword"])) {
            $status = true;
        }

        return $status;
    }

    function security_login() {
        // Set a default value
        $status = false;
        // Validate and sanitize
        $result = security_sanitize();
        // Open connection
        database_connect();
        // Use the connection
        $status = database_verifyUser($result["username"], $result["firstName"], $result["lastName"], $result["password"]);
        // Close connection
        database_close();
        // Check status
        if($status) {
            // Set a cookie
            setcookie("login", "yes");
        }
    }

    function security_addNewUser() {
        // Validate and sanitize.
        $result = security_sanitize();
        // Open connection.
        database_connect();

        // Use connection.
        //
        // We want to make sure we don't add
        //  duplicate values.
        if(!database_verifyUser($result["username"], $result["firstName"], $result["lastName"], $result["password"])) {
            // Username does not exist.
            // Add a new one.
            database_addUser($result["username"], $result["firstName"], $result["lastName"], $result["password"]);
        }
        
        // Close connection.
        database_close();
    }

    function security_loggedIn() {
        // Does a cookie exist?
        return isset($_COOKIE["login"]);
    }

    function security_logout() {
        // Set a cookie to the past
        setcookie("login", "yes", time() - 10);
    }

    function security_sanitize() {
        // Create an array of keys username and password
        $result = [
            "username" => null,
            "firstName" => null,
            "lastName" => null,
            "password" => null,
            "newPassword" => null
        ];

        if(security_validate()) {
            // After validation, sanitize text input.
            $result["username"] = htmlspecialchars($_POST["username"]);
            $result["firstName"] = htmlspecialchars($_POST["firstName"]);
            $result["lastName"] = htmlspecialchars($_POST["lastName"]);
            $result["password"] = htmlspecialchars($_POST["password"]);
            $result["newPassword"] = htmlspecialchars($_POST["newPassword"]);
        }

        // Return array
        return $result;
    }

    function security_addDestination() {
        database_addDestination();
    }
?>



