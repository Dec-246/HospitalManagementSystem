<?php 

// Database connection
require_once('php/db_functions/db_connect.php');

if($_SERVER["REQUEST_METHOD"] == "POST"){

    //Retrieve form data
    $email = $_POST['email'];
    $patientPassword = $_POST['patientPassword'];

    $hashed_password = password_hash('patientPassword', PASSWORD_DEFAULT);

    //validate login
    $query = "SELECT * FROM patient WHERE email='$email' AND patientPassword='$hashed_password'";

    $result = $conn->query($query);

    if($result->num_rows == 1){

        //Login success
        header("loginSuccess.php");
        exit();
    }else{
        //Login failed
        header("loginFailed.php");
        exit();

    }
    $conn->close();
}
