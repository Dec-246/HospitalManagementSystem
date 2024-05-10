<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Past appointments</title>
    <link rel="stylesheet" href="css/global.css" type="text/css" />

    <link rel="stylesheet" href="css/mobile.css" type="text/css" media="only screen and (max-width : 620px)" />

    <link rel="stylesheet" href="css/desktop.css" type="text/css" media="only screen and (min-width : 621px)" />


</head>

<body>

    <div class="">

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

        <div class="container pb-5">
            <h2></h2><br>
        </div>


        <div class="pastAppointmentTitle">
            <h1>Past Appointments:</h1><br><br>
        </div>

        <!-- check for search submission -->

        <div class="viewPastAppointments">
            <?php
            // ini_set("display_errors",1);
            include("config.php");

            $sql = "SELECT * FROM pastAppointments WHERE patientID = 2";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) { //mysqli_fetch_assoc // fetches next available row within our object 

                    echo "Appointment ID: " . $row["ID"] . "<br>";
                    echo "Patient ID: " . $row["patientID"] . "<br>";
                    echo "Date: " . $row["date"] . "<br>";
                    echo "Doctors notes: " . $row["doctorNotes"] . "<br>";
                    echo "Doctor advisories: " . $row["Advisories"] . "<br>" . "<br>" . "<br>";
                };
            } else {
                echo "No user found";
            }
            mysqli_close($conn);
            ?>
        </div><br><br><br>


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