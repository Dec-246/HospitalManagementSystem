<?php
session_start();

require_once('php/db_functions/db_connect.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$phoneNumber = $_POST['phoneNumber'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$staffRole = $_POST['staffRole'];
$salary = $_POST['salary'];
$hireDate = $_POST['hireDate'];
$department_id = $_POST['department_id'];
$staffPassword = ($_POST['password']);


$hashed_password = password_hash($staffPassword, PASSWORD_DEFAULT);

$conn = makeConnection();

$created = false;

$stmt = $conn->prepare("INSERT INTO staff (firstName, lastName, phoneNumber, email, gender, staffRole, salary, hireDate, department_id, staffPassword) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param('ssssssdsis', $firstName, $lastName, $phoneNumber, $email, $gender, $staffRole, $salary, $hireDate, $department_id, $hashed_password);



$stmt->execute();

//the logic
if ($stmt) {
   $created = true;
}
$stmt->close();
$conn->close();

header('Location: adminDashboard.php');
exit;

}