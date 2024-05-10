<?php

    $sql = 'SELECT patient.ID, CONCAT(patient.firstName," ",patient.lastName) AS "Name_", 
    CONCAT (patient.phoneNumber," | ",patient.email) AS "Contact",
    CONCAT (patient.postCode," | ",patient.address_) AS "Address_",
    CONCAT (patient.registeredDoctor," | ",patient.assignedStaffID) AS "assertedDoctor",
    patient.dateOfBirth, patient.gender FROM patient';


$result = mysqli_query($conn, $sql);
$patient = array(); //Initialize the array
while ($row = mysqli_fetch_assoc($result)) {

    $patient[] = $row; 
}