<?php
ini_set("display_errors", 1);
require('patientSessions.php');
require('config.php');
// print_r($_POST);
// users (table)== patient  
// userPassword == patientPassword 
// userLogin== email

//// functions
function checkDbForTheUser($email, $conn)
{
    $stmt = $conn->prepare("SELECT * FROM patient WHERE email = ?"); //userLogin= email
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    $numUsers = $result->num_rows;
    if ($numUsers == 0) {
        return null;
    } else {
        $row = $result->fetch_object();
        $dbPasswordHash = $row->patientPassword;
        return $dbPasswordHash;
    }
    $stmt->close();
}

//check password
function checkPassword($patientPassword, $dbPasswordHash)
{
   echo password_verify($patientPassword, $dbPasswordHash);
    if (password_verify($patientPassword, $dbPasswordHash)) {
        unset($_SESSION['loginError']);
        $_SESSION['login'] = 1;
        $referer = "patientDashboard.php";
    } else {
        // database does not match error
        $_SESSION['loginError'] = 1;
        $referer = "patientLogin.php";
    }
    return $referer;
}

$email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
$patientPassword = filter_var($_POST['patientPassword'], FILTER_SANITIZE_STRING);
if ($email) {
    $userDbPW = checkDbForTheUser($email, $conn);
    if (!is_null($userDbPW)) {
        $referer = checkPassword($patientPassword, $userDbPW);
    } else {
        $_SESSION['loginError'] = 1;
        $referer = "patientLogin.php";
    }
} else {
    // not valid email error
    $_SESSION['loginError'] = 1;
    $referer = "patientLogin.php";
}

$conn->close();

header("Location: " . $referer);