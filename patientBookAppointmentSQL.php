<?php
session_start();

require_once('php/db_functions/db_connect.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$patientID = $_POST['idPatient'];
$appointmentDateTime = $_POST['dateTime'];
$subject = $_POST['subject_'];


// *INSERT DATA INTO A DATABASE*
// $username = "Patrick";
    // $patientPassword = "rock3";
    // $hashed_password = password_hash($patientPassword, PASSWORD_DEFAULT);


    // $sql = "INSERT INTO patient (email, patientPassword)
    //         VALUES ('$username', '$hashed_password')";

    // try {
    //     mysqli_query($conn, $sql);
    //     echo "user is now registered";

    // }
    // catch (mysqli_sql_exception ) {
    //     echo "could not register user";
    // }


// $sql = "INSERT INTO appointment (dateTime, subject_,  idPatient)
//     //         VALUES ('$appointmentDateTime', '$subject', 'patientID')";

//     try {
//         mysqli_query($conn, $sql);
//         echo "You have booked an appointment!";

//     }
//     catch (mysqli_sql_exception ) {
//         echo "Appointment could not be made";
//     }




$conn = makeConnection();

$created = false;

$stmt = $conn->prepare("INSERT INTO appointment (idPatient, dateTime, subject_) VALUES (?, ?, ?)");
$stmt->bind_param('iss', $patientID, $appointmentDateTime, $subject);

// firstName, lastName, // $firstName, $lastName, 
// INNER JOIN patient ON (appointment.idPatient = patient.ID) ;';'


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