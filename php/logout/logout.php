<?php
//start session
session_start();

// unset all session variables
$_SESSION = array();

//destroy session
session_destroy();

//redirect user to login page
header("Location: php/login/patient/login.php");
exit();