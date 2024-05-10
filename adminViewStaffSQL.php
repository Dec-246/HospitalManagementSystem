<?php

    //Code selects data from the columns within the staff table
    $sql = 'SELECT staff.ID, CONCAT(staff.firstName," ",staff.lastName) AS "Name", 
    CONCAT (staff.phoneNumber," | ",staff.email) AS "Contact",
    staff.staffRole, staff.salary, staff.hireDate FROM staff';


$result = mysqli_query($conn, $sql);
$staff = array(); //Initialize the array
while ($row = mysqli_fetch_assoc($result)) {

    $staff[] = $row; 
}

