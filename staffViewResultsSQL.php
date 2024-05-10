<?php
// gets data from columns from results table
    $sql = 'SELECT results.ID, results.Diagnosis, results.healthAssessment, results.tests, 
    CONCAT(patient.firstName," ",patient.lastName) AS "Name",
    patient.dateOfBirth FROM results

-- includes data from appointment and patient table
    INNER JOIN appointment ON (results.appointmentID = appointment.ID)
    INNER JOIN patient ON (appointment.idPatient = patient.ID)';


$result = mysqli_query($conn, $sql);
$results = array(); //Initialize the array
while ($row = mysqli_fetch_assoc($result)) {

    $results[] = $row;
}

