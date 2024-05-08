<?php
require('patientSessions.php');
require('patientAuthorize.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient dashboard</title>
    <link rel="stylesheet" href="css/global.css" type="text/css" />

    <link rel="stylesheet" href="css/mobile.css" type="text/css" media="only screen and (max-width : 607px)" />

    <link rel="stylesheet" href="css/desktop.css" type="text/css" media="only screen and (min-width : 608px)" />

</head>

<body>
    <div class="container">
        <div class="navbarContainer">
            <?php
            include("php/includes/patient/navbar.php");
            ?>
        </div>

        <div class="header">
            <?php
            include("php/includes/header.php");
            ?>
        </div>

        <main>

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

            <div class="patientNameDash">
                <?php
                // ini_set("display_errors",1);
                include("config.php");

                $sql = "SELECT * FROM patient WHERE ID = 2";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) { //mysqli_fetch_assoc // fetches next available row within our object 

                        echo "Welcome: " . $row["firstName"] . ' ' . $row["lastName"] . "<br>";
                        echo "Patient ID: " . $row["ID"] . "<br>" . "<br>" . "<br>";
                    };
                } else {
                    echo "No user found";
                }
                mysqli_close($conn);
                ?>
            </div><br><br><br>


            <div class="patientDashboard">
                <div class="rowButtons">
                    <div class="patientInfo">
                        <a href="patientViewPersonalInfo.php">Personal Info</a>
                    </div><br>
                    <div class="doctorInfo">
                        <a href="patientViewDocInfo.php">Doctor Info</a>
                    </div>
                </div><br><br>

                <div class="rowButtons">
                    <div class="patientLabResults">
                        <a href="patientViewLabResults.php">Patient Lab test Results</a>
                    </div><br>

                    <div class="bookAppointment">
                        <a href="patientBookAppointment.php">Book appointment</a>
                    </div>
                </div><br><br>

                <div class="rowButtons">
                    <div class="patientTreatment">
                        <a href="patientViewTreatment.php">Treatment</a>
                    </div><br>

                    <div class="patientPrescription">
                        <a href="patientViewPrescription.php">Prescription</a>
                    </div>
                </div><br><br>

                <div class="rowButtons">
                    <div class="pastAppointments">
                        <a href="patientViewPastAppointments.php">Past appointments</a>
                    </div><br>
                    <div class="doctorsNotes">
                        <a href="patientViewStaffNotes.php">Doctors notes</a>
                    </div>
                </div><br><br>

            </div>

        </main>


    </div>
    <div class="footer">
        <?php
        require('patientDebugger.php');
        include("php/includes/footer.php");
        ?>
    </div>
</body>

</html>