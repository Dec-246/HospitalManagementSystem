<?php
    // selects the mentioned columns from the appointment table
    $sql = 'SELECT appointment.ID, appointment.dateTime, appointment.subject, 
    CONCAT(patient.firstName," ",patient.lastName) AS "patientName",
    CONCAT(staff.firstName," ",staff.lastName) AS "staffName"
    FROM appointment

-- i have used the code below to join the patient and staff tables onto the appointment 
-- table so i get fetch data from the staff and patient tables

    INNER JOIN patient ON (appointment.idPatient = patient.ID)
    INNER JOIN staff ON (appointment.idDoctor = staff.ID)';

$result = mysqli_query($conn, $sql);
$staff = array();
$patient = array(); //Initialize the array
$appointment = array();
while ($row = mysqli_fetch_assoc($result)) {

// the code below outputs the rows from the tables mentioned
    $staff[] = $row; 
    $patient[] = $row; 
    $appointment[] = $row; 
}