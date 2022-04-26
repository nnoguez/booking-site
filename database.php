<?php
    // Global connection
    $connection = null;

    function database_connect() {
        // Use the global connection
        global $connection;

        // Server
        $server = "localhost";
        // Username
        $username = "root";
        // If using XAMPP, 
        //  the password is an empty string.
        $password = "root";
        // Database
        $database = "lab";

        if($connection == null) {
            $connection = mysqli_connect($server, $email, $firstName, $lastName, $password, $database);
        }
    }

    function database_addUser($email, $firstName, $lastName, $password) {
        // Use the global connection
        global $connection;

        if($connection != null) {
            // Overwrite the existing password value as a hash
            $password = password_hash($password, PASSWORD_DEFAULT);
            // Insert username and hashed password
            mysqli_query($connection, "INSERT INTO users (username, password) VALUES ('{$email}', '{$password}');");
        }
    }

    function database_verifyUser($email, $firstName, $lastName, $password) {
        // Use the global connection
        global $connection;

        // Create a default value
        $status = false;

        if($connection != null) {
            // Use WHERE expressions to look for username
            $results = mysqli_query($connection, "SELECT password FROM users WHERE username = '{$email}';");
            
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

    // starting lab 10 changes 
    function database_deleteUser($email, $password) {
        // Use the global connection
        global $connection;
        // Open connection.
        database_connect();
        // verify the user exists before changing any data
        // database_verifyUser($username, $password);
            // communicate with the database server
            // should accept a username and password
        if($connection != null) {
            // if the user exists, remove the row from the table users
            if( database_verifyUser($email, $firstName, $lastName, $password)) {
                mysqli_query($connection, "DELETE FROM users WHERE username = '{$email}';");
            }
            // Close connection.
            database_close();
        }
    }


    function database_updatePassword($email, $password, $newPassword) {
        // Use the global connection
        global $connection;

        // Open connection.
        database_connect();
        // verify the user exists before changing any data
        // should accept a username, original password, and new password
        // communicate with the database server
        if($connection != null) {
            // if the user exists, update the saved password hash in the table users
            // UPDATE users SET password = "new password" WHERE username = $username;
            if(database_verifyUser($email, $password)) {
                // $newPasswordText = $_POST['newPassword'];
                $newPassword = password_hash($newPassword, PASSWORD_DEFAULT);
                mysqli_query($connection, "UPDATE users SET password = '{$newPassword}' WHERE username = '{$email}';");
            }
            // Close connection.
            // database_close();
        }
    }
?>
