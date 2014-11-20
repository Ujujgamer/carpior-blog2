<?php
    //selects the file with the information we want to use
    require_once(__DIR__ . "/../model/database.php");
    //created a connection the server
    $connection = new mysqli($host, $user, $password);
    //checks if there was a connection error; displays error message if there is
    if($connection->connect_error) {
        die("Error: " . $connection->connect_error);
    }
    //if no errors; display message and get host info
    else {
        echo "Success" . $connection->host_info;
    }
    
    //closes the connection
    $connection->close();