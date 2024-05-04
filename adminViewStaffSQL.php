<?php
    $sql = 'SELECT staff.ID, CONCAT(staff.firstName," ",staff.lastName) AS "Name", 
    CONCAT (staff.phoneNumber," | ",staff.email) AS "Contact",
    staff.staffRole, staff.salary, staff.hireDate FROM staff';


$result = mysqli_query($conn, $sql);
$staff = array(); //Initialize the array
while ($row = mysqli_fetch_assoc($result)) {

    $staff[] = $row; 
}
// return $arrayResult;







//  *FROM EXAMPLE*
//  jobs.job_title, departments.department_name, 
//  CONCAT(locations.street_address," ", locations.postal_code," ",locations.city," ",locations.state_province) AS "Location", 
//  countries.country_name FROM employees


//  INNER JOIN departments ON (employees.department_id = departments.department_id) 
//  INNER JOIN locations on (locations.location_id = departments.location_id) 
//  INNER JOIN countries on (countries.country_id = locations.country_id) 
//  INNER JOIN jobs ON (employees.job_id = jobs.job_id) order by employees.employee_id desc';