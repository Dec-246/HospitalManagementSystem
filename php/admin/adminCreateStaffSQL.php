<?php

include_once("db_connect.php");

$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$phoneNumber = $_POST['phoneNumber'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$staffRole = $_POST['staffRole'];
$salary = $_POST['salary'];
$hireDate = $_POST['hireDate'];
$department_id = $_POST['department_id'];
$staffPassword = hash_password($_POST['password_hash']);

$conn = makeConnection();

$stmt = $conn->prepare("INSERT INTO staff (firstName, lastName, phoneNumber, email, gender, staffRole, salary, hireDate, department_id, staffPassword) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param('ssssssdsis', $firstName, $lastName, $phoneNumber, $email, $gender, $staffRole, $salary, $hireDate, $department_id, $staffPassword);

$stmt->execute();

//the logic
//if ($stmt) {
//    $created = true;
//}
$stmt->close();
$conn->close();

header('Location: index.php');
exit;
