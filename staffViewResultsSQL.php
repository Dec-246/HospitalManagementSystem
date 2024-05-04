<?php
    $sql = 'SELECT results.ID, results.Diagnosis, results.healthAssessment, results.tests, 
    CONCAT(patient.firstName," ",patient.lastName) AS "Name",
    patient.dateOfBirth FROM results

    INNER JOIN appointment ON (results.appointmentID = appointment.ID)
    INNER JOIN patient ON (appointment.idPatient = patient.ID)';


$result = mysqli_query($conn, $sql);
$results = array(); //Initialize the array
while ($row = mysqli_fetch_assoc($result)) {

    $results[] = $row;
}

// echo "<p> hello world</p>";
//OG table is #employee

// $sql = 'SELECT employees.employee_id, 
// CONCAT(employees.first_name," ",employees.last_name) AS "Name", 

// jobs.job_title, departments.department_name, 
            
// CONCAT(locations.street_address," ", locations.postal_code," ",locations.city," ",locations.state_province) AS "Location", 
// countries.country_name FROM employees 


// INNER JOIN departments ON (employees.department_id = departments.department_id) 
// INNER JOIN locations on (locations.location_id = departments.location_id) 
// INNER JOIN countries on (countries.country_id = locations.country_id) 
// INNER JOIN jobs ON (employees.job_id = jobs.job_id) order by employees.employee_id desc';