<?php
session_start();

require_once('php/db_functions/db_connect.php');

// check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $firstName =    $_POST['firstName'];
    $lastName =     $_POST['lastName'];
    $email =        $_POST['email'];
    $phoneNumber =  $_POST['phoneNumber'];
    $dateOfBirth =  $_POST['dateOfBirth'];
    $gender =       $_POST['gender'];
    $postCode =     $_POST['postCode'];
    $address_ =     $_POST['address_'];
    $patientPassword = ($_POST['patientPassword']);


    $hashed_password = password_hash('patientPassword', PASSWORD_DEFAULT);

$conn = makeConnection();

$created = false;


//insert data into users table
$stmt = $conn->prepare("INSERT INTO patient (firstName, lastName, email, phoneNumber, dateOfBirth, gender, postCode, address_, patientPassword) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param('sssssssss', $firstName, $lastName, $email, $phoneNumber, $dateOfBirth, $gender, $postCode, $address_, $hashed_password);


$stmt->execute();

//the logic
if ($stmt) {
    $created = true;
 }
 $stmt->close();
 $conn->close();

header('Location: patientLogin.php');
exit;

}






// <?php
// session_start();

// require_once('php/db_functions/db_connect.php');

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
//    $phoneNumber = $_POST['phoneNumber'];
//    $email = $_POST['email'];
//    $dateOfBirth = $_POST['dateOfBirth'];
//    $gender = $_POST['gender'];
//    $postCode = $_POST['postCode'];
//    $address_ = $_POST['address_'];
//    $firstName = $_POST['firstName'];
//    $lastName = $_POST['lastName'];
//    $userPassword = ($_POST['patientPassword']);




// $hashed_password = password_hash($userPassword, PASSWORD_DEFAULT);

// $conn = makeConnection();

// $created = false;

// $stmt = $conn->prepare("INSERT INTO patient (phoneNumber, email, dateOfBirth, gender, postCode, address_, firstName, lastName, userPassword) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
// $stmt->bind_param('sssssssss', $phoneNumber, $email, $dateOfBirth, $gender, $postCode, $address_, $firstName, $lastName, $hashed_password);



// $stmt->execute();

// //the logic
// if ($stmt) {
//    $created = true;
// }
// $stmt->close();
// $conn->close();

// header('Location: adminDashboard.php');
// exit;

// }