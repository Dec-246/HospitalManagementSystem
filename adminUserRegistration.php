<?php
// Registration Logic Here
ini_set("display_errors", 1);
require('patientSessions.php');
require('config.php');

$regLogin = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
$regAdminPassword = $_POST['adminPassword'];
$regPasswordConfirm = $_POST['passwordConfirm'];
$regContactNumber = $_POST['contactNumber'];


if (!$regLogin) {
    $_SESSION['regError'] = 1;
    $referer = "adminRegister.php";
    header("Location: ". $referer); 
    exit;
}

//check if password correct
if ($regAdminPassword != $regPasswordConfirm || $regAdminPassword == "") { 
    $_SESSION['regError'] = 2; 
    $referer = "adminRegister.php"; 
    header("Location: ../".$referer); 
    exit;
} else { 

    // Password is valid 
    // Check if the admin has already registered
    $stmt = $conn->prepare("SELECT * FROM admin_ WHERE email = ?");
    $stmt->bind_param("s", $regLogin);
    $stmt->execute();
    $stmt->store_result();
    $numUsers = $stmt->num_rows;

    if ($numUsers == 1) {
        $_SESSION['regError'] = 3;
        $referer = "adminRegister.php";
    } else {

      

        // Insert the New admin user into the Database
        $stmt = $conn->prepare("INSERT INTO admin_(email, adminPassword, contactNumber) VALUES (?, ?, ?)"); // users== patient  //userPassword == patientPassword
        $hashedPw = password_hash($regAdminPassword, PASSWORD_BCRYPT);
        $stmt->bind_param("sss", $regLogin, $hashedPw, $regContactNumber);
        $stmt->execute();

        if (isset($_SESSION['regError'])) {
            unset($_SESSION['regError']);
        }
        $referer = "adminLogin.php";
    }
}

$stmt->close();
$conn->close();

header("Location: ".$referer); // send user to different page 
exit;

