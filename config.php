<?php
    $servername = "sql8.freesqldatabase.com";
    $username = "sql8697588";
    $password = "wvbCzfYPiF";
    $dbname = "sql8697588";
    
    //create server connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    //check server connection
    if ($conn->connect_error){
        die("Connection failed; " . $conn->connect_error);
    }

    // return $conn;
