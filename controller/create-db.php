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
    
    //creates a table and assigns specific columns
    $query = $connection->query("CREATE TABLE posts ("
            //generates random ids
            . "id int(11) NOT NULL AUTO_INCREMENT,"
            //title of the post
            . "title varchar (255) NOT NULL,"
            //blog post information
            . "post text NOT NULL,"
            //sets the primary key to id
            . "PRIMARY KEY (id))");
    
    //checks if the table was succesfully created
    if($query) {
        echo "<br>Succesfully create table: posts";
    }
    //errors out if a table can't be created
    else {
        echo "<br>$connection->error";
    }
    //closes the connection
    $connection->close();