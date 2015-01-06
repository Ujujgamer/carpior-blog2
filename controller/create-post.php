<?php
    //created a vatiable for the title
    $title = filer_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);
    //created a variable for the post
    $post = filer_input(INPUT_POST, "post", FILTER_SANITIZE_STRING);
    
    //displays the title
    echo "<p>Title: $title</p>";
    //displays the post
    echo "<p>Post: $post</p>";