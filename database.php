<?php
    // Global connection
    $connection = null;

    function database_connect() {
        // Use the global connection
        global $connection;

        // Server
        $server = "localhost";
        // Username
        $firstName = "root";
        $email = "root";

        // If using XAMPP, 
        //  the password is an empty string.
        $password = "root";
        // Database
        $database = "booking";

        if($connection == null) {
            $connection = mysqli_connect($server, $email, $password, $database);
        }
    }

    function database_addUser($email, $password) {
        // Use the global connection
        global $connection;

        if($connection != null) {
            // Overwrite the existing password value as a hash
            $password = password_hash($password, PASSWORD_DEFAULT);
            // Insert email and hashed password
            mysqli_query($connection, "INSERT INTO users (email, firstName, password) VALUES ('{$email}', '{$firstName}', '{$password}');");
        }
    }

    function database_verifyUser($email, $password) {
        // Use the global connection
        global $connection;

        // Create a default value
        $status = false;

        if($connection != null) {
            // Use WHERE expressions to look for email
            $results = mysqli_query($connection, "SELECT password FROM users;");
            // tried this but took out the WHERE for testing purposes
            // "SELECT password FROM users WHERE email = '{$email}' AND firstName = '{$firstName}';"
            
            // mysqli_fetch_assoc() returns either null or row data
            $row = mysqli_fetch_assoc($results);
            
            // If $row is not null, it found row data.
            if($row != null) {
                // Verify password against saved hash
                if(password_verify($password, $row["password"])) {
                    $status = true;
                }
            }
        }

        return $status;
    }

    function database_close() {
        // user global connection
        global $connection;

        if($connection != null) {
            mysqli_close($connection);
        }
    }
?>
