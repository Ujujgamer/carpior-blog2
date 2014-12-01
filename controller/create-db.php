<?php
    //selects the file with the information we want to use
    require_once(__DIR__ . "/../model/database.php");
    //created a connection to the server
    $connection = new mysqli($host, $user, $password);
    //checks if there was a connection error; displays error message if there is
    if($connection->connect_error) {
        die("Error: " . $connection->connect_error);
    }
    
    //acceses database from mySQL server
    $exists = $connection->select_db($database);
            
    //checks if database doesn't exist
    if(!$exists) {
        //creates a query and sends command to server
        $query = $connection->query("CREATE DATABASE $database");
        //checks if query is successful
        if($query) {
            echo "Successfully created a database " . $database;
        }
    }
    else {
        //shows the database already exists
        echo "Database already exists.";
    }
    
    //closes the connection
    $connection->close();