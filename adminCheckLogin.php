<?php
ini_set("display_errors", 1);
require('patientSessions.php');
require('config.php');
// print_r($_POST);


//// functions
function checkDbForTheUser($email, $conn)
{
    $stmt = $conn->prepare("SELECT * FROM admin_ WHERE email = ?"); //userLogin= email
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    $numUsers = $result->num_rows;
    if ($numUsers == 0) {
        return null;
    } else {
        $row = $result->fetch_object();
        $dbPasswordHash = $row->adminPassword;
        return $dbPasswordHash;
    }
    $stmt->close();
}

//check password
function checkPassword($adminPassword, $dbPasswordHash)
{
   echo password_verify($adminPassword, $dbPasswordHash);
    if (password_verify($adminPassword, $dbPasswordHash)) {
        unset($_SESSION['loginError']);
        $_SESSION['login'] = 1;
        // $referer = "adminDashboard.php";
    } else {
        // database does not match error
        $_SESSION['loginError'] = 1;
        $referer = "adminLogin.php";
    }
    return $referer;
}

$email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
$adminPassword = filter_var($_POST['adminPassword'], FILTER_SANITIZE_STRING);
if ($email) {
    $userDbPW = checkDbForTheUser($email, $conn);
    if (!is_null($userDbPW)) {
        $referer = checkPassword($adminPassword, $userDbPW);
    } else {
        $_SESSION['loginError'] = 1;
        $referer = "adminLogin.php";
    }
} else {
    // not valid email error
    $_SESSION['loginError'] = 1;
    $referer = "adminLogin.php";
}

$conn->close();

header("Location: adminDashboard.php" . $referer);