<?php
ini_set("display_errors", 1);
include("config.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assign staff to patient</title>
    <link rel="stylesheet" href="css/global.css" type="text/css" />

    <link rel="stylesheet" href="css/mobile.css" type="text/css" media="only screen and (max-width : 620px)" />

    <link rel="stylesheet" href="css/desktop.css" type="text/css" media="only screen and (min-width : 621px)" />


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

        <div class="container pb-5">
            <h2></h2><br>
        </div>

        <!-- assigning the doctor to a patient -->
        <!-- need to get the patients id, grab the row and show data in form  -->

        <div class="AssignDocToPatient">

            <h3>Assert patient:</h3>
            <select name="Patient">
                <?php
                // Get patients from the database
                $sql = 'SELECT ID,
                        CONCAT(patient.firstName," ",patient.lastName) AS "patientName"
                        FROM patient';
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {    // Check avalible patients
                    // Output options
                    while ($row = $result->fetch_assoc()) {
                        $ID = $row['ID'];
                        $patientName = $row['patientName'];
                        echo "<option value=\"$ID\">$patientName</option>";
                    }
                } else {
                    echo "<option value=\"\">No currencies available</option>";
                }
                ?>
            </select><br><br>

            <h3>Assert staff member:</h3>
            <select name="Staff">

                <?php
                // Get staff from the database
                $sql = 'SELECT ID,
                        CONCAT(staff.firstName," ",staff.lastName) AS "staffName"
                        FROM staff';
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {    // Check avalible staff members
                    // Output options
                    while ($row = $result->fetch_assoc()) {
                        $ID = $row['ID'];
                        $staffName = $row['staffName'];
                        echo "<option value=\"$ID\">$staffName</option>";
                    }
                } else {
                    echo "<option value=\"\">No currencies available</option>";
                }
                ?>

                <form action="adminAssignDocToPatient.php" method="post">
                    <p>Staff member:</p>

                    <p>patient:</p>

                    <input>

                    <input>

                </form>
            </select><br><br>

        </div>

        <div class="footer">
            <?php
            include("php/includes/footer.php");
            ?>
        </div>

        <!-- scroll to top button -->
        <script>
            // Get button
            let mybutton = document.getElementById("myBtn");

            // When the user scrolls down by 20px from the top of the page, show 'scroll back to top' button
            window.onscroll = function() {
                scrollFunction()
            };

            function scrollFunction() {
                if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                    mybutton.style.display = "block";
                } else {
                    mybutton.style.display = "none";
                }
            }

            // When user clicks on 'scroll back to top' button, scroll to top of the webpage
            function topFunction() {
                document.body.scrollTop = 0;
                document.documentElement.scrollTop = 0;
            }
        </script>

</body>

</html>