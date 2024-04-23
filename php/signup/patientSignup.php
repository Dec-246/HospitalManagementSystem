<?php
include("php/includes/navbar.php");
?>
<?php
    // begin database connection
    $conn = 'php/config.php';
    $conn = new mysqli($servername, $username, $password, $dbname);

    // check if form is submitted
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['$username'];
            $password = $_POST['$password'];
            $firstName = $_POST['$firstName'];
            $lastName = $_POST['$lastName'];
            $email = $_POST['$email'];
            $phoneNumber = $_POST['$phoneNumber'];
            $dateOfBirth = $_POST['$dateOfBirth'];
            $gender = $_POST['$gender'];
            $postCode = $_POST['$postCode'];
            $address_ = $_POST['$address_'];

        // encrypt data
        $salt = bin2hex(random_bytes(16));

        //hashing password for database
        $hashed_password = hash('sha256', $password . $salt);

        //insert data into users table
        $stmt = $conn->prepare("INSERT INTO users (username, hashed_password, salt) VALUES (:username, :hashed_password, :salt)");
        $stmt->bind_param(':username', $username);
        $stmt->bind_param(':hashed_password', $hashed_password);
        $stmt->bind_param(':salt', $salt);
        $stmt->execute();


        // insert data into patient table
        $stmt = $conn->prepare("INSERT INTO patient (firstName, lastName, email, phoneNumber, dateOfBirth, gender, postCode, address_) VALUES (:firstName, :lastName, :email, :phoneNumber, :dateOfBirth, :gender, :postCode, :address_)");
        $stmt->bind_param(':firstName', $firstName);
        $stmt->bind_param(':lastName', $lastName);
        $stmt->bind_param(':email', $email);
        $stmt->bind_param(':phoneNumber', $phoneNumber);
        $stmt->bind_param(':dateOfBirth', $dateOfBirth);
        $stmt->bind_param(':gender', $gender);
        $stmt->bind_param(':postCode', $postCode);
        $stmt->bind_param(':address_', $address_);

        echo "You have succesfully made an account!";
    }
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Patient sign-up page</title>
        <link rel="stylesheet" href="css/global.css" type="text/css"/>

        <link rel="stylesheet" href="css/mobile.css" type="text/css" media="only screen and (max-width : 607px)" />

        <link rel="stylesheet" href="css/desktop.css" type="text/css" media="only screen and (min-width : 608px)" />

    </head>
    <body>
        
        <form action="" method="post">
            <div class="patientSignupForm">
                <label for="username">Username:</label> <br>
                <input type="text" id="username"name="username" required><br>
            </div>

            <div class="patientSignupForm">
                <label for="password">Password:</label> <br>
                <input type="password" id="password" name="password" required><br>
            </div>

            <div class="patientSignupForm">
                <label for="firstName">First name:</label> <br>
                <input type="text" id="firstName" name="firstName" required><br>  
            </div>
            
            <div class="patientSignupForm">
                <label for="lastName">last name:</label> <br>
                <input type="text" id="lastName" name="lastName" required><br>  
            </div>
            
            <div class="patientSignupForm">
                <label for="email">Email:</label> <br>
                <input type="email" id="email" name="email" required><br> 
            </div>
            
            <div class="patientSignupForm">
                <label for="phoneNumber">Phone number:</label> <br>
                <input type="text" id="phoneNumber" name="phoneNumber" required><br>  
            </div>
            
            <div class="patientSignupForm">
                <label for="dateOfBirth">Date of birth:</label> <br>
                <input type="date" id="dateOfBirth" name="dateOfBirth" required><br> 
            </div>
            
            <div class="patientSignupForm">
                <label for="gender">Gender:</label> <br>
                <input type="text" id="gender" name="gender" required><br>    
            </div>
            
            <div class="patientSignupForm">
                <label for="postCode">Post code:</label> <br>
                <input type="char" id="postCode" name="postCode" required><br>   
            </div>
            
            <div class="patientSignupForm">
                <label for="address_">Address:</label> <br>
                <input type="varchar" id="address_" name="address_" required><br><br>    
            </div>
            
            <div class="patientSignupFormButton">
                <input type="submit" value="Sign-up" name="submit">
            </div>

        </form>

    </body>
</html>