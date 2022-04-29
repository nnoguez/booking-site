<?php
    include("database.php");

    function security_validate() {
        // Set a default value
        $status = false;
        
        // Validate

        // username, password, and newPassword true
        if(isset($_POST["username"]) and isset($_POST["password"]) and isset($_POST["firstName"])) {
            $status = true;
        }

        return $status;
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
        if(!database_verifyUser($result["username"], $result["firstName"], $result["password"])) {
            // Username does not exist.
            // Add a new one.
            database_addUser($result["username"], $result["firstName"], $result["password"]);
        }
        
        // Close connection.
        database_close();
    }

    function security_sanitize() {
        // Create an array of keys username and password
        $result = [
            "username" => null,
            "password" => null,
            "firstName" => null
        ];

        if(security_validate()) {
            // After validation, sanitize text input.
            $result["username"] = htmlspecialchars($_POST["username"]);
            $result["password"] = htmlspecialchars($_POST["password"]);
            $result["firstName"] = htmlspecialchars($_POST["firstName"]);
        }

        // Return array
        return $result;
    }
?>

