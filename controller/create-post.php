<?php
    require_once(__DIR__ . "/../model/database.php");
    
    $connection = new mysqli($host, $username, $password, $database);
    
    //created a vatiable for the title
    $title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);
    //created a variable for the post
    $post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING);
    
    //displays the title
    echo "<p>Title: $title</p>";
    //displays the post
    echo "<p>Post: $post</p>";
    
    $connection->close();