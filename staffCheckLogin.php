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
    $stmt = $conn->prepare("SELECT * FROM staff WHERE email = ?"); //userLogin= email
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    $numUsers = $result->num_rows;
    if ($numUsers == 0) {
        return null;
    } else {
        $row = $result->fetch_object();
        $dbPasswordHash = $row->staffPassword;
        return $dbPasswordHash;
    }
    $stmt->close();
}

//check password
function checkPassword($staffPassword, $dbPasswordHash)
{
   echo password_verify($staffPassword, $dbPasswordHash);
    if (password_verify($staffPassword, $dbPasswordHash)) {
        unset($_SESSION['loginError']);
        $_SESSION['login'] = 1;
        $referer = "staffDashboard.php";
    } else {
        // database does not match error
        $_SESSION['loginError'] = 1;
        $referer = "staffLogin.php";
    }
    return $referer;
}

$email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
$staffPassword = filter_var($_POST['staffPassword'], FILTER_SANITIZE_STRING);
if ($email) {
    $userDbPW = checkDbForTheUser($email, $conn);
    if (!is_null($userDbPW)) {
        $referer = checkPassword($staffPassword, $userDbPW);
    } else {
        $_SESSION['loginError'] = 1;
        $referer = "staffLogin.php";
    }
} else {
    // not valid email error
    $_SESSION['loginError'] = 1;
    $referer = "staffLogin.php";
}

$conn->close();

header("Location: " . $referer);

