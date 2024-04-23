<?php

function makeConnection()
{
    $servername = "sql8.freesqldatabase.com";
    $username = "sql8697588";
    $password = "wvbCzfYPiF";
    $dbname = "sql8697588";
    $port = 3306;
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname, $port);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    else
    {
        return $conn;
    }
}
