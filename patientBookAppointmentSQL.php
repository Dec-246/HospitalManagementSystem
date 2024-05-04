<?php
session_start();

require_once('php/db_functions/db_connect.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$patientID = $_POST['patientID'];
$appointmentDateTime = $_POST['appointmentDateTime'];
$subject = $_POST['subject_'];


$conn = makeConnection();

$created = false;

$stmt = $conn->prepare("INSERT INTO appointment (firstName, lastName, patientID, appointmentDateTime, subject_) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param('ssiss', $firstName, $lastName, $patientID, $appointmentDateTime, $subject);

INNER JOIN patient ON (appointment.idPatient = patient.ID) ;';'


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