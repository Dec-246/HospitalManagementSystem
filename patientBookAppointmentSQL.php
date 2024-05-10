<?php
session_start();

require_once('php/db_functions/db_connect.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$patientID = $_POST['idPatient'];
$appointmentDateTime = $_POST['dateTime'];
$subject = $_POST['subject'];

$conn = makeConnection();

$created = false;

//sends the following data into the appointment table
$stmt = $conn->prepare("INSERT INTO appointment (idPatient, dateTime, subject) VALUES (?, ?, ?)");
$stmt->bind_param('iss', $patientID, $appointmentDateTime, $subject);

$stmt->execute();

//the logic
if ($stmt) {
   $created = true;
}
$stmt->close();
$conn->close();

//redirect user to patient dashboard
header('Location: patientDashboard.php');
exit;

}