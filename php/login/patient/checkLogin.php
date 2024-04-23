<?php
//start session
session_start();

// set $loggedin to false
$loggedin = false;

//get current page filename
$currentPage = basename($_SERVER['PHP_SELF']);

// check user isn't already logged in (in session) and not on log-in or sign-up page
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    //if user is attempting to access pages other than login or register, redirect them
    if ($currentPage != 'php/login/patient/login.php' && $currentPage != 'php/signup/patientSignup.php') {
        header('Location: php/login/patient/login.php'); //redirect to log-in page
        exit;
    }
} else {
    //if user is logged in, set $loggedin to true
    $loggedin = true;

    //database connection for mysql
    $conn = 'php/config.php';
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error){
        die("Connection failed! ");
    }

    //check if username is stored in users' session
    if (isset($_SESSION['username'])) {

        $username = $_SESSION['username'];

        //sql query to get user information
        $query = "SELECT salt, hashed_password
                FROM users
                WHERE username = :username";

        $stmt = $conn->prepare($query);
        $stmt->bind_param(':username', $username);

        $result = $stmt->execute();

        if ($result) {
            $user = $result->fetchArray(SQLITE3_ASSOC);
            if($user) {
                $_SESSION['salt'] = $user['salt'];
                $_SESSION['username'] = $user['username'];
        } else {
            //if no user data found, handle error or force log-out
            echo "No user data available. You are being logged out.";
            //clear session data
            $_SESSION = array();
            session_destroy();
            //redirect to log-in page
            header('Location: php/login/patient/login.php');
            exit;
        }
    }
} else {
    echo "A username has not been set in the session... Logging out.";

    //clear session data
    $_SESSION = array();
    session_destroy();

    //redirect to log-in page
    header('Location: Location: php/login/patient/login.php');
    exit;
}
}