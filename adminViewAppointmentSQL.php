<?php
// function getStaff()

    // require_once('php/db_functions/db_connect.php');
    
    $sql = 'SELECT appointment.ID, appointment.dateTime, appointment.subject, 
    CONCAT(patient.firstName," ",patient.lastName) AS "patientName",
    CONCAT(staff.firstName," ",staff.lastName) AS "staffName"
    FROM appointment

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


// $sql = 'SELECT employees.employee_id, CONCAT(employees.first_name," ",employees.last_name) AS "Name", 
//             jobs.job_title, departments.department_name, 
//             CONCAT(locations.street_address," ", locations.postal_code," ",locations.city," ",locations.state_province) AS "Location", 
//             countries.country_name FROM employees 

//             INNER JOIN departments ON (employees.department_id = departments.department_id) 
//             INNER JOIN locations on (locations.location_id = departments.location_id) 
//             INNER JOIN countries on (countries.country_id = locations.country_id) 
//             INNER JOIN jobs ON (employees.job_id = jobs.job_id) order by employees.employee_id desc';