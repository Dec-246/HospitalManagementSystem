<?php
function getEmployees()
{
    include_once('db_conn.php');
    $sql = 'SELECT employees.employee_id, CONCAT(employees.first_name," ",employees.last_name) AS "Name", 
            jobs.job_title, departments.department_name, 
            CONCAT(locations.street_address," ", locations.postal_code," ",locations.city," ",locations.state_province) AS "Location", 
            countries.country_name FROM employees 
            INNER JOIN departments ON (employees.department_id = departments.department_id) 
            INNER JOIN locations on (locations.location_id = departments.location_id) 
            INNER JOIN countries on (countries.country_id = locations.country_id) 
            INNER JOIN jobs ON (employees.job_id = jobs.job_id) order by employees.employee_id desc';
    $result = mysqli_query($conn, $sql);
    while ($row = $result->fetch_assoc()) { 
        $arrayResult[] = $row; 
    }
    return $arrayResult;
}
