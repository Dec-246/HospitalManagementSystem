<?php

include_once("db_connect.php");
include_once("hash_password.php");

function create_user($firstName, $lastName, $phoneNumber, $email, $gender, $staffRole, $salary, $hireDate, $department_id, $password)
{
    $created = false;
    $conn = makeConnection();
    $password = hash_password($password);
    $stmt = $conn->prepare("INSERT INTO staff (firstName, lastName, phoneNumber, email, gender, staffRole, salary, hireDate, department_id, password_hash) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param('ssssssssss', $firstName, $lastName, $phoneNumber, $email, $gender, $staffRole, $salary, $hireDate, $department_id, $staffPassword);

    $stmt->execute();

    //the logic
    if ($stmt) {
        $created = true;
    }
    $stmt->close();
    $conn->close();

    return $created;
}

if (isset($_POST['submit'])) {

    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $phoneNumber = $_POST['phoneNumber'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $staffRole = $_POST['staffRole'];
    $salary = $_POST['salary'];
    $hireDate = $_POST['hireDate'];
    $department_id = $_POST['department_id'];
    $staffPassword = hash_password($_POST['password_hash']);

    $conn = makeConnection();

    $stmt = $conn->prepare("INSERT INTO staff (firstName, lastName, phoneNumber, email, gender, staffRole, salary, hireDate, department_id, staffPassword) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param('ssssssdsis', $firstName, $lastName, $phoneNumber, $email, $gender, $staffRole, $salary, $hireDate, $department_id, $staffPassword);

    $stmt->execute();

    //the logic
    //if ($stmt) {
    //    $created = true;
    //}
    $stmt->close();
    $conn->close();

    header('Location: createStaff.php');
    exit;
}

//create_user("Hello", "hello");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/global.css" type="text/css" />

    <link rel="stylesheet" href="css/mobile.css" type="text/css" media="only screen and (max-width : 607px)" />

    <link rel="stylesheet" href="css/desktop.css" type="text/css" media="only screen and (min-width : 608px)" />

</head>

<body>
    <div class="">

        <div class="navbarContainer">
            <?php
            include("php/includes/navbar.php");
            ?>
        </div>

        <div class="header">
            <?php
            include("php/includes/header.php");
            ?>
        </div>
        <main>
            <form method="post" action="createStaffSQL.php">
                <div class="createStaffForm">
                    <input type="text" name="firstName" placeholder="firstName"><br>
                </div>

                <div class="createStaffForm">
                    <input type="text" name="lastName" placeholder="lastName"><br>
                </div>

                <div class="createStaffForm">
                    <input type="text" name="phoneNumber" placeholder="phoneNumber"><br>
                </div>

                <div class="createStaffForm">
                    <input type="text" name="email" placeholder="email"><br>
                </div>

                <div class="createStaffForm">
                    <input type="text" name="gender" placeholder="gender"><br>
                </div>

                <div class="createStaffForm">
                    <input type="text" name="staffRole" placeholder="staffRole"><br>
                </div>

                <div class="createStaffForm">
                    <input type="text" name="salary" placeholder="salary"><br>
                </div>

                <div class="createStaffForm">
                    <input type="date" name="hireDate" placeholder="hireDate"><br>
                </div>

                <div class="createStaffForm">
                    <input type="text" name="department_id" placeholder="department_id"><br>
                </div>

                <div class="createStaffForm">
                    <input type="password" name="password_hash" placeholder="password_hash"><br><br>
                </div>

                <div class="submitNewStaff">
                    <button type="submit" name="submit">Submit</button>
                </div>
            </form>
        </main>
    </div>

    <div class="footer">
        <?php
        include("php/includes/footer.php");
        ?>
    </div>
</body>

</html>