<?php
// Registration Logic Here
ini_set("display_errors", 1);
require('patientSessions.php');
require('config.php');

$regLogin = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
$regPatientPassword = $_POST['patientPassword'];
$regPasswordConfirm = $_POST['passwordConfirm'];

if (!$regLogin) {
    $_SESSION['regError'] = 1;
    $referer = "patientRegister.php";
    header("Location: ". $referer); 
    exit;
}

//check if password correct
if ($regPatientPassword != $regPasswordConfirm || $regPatientPassword == "") {  //regPassword ==  regPatientPassword
    $_SESSION['regError'] = 2; 
    $referer = "patientRegister.php"; 
    header("Location: ../".$referer); 
    exit;
} else { 

    // Password is valid 
    // Code to Check if the user has already registered
    $stmt = $conn->prepare("SELECT * FROM patient WHERE email = ?"); //userLogin== email
    $stmt->bind_param("s", $regLogin);
    $stmt->execute();
    $stmt->store_result();
    $numUsers = $stmt->num_rows;

    if ($numUsers == 1) {
        $_SESSION['regError'] = 3;
        $referer = "patientRegister.php";
    } else {
        // Insert the New User into the Database
        $stmt = $conn->prepare("INSERT INTO patient(email, patientPassword) VALUES (?, ?)"); // users== patient  //userPassword == patientPassword
        $hashedPw = password_hash($regPatientPassword, PASSWORD_BCRYPT);
        $stmt->bind_param("ss", $regLogin, $hashedPw);
        $stmt->execute();

        if (isset($_SESSION['regError'])) {
            unset($_SESSION['regError']);
        }
        $referer = "patientLogin.php";
    }
}

$stmt->close();
$conn->close();

header("Location: ".$referer); // send user to diff page 
exit;
