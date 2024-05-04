<?php


    $stmt = $mysqli->prepare("UPDATE patient SET 
    ID = ?,
    Name_ = ?, 
    Contact = ?,
    Address_ = ?,
    dateOfBirth = ?,
    gender = ?,
    WHERE assertedDoctor = ?");


    $stmt->bind_param("issssss", 
    $_POST['$id'], 
    $_POST['$Name_'], 
    $_POST['$Contact'], 
    $_POST['$Address_'], 
    $_POST['$dateOfBirth'], 
    $_POST['$gender'], 
    $_POST['$assertedDoctor'], );
    $stmt->execute();
    $stmt->close();