<?php
require('patientSessions.php');
require('config.php');

// Registration Logic Here
$regLogin = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
$regPatientPassword = $_POST['patientPassword'];
$regPasswordConfirm = $_POST['passwordConfirm'];
$regFirstName = $_POST['firstName'];
$regLastName = $_POST['lastName'];
$regPhoneNumber = $_POST['phoneNumber'];
$regGender = $_POST['gender'];
$regDateOfBirth = $_POST['dateOfBirth'];
$regPostCode = $_POST['postCode'];
$regAddress_ = $_POST['address_'];

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
        $stmt = $conn->prepare("INSERT INTO patient(email, patientPassword, firstName, lastName, phoneNumber, gender, dateOfBirth, postCode, address_) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)"); // users== patient  //userPassword == patientPassword
        $hashedPw = password_hash($regPatientPassword, PASSWORD_BCRYPT);
        $stmt->bind_param("sssssssss", $regLogin, $hashedPw, $regFirstName, $regLastName, $regPhoneNumber, $regGender, $regDateOfBirth, $regPostCode, $regAddress_);
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

