<?php
// function getStaff()

    // require_once('php/db_functions/db_connect.php');

    $sql = 'SELECT patient.ID, CONCAT(patient.firstName," ",patient.lastName) AS "Name_", 
    CONCAT (patient.phoneNumber," | ",patient.email) AS "Contact",
    CONCAT (patient.postCode," | ",patient.address_) AS "Address_",
    CONCAT (patient.registeredDoctor," | ",patient.assignedStaffID) AS "assertedDoctor",
    patient.dateOfBirth, patient.gender FROM patient';



    // $sql = 'UPDATE patient SET Contact = $contact WHERE ID = $ID';

    // $sql = "UPDATE patient SET 'Name' = $Name WHERE ID = $ID";
    // $sql = "UPDATE patient SET 'Contact' = $Contact WHERE ID = $ID";
    // $sql = "UPDATE patient SET 'Address' = $Address WHERE ID = $ID";
    // $sql = "UPDATE patient SET 'assertedDoctor' = $assertedDoctor WHERE ID = $ID";
    // $sql = "UPDATE patient SET 'dateOfBirth' = $dateOfBirth WHERE ID = $ID";
    // $sql = "UPDATE patient SET 'gender' = $gender WHERE ID = $ID";

// $sql = 'UPDATE patient.ID, CONCAT(patient.firstName," ",patient.lastName) AS "Name", 
// CONCAT (patient.phoneNumber," | ",patient.email) AS "Contact",
// CONCAT (patient.postCode," | ",patient.address_) AS "Address",
// CONCAT (patient.registeredDoctor," | ",patient.assignedStaffID) AS "assertedDoctor",
// patient.dateOfBirth, patient.gender FROM patient';

    // $sql = 'UPDATE patient SET patient.ID=?, Name=?, patient.Contact=?, patient.Address=?, patient.assertedDocter=?, patient.dateOfBirth=?, patient.gender=? WHERE updatePatient.php=?'

$result = mysqli_query($conn, $sql);
$patient = array(); //Initialize the array
while ($row = mysqli_fetch_assoc($result)) {

    //while ($row = $result->fetch_assoc()) { //previous code for above
    $patient[] = $row; 
}