<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $db = "project_db";
    $conn = new mysqli($server, $username, $password, $db);
    if($conn ->connect_error){
        die("Error boss". $conn->connect_error);
    }
?>