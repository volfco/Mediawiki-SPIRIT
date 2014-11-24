<?php

    if(!isset($_GET['title']))
        $url = "Main_Page";
    else
        $url = $_GET['title'];


    header("HTTP/1.1 301 Moved Permanently");
    header("Location: http://ritpedia.rit.edu/".$title);
?>