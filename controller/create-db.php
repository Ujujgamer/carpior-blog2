<?php
    //selects the file we want to use
    require_once("../model/database.php");
    //created a connection the server
    $connection = new mysqli($host, $user, $password);