<!-- staff user registration  -->

<?php
// Registration Logic Here
ini_set("display_errors", 1);
require('patientSessions.php');
require('config.php');

$regLogin = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
$regStaffPassword = $_POST['staffPassword'];
$regStaffPasswordConfirm = $_POST['staffPasswordConfirm'];
$regFirstName = $_POST['firstName'];
$regLastName = $_POST['lastName'];
$regPhoneNumber = $_POST['phoneNumber'];
$regGender = $_POST['gender'];
$regHireDate = $_POST['hireDate'];
$regDepartmentID = $_POST['department_id'];
$regStaffRole = $_POST['staffRole'];
$regSalary = $_POST['salary'];

if (!$regLogin) {
    $_SESSION['regError'] = 1;
    $referer = "adminCreateStaffForm.php";
    header("Location: ". $referer); 
    exit;
}

//check if password correct
if ($regStaffPassword != $regStaffPasswordConfirm || $regStaffPassword == "") {  //regPassword ==  regPatientPassword
    $_SESSION['regError'] = 2; 
    $referer = "adminCreateStaffForm.php"; 
    header("Location: ../".$referer); 
    exit;
} else { 

    // Password is valid 
    // Code to Check if the user has already registered
    $stmt = $conn->prepare("SELECT * FROM staff WHERE email = ?"); //userLogin== email
    $stmt->bind_param("s", $regLogin);
    $stmt->execute();
    $stmt->store_result();
    $numUsers = $stmt->num_rows;

    if ($numUsers == 1) {
        $_SESSION['regError'] = 3;
        $referer = "adminCreateStaffForm.php";
    } else {

        // Insert the New User into the Database
        $stmt = $conn->prepare("INSERT INTO staff(email, staffPassword, firstName, lastName, phoneNumber, gender, hireDate, department_id, staffRole) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)"); // users== patient  //userPassword == patientPassword
        $hashedPw = password_hash($regStaffPassword, PASSWORD_BCRYPT);
        $stmt->bind_param("sssssssis", $regLogin, $hashedPw, $regFirstName, $regLastName, $regPhoneNumber, $regGender, $regHireDate, $regDepartmentID, $regStaffRole);
        $stmt->execute();

        if (isset($_SESSION['regError'])) {
            unset($_SESSION['regError']);
        }
        $referer = "adminDashboard.php";
    }
}

$stmt->close();
$conn->close();

header("Location: ".$referer); // send user to diff page 
exit;

