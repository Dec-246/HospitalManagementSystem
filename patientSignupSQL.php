<?php
session_start();

require_once('php/db_functions/db_connect.php');

// check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $userPassword = ($_POST['password']);
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $phoneNumber = $_POST['phoneNumber'];
    $dateOfBirth = $_POST['dateOfBirth'];
    $gender = $_POST['gender'];
    $postCode = $_POST['postCode'];
    $address_ = $_POST['address_'];


    $hashed_password = password_hash($userPassword, PASSWORD_DEFAULT);

$conn = makeConnection();

$created = false;


//insert data into users table
$stmt = $conn->prepare("INSERT INTO patient (firstName, lastName, email, phoneNumber, dateOfBirth, gender, postCode, address_) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param('ssssssss', $firstName, $lastName, $email, $phoneNumber, $dateOfBirth, $gender, $postCode, $address_);

$stmt = $conn->prepare("INSERT INTO users (username, userPassword) VALUES (?, ?)");
$stmt->bind_param('ss', $username, $hashed_password);

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